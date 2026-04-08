/* ==============================
   GLOBAL STATE
============================== */
const calendarDays = document.querySelector(".calendar-days");
const monthYear = document.querySelector(".month-year h1");
const prevBtn = document.querySelector(".prev-month");
const nextBtn = document.querySelector(".next-month");

let currentDate = new Date();
let agendaEvents = [];

/* ==============================
   FETCH AGENDA DATA
============================== */
function fetchAgenda() {
    return fetch('/api/agenda')
        .then(response => response.json())
        .then(result => {
            // ✅ your API returns { status, data }
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

    // Empty slots before first day
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
   NAVIGATION
============================== */
prevBtn.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar(currentDate);
});

nextBtn.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar(currentDate);
});

/* ==============================
   INIT
============================== */
(async function initCalendar() {
    await fetchAgenda();
    renderCalendar(currentDate);
})();
