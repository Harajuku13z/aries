@props(['name' => '', 'desc' => '', 'span' => '', 'number' => ''])

<a href="{{ route('sectors') }}" class="reveal group {{ $span }} block border border-ink/10 bg-white">
    <div class="flex h-full flex-col">
        <div class="flex items-center justify-between border-b border-ink/10 bg-parchment px-5 py-4 sm:px-6">
            <span class="text-[11px] uppercase tracking-[0.22em] text-bronze">Secteur</span>
            <span class="font-display text-3xl leading-none text-gold/80 sm:text-4xl">{{ $number }}</span>
        </div>

        <div class="flex flex-1 flex-col justify-between px-5 py-6 sm:px-6 sm:py-7">
            <div>
                <h3 class="font-display text-[1.9rem] leading-[1.02] tracking-tightest text-ink transition-colors duration-500 group-hover:text-bronze sm:text-[2.25rem]">
                    {{ $name }}
                </h3>
                <p class="mt-4 text-[15px] leading-relaxed text-ink/72 sm:mt-5 sm:text-base">
                    {{ $desc }}
                </p>
            </div>

            <div class="mt-7 flex items-center justify-between border-t border-ink/10 pt-4 sm:mt-10 sm:pt-5">
                <span class="text-[11px] uppercase tracking-[0.22em] text-ink/42">Marché prioritaire</span>
                <svg class="h-5 w-5 text-ink/40 transition-all duration-500 ease-out-expo group-hover:translate-x-1 group-hover:text-gold" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
            </div>
        </div>
    </div>
</a>
