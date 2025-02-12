@props([
    'type' => 'wave', // wave, pulse
    'size' => 'md', // xs, sm, md, lg, xl
    'shape' => 'rect', // rect, circle
    'color' => 'slate-150', // slate-150, navy-500
])

@php
    $baseClass = 'skeleton';
    $typeClass = $type === 'pulse' ? 'animate-pulse' : 'animate-wave';
    $sizeClass = match ($size) {
        'xs' => 'size-4',
        'sm' => 'size-5',
        'md' => 'size-7',
        'lg' => 'size-10',
        'xl' => 'size-12',
        default => 'size-7',
    };
    $shapeClass = $shape === 'circle' ? 'rounded-full' : 'rounded';
    $colorClass = 'bg-' . $color . ' dark:bg-' . $color;
@endphp

<div {{ $attributes->merge(['class' => "$baseClass $typeClass $sizeClass $shapeClass $colorClass"]) }}>
    {{ $slot }}
</div>
