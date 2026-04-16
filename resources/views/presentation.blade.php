<x-layouts.app :page-title="$pageTitle" :page-description="$pageDescription">
    <section class="inner-hero">
        <div class="container">
            <p class="section-kicker text-gold reveal">Présentation</p>
            <h1 class="inner-title reveal">ARIES Investissements accompagne les décisions qui engagent l’avenir.</h1>
            <p class="inner-text reveal">Société de conseil financier à vocation de banque d’affaires, ARIES intervient auprès d’investisseurs, d’entrepreneurs et d’institutions sur des projets d’investissement en Afrique.</p>
        </div>
    </section>

    <section class="section surface-light">
        <div class="container split-story">
            <div class="story-block reveal">
                <h2 class="section-title">Maîtrise de l’environnement, connaissance des acteurs, discipline d’exécution.</h2>
                <p class="section-text">Le positionnement d’ARIES repose sur une compréhension fine des contextes d’affaires, des dynamiques institutionnelles et des logiques sectorielles. Cette lecture permet de transformer des intentions d’investissement en trajectoires réalistes, bancables et robustes.</p>
            </div>
            <div class="story-panel reveal">
                <p class="story-lead">{{ $site['mission'] }}</p>
                <p>Le site adopte un langage volontairement institutionnel: chaque bloc doit rassurer, structurer et projeter le visiteur dans un cadre de travail sérieux et haut de gamme.</p>
            </div>
        </div>
    </section>

    <section class="section surface-dark">
        <div class="container">
            <x-section-heading
                eyebrow="Valeurs"
                title="Trois principes qui cadrent la relation"
                text="Indépendance, professionnalisme et rigueur composent le socle de confiance d’ARIES Investissements."
                class="reveal"
                light
            />
            <div class="values-stack values-stack--three">
                @foreach ($values as $value)
                    <article class="value-card reveal">
                        <h3>{{ $value['title'] }}</h3>
                        <p>{{ $value['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
</x-layouts.app>
