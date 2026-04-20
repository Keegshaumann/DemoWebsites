# SkyAg Website

Licensed agricultural drone spraying — marketing site. PHP + HTML + CSS + JS.

## Run

Requires PHP 7.4+ (most macOS has it built in).

```bash
cd /Users/keegshaumann/Documents/GitHub/SkyAg
php -S localhost:8000
```

Open http://localhost:8000

## Structure

```
SkyAg/
├── index.php              main page (English content, PHP data arrays)
├── assets/
│   ├── css/style.css      animated background, reveal, hover FX
│   └── js/main.js         scroll reveal, count-up, parallax, card glow
└── README.md
```

## Translations applied (Afrikaans → English)

| Afrikaans | English |
|---|---|
| Volledig Gelisensieerde landbougewasbespuitingstoepassing | Fully Licensed Agricultural Crop Spraying |
| Dronebespuiting | Drone Spraying |
| Kunsmistoediening | Fertilizer Application |
| VLOEISTOFTOEDIENING | Liquid Application |
| Enige strooi toediening word per kwotasie uitgewerk | Any dry spreading application is calculated per quote |
| GRATIS | FREE |

## Edit contacts / pricing

Top of `index.php` — `$contacts` and `$pricing` arrays.
