<?php

declare(strict_types=1);

namespace App\Controller;

final class PlaceController extends AppController
{
    // Dane przykładowe (zmyślone). Zastąpimy je bazą danych w kolejnych labach.
    private const PLACES = [
        1 => ['name' => 'Zielona Filiżanka', 'district' => 'Kazimierz', 'matchaPrice' => 22.00, 'coffeePrice' => 14.00],
        2 => ['name' => 'Liść i Ziarno', 'district' => 'Stare Miasto', 'matchaPrice' => 25.00, 'coffeePrice' => 15.00],
        3 => ['name' => 'Kawa na Rogu', 'district' => 'Podgórze', 'matchaPrice' => 19.00, 'coffeePrice' => 12.00],
    ];

    public function index(): void
    {
        $this->render('places', [
            'pageTitle' => 'Miejsca z matchą',
            'places' => self::PLACES,
        ]);
    }

    public function show(int $id): void
    {
        if (!isset(self::PLACES[$id])) {
            http_response_code(404);
            $this->render('not-found', ['pageTitle' => 'Nie znaleziono miejsca']);
            return;
        }

        $place = self::PLACES[$id];

        $this->render('place', [
            'pageTitle' => $place['name'],
            'place' => $place,
        ]);
    }
}
