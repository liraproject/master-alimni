@props([
    'type' => 'default', // default, soft-color, grow, svg
    'isElastic' => true,
    'size' => 'md', // xs, sm, md, lg, xl
    'color' => 'primary', // primary, secondary, info, success, warning, error
])

@php
    $baseClass = 'spinner animate-spin rounded-full';
    $sizeClass = match ($size) {
        'xs' => 'size-4',
        'sm' => 'size-5',
        'md' => 'size-7',
        'lg' => 'size-10',
        'xl' => 'size-12',
        default => 'size-7',
    };
    $colorClass = match ($type) {
        'default' => 'border-[3px] border-' . $color . ' border-r-transparent dark:border-' . $color . ' dark:border-r-transparent',
        'soft-color' => 'border-[3px] border-' . $color . '/30 border-r-' . $color . ' dark:border-' . $color . '/30 dark:border-r-' . $color,
        'grow' => 'is-grow relative',
        'svg' => 'text-' . $color . ' dark:text-' . $color,
        default => 'border-[3px] border-' . $color . ' border-r-transparent dark:border-' . $color . ' dark:border-r-transparent',
    };
    $elasticClass = $isElastic ? 'is-elastic' : '';
@endphp

<div {{ $attributes->merge(['class' => "$baseClass $sizeClass $colorClass $elasticClass"]) }}>
    @if ($type === 'grow')
        <span class="absolute inline-block h-full w-full rounded-full bg-{{ $color }} opacity-75 dark:bg-{{ $color }}"></span>
        <span class="absolute inline-block h-full w-full rounded-full bg-{{ $color }} opacity-75 dark:bg-{{ $color }}"></span>
    @elseif ($type === 'svg')
        <svg xmlns="http://www.w3.org/2000/svg" class="w-full h-full" fill="none" viewBox="0 0 28 28">
            <path fill="currentColor" fill-rule="evenodd" d="M28 14c0 7.732-6.268 14-14 14S0 21.732 0 14 6.268 0 14 0s14 6.268 14 14zm-2.764.005c0 6.185-5.014 11.2-11.2 11.2-6.185 0-11.2-5.015-11.2-11.2 0-6.186 5.015-11.2 11.2-11.2 6.186 0 11.2 5.014 11.2 11.2zM8.4 16.8a2.8 2.8 0 100-5.6 2.8 2.8 0 000 5.6z" clip-rule="evenodd" />
        </svg>
    @endif
</div>
