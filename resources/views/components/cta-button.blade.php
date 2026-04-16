@props([
    'href' => '#',
    'variant' => 'gold',
])

<a href="{{ $href }}" {{ $attributes->class(['button', 'button-outline' => $variant === 'outline', 'button-gold' => $variant === 'gold']) }}>
    {{ $slot }}
</a>
