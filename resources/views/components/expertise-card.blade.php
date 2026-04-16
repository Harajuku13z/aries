@props(['num' => '', 'title' => '', 'text' => ''])

<article class="reveal group relative flex min-h-[340px] flex-col justify-between bg-soot/92 p-8 md:p-10">
    <header class="flex items-start justify-between">
        <span class="font-display text-3xl text-gold/80">{{ $num }}</span>
        <svg class="w-5 h-5 text-ivory/40 group-hover:text-gold group-hover:translate-x-1 transition-all duration-500 ease-out-expo" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
    </header>

    <div class="mt-16">
        <h3 class="font-display text-2xl md:text-[28px] leading-[1.15] text-bone mb-4">{{ $title }}</h3>
        <p class="text-sm md:text-[15px] text-ivory/70 leading-relaxed">{{ $text }}</p>
    </div>

    <span class="absolute bottom-0 left-0 h-px w-0 bg-gold transition-all duration-700 ease-out-expo group-hover:w-full"></span>
</article>
