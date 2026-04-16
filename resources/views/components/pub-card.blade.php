@props(['date' => '', 'tag' => '', 'title' => ''])

<a href="#" class="reveal group block border-t border-ink/15 pt-8 transition-colors duration-700 hover:border-gold">
    <div class="flex items-center justify-between mb-8 text-xs uppercase tracking-eyebrow text-ink/55">
        <span>{{ $date }}</span>
        <span class="text-bronze">{{ $tag }}</span>
    </div>
    <h3 class="mb-10 max-w-md font-display text-2xl leading-[1.12] text-ink transition-colors duration-500 group-hover:text-bronze md:text-[30px]">
        {{ $title }}
    </h3>
    <span class="inline-flex items-center gap-2 text-sm text-ink/70">
        Lire l’analyse
        <svg class="w-4 h-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
    </span>
</a>
