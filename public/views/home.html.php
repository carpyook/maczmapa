<?php require __DIR__ . '/partials/header.php'; ?>
<section class="hero">
    <div>
        <h1>Najtańsza matcha w mieście: <?= htmlspecialchars($city) ?></h1>
        <p class="muted">Ceny matchy i kawy dodawane i potwierdzane przez innych użytkowników.</p>
        <a class="button" href="/places">Zobacz ranking cen</a>
    </div>
    <section class="card map-placeholder" aria-labelledby="map-heading">
        <h2 id="map-heading">Mapa lokali</h2>
        <p class="muted">Tu pojawi się mapa z kawiarniami i cenami.</p>
    </section>
</section>
<?php require __DIR__ . '/partials/footer.php'; ?>
