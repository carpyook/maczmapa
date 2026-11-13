# Gdzie Macza (maczmapa)

Mapa miejsc w Krakowie z matchą i kawą oraz ich aktualnymi cenami, dodawanymi i weryfikowanymi przez użytkowników.

## Funkcje

| Obszar | Co robi |
|---|---|
| Mapa | Pokazuje kawiarnie z matchą i kawą w okolicy |
| Lista miejsc | Lista miejsc z cenami, sortowanie po cenie |
| Szczegóły miejsca | Adres i ceny w wybranej kawiarni |
| Dodawanie cen | Użytkownicy zgłaszają aktualne ceny |
| Weryfikacja cen | Inni użytkownicy akceptują lub odrzucają zgłoszenia |

## Tech stack

| Warstwa | Technologie |
|---|---|
| Frontend | HTML, CSS, JavaScript |
| Backend | PHP 8.3 (własny szkielet MVC, Composer autoload) |
| Baza danych | PostgreSQL 17 |
| Serwer HTTP | Nginx |
| Konteneryzacja | Docker Compose |
| Usługi pomocnicze | pgAdmin, Mailpit, Ollama |

## Szybki start

```bash
git clone https://github.com/carpyook/maczmapa.git
cd maczmapa
cp .env.example .env   # uzupełnij hasła
docker compose up --build -d
docker compose exec php composer dump-autoload
```

## Adresy usług

| Usługa | Adres |
|---|---|
| Aplikacja | http://localhost:8080 |
| pgAdmin | http://localhost:5050 |
| Mailpit | http://localhost:8025 |
| PostgreSQL | localhost:5433 |

## Struktura projektu

- `public/` – jedyny katalog dostępny z przeglądarki; `index.php` to front controller
- `public/views/` – widoki HTML
- `src/Routing.php` – router z białą listą tras
- `src/controllers/` – kontrolery (dziedziczą po `AppController`)
- `docker/` – Dockerfile i konfiguracje usług

## Zasady developmentu

- Branch dla każdej funkcji, zmiany do `main` przez Pull Request (merge commit, bez squash).
- Małe, logiczne commity.
- Sekrety wyłącznie w `.env`.

## Autorzy

- Mateusz Karpiuk
