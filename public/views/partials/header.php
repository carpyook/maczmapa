<?php $currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH); ?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> · Gdzie Macza</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header class="site-header">
        <a class="logo" href="/">gdzie<span>macza</span></a>
        <nav aria-label="Główna nawigacja">
            <ul class="nav-list">
                <li><a href="/" <?= $currentPath === '/' ? 'aria-current="page"' : '' ?>>Mapa</a></li>
                <li><a href="/places" <?= str_starts_with($currentPath, '/places') ? 'aria-current="page"' : '' ?>>Ranking</a></li>
            </ul>
        </nav>
    </header>
    <main class="page">
