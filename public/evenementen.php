<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/header.css">
    <link rel="stylesheet" href="/public/css/footer.css">
    <link rel="stylesheet" href="/public/css/evenementen.css">
    <title>Evenementen - Hamershof</title>
</head>
<body>
<?php
require_once __DIR__ . '/../autoloader.php';
$eventService = new eventService();
$events = $eventService->getAllEvents();
$categories = ['Alle Evenementen'];
foreach ($events as $event) {
    if (!in_array($event['category'], $categories, true)) {
        $categories[] = $event['category'];
    }
}
?>
<?php include_once __DIR__ . '/../component/header.php'; ?>
<main>
    <div class="page-title-container">
        <h1>Evenementen</h1>
        <p>Er is altijd iets te beleven bij Hamershof. Ontdek onze aankomende evenementen en activiteiten.</p>
    </div>

    <section class="agenda-events">
        <div class="agenda-topbar">
            <div class="agenda-search">
                <label for="eventSearch" class="sr-only">Zoek een evenement</label>
                <div class="search-field">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 18C14.6421 18 18 14.6421 18 10.5C18 6.35786 14.6421 3 10.5 3C6.35786 3 3 6.35786 3 10.5C3 14.6421 6.35786 18 10.5 18Z" stroke="#737373" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M20.5 20.5L17 17" stroke="#737373" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <input id="eventSearch" type="text" placeholder="Zoek een evenement..." aria-label="Zoek een evenement">
                </div>
            </div>
            <div class="agenda-filters" id="eventCategories">
                <?php foreach ($categories as $category): ?>
                    <button type="button" class="filter-btn<?php echo $category === 'Alle Evenementen' ? ' active' : ''; ?>" data-category="<?php echo htmlspecialchars($category); ?>"><?php echo htmlspecialchars($category); ?></button>
                <?php endforeach; ?>
            </div>
            <div class="event-count" id="eventCount"><?php echo count($events); ?> evenementen gevonden</div>
        </div>

        <div class="event-grid" id="eventGrid">
            <?php foreach ($events as $event): ?>
                <?php $date = new DateTime($event['event_date']); ?>
                <article class="event-card" data-category="<?php echo htmlspecialchars($event['category']); ?>" data-title="<?php echo htmlspecialchars(strtolower($event['title'] . ' ' . $event['description'])); ?>">
                    <div class="event-card-media">
                        <img src="<?php echo htmlspecialchars($event['image']); ?>" alt="<?php echo htmlspecialchars($event['title']); ?>">
                        <div class="event-badge event-date-badge">
                            <span><?php echo strtoupper($date->format('M')); ?></span>
                            <strong><?php echo $date->format('j'); ?></strong>
                        </div>
                        <?php if ((int)$event['is_free'] === 1): ?>
                            <div class="event-badge event-free-badge">GRATIS</div>
                        <?php endif; ?>
                    </div>
                    <div class="event-card-body">
                        <span class="event-category-label"><?php echo htmlspecialchars($event['category']); ?></span>
                        <h2><?php echo htmlspecialchars($event['title']); ?></h2>
                        <p><?php echo htmlspecialchars($event['description']); ?></p>
                    </div>
                    <div class="event-card-meta">
                        <span><?php echo htmlspecialchars($event['start_time']); ?> - <?php echo htmlspecialchars($event['end_time']); ?></span>
                        <span><?php echo htmlspecialchars($event['location']); ?></span>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include_once __DIR__ . '/../component/footer.php'; ?>
<script src="/public/js_public/evenementen.js" defer></script>
</body>
</html>
