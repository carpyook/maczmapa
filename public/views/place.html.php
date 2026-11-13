<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
</head>
<body>
    <header>
        <p><a href="/places">← Wszystkie miejsca</a></p>
    </header>
    <main>
        <article>
            <h1><?= htmlspecialchars($place['name']) ?></h1>
            <p><?= htmlspecialchars($place['district']) ?>, Kraków</p>
            <section aria-labelledby="prices-heading">
                <h2 id="prices-heading">Ceny</h2>
                <dl>
                    <dt>Matcha latte</dt>
                    <dd><?= number_format($place['matchaPrice'], 2, ',', ' ') ?> zł</dd>
                    <dt>Kawa</dt>
                    <dd><?= number_format($place['coffeePrice'], 2, ',', ' ') ?> zł</dd>
                </dl>
            </section>
        </article>
    </main>
</body>
</html>
