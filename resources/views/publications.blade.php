@extends('layouts.app')

@section('title', 'Publications — ARIES Investissements')

@section('content')

<section class="relative pt-40 pb-24 bg-ink text-bone overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-ink via-soot to-mahogany"></div>
    <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
    <div class="container relative">
        <p class="reveal text-eyebrow uppercase text-gold/80">— Publications</p>
        <h1 class="reveal mt-8 font-display text-display-xl tracking-tightest leading-[0.95] max-w-5xl">
            Notre lecture du <em class="italic text-gold">continent.</em>
        </h1>
        <p class="reveal mt-10 max-w-2xl text-lg md:text-xl text-ivory/80 leading-relaxed">
            Notes sectorielles, insights marché et tribunes — l’analyse ARIES de l’investissement en Afrique.
        </p>
    </div>
</section>

<section class="py-24 md:py-32 bg-bone">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-16">
            @foreach ($pubs as $p)
                <x-pub-card :date="$p['date']" :tag="$p['tag']" :title="$p['title']" />
            @endforeach
        </div>

        <div class="mt-24 border-t border-ink/15 pt-16 max-w-3xl reveal">
            <span class="text-eyebrow uppercase text-bronze">Newsletter</span>
            <h2 class="mt-6 font-display text-display-md text-ink leading-[1.05] tracking-tightest">
                Recevoir nos <em class="italic text-bronze">analyses</em>.
            </h2>
            <p class="mt-6 text-ink/70 max-w-xl">Deux fois par mois, une note synthétique sur les tendances de l’investissement en Afrique.</p>
            <form class="mt-10 flex border-b border-ink/30 focus-within:border-gold transition-colors">
                <input type="email" required placeholder="votre@email.com"
                       class="flex-1 bg-transparent border-0 text-ink placeholder-ink/40 focus:ring-0 px-0 py-3">
                <button type="submit" class="text-bronze hover:text-gold transition px-2">→</button>
            </form>
        </div>
    </div>
</section>

@endsection
