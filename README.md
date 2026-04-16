# ARIES Investissements — Site corporate (Laravel + Tailwind)

Site vitrine premium pour **ARIES Investissements**, société de conseil financier
à vocation de banque d'affaires basée en République du Congo.

Inspiration éditoriale : `baselarea.swiss` (analyse fournie en amont du brief).
Direction artistique originale : palette terre/or/noir issue du logo bélier ARIES,
typographie Fraunces (display) + Inter (sans-serif).

## Stack

- **Laravel 11** (PHP 8.2+)
- **Blade** (composants anonymes pour header, footer, cards…)
- **Tailwind CSS 3** (palette custom + tokens typo dans `tailwind.config.js`)
- **Alpine.js 3** (menu mobile, sticky header)
- **Vite** (bundler)
- **IntersectionObserver** (reveal au scroll, sans librairie tierce)

## Installation

```bash
cd aries-site

# 1. Dépendances PHP
composer install

# 2. Environnement
cp .env.example .env
php artisan key:generate

# 3. Dépendances JS
npm install

# 4. Dev
npm run dev          # Vite (HMR)
php artisan serve    # http://localhost:8000

# 5. Production
npm run build
```

## Arborescence

```
app/
├── Http/Controllers/
│   ├── Controller.php
│   ├── PageController.php       # contenus statiques (à brancher DB ensuite)
│   └── ContactController.php    # formulaire de contact
└── Providers/AppServiceProvider.php

resources/views/
├── layouts/app.blade.php        # layout principal (header + main + footer)
├── components/                  # composants Blade anonymes réutilisables
│   ├── header.blade.php         # nav sticky + mobile
│   ├── footer.blade.php         # mega-footer 4 colonnes + newsletter
│   ├── section-heading.blade.php
│   ├── expertise-card.blade.php
│   ├── sector-tile.blade.php
│   ├── team-card.blade.php
│   ├── pub-card.blade.php
│   └── cta-button.blade.php
├── home.blade.php               # 9 sections immersives
├── presentation.blade.php
├── expertise.blade.php
├── sectors.blade.php
├── team.blade.php
├── publications.blade.php
└── contact.blade.php

resources/
├── css/app.css                  # base + reveal + reduced-motion
└── js/app.js                    # Alpine + IntersectionObserver

public/assets/img/
└── logo-aries.png               # logo officiel ARIES
```

## Direction artistique

| Token | Hex | Usage |
|---|---|---|
| `ink` | `#130C05` | Fond hero, footer |
| `gold` | `#EE9928` | Accent signature, CTA |
| `bronze` | `#A5691C` | Liens, légendes |
| `bone` | `#F7F3EC` | Fonds clairs |
| `ivory` | `#EDE6D6` | Texte sur fond sombre |

Typo : `font-display` = Fraunces (italique éditorial activé via `em.italic`),
`font-sans` = Inter.

## Animations

- `.reveal` : opacity + translateY 28px, durée 900ms `ease-out-expo`,
  déclenchée par `IntersectionObserver` (rootMargin -10%, threshold 8%).
- Header sticky avec rétractation/glassmorphism (`x-data` Alpine).
- Hover CTA : flèche qui glisse de 4px vers la droite (500ms).
- `prefers-reduced-motion` : toutes les animations désactivées.

## Évolutions recommandées

1. **CMS** — basculer les arrays statiques de `PageController` vers des modèles
   Eloquent (`Publication`, `TeamMember`, `Expertise`, `Sector`) + Filament admin.
2. **Visuels** — remplacer les gradients placeholder des cards par des
   photographies professionnelles (pattern duotone N&B + virage gold).
3. **i18n** — activer `laravel/lang` et basculer en EN pour le marché
   anglophone (Washington DC).
4. **SEO** — ajouter sitemap.xml, schema.org `Organization`, OpenGraph par page.
5. **Mail** — créer un Mailable `ContactReceived` pour le formulaire (DKIM/SPF
   à configurer côté domaine).
6. **Analytics** — Plausible ou Matomo (RGPD-friendly).
7. **Performance** — convertir les PNG en AVIF/WebP, lazy-load les sections
   en dessous du hero, préchargement Fraunces critique.

## Contacts intégrés

- Brazzaville : +242 06 97 99 88 5
- Washington : +1 646 389 14 37
- Email : aries@aries-investissements.com
- Adresse : Immeuble ARC, 9ème niveau, Brazzaville
