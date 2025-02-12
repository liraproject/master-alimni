@props([
    'type' => 'default', // default, soft-color, glow, outlined,
    'color' => 'primary', // primary, secondary, info, success, warning, error, ghost
    'gradient' => 'from-sky-400 to-blue-600',
    'rounded' => 'lg', // lg, full
    'icon' => null, // object (icon)
])

@php
    $baseClass = 'badge font-medium';
    $roundedClass = 'rounded-' . $rounded;
    $typeClass = match ($type) {
        'default' => 'bg-' . $color . ' text-white dark:bg-accent',
        'soft-color' => 'bg-' . $color . '/10 text-' . $color . ' dark:bg-' . $color . '-light/15 dark:text-' . $color . '-light',
        'glow' => 'bg-' . $color . ' text-white shadow-soft shadow-' . $color . '/50 dark:bg-accent dark:shadow-accent/50',
        'outlined' => 'border border-' . $color . ' text-' . $color . ' dark:border-' . $color . '-light dark:text-' . $color . '-light',
        default => 'bg-' . $color . ' text-white dark:bg-accent',
    };
@endphp

<div {{ $attributes->merge(['class' => "$baseClass $roundedClass $typeClass"]) }}>
    @if($icon)
        <span class="flex items-center space-x-2">
            <span>{{ $icon }}</span>
            <span>{{ $slot }}</span>
        </span>
    @else
        {{ $slot }}
    @endif
</div>
