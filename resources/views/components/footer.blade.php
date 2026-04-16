<footer class="relative overflow-hidden bg-[#0b0704] pt-24 text-ivory">
    <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>

    <div class="container relative">
        <div class="grid gap-14 border-b border-white/10 pb-20 lg:grid-cols-12 lg:items-end">
            <div class="lg:col-span-7">
                <p class="text-eyebrow uppercase text-gold/80">ARIES Investissements</p>
                <h2 class="mt-7 max-w-4xl font-display text-display-md leading-[1.02] text-bone">
                    Une maison de conseil financier pensée pour les projets d’investissement à fort impact en Afrique.
                </h2>
            </div>
            <div class="lg:col-span-5 lg:flex lg:justify-end">
                <a
                    href="{{ route('contact') }}"
                    class="group inline-flex items-center gap-3 border-b border-white/30 pb-2 text-bone transition-colors hover:border-gold"
                >
                    <span class="text-sm tracking-wide">Initier une conversation</span>
                    <svg class="h-4 w-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                </a>
            </div>
        </div>

        <div class="grid gap-12 py-16 md:grid-cols-2 xl:grid-cols-5">
            <div class="xl:col-span-2">
                <img
                    src="{{ asset('assets/img/brand/logo-aries-primary.png') }}"
                    alt="ARIES Investissements"
                    class="h-11 w-auto brightness-0 invert"
                >
                <p class="mt-6 max-w-sm text-sm leading-relaxed text-ivory/70">
                    Conseil stratégique, structuration et accompagnement des opérations d’investissement en Afrique, avec un niveau d’exigence institutionnel.
                </p>
                <div class="mt-8">
                    <p class="text-[11px] uppercase tracking-[0.22em] text-gold/70">Newsletter</p>
                    <form class="mt-4 flex max-w-sm border-b border-white/20 pb-2 focus-within:border-gold transition-colors">
                        <input
                            type="email"
                            required
                            placeholder="Votre email"
                            class="flex-1 border-0 bg-transparent px-0 py-0 text-sm text-bone placeholder:text-ivory/35 focus:ring-0"
                        >
                        <button type="submit" class="text-sm text-gold transition hover:text-bone">S’inscrire</button>
                    </form>
                </div>
            </div>

            <div>
                <p class="text-[11px] uppercase tracking-[0.22em] text-gold/70">Navigation</p>
                <ul class="mt-5 space-y-3 text-sm text-ivory/78">
                    <li><a href="{{ route('presentation') }}" class="transition hover:text-gold">Présentation</a></li>
                    <li><a href="{{ route('expertise') }}" class="transition hover:text-gold">Expertise</a></li>
                    <li><a href="{{ route('sectors') }}" class="transition hover:text-gold">Secteurs d’activité</a></li>
                    <li><a href="{{ route('team') }}" class="transition hover:text-gold">Équipe</a></li>
                    <li><a href="{{ route('publications') }}" class="transition hover:text-gold">Publications</a></li>
                </ul>
            </div>

            <div>
                <p class="text-[11px] uppercase tracking-[0.22em] text-gold/70">Contact</p>
                <ul class="mt-5 space-y-4 text-sm leading-relaxed text-ivory/78">
                    <li>
                        <span class="block text-bone">Brazzaville</span>
                        +242 06 97 99 88 5
                    </li>
                    <li>
                        <span class="block text-bone">Washington</span>
                        +1 646 389 14 37
                    </li>
                    <li>
                        <span class="block text-bone">Email</span>
                        <a href="mailto:aries@aries-investissements.com" class="transition hover:text-gold">aries@aries-investissements.com</a>
                    </li>
                </ul>
            </div>

            <div>
                <p class="text-[11px] uppercase tracking-[0.22em] text-gold/70">Adresse</p>
                <p class="mt-5 text-sm leading-relaxed text-ivory/78">
                    Aries Investissements<br>
                    9ème niveau, Immeuble ARC<br>
                    Brazzaville, République du Congo
                </p>
            </div>
        </div>

        <div class="flex flex-col gap-4 border-t border-white/10 py-8 text-xs text-ivory/45 md:flex-row md:items-center md:justify-between">
            <p>© {{ date('Y') }} ARIES Investissements. Tous droits réservés.</p>
            <div class="flex flex-wrap gap-5">
                <a href="#" class="transition hover:text-gold">Mentions légales</a>
                <a href="#" class="transition hover:text-gold">Confidentialité</a>
            </div>
        </div>
    </div>
</footer>
