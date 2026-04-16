<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
            'expertises' => $this->expertises(),
            'sectors'    => $this->sectors(),
            'team'       => $this->teamPreview(),
            'pubs'       => $this->publications(),
        ]);
    }

    public function presentation()
    {
        return view('presentation');
    }

    public function expertise()
    {
        return view('expertise', ['expertises' => $this->expertises()]);
    }

    public function sectors()
    {
        return view('sectors', ['sectors' => $this->sectors()]);
    }

    public function team()
    {
        return view('team', ['team' => $this->team()]);
    }

    public function publications()
    {
        return view('publications', ['pubs' => $this->publications()]);
    }

    public function contact()
    {
        return view('contact');
    }

    /* ---------- Données statiques (à brancher sur DB ensuite) ---------- */

    private function expertises(): array
    {
        return [
            [
                'num'   => '01',
                'title' => 'Conseil stratégique & financier',
                'text'  => 'Cadrage stratégique, modélisation financière, valorisation, due diligence et préparation aux opérations de haut de bilan.',
            ],
            [
                'num'   => '02',
                'title' => 'Financement de projets & levée de fonds',
                'text'  => 'Structuration de la dette, levée de capital-investissement, placement privé, ingénierie financière sur opérations africaines.',
            ],
            [
                'num'   => '03',
                'title' => 'Intelligence économique',
                'text'  => 'Cartographie des acteurs, analyse réglementaire, veille marché, scoring pays et lecture fine des écosystèmes locaux.',
            ],
            [
                'num'   => '04',
                'title' => 'Structuration & investissement',
                'text'  => 'Conception de véhicules d’investissement, montage juridique, gouvernance et accompagnement post-opération.',
            ],
        ];
    }

    private function sectors(): array
    {
        return [
            [
                'name' => 'Infrastructures',
                'desc' => 'Énergie, transport, logistique, télécommunications — la colonne vertébrale du continent.',
                'span' => 'lg:col-span-7 lg:row-span-2',
            ],
            [
                'name' => 'Immobilier',
                'desc' => 'Résidentiel premium, tertiaire, hôtellerie : structurer la ville africaine de demain.',
                'span' => 'lg:col-span-5',
            ],
            [
                'name' => 'Agrobusiness',
                'desc' => 'Filières intégrées, transformation locale, sécurité alimentaire et chaînes de valeur exportables.',
                'span' => 'lg:col-span-5',
            ],
            [
                'name' => 'Technologie',
                'desc' => 'Fintech, infrastructures numériques, plateformes B2B : accélérer la souveraineté digitale.',
                'span' => 'lg:col-span-12',
            ],
        ];
    }

    private function team(): array
    {
        return [
            [
                'name'  => 'Loïc Mackosso',
                'role'  => 'Associé-Gérant',
                'bio'   => 'Vingt ans d’expérience en banque d’affaires et financement de projets sur les marchés africains et internationaux.',
            ],
            [
                'name'  => 'Régis Matondo',
                'role'  => 'Associé',
                'bio'   => 'Expert en structuration financière et intelligence économique, focus sur les opérations stratégiques en Afrique centrale.',
            ],
        ];
    }

    private function teamPreview(): array
    {
        return $this->team();
    }

    private function publications(): array
    {
        return [
            [
                'date'  => '2026 · Mars',
                'tag'   => 'Note sectorielle',
                'title' => 'Infrastructures africaines : la décennie de la concession.',
            ],
            [
                'date'  => '2026 · Février',
                'tag'   => 'Insight',
                'title' => 'Levées de fonds en Afrique centrale : tendances 2026.',
            ],
            [
                'date'  => '2026 · Janvier',
                'tag'   => 'Tribune',
                'title' => 'Pourquoi le conseil indépendant change la donne pour les ETI africaines.',
            ],
        ];
    }
}
