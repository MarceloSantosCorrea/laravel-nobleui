@if(empty($link))
    <span class="badge {{ $pill ? 'badge-pill': null }} badge-{{ $type }}">{{ $slot }}</span>
@else
    <a href="{{ $link }}" class="badge {{ $pill ? 'badge-pill': null }} badge-{{ $type }}">{{ $slot }}</a>
@endif
