<x-layouts.app :page-title="$pageTitle" :page-description="$pageDescription">
    <section class="hero">
        <div class="hero-backdrop"></div>
        <div class="container hero-grid">
            <div class="hero-copy reveal">
                <p class="section-kicker text-gold">Conseil financier & investissement</p>
                <h1 class="hero-title">Architecture stratégique pour ambitions d’investissement en Afrique.</h1>
                <p class="hero-text">{{ $site['description'] }}</p>
                <div class="hero-actions">
                    <x-cta-button :href="route('contact')">Parler à un conseiller</x-cta-button>
                    <x-cta-button :href="route('presentation')" variant="outline">Découvrir ARIES</x-cta-button>
                </div>
            </div>

            <div class="hero-panel reveal" data-parallax data-parallax-speed="0.03">
                <p class="hero-panel__eyebrow">Mission</p>
                <p class="hero-panel__quote">{{ $site['mission'] }}</p>
                <div class="hero-panel__meta">
                    <span>Brazzaville</span>
                    <span>Washington</span>
                    <span>Afrique</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section surface-light">
        <div class="container">
            <div class="intro-grid">
                <x-section-heading
                    eyebrow="Analyse du site de référence"
                    title="Transposition de l’esprit baselarea.swiss pour ARIES"
                    text="Le site de référence repose sur un hero immersif, de grands respirations, une alternance image/texte très éditoriale, des cartes de services fortes et des transitions discrètes. Pour ARIES, nous reprenons ces principes de rythme, d’élégance institutionnelle et de narration progressive, sans reprendre ni sa grammaire visuelle exacte ni ses motifs de marque."
                    class="reveal"
                />
                <div class="analysis-card reveal">
                    <ul class="analysis-list">
                        <li>Navigation sticky, sobre et immédiatement crédible.</li>
                        <li>Hero monumental avec message fort et hiérarchie typographique nette.</li>
                        <li>Alternance de sections claires et sombres pour créer un tempo premium.</li>
                        <li>Cartes sectorielles et blocs éditoriaux guidant la lecture sans surcharge.</li>
                        <li>Micro-animations de reveal au scroll, jamais démonstratives.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section surface-dark">
        <div class="container">
            <div class="metrics-grid">
                @foreach ($metrics as $metric)
                    <div class="metric-card reveal">
                        <p class="metric-value"><span data-countup="{{ $metric['value'] }}">{{ $metric['value'] }}</span>{{ $metric['suffix'] }}</p>
                        <p class="metric-label">{{ $metric['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section surface-light">
        <div class="container split-story">
            <div class="story-block reveal">
                <p class="section-kicker">Direction artistique</p>
                <h2 class="section-title">Une identité chaude, institutionnelle et maîtrisée.</h2>
                <p class="section-text">La palette issue du logo ARIES oriente naturellement le site vers des ors profonds, des terres brûlées et un noir café très dense. Cette base construit un univers premium, panafricain et décisionnel, loin des codes bancaires froids.</p>
            </div>
            <div class="story-panel reveal">
                <div class="palette-row">
                    <span style="background:#130c05"></span>
                    <span style="background:#442c0c"></span>
                    <span style="background:#774d15"></span>
                    <span style="background:#a5691c"></span>
                    <span style="background:#ee9928"></span>
                </div>
                <p>Typography: Cormorant Garamond pour les titres, Manrope pour la lecture. Images suggérées: architecture, skyline, matières minérales, silhouettes exécutives, cartes et flux d’investissement plutôt que clichés génériques de finance.</p>
            </div>
        </div>
    </section>

    <section class="section surface-muted">
        <div class="container">
            <x-section-heading
                eyebrow="Sitemap"
                title="Une architecture claire, éditoriale et SEO-friendly"
                text="Accueil, Présentation, Expertise, Secteurs d’activité, Équipe, Publications et Contact. La home agit comme une synthèse stratégique, chaque page intérieure approfondit un axe métier ou de crédibilité."
                class="reveal"
            />

            <div class="sitemap-grid">
                <div class="sitemap-card reveal">
                    <h3>Wireframe d’accueil</h3>
                    <p>Hero immersif, manifeste de positionnement, mission, secteurs, expertises, valeurs, équipe, publications et bloc contact final.</p>
                </div>
                <div class="sitemap-card reveal">
                    <h3>CTA principaux</h3>
                    <p>Entrer en relation, Découvrir l’expertise, Explorer les secteurs, Consulter les publications.</p>
                </div>
                <div class="sitemap-card reveal">
                    <h3>UX attendue</h3>
                    <p>Lecture fluide, révélations progressives, peu de friction, forte impression de sérieux et d’accompagnement haut niveau.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section surface-light">
        <div class="container">
            <x-section-heading
                eyebrow="Secteurs d’activité"
                title="Des terrains d’investissement où l’exécution stratégique fait la différence"
                text="ARIES concentre ses efforts sur des verticales où la lecture du marché, des parties prenantes et des montages financiers change profondément la trajectoire des projets."
                class="reveal"
            />

            <div class="tile-grid">
                @foreach ($sectors as $sector)
                    <x-sector-tile :sector="$sector" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="section surface-dark">
        <div class="container">
            <x-section-heading
                eyebrow="Expertise"
                title="Une plateforme de conseil pensée pour les opérations exigeantes"
                text="Du cadrage stratégique à la levée de fonds, ARIES intervient comme partenaire de discernement, de structuration et d’exécution."
                class="reveal"
                light
            />

            <div class="expertise-grid">
                @foreach ($expertises as $item)
                    <x-expertise-card :item="$item" :index="$loop->iteration" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="section surface-light">
        <div class="container vision-grid">
            <div class="vision-copy reveal">
                <p class="section-kicker">Vision & valeurs</p>
                <h2 class="section-title">Créer la confiance avant même la transaction.</h2>
                <p class="section-text">Le site s’écrit comme un espace de conviction calme: moins d’effets, plus de stature. La mise en page assume de grands vides, des alignements nets, des contrastes nobles et une parole concise.</p>
            </div>
            <div class="values-stack">
                @foreach ($values as $value)
                    <article class="value-card reveal">
                        <h3>{{ $value['title'] }}</h3>
                        <p>{{ $value['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section surface-muted">
        <div class="container">
            <x-section-heading
                eyebrow="Équipe"
                title="Une direction sobre, lisible et crédible"
                text="La section équipe adopte un ton maîtrisé: peu de texte, beaucoup de présence, une mise en avant nette des rôles et de la responsabilité stratégique."
                class="reveal"
            />

            <div class="team-grid">
                @foreach ($team as $member)
                    <x-team-card :member="$member" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="section surface-light">
        <div class="container">
            <div class="section-row reveal">
                <x-section-heading
                    eyebrow="Publications"
                    title="Un espace éditorial prêt à accueillir analyses, notes et actualités"
                    text="Le dispositif prévoit une page dédiée, avec des cartes sobres et hiérarchisées pour renforcer l’autorité de marque."
                />
                <x-cta-button :href="route('publications')" variant="outline">Voir les publications</x-cta-button>
            </div>

            <div class="pub-grid">
                @foreach ($publications as $post)
                    <x-pub-card :post="$post" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="section surface-accent">
        <div class="container cta-band reveal">
            <div>
                <p class="section-kicker text-dark">Contact</p>
                <h2 class="section-title text-dark">Une ambition d’investissement mérite une lecture stratégique à la hauteur.</h2>
            </div>
            <div class="cta-band__actions">
                <p>Échangeons sur votre projet, vos contraintes de structuration et vos objectifs de déploiement.</p>
                <x-cta-button :href="route('contact')" variant="outline">Nous contacter</x-cta-button>
            </div>
        </div>
    </section>
</x-layouts.app>
