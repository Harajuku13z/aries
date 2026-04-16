@props([
    'eyebrow' => null,
    'title',
    'text' => null,
    'align' => 'left',
    'light' => false,
])

<div {{ $attributes->class([
    'section-heading',
    'section-heading-center' => $align === 'center',
    'section-heading-light' => $light,
]) }}>
    @if ($eyebrow)
        <p class="section-kicker">{{ $eyebrow }}</p>
    @endif
    <h2 class="section-title">{{ $title }}</h2>
    @if ($text)
        <p class="section-text">{{ $text }}</p>
    @endif
</div>
