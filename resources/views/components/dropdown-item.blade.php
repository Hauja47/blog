@props(['active' => false])

@php
    $class = 'block text-left px-3 text-sm leading-6 hover:bg-blue-300 focus:bg-blue-300 hover:text-white focus:text-white';

    if ($active) $class .= ' bg-blue-500 text-white';
@endphp

<a {{ $attributes(['class' => $class]) }}
>{{ $slot }}</a>
