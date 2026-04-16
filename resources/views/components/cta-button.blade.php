@props([
    'href'    => '#',
    'variant' => 'primary', // primary | ghost-light | ghost-dark
])

@php
    $base = 'group inline-flex items-center gap-2 px-6 py-3.5 text-sm tracking-wide transition-colors duration-500 ease-out-expo';
    $styles = match ($variant) {
        'ghost-light' => 'border border-bone/40 text-bone hover:bg-bone hover:text-ink',
        'ghost-dark'  => 'border border-ink/30 text-ink hover:bg-ink hover:text-bone',
        default       => 'bg-gold text-ink hover:bg-bone',
    };
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => "$base $styles"]) }}>
    {{ $slot }}
    <svg class="w-4 h-4 transition-transform duration-500 ease-out-expo group-hover:translate-x-1" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 8h12M9 3l5 5-5 5"/></svg>
</a>
