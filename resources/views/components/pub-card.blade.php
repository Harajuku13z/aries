@props(['post'])

<article {{ $attributes->class(['pub-card', 'reveal']) }}>
    <p class="pub-category">{{ $post['category'] }}</p>
    <h3>{{ $post['title'] }}</h3>
    <p>{{ $post['excerpt'] }}</p>
    <span class="pub-link">Lire la note</span>
</article>
