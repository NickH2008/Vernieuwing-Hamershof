/* ==============================
   GLOBAL STATE
============================== */
const calendarDays = document.querySelector(".calendar-days");
const monthYear = document.querySelector(".month-year h1");
const prevBtn = document.querySelector(".prev-month");
const nextBtn = document.querySelector(".next-month");
const listContainer = document.querySelector(".list-container");

let currentDate = new Date();
let agendaEvents = [];

/* ==============================
   FETCH AGENDA DATA
============================== */
function fetchAgenda() {
    return fetch('/api/agenda')
        .then(response => response.json())
        .then(result => {
            // API returns { status, data }
            agendaEvents = Array.isArray(result.data) ? result.data : [];
        })
        .catch(error => console.error('Error fetching agenda:', error));
}

/* ==============================
   RENDER CALENDAR
============================== */
function renderCalendar(date) {
    calendarDays.innerHTML = "";

    const year = date.getFullYear();
    const month = date.getMonth();

    // Month title
    const monthName = date.toLocaleString("en-US", { month: "long" });
    monthYear.innerHTML = `${monthName} <span>${year}</span>`;

    // First day of month (Monday = 0)
    const firstDay = new Date(year, month, 1);
    let startDay = firstDay.getDay() - 1;
    if (startDay < 0) startDay = 6;

    // Days in month
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    // Empty slots
    for (let i = 0; i < startDay; i++) {
        calendarDays.innerHTML += `<div class="empty"></div>`;
    }

    // Calendar days
    for (let day = 1; day <= daysInMonth; day++) {

        const dateKey =
            `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;

        const eventsForDay = agendaEvents.filter(event =>
            event.created_at.startsWith(dateKey)
        );

        const today = new Date();
        const isToday =
            day === today.getDate() &&
            month === today.getMonth() &&
            year === today.getFullYear();

        let eventsHtml = '';

        eventsForDay.forEach(event => {
            eventsHtml += `
                <div class="event-item" style="background:${event.color}">
                    ${event.activity_name}
                </div>
            `;
        });

        calendarDays.innerHTML += `
            <div class="calendar-day ${isToday ? 'today' : ''}">
                <span class="day">
                    ${isToday ? 'Vandaag' : day}
                </span>
                <div class="events">
                    ${eventsHtml}
                </div>
            </div>
        `;
    }
}

/* ==============================
   RENDER LIST (ONLY TIMED EVENTS)
============================== */
function renderAgendaList(date) {
    listContainer.innerHTML = "";

    const year = date.getFullYear();
    const month = date.getMonth(); // 0-based

    const timedEvents = agendaEvents.filter(event => {
        if (!event.created_at) return false;

        const eventDate = new Date(event.created_at.replace(' ', 'T'));

        return (
            eventDate.getFullYear() === year &&
            eventDate.getMonth() === month &&
            eventDate.getHours() + eventDate.getMinutes() > 0
        );
    });

    if (timedEvents.length === 0) {
        listContainer.innerHTML = `<p>No scheduled events this month</p>`;
        return;
    }

    timedEvents.sort((a, b) =>
        new Date(a.created_at) - new Date(b.created_at)
    );

    timedEvents.forEach(event => {
        const [datePart, timePart] = event.created_at.split(' ');
        const displayDateTime = `${datePart} ${timePart.slice(0, 5)}`;

        listContainer.innerHTML += `
            <div class="list-event" style="background:${event.color}">
                <span class="list-title">${event.activity_name}</span>
                <span class="list-time">${displayDateTime}</span>
            </div>
        `;
    });
}


/* ==============================
   NAVIGATION
============================== */
prevBtn.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar(currentDate);
    renderAgendaList(currentDate);
});

nextBtn.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar(currentDate);
    renderAgendaList(currentDate);
});

/* ==============================
   INIT
============================== */
(async function initCalendar() {
    await fetchAgenda();
    renderCalendar(currentDate);
    renderAgendaList(currentDate);
})();

const calenderBtn = document.querySelector(".calendar-btn");
const listBtn = document.querySelector(".list-btn");
const calendarView = document.querySelector(".calendar-days");
const listView = document.querySelector(".list-container");
const weekdayHeader = document.querySelector(".week");
calenderBtn.addEventListener("click", () => {
    calendarView.style.display = "grid";
    listView.style.display = "none";
    calenderBtn.classList.add("active");
    listBtn.classList.remove("active");
    weekdayHeader.style.display = "grid";
});

listBtn.addEventListener("click", () => {
    weekdayHeader.style.display = "none";
    calendarView.style.display = "none";
    listView.style.display = "grid";
    listBtn.classList.add("active");
    calenderBtn.classList.remove("active");
});