@props([
    'route' => '#',
    'isRoutes' => [],
    'text' => '',
])

@php
    $activeClass = Route::is($isRoutes) ? 'text-primary dark:text-accent bg-slate-300/25 dark:bg-navy-300/25' : '';
@endphp

<a {{ $attributes->merge(['class' => 'flex flex-col px-4 py-2 rounded-full btn h-10 ' . $activeClass]) }}
    wire:navigate href="{{ $route !== '#' ? route($route) : '#' }}">

    {{ $slot }}

    @if(Route::is($isRoutes))
    <span class="ml-1">{{ $text }}</span>
    @endif
</a>
