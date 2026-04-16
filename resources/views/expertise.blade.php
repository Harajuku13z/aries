<x-layouts.app :page-title="$pageTitle" :page-description="$pageDescription">
    <section class="inner-hero inner-hero--dense">
        <div class="container">
            <p class="section-kicker text-gold reveal">Expertise</p>
            <h1 class="inner-title reveal">Des expertises articulées pour soutenir des opérations ambitieuses.</h1>
            <p class="inner-text reveal">ARIES combine lecture stratégique, ingénierie financière et intelligence économique afin d’accompagner des projets exigeants dans des environnements complexes.</p>
        </div>
    </section>

    <section class="section surface-light">
        <div class="container">
            <div class="expertise-grid">
                @foreach ($expertises as $item)
                    <x-expertise-card :item="$item" :index="$loop->iteration" class="expertise-card--light" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="section surface-muted">
        <div class="container split-story">
            <div class="story-block reveal">
                <h2 class="section-title">Un accompagnement calibré pour la décision.</h2>
                <p class="section-text">L’expérience proposée sur cette page privilégie une lecture rapide des savoir-faire, puis une montée en précision. C’est l’un des principes retenus depuis l’analyse du site de référence: donner d’abord une impression de maîtrise, ensuite la profondeur.</p>
            </div>
            <div class="story-panel reveal">
                <p>CTA recommandé sur cette page : <strong>Initier un échange confidentiel</strong>. L’objectif n’est pas le volume, mais la qualité des prises de contact.</p>
            </div>
        </div>
    </section>
</x-layouts.app>
