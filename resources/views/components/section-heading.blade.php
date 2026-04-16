@props([
    'eyebrow' => null,
    'title'   => '',
    'align'   => 'left', // left | center
    'dark'    => false,
])

@php
    $alignCls = $align === 'center' ? 'text-center items-center' : 'text-left';
    $eyebrowCls = $dark ? 'text-gold/80' : 'text-bronze';
    $titleCls = $dark ? 'text-bone' : 'text-ink';
@endphp

<div {{ $attributes->merge(['class' => "reveal flex flex-col gap-4 md:gap-5 max-w-3xl {$alignCls}"]) }}>
    @if ($eyebrow)
        <span class="text-eyebrow uppercase {{ $eyebrowCls }}">{{ $eyebrow }}</span>
    @endif
    <h2 class="font-display text-[clamp(1.9rem,6vw,3.7rem)] leading-[1.04] {{ $titleCls }}">
        {!! $title !!}
    </h2>
    @isset($slot)
        <div class="text-[15px] leading-relaxed md:text-lg {{ $dark ? 'text-ivory/75' : 'text-ink/70' }} max-w-reading">{{ $slot }}</div>
    @endisset
</div>
