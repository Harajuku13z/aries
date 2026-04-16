@extends('layouts.app')

@section('title', 'Contact — ARIES Investissements')

@section('content')

<section class="relative pt-40 pb-24 bg-ink text-bone overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-ink via-soot to-espresso"></div>
    <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
    <div class="absolute right-0 top-1/3 w-[480px] h-[480px] rounded-full bg-gold/15 blur-[160px]"></div>

    <div class="container relative">
        <p class="reveal text-eyebrow uppercase text-gold/80">— Contact</p>
        <h1 class="reveal mt-8 font-display text-display-xl tracking-tightest leading-[0.95] max-w-5xl">
            Initier une <em class="italic text-gold">conversation.</em>
        </h1>
        <p class="reveal mt-10 max-w-2xl text-lg md:text-xl text-ivory/80 leading-relaxed">
            Un échange confidentiel, sans engagement, pour explorer comment ARIES peut accompagner votre projet.
        </p>
    </div>
</section>

<section class="py-24 md:py-32 bg-bone">
    <div class="container grid grid-cols-1 lg:grid-cols-12 gap-16">

        {{-- Sidebar contact info --}}
        <aside class="lg:col-span-4 reveal space-y-12">
            <div>
                <span class="text-eyebrow uppercase text-bronze">Brazzaville</span>
                <p class="mt-4 font-display text-2xl text-ink leading-tight">Immeuble ARC<br>9ème niveau</p>
                <p class="mt-3 text-ink/70">République du Congo</p>
                <a href="tel:+242069799885" class="mt-4 inline-block text-ink hover:text-gold transition">+242 06 97 99 88 5</a>
            </div>
            <div>
                <span class="text-eyebrow uppercase text-bronze">Washington</span>
                <p class="mt-4 font-display text-2xl text-ink leading-tight">United States</p>
                <a href="tel:+16463891437" class="mt-4 inline-block text-ink hover:text-gold transition">+1 646 389 14 37</a>
            </div>
            <div>
                <span class="text-eyebrow uppercase text-bronze">Email</span>
                <a href="mailto:aries@aries-investissements.com" class="mt-4 block font-display text-xl md:text-2xl text-ink hover:text-gold transition break-all">
                    aries@aries-investissements.com
                </a>
            </div>
        </aside>

        {{-- Form --}}
        <div class="lg:col-span-8 reveal">
            @if (session('status'))
                <div class="mb-10 border-l-2 border-gold pl-4 py-3 text-ink bg-ivory/40">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('contact.send') }}" class="space-y-10">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label for="name" class="text-eyebrow uppercase text-bronze block mb-3">Nom</label>
                        <input id="name" name="name" type="text" required
                               class="w-full bg-transparent border-0 border-b border-ink/30 focus:border-gold focus:ring-0 px-0 py-2 text-ink"
                               value="{{ old('name') }}">
                        @error('name') <p class="mt-2 text-xs text-mahogany">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="email" class="text-eyebrow uppercase text-bronze block mb-3">Email</label>
                        <input id="email" name="email" type="email" required
                               class="w-full bg-transparent border-0 border-b border-ink/30 focus:border-gold focus:ring-0 px-0 py-2 text-ink"
                               value="{{ old('email') }}">
                        @error('email') <p class="mt-2 text-xs text-mahogany">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div>
                    <label for="company" class="text-eyebrow uppercase text-bronze block mb-3">Société (optionnel)</label>
                    <input id="company" name="company" type="text"
                           class="w-full bg-transparent border-0 border-b border-ink/30 focus:border-gold focus:ring-0 px-0 py-2 text-ink"
                           value="{{ old('company') }}">
                </div>

                <div>
                    <label for="subject" class="text-eyebrow uppercase text-bronze block mb-3">Sujet</label>
                    <input id="subject" name="subject" type="text" required
                           class="w-full bg-transparent border-0 border-b border-ink/30 focus:border-gold focus:ring-0 px-0 py-2 text-ink"
                           value="{{ old('subject') }}">
                    @error('subject') <p class="mt-2 text-xs text-mahogany">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="message" class="text-eyebrow uppercase text-bronze block mb-3">Message</label>
                    <textarea id="message" name="message" rows="6" required
                              class="w-full bg-transparent border-0 border-b border-ink/30 focus:border-gold focus:ring-0 px-0 py-2 text-ink resize-none">{{ old('message') }}</textarea>
                    @error('message') <p class="mt-2 text-xs text-mahogany">{{ $message }}</p> @enderror
                </div>

                <div class="pt-4">
                    <button type="submit"
                            class="group inline-flex items-center gap-2 bg-ink text-bone px-6 py-3.5 text-sm tracking-wide hover:bg-gold hover:text-ink transition-colors duration-500">
                        Envoyer ma demande
                        <svg class="w-4 h-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
