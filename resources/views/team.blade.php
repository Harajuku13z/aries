@extends('layouts.app')

@section('title', 'Équipe — ARIES Investissements')

@section('content')

<section class="relative pt-40 pb-24 bg-ink text-bone overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-ink via-soot to-espresso"></div>
    <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
    <div class="container relative">
        <p class="reveal text-eyebrow uppercase text-gold/80">— Équipe</p>
        <h1 class="reveal mt-8 font-display text-display-xl tracking-tightest leading-[0.95] max-w-5xl">
            Une direction de <em class="italic text-gold">banque d’affaires</em>.
        </h1>
        <p class="reveal mt-10 max-w-2xl text-lg md:text-xl text-ivory/80 leading-relaxed">
            Des dirigeants expérimentés, à l’intersection des marchés africains et internationaux.
        </p>
    </div>
</section>

<section class="py-24 md:py-32 bg-bone">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-20">
            @foreach ($team as $m)
                <x-team-card :name="$m['name']" :role="$m['role']" :bio="$m['bio']" :photo="$m['photo'] ?? null" />
            @endforeach
        </div>
    </div>
</section>

<section class="py-24 bg-espresso text-bone relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-espresso via-soot to-ink"></div>
    <div class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay"></div>
    <div class="container relative max-w-4xl reveal">
        <span class="text-eyebrow uppercase text-gold/80">— Notre méthode</span>
        <p class="mt-8 font-display text-display-md leading-[1.1] tracking-tightest">
            Une équipe restreinte, accessible aux dirigeants, qui prend la responsabilité de chaque dossier de bout en bout.
        </p>
    </div>
</section>

@endsection
