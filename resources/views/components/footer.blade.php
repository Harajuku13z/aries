<footer class="bg-[#0A0603] text-ivory pt-24 pb-10 relative overflow-hidden">
    <div class="absolute inset-0 bg-grain opacity-[0.6] pointer-events-none mix-blend-overlay"></div>

    <div class="container relative">
        {{-- Top : statement --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 pb-20 border-b border-white/10">
            <div class="lg:col-span-7">
                <p class="text-eyebrow uppercase text-gold/80 mb-6">— ARIES Investissements</p>
                <h2 class="font-display text-display-md text-bone max-w-3xl">
                    Faire émerger les nouveaux champions <span class="italic text-gold">africains</span>.
                </h2>
            </div>
            <div class="lg:col-span-5 flex lg:justify-end items-end">
                <a href="{{ route('contact') }}"
                   class="group inline-flex items-center gap-3 text-bone border-b border-bone/40 pb-2 hover:border-gold transition-colors">
                    <span class="text-sm tracking-wide">Initier une conversation</span>
                    <svg class="w-4 h-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                </a>
            </div>
        </div>

        {{-- Columns --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-10 py-16 text-sm">
            <div>
                <p class="text-eyebrow uppercase text-gold/70 mb-5">Maison</p>
                <ul class="space-y-3 text-ivory/80">
                    <li><a href="{{ route('presentation') }}" class="hover:text-gold transition">Présentation</a></li>
                    <li><a href="{{ route('expertise') }}"    class="hover:text-gold transition">Expertise</a></li>
                    <li><a href="{{ route('sectors') }}"      class="hover:text-gold transition">Secteurs</a></li>
                    <li><a href="{{ route('team') }}"         class="hover:text-gold transition">Équipe</a></li>
                </ul>
            </div>

            <div>
                <p class="text-eyebrow uppercase text-gold/70 mb-5">Insights</p>
                <ul class="space-y-3 text-ivory/80">
                    <li><a href="{{ route('publications') }}" class="hover:text-gold transition">Publications</a></li>
                    <li><a href="{{ route('publications') }}" class="hover:text-gold transition">Notes sectorielles</a></li>
                    <li><a href="{{ route('publications') }}" class="hover:text-gold transition">Tribunes</a></li>
                </ul>
            </div>

            <div>
                <p class="text-eyebrow uppercase text-gold/70 mb-5">Bureaux</p>
                <ul class="space-y-3 text-ivory/80">
                    <li>
                        <span class="block text-bone">Brazzaville</span>
                        Immeuble ARC, 9ème niveau<br>
                        +242 06 97 99 88 5
                    </li>
                    <li class="pt-3">
                        <span class="block text-bone">Washington</span>
                        +1 646 389 14 37
                    </li>
                </ul>
            </div>

            <div>
                <p class="text-eyebrow uppercase text-gold/70 mb-5">Newsletter</p>
                <p class="text-ivory/70 mb-4">Nos analyses, deux fois par mois.</p>
                <form class="flex border-b border-white/20 focus-within:border-gold transition-colors">
                    <input type="email" required placeholder="Votre email"
                           class="flex-1 bg-transparent border-0 text-bone placeholder-ivory/40 focus:ring-0 px-0 py-2 text-sm">
                    <button type="submit" class="text-gold text-sm hover:text-bone transition">→</button>
                </form>
            </div>
        </div>

        {{-- Bottom --}}
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4 text-xs text-ivory/50">
            <p>© {{ date('Y') }} ARIES Investissements. Tous droits réservés.</p>
            <div class="flex flex-wrap gap-6">
                <a href="#" class="hover:text-gold transition">Mentions légales</a>
                <a href="#" class="hover:text-gold transition">Confidentialité</a>
                <a href="mailto:aries@aries-investissements.com" class="hover:text-gold transition">aries@aries-investissements.com</a>
            </div>
        </div>
    </div>
</footer>
