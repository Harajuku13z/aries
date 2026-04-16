<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

$site = [
    'name' => 'ARIES Investissements',
    'tagline' => 'Conseil financier, investissement et structuration stratégique en Afrique',
    'mission' => 'Faire émerger de nouveaux champions nationaux et régionaux.',
    'description' => 'ARIES Investissements accompagne investisseurs, institutions et porteurs de projets dans la structuration, le financement et l’exécution d’opérations à fort impact sur le continent africain.',
    'email' => 'aries@aries-investissements.com',
    'phones' => [
        ['label' => 'Brazzaville', 'value' => '+242 06 97 99 88 5'],
        ['label' => 'Washington', 'value' => '+1 646 389 14 37'],
    ],
    'address' => 'Aries Investissements, 9ème niveau, Immeuble ARC, Brazzaville, République du Congo',
];

$metrics = [
    ['value' => '2', 'suffix' => ' hubs', 'label' => 'Présences internationales stratégiques'],
    ['value' => '4', 'suffix' => ' secteurs', 'label' => 'Verticales prioritaires suivies de près'],
    ['value' => '360', 'suffix' => '°', 'label' => 'Vision globale de l’investissement'],
];

$sectors = [
    [
        'name' => 'Infrastructures',
        'eyebrow' => 'Connectivité & actifs stratégiques',
        'description' => 'Structuration d’actifs structurants, accompagnement d’opérations complexes et dialogue avec les parties prenantes publiques et privées.',
    ],
    [
        'name' => 'Immobilier',
        'eyebrow' => 'Développement & valorisation',
        'description' => 'Conseil sur des projets immobiliers à forte intensité capitalistique, du cadrage stratégique à la recherche d’investisseurs.',
    ],
    [
        'name' => 'Agrobusiness',
        'eyebrow' => 'Chaînes de valeur résilientes',
        'description' => 'Montage d’initiatives agricoles et agro-industrielles capables de combiner rendement, souveraineté et transformation locale.',
    ],
    [
        'name' => 'Technologie',
        'eyebrow' => 'Croissance & innovation',
        'description' => 'Accompagnement d’entreprises technologiques et de plateformes en croissance dans leurs stratégies de financement et d’expansion.',
    ],
];

$expertises = [
    [
        'title' => 'Conseil stratégique et financier',
        'description' => 'Cadrage d’opérations, diagnostics de marché, scénarios de croissance, structuration d’options stratégiques et préparation à la décision.',
    ],
    [
        'title' => 'Financement de projets et levée de fonds',
        'description' => 'Préparation investisseurs, modélisation, mémorandums, ciblage de partenaires financiers et accompagnement de levées de dette ou fonds propres.',
    ],
    [
        'title' => 'Intelligence économique',
        'description' => 'Analyse d’écosystèmes, cartographie d’acteurs, veille, lecture institutionnelle et appui à la sécurisation d’opérations sensibles.',
    ],
    [
        'title' => 'Structuration et conseil en investissement',
        'description' => 'Mise en forme de véhicules, structuration de transactions et accompagnement des investisseurs dans leurs déploiements africains.',
    ],
];

$values = [
    [
        'title' => 'Indépendance',
        'description' => 'Une lecture libre, rigoureuse et alignée sur les intérêts de long terme de nos clients.',
    ],
    [
        'title' => 'Professionnalisme',
        'description' => 'Des méthodes solides, une exécution structurée et un niveau d’exigence institutionnel.',
    ],
    [
        'title' => 'Rigueur',
        'description' => 'Une attention précise aux données, à la conformité et à la qualité des recommandations formulées.',
    ],
];

$team = [
    [
        'name' => 'Loïc Mackosso',
        'role' => 'Associé-Gérant',
        'bio' => 'Pilote les missions de structuration, de conseil financier et de dialogue stratégique avec les investisseurs et porteurs de projets.',
    ],
    [
        'name' => 'Régis Matondo',
        'role' => 'Associé',
        'bio' => 'Contribue à la lecture sectorielle, à la coordination des opérations et à la construction de trajectoires d’investissement crédibles.',
    ],
];

$publications = [
    [
        'category' => 'Analyse',
        'title' => 'Investir en Afrique avec méthode',
        'excerpt' => 'Une approche disciplinée de la sélection d’opportunités, de la lecture pays et de la sécurisation de projets.',
    ],
    [
        'category' => 'Perspective',
        'title' => 'Capital patient et transformation régionale',
        'excerpt' => 'Pourquoi les opérations les plus structurantes s’écrivent dans le temps long, avec un fort ancrage local.',
    ],
    [
        'category' => 'Marché',
        'title' => 'Quatre secteurs à fort potentiel',
        'excerpt' => 'Infrastructure, immobilier, agrobusiness et technologie : quatre terrains d’action où la valeur peut être durablement créée.',
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
