<x-layouts.app :page-title="$pageTitle" :page-description="$pageDescription">
    <section class="inner-hero inner-hero--dense">
        <div class="container">
            <p class="section-kicker text-gold reveal">Équipe</p>
            <h1 class="inner-title reveal">Une direction resserrée, lisible et engagée.</h1>
            <p class="inner-text reveal">La page équipe s’inscrit dans une logique premium: peu de dispersion, un ton sobre, et une mise en scène qui renforce la crédibilité plus qu’elle ne cherche l’effet.</p>
        </div>
    </section>

    <section class="section surface-muted">
        <div class="container team-grid team-grid--large">
            @foreach ($team as $member)
                <x-team-card :member="$member" />
            @endforeach
        </div>
    </section>

    <section class="section surface-light">
        <div class="container split-story">
            <div class="story-block reveal">
                <h2 class="section-title">Une représentation alignée avec le rôle d’ARIES.</h2>
                <p class="section-text">Le bloc équipe est volontairement institutionnel. Il ne cherche pas la proximité informelle, mais la confiance, la lisibilité des responsabilités et la qualité d’interlocution.</p>
            </div>
            <div class="story-panel reveal">
                <p>Le site est ainsi prêt à accueillir, plus tard, des portraits, biographies longues, références sectorielles ou interventions publiques sans rompre la cohérence visuelle.</p>
            </div>
        </div>
    </section>
</x-layouts.app>
