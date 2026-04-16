<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

$site = [
    'name' => 'ARIES Investissements',
    'tagline' => 'Conseil financier, investissement et structuration stratégique en Afrique',
    'mission' => 'Faire émerger de nouveaux champions nationaux et régionaux.',
    'description' => 'ARIES Investissements conseille investisseurs, institutions et porteurs de projets dans la structuration, le financement et l’exécution d’opérations ambitieuses en Afrique.',
    'email' => 'aries@aries-investissements.com',
    'phones' => [
        ['label' => 'Brazzaville', 'value' => '+242 06 97 99 88 5'],
        ['label' => 'Washington', 'value' => '+1 646 389 14 37'],
    ],
    'address' => 'Aries Investissements, 9ème niveau, Immeuble ARC, Brazzaville, République du Congo',
];

$metrics = [
    ['value' => '2', 'suffix' => ' pôles', 'label' => 'Brazzaville et Washington pour dialoguer avec les bons décideurs'],
    ['value' => '4', 'suffix' => ' secteurs', 'label' => 'Verticales où la qualité de structuration change la valeur du projet'],
    ['value' => '360', 'suffix' => '°', 'label' => 'Lecture croisée du marché, des acteurs, du capital et du risque'],
];

$sectors = [
    [
        'name' => 'Infrastructures',
        'eyebrow' => 'Actifs stratégiques',
        'description' => 'Actifs structurants, partenariats publics-privés, opérations complexes et trajectoires de financement lisibles pour les investisseurs.',
    ],
    [
        'name' => 'Immobilier',
        'eyebrow' => 'Développement & valorisation',
        'description' => 'Cadrage de projets à forte intensité capitalistique, lecture de marché, sécurisation du montage et recherche de partenaires adaptés.',
    ],
    [
        'name' => 'Agrobusiness',
        'eyebrow' => 'Chaînes de valeur résilientes',
        'description' => 'Initiatives agricoles et agro-industrielles capables d’articuler rendement, souveraineté économique et transformation locale.',
    ],
    [
        'name' => 'Technologie',
        'eyebrow' => 'Croissance & innovation',
        'description' => 'Accompagnement de plateformes et entreprises technologiques dans leurs enjeux de financement, d’échelle et de crédibilité stratégique.',
    ],
];

$expertises = [
    [
        'title' => 'Conseil stratégique et financier',
        'description' => 'Cadrage d’opérations, diagnostics, scénarios de croissance, options stratégiques et préparation de décisions à fort enjeu.',
    ],
    [
        'title' => 'Financement de projets et levée de fonds',
        'description' => 'Préparation investisseurs, modélisation, mémorandums, ciblage des bons partenaires et accompagnement de levées de dette ou fonds propres.',
    ],
    [
        'title' => 'Intelligence économique',
        'description' => 'Analyse d’écosystèmes, cartographie d’acteurs, lecture institutionnelle et appui à la sécurisation d’opérations sensibles.',
    ],
    [
        'title' => 'Structuration et conseil en investissement',
        'description' => 'Structuration de transactions, mise en forme de véhicules et accompagnement des investisseurs dans leurs déploiements africains.',
    ],
];

$values = [
    [
        'title' => 'Indépendance',
        'description' => 'Une lecture libre, rigoureuse et alignée sur les intérêts de long terme de chaque opération.',
    ],
    [
        'title' => 'Professionnalisme',
        'description' => 'Des méthodes solides, une exécution structurée et un niveau d’exigence compatible avec les meilleures pratiques institutionnelles.',
    ],
    [
        'title' => 'Rigueur',
        'description' => 'Une attention constante aux données, à la conformité, à la traçabilité des hypothèses et à la qualité des recommandations.',
    ],
];

$team = [
    [
        'name' => 'Loïc Mackosso',
        'role' => 'Associé-Gérant',
        'bio' => 'Pilote les missions de structuration, de conseil financier et de dialogue stratégique avec investisseurs, institutions et porteurs de projets.',
    ],
    [
        'name' => 'Régis Matondo',
        'role' => 'Associé',
        'bio' => 'Contribue à la lecture sectorielle, à la coordination des opérations et à la construction de trajectoires d’investissement crédibles et exécutables.',
    ],
];

$publications = [
    [
        'category' => 'Analyse',
        'title' => 'Investir en Afrique sans improviser',
        'excerpt' => 'Une méthode de lecture pays, d’analyse d’acteurs et de sécurisation des projets conçue pour les décisions sérieuses.',
    ],
    [
        'category' => 'Perspective',
        'title' => 'Capital patient, impact durable',
        'excerpt' => 'Les opérations les plus structurantes s’écrivent dans le temps long, avec un fort ancrage local et une discipline de montage.',
    ],
    [
        'category' => 'Marché',
        'title' => 'Quatre secteurs où la valeur se construit',
        'excerpt' => 'Infrastructures, immobilier, agrobusiness et technologie : quatre terrains d’action où stratégie et exécution doivent avancer ensemble.',
    ],
];

View::share(compact(
    'site',
    'metrics',
    'sectors',
    'expertises',
    'values',
    'team',
    'publications'
));

Route::get('/', fn () => view('home', [
    'pageTitle' => 'Accueil',
    'pageDescription' => 'Site corporate premium d’ARIES Investissements, société de conseil financier et d’investissement tournée vers l’Afrique.',
]))->name('home');

Route::get('/presentation', fn () => view('presentation', [
    'pageTitle' => 'Présentation',
    'pageDescription' => 'Présentation d’ARIES Investissements, de sa mission et de son positionnement en Afrique.',
]))->name('presentation');

Route::get('/expertise', fn () => view('expertise', [
    'pageTitle' => 'Expertise',
    'pageDescription' => 'Conseil stratégique, levée de fonds, intelligence économique et structuration d’investissement.',
]))->name('expertise');

Route::get('/secteurs-activite', fn () => view('sectors', [
    'pageTitle' => 'Secteurs d’activité',
    'pageDescription' => 'Les secteurs prioritaires d’ARIES Investissements : infrastructures, immobilier, agrobusiness et technologie.',
]))->name('sectors');

Route::get('/equipe', fn () => view('team', [
    'pageTitle' => 'Équipe',
    'pageDescription' => 'Découvrez la direction d’ARIES Investissements.',
]))->name('team');

Route::get('/publications', fn () => view('publications', [
    'pageTitle' => 'Publications',
    'pageDescription' => 'Actualités, analyses et prises de parole d’ARIES Investissements.',
]))->name('publications');

Route::get('/contact', fn () => view('contact', [
    'pageTitle' => 'Contact',
    'pageDescription' => 'Entrer en relation avec ARIES Investissements à Brazzaville ou Washington.',
]))->name('contact');
