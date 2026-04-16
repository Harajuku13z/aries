@props(['name' => '', 'desc' => '', 'span' => '', 'number' => ''])

<a href="{{ route('sectors') }}" class="reveal group {{ $span }} block border border-ink/10 bg-white transition-colors duration-500 hover:border-gold/50">
    <div class="grid min-h-[280px] grid-cols-1 md:grid-cols-[110px_1fr]">
        <div class="flex items-start justify-between border-b border-ink/10 bg-parchment px-6 py-6 md:min-h-full md:flex-col md:border-b-0 md:border-r">
            <span class="text-[11px] uppercase tracking-[0.22em] text-bronze">Secteur</span>
            <span class="font-display text-4xl leading-none text-gold/80">{{ $number }}</span>
        </div>

        <div class="flex flex-col justify-between px-6 py-7 md:px-8 md:py-8">
            <div>
                <h3 class="font-display text-[clamp(2rem,3.2vw,3rem)] leading-[1.02] tracking-tightest text-ink transition-colors duration-500 group-hover:text-bronze">
                    {{ $name }}
                </h3>
                <p class="mt-5 max-w-xl text-base leading-relaxed text-ink/72 md:text-lg">
                    {{ $desc }}
                </p>
            </div>

            <div class="mt-10 flex items-center justify-between border-t border-ink/10 pt-5">
                <span class="text-[11px] uppercase tracking-[0.22em] text-ink/42">Marché prioritaire</span>
                <svg class="h-5 w-5 text-ink/40 transition-all duration-500 ease-out-expo group-hover:translate-x-1 group-hover:text-gold" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
            </div>
        </div>
    </div>
</a>
