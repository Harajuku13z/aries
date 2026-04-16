@props([
    'item',
    'index' => 1,
])

<article {{ $attributes->class(['expertise-card', 'reveal']) }}>
    <span class="card-index">{{ sprintf('%02d', $index) }}</span>
    <h3>{{ $item['title'] }}</h3>
    <p>{{ $item['description'] }}</p>
</article>
