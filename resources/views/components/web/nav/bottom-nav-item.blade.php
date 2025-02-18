@props([
    'route' => '#',
    'isRoutes' => [],
    'text' => '',
])

<a {{ $attributes->merge(['class' => 'px-4 py-0 rounded-full btn h-9 hover:bg-slate-300/20 hover:text-primary focus:bg-slate-300/20 focus:text-primary active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:hover:text-accent dark:focus:bg-navy-300/20 dark:focus:text-accent dark:active:bg-navy-300/25']) }}
    wire:navigate href="{{ $route !== '#' ? route($route) : '#' }}"
    :class="{{ Route::is($isRoutes) }} && 'text-primary dark:text-accent'">

    {{ $slot }}

    @if(Route::is($isRoutes))
    <span class="ml-1">{{ $text }}</span>
    @endif
</a>
