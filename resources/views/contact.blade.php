<x-layouts.app :page-title="$pageTitle" :page-description="$pageDescription">
    <section class="inner-hero inner-hero--dense">
        <div class="container">
            <p class="section-kicker text-gold reveal">Contact</p>
            <h1 class="inner-title reveal">Ouvrir une conversation stratégique en toute confidentialité.</h1>
            <p class="inner-text reveal">ARIES Investissements accompagne des projets qui exigent méthode, discrétion et qualité d’exécution. Nous pouvons échanger depuis Brazzaville ou Washington.</p>
        </div>
    </section>

    <section class="section surface-light">
        <div class="container contact-grid">
            <div class="contact-card reveal">
                <h2>Coordonnées</h2>
                @foreach ($site['phones'] as $phone)
                    <div class="contact-line">
                        <span>{{ $phone['label'] }}</span>
                        <strong>{{ $phone['value'] }}</strong>
                    </div>
                @endforeach
                <div class="contact-line">
                    <span>Email</span>
                    <strong>{{ $site['email'] }}</strong>
                </div>
                <div class="contact-line">
                    <span>Adresse</span>
                    <strong>{{ $site['address'] }}</strong>
                </div>
            </div>

            <div class="contact-card contact-card--form reveal">
                <h2>Demande de contact</h2>
                <form class="contact-form">
                    <label>
                        <span>Nom</span>
                        <input type="text" placeholder="Votre nom">
                    </label>
                    <label>
                        <span>E-mail</span>
                        <input type="email" placeholder="vous@entreprise.com">
                    </label>
                    <label>
                        <span>Organisation</span>
                        <input type="text" placeholder="Nom de la structure">
                    </label>
                    <label>
                        <span>Votre projet</span>
                        <textarea rows="5" placeholder="Décrivez brièvement le contexte, le secteur et le besoin."></textarea>
                    </label>
                    <button type="button" class="button button-gold">Envoyer la demande</button>
                </form>
            </div>
        </div>
    </section>
</x-layouts.app>
