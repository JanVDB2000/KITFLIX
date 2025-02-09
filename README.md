# KITFLIX – Netflix for Kittens

KITFLIX is een Netflix-achtige applicatie voor katten, gebouwd met de TALL-stack (TailwindCSS, Alpine.js, Laravel en Livewire). De applicatie haalt kattenafbeeldingen op via [TheCatAPI](https://thecatapi.com/) en bevat onder andere de volgende functionaliteiten:

- **Authenticatie & Profielen:** Gebruikers kunnen zich registreren en meerdere profielen beheren, vergelijkbaar met Netflix.
- **Media Weergave:** Films en series worden getoond op basis van populariteit (aantal views) en kunnen gefilterd worden op genre.
- **Seizoenen & Afleveringen:** Voor series worden automatisch seizoenen en afleveringen gegenereerd.
- **Kijkgeschiedenis:** De applicatie houdt bij welke media-items door een profiel zijn bekeken.
- **Aanbevelingen:** Aanbevelingen worden gedaan op basis van bekeken content en ratings.
- **Livewire Componenten:** Dynamische filtering en interactie worden verzorgd door Livewire (bijv. in de `TvShows` component).

---

## Vereisten

- **PHP 8.3** of hoger
- **Composer**
- **Node.js en npm**
- **MySQL** (of een andere ondersteunde database, zoals PostgreSQL)
- **Laravel 11**

---

## Installatie

### 1. Repository klonen

Clone de repository naar je lokale machine:

```bash
git clone https://github.com/janvdb2000/kitflix.git
cd kitflix
```
2. PHP dependencies installeren
   Installeer de benodigde PHP-pakketten via Composer:
```bash
composer install
```
3. Node dependencies installeren
   Installeer de Node.js-pakketten:
```bash
npm install
```
4. .env-bestand aanmaken
   Kopieer het voorbeeldbestand en pas het aan:
```bash
cp .env.example .env
```
Open het .env-bestand en stel onder andere de volgende waarden in:
APP_NAME en APP_URL
DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD
(Zorg dat je database correct is geconfigureerd)
5. Applicatiesleutel genereren
   Genereer een sleutel voor je Laravel-applicatie:
```bash
php artisan key:generate
```
6. Database migraties en seeders uitvoeren
   Zorg dat je database actief is en voer de migraties en seeders uit:


```bash
php artisan migrate --seed
```
Dit maakt alle tabellen aan en vult deze met voorbeelddata, waaronder:

Genres (via GenreSeeder)
Media-items (films en series via MediaTableSeeder)
Seizoenen en afleveringen voor series
Gebruikers, profielen, kijkgeschiedenis, favorieten, ratings, enzovoort
7. Frontend assets compileren
   Compileer de frontend assets (TailwindCSS, Alpine.js, Livewire, etc.):


```bash
npm run dev
```
Voor een productiebuild:

```bash
npm run build
```

8. Development server starten
   Start de Laravel development server:
```bash
php artisan serve
```
Je applicatie is nu toegankelijk via http://localhost:8000.


## Dummy account

Login :
```bash
 jan@hotmail.be
```
WW :
```bash
12345678
```


