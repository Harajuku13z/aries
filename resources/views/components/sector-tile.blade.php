@props(['sector'])

<article {{ $attributes->class(['sector-tile', 'reveal']) }}>
    <p class="tile-kicker">{{ $sector['eyebrow'] }}</p>
    <h3>{{ $sector['name'] }}</h3>
    <p>{{ $sector['description'] }}</p>
</article>
