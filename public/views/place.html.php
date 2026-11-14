<?php require __DIR__ . '/partials/header.php'; ?>
<nav aria-label="Okruszki" class="breadcrumbs">
    <a href="/places">Ranking</a> / <span><?= htmlspecialchars($place['name']) ?></span>
</nav>
<article class="card place-detail">
    <h1><?= htmlspecialchars($place['name']) ?></h1>
    <p class="muted"><?= htmlspecialchars($place['district']) ?>, Kraków</p>
    <section aria-labelledby="prices-heading">
        <h2 id="prices-heading">Cennik od społeczności</h2>
        <dl class="price-list">
            <div class="price-row">
                <dt>Matcha latte</dt>
                <dd class="price"><?= number_format($place['matchaPrice'], 2, ',', ' ') ?> zł</dd>
            </div>
            <div class="price-row">
                <dt>Kawa</dt>
                <dd class="price"><?= number_format($place['coffeePrice'], 2, ',', ' ') ?> zł</dd>
            </div>
        </dl>
    </section>
</article>
<?php require __DIR__ . '/partials/footer.php'; ?>
