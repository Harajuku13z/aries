<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand reveal">
                <p class="section-kicker text-gold">ARIES Investissements</p>
                <h2 class="footer-title">Conseil financier de haut niveau, orienté Afrique.</h2>
                <p class="footer-copy">{{ $site['description'] }}</p>
            </div>

            <div class="footer-column reveal">
                <h3 class="footer-heading">Navigation</h3>
                <a href="{{ route('presentation') }}">Présentation</a>
                <a href="{{ route('expertise') }}">Expertise</a>
                <a href="{{ route('sectors') }}">Secteurs d’activité</a>
                <a href="{{ route('team') }}">Équipe</a>
            </div>

            <div class="footer-column reveal">
                <h3 class="footer-heading">Coordonnées</h3>
                @foreach ($site['phones'] as $phone)
                    <p>{{ $phone['label'] }} : {{ $phone['value'] }}</p>
                @endforeach
                <p>{{ $site['email'] }}</p>
                <p>{{ $site['address'] }}</p>
            </div>

            <div class="footer-column reveal">
                <h3 class="footer-heading">Newsletter</h3>
                <p>Recevez nos analyses et points de marché.</p>
                <form class="footer-form">
                    <label class="sr-only" for="footer-email">Adresse e-mail</label>
                    <input id="footer-email" type="email" placeholder="Votre adresse e-mail">
                    <button type="button" class="button button-gold">S’inscrire</button>
                </form>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ now()->year }} {{ $site['name'] }}. Tous droits réservés.</p>
            <a href="{{ route('contact') }}">Prendre contact</a>
        </div>
    </div>
</footer>
