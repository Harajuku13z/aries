<x-layouts.app :page-title="$pageTitle" :page-description="$pageDescription">
    <section class="hero">
        <div class="hero-backdrop"></div>
        <div class="container hero-grid">
            <div class="hero-copy reveal">
                <p class="section-kicker text-gold">Conseil financier de haut niveau en Afrique</p>
                <h1 class="hero-title">Faire émerger des projets crédibles, bancables et décisifs.</h1>
                <p class="hero-text">ARIES Investissements conseille les décideurs qui veulent engager du capital avec méthode, lire les écosystèmes avec précision et structurer des opérations capables de tenir dans le temps.</p>
                <div class="hero-actions">
                    <x-cta-button :href="route('contact')">Parler à ARIES</x-cta-button>
                    <x-cta-button :href="route('expertise')" variant="outline">Voir notre expertise</x-cta-button>
                </div>
            </div>

            <div class="hero-panel reveal" data-parallax data-parallax-speed="0.03">
                <p class="hero-panel__eyebrow">Mission</p>
                <p class="hero-panel__quote">{{ $site['mission'] }}</p>
                <p class="hero-panel__text">Une banque d’affaires en mouvement, enracinée à Brazzaville, ouverte à Washington, tournée vers les trajectoires de croissance africaines les plus structurantes.</p>
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
            <div class="entry-grid">
                <div class="entry-copy reveal">
                    <p class="section-kicker">Positionnement</p>
                    <h2 class="section-title">Lire un marché ne suffit pas. Il faut savoir le traduire en opération.</h2>
                </div>
                <div class="entry-cards">
                    <article class="entry-card reveal">
                        <p class="entry-card__index">01</p>
                        <h3>Conseiller</h3>
                        <p>Clarifier les options, hiérarchiser les priorités, préparer les décisions qui engagent.</p>
                    </article>
                    <article class="entry-card reveal">
                        <p class="entry-card__index">02</p>
                        <h3>Structurer</h3>
                        <p>Aligner stratégie, partenaires, financement et calendrier d’exécution.</p>
                    </article>
                    <article class="entry-card reveal">
                        <p class="entry-card__index">03</p>
                        <h3>Accélérer</h3>
                        <p>Faire avancer les projets avec la bonne lecture des acteurs, des risques et du capital.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="section surface-dark">
        <div class="container">
            <div class="section-shell reveal">
                <div>
                    <p class="section-kicker text-gold">Envergure</p>
                    <h2 class="section-title section-title-light">Une présence compacte. Une lecture large.</h2>
                </div>
                <p class="section-text section-text-light">ARIES intervient là où la qualité d’analyse, la discipline de structuration et la capacité à dialoguer avec les bonnes contreparties font toute la différence.</p>
            </div>
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
                <p class="section-kicker">Présentation</p>
                <h2 class="section-title">Une maison de conseil pensée pour l’investissement exigeant.</h2>
                <p class="section-text">ARIES Investissements accompagne investisseurs et porteurs de projets dans la maîtrise de leur environnement, l’identification des bons leviers et la structuration d’opérations à haute intensité stratégique.</p>
            </div>
            <div class="story-panel story-panel--offset reveal">
                <p class="story-lead">Une parole sobre. Une exécution rigoureuse.</p>
                <p>Notre valeur ne réside pas dans le volume de recommandations, mais dans leur justesse, leur lisibilité et leur capacité à tenir face au réel.</p>
                <a href="{{ route('presentation') }}" class="inline-link">Découvrir la maison</a>
            </div>
        </div>
    </section>

    <section class="section surface-muted">
        <div class="container">
            <div class="editorial-grid">
                <article class="editorial-card editorial-card--dark reveal">
                    <p class="section-kicker text-gold">Approche</p>
                    <h3>Comprendre l’écosystème avant de structurer la transaction.</h3>
                    <p>Chaque opération est aussi une question de contexte: acteurs, rythme institutionnel, crédibilité du sponsor, qualité du dossier et capacité à entraîner les bons partenaires.</p>
                </article>
                <article class="editorial-card reveal">
                    <p class="section-kicker">Promesse</p>
                    <h3>Transformer une ambition d’investissement en trajectoire défendable.</h3>
                    <p>ARIES articule conseil stratégique, ingénierie financière, intelligence économique et accompagnement des parties prenantes dans un même mouvement.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section surface-light">
        <div class="container">
            <x-section-heading
                eyebrow="Secteurs d’activité"
                title="Quatre terrains d’action où l’exécution stratégique crée de la valeur."
                text="Des secteurs où la qualité du montage, la profondeur de lecture du marché et la capacité à sécuriser l’opération comptent autant que l’opportunité elle-même."
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
                title="Une expertise de banque d’affaires adaptée aux réalités africaines."
                text="Du cadrage stratégique à la levée de fonds, ARIES intervient comme partenaire de discernement, de structuration et de dialogue."
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
        <div class="container">
            <div class="manifesto-band reveal">
                <div>
                    <p class="section-kicker">Vision</p>
                    <h2 class="section-title">Créer la confiance avant la transaction. Et de la clarté avant l’engagement.</h2>
                </div>
                <p class="manifesto-text">ARIES défend une idée simple: les marchés complexes n’appellent pas des discours plus bruyants, mais des analyses plus justes, des montages plus solides et une parole plus crédible.</p>
            </div>
        </div>
    </section>

    <section class="section surface-muted">
        <div class="container vision-grid">
            <div class="vision-copy reveal">
                <p class="section-kicker">Valeurs</p>
                <h2 class="section-title">Indépendance, professionnalisme, rigueur.</h2>
                <p class="section-text">Trois principes qui cadrent la relation, structurent la méthode et renforcent la confiance de long terme avec les investisseurs et les sponsors.</p>
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
                title="Une direction resserrée, stratégique et engagée."
                text="Deux profils complémentaires pour penser, structurer et accompagner des projets d’investissement à forts enjeux."
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
                    title="Des prises de parole qui renforcent l’autorité de la maison."
                    text="Analyses, perspectives, notes de marché et lectures sectorielles pour prolonger la crédibilité d’ARIES au-delà des missions."
                />
                <x-cta-button :href="route('publications')" variant="outline">Toutes les publications</x-cta-button>
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
                <h2 class="section-title text-dark">Les opérations ambitieuses commencent rarement par hasard.</h2>
            </div>
            <div class="cta-band__actions">
                <p>Échangeons sur votre projet, vos contraintes de structuration, vos objectifs de financement et votre trajectoire de déploiement en Afrique.</p>
                <x-cta-button :href="route('contact')" variant="outline">Initier un échange</x-cta-button>
            </div>
        </div>
    </section>
</x-layouts.app>
