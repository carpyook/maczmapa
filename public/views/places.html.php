<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
</head>
<body>
    <header>
        <p><a href="/">Gdzie Macza</a></p>
    </header>
    <main>
        <h1>Miejsca z matchą w Krakowie</h1>
        <ul>
            <?php foreach ($places as $id => $place): ?>
                <li>
                    <article>
                        <h2><a href="/places/<?= (int) $id ?>"><?= htmlspecialchars($place['name']) ?></a></h2>
                        <p><?= htmlspecialchars($place['district']) ?></p>
                        <p>Matcha latte: <?= number_format($place['matchaPrice'], 2, ',', ' ') ?> zł</p>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
</body>
</html>
