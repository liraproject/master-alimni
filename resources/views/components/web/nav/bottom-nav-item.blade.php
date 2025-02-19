@props([
    'route' => '#',
    'isRoutes' => [],
    'text' => '',
])

@php
    $activeClass = Route::is($isRoutes) ? 'text-primary dark:text-accent bg-slate-300/25 dark:bg-navy-300/25' : '';
@endphp

<a {{ $attributes->merge(['class' => 'flex flex-col px-4 py-0 rounded-full btn h-9 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent ' . $activeClass]) }}
    wire:navigate href="{{ $route !== '#' ? route($route) : '#' }}">

    {{ $slot }}

    @if(Route::is($isRoutes))
    <span class="ml-1">{{ $text }}</span>
    @endif
</a>
