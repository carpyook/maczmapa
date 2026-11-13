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
        <nav aria-label="Główna nawigacja">
            <ul>
                <li><a href="/">Mapa</a></li>
                <li><a href="/places">Lista miejsc</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Matcha i kawa: <?= htmlspecialchars($city) ?></h1>
        <section aria-labelledby="map-heading">
            <h2 id="map-heading">Mapa miejsc</h2>
            <p>Tu pojawi się mapa z kawiarniami i cenami.</p>
        </section>
        <section aria-labelledby="list-heading">
            <h2 id="list-heading">Szukasz najtańszej matchy?</h2>
            <p><a href="/places">Zobacz listę miejsc</a></p>
        </section>
    </main>
    <footer>
        <p>Ceny dodają i weryfikują użytkownicy.</p>
    </footer>
</body>
</html>
