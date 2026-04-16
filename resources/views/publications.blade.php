<x-layouts.app :page-title="$pageTitle" :page-description="$pageDescription">
    <section class="inner-hero inner-hero--dense">
        <div class="container">
            <p class="section-kicker text-gold reveal">Publications & actualités</p>
            <h1 class="inner-title reveal">Un espace éditorial pensé pour renforcer l’autorité de la marque.</h1>
            <p class="inner-text reveal">Notes d’analyse, prises de parole, lectures sectorielles et actualités de marché pourront y être publiées dans un cadre visuel cohérent et premium.</p>
        </div>
    </section>

    <section class="section surface-light">
        <div class="container pub-grid pub-grid--stacked">
            @foreach ($publications as $post)
                <x-pub-card :post="$post" />
            @endforeach
        </div>
    </section>

    <section class="section surface-dark">
        <div class="container cta-band reveal">
            <div>
                <p class="section-kicker text-gold">Prochaine étape</p>
                <h2 class="section-title section-title-light">Ajouter un back-office éditorial, des catégories et une page détail.</h2>
            </div>
            <div class="cta-band__actions">
                <p class="section-text-light">La structure de page est prête pour être branchée à des contenus dynamiques Laravel par la suite.</p>
                <x-cta-button :href="route('contact')" variant="outline">Planifier l’évolution</x-cta-button>
            </div>
        </div>
    </section>
</x-layouts.app>
