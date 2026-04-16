@props(['name' => '', 'role' => '', 'bio' => '', 'photo' => null])

<article class="reveal group">
    <div class="relative aspect-[4/5] overflow-hidden bg-ink sm:aspect-[4/5]">
        @if ($photo)
            <img
                src="{{ asset($photo) }}"
                alt="{{ $name }}"
                class="h-full w-full object-cover object-top transition-transform duration-700 ease-out-expo group-hover:scale-[1.03]"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-ink via-ink/20 to-transparent"></div>
            <div class="absolute inset-0 ring-1 ring-black/5 ring-inset"></div>
        @else
            <div class="absolute inset-0 bg-gradient-to-br from-mahogany via-espresso to-ink"></div>
            <div class="absolute inset-0 bg-grain opacity-40 mix-blend-overlay"></div>
            <div class="absolute inset-x-0 bottom-0 p-6">
                <span class="font-display text-7xl text-gold/30 leading-none">{{ collect(explode(' ', $name))->map(fn($w) => mb_substr($w,0,1))->implode('') }}</span>
            </div>
        @endif

        <div class="absolute left-4 top-4 inline-flex items-center gap-2 border border-white/15 bg-ink/55 px-3 py-1.5 text-[10px] uppercase tracking-[0.2em] text-bone/85 backdrop-blur-sm sm:left-6 sm:top-6 sm:text-[11px] sm:tracking-[0.22em]">
            <span class="h-1.5 w-1.5 rounded-full bg-gold"></span>
            Direction
        </div>
    </div>

    <div class="pt-5 sm:pt-6">
        <p class="text-eyebrow uppercase text-bronze mb-2">{{ $role }}</p>
        <h3 class="mb-3 font-display text-[1.8rem] text-ink md:text-3xl">{{ $name }}</h3>
        <p class="text-ink/70 text-[15px] leading-relaxed max-w-md">{{ $bio }}</p>
    </div>
</article>
