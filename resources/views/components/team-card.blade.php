@props(['name' => '', 'role' => '', 'bio' => ''])

<article class="reveal group">
    <div class="aspect-[4/5] bg-ink relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-mahogany via-espresso to-ink"></div>
        <div class="absolute inset-0 bg-grain opacity-40 mix-blend-overlay"></div>
        <div class="absolute inset-x-0 bottom-0 p-6">
            <span class="font-display text-7xl text-gold/30 leading-none">{{ collect(explode(' ', $name))->map(fn($w) => mb_substr($w,0,1))->implode('') }}</span>
        </div>
    </div>

    <div class="pt-6">
        <p class="text-eyebrow uppercase text-bronze mb-2">{{ $role }}</p>
        <h3 class="font-display text-2xl md:text-3xl text-ink mb-3">{{ $name }}</h3>
        <p class="text-ink/70 text-[15px] leading-relaxed max-w-md">{{ $bio }}</p>
    </div>
</article>
