<?php require __DIR__ . '/partials/header.php'; ?>
<h1>Ranking cen matchy</h1>
<p class="muted">Najtańsze miejsca w Krakowie według potwierdzonych cen.</p>
<ol class="place-grid">
    <?php foreach ($places as $id => $place): ?>
        <li>
            <article class="card place-card">
                <h2><a href="/places/<?= (int) $id ?>"><?= htmlspecialchars($place['name']) ?></a></h2>
                <p class="muted"><?= htmlspecialchars($place['district']) ?></p>
                <p class="price"><?= number_format($place['matchaPrice'], 2, ',', ' ') ?> zł</p>
                <p class="badge">Matcha latte</p>
            </article>
        </li>
    <?php endforeach; ?>
</ol>
<?php require __DIR__ . '/partials/footer.php'; ?>
