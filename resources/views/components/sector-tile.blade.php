@props(['name' => '', 'desc' => '', 'span' => ''])

<a href="{{ route('sectors') }}" class="reveal group relative {{ $span }} block overflow-hidden bg-ink text-bone min-h-[320px] p-8 md:p-10">
    {{-- Grain overlay --}}
    <span class="absolute inset-0 bg-grain opacity-50 mix-blend-overlay pointer-events-none"></span>
    {{-- Hover fill --}}
    <span class="absolute inset-0 bg-gradient-to-br from-mahogany/0 via-espresso/0 to-gold/0 group-hover:from-mahogany/30 group-hover:via-espresso/40 group-hover:to-gold/20 transition-all duration-700"></span>

    <div class="relative z-10 flex flex-col h-full justify-between">
        <div class="flex items-start justify-between">
            <span class="text-eyebrow uppercase text-gold/70">Secteur</span>
            <svg class="w-5 h-5 text-bone/50 group-hover:text-gold group-hover:-translate-y-1 group-hover:translate-x-1 transition-all duration-500 ease-out-expo" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 12L12 4M7 4h5v5"/></svg>
        </div>

        <div class="mt-10">
            <h3 class="font-display text-[clamp(1.75rem,3vw,2.75rem)] leading-[1.05] tracking-tightest mb-4">{{ $name }}</h3>
            <p class="text-sm md:text-base text-ivory/70 max-w-lg">{{ $desc }}</p>
        </div>
    </div>
</a>
