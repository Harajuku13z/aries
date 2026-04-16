<x-layouts.app :page-title="$pageTitle" :page-description="$pageDescription">
    <section class="inner-hero inner-hero--dense">
        <div class="container">
            <p class="section-kicker text-gold reveal">Secteurs d’activité</p>
            <h1 class="inner-title reveal">Des secteurs où la qualité de structuration crée un avantage réel.</h1>
            <p class="inner-text reveal">ARIES concentre son énergie sur des domaines à fort impact économique, nécessitant une coordination rigoureuse entre stratégie, capital et exécution.</p>
        </div>
    </section>

    <section class="section surface-light">
        <div class="container">
            <div class="tile-grid tile-grid--expanded">
                @foreach ($sectors as $sector)
                    <x-sector-tile :sector="$sector" />
                @endforeach
            </div>
        </div>
    </section>

    <section class="section surface-dark">
        <div class="container split-story">
            <div class="story-block reveal">
                <h2 class="section-title section-title-light">Une lecture sectorielle au service d’une vision panafricaine.</h2>
                <p class="section-text section-text-light">L’approche n’est pas opportuniste. Elle vise des secteurs capables de soutenir des champions nationaux et régionaux, avec des montages responsables et une logique de création de valeur durable.</p>
            </div>
            <div class="story-panel reveal story-panel--dark">
                <p>Le design alterne ici masses sombres et cartes lumineuses pour traduire l’idée de discernement: identifier, filtrer, structurer, engager.</p>
            </div>
        </div>
    </section>
</x-layouts.app>
