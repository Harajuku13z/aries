@props(['member'])

<article {{ $attributes->class(['team-card', 'reveal']) }}>
    <div class="team-card__ornament"></div>
    <p class="tile-kicker">Direction</p>
    <h3>{{ $member['name'] }}</h3>
    <p class="team-role">{{ $member['role'] }}</p>
    <p>{{ $member['bio'] }}</p>
</article>
