@props([
    'text' => null,
    'type' => 'default', // default, soft-color, glow, outlined,
    'color' => 'primary', // primary, secondary, info, success, warning, error, ghost
    'gradient' => 'from-sky-400 to-blue-600',
    'rounded' => 'lg', // lg, full
    'icon' => null, // object (icon)
])

@php
    $baseClass = 'badge font-medium';
    $roundedClass = 'rounded-' . $rounded;
    $textClass = match ($color) {
        'primary' => 'text-white',
        'secondary' => 'text-slate-600',
        'info' => 'text-white',
        'success' => 'text-white',
        'warning' => 'text-white',
        'error' => 'text-white',
        'ghost' => 'text-' . $color . ' dark:text-' . $color . '-light',
        default => 'text-white',
    };
    $typeClass = match ($type) {
        'default' => 'bg-' . $color . ' ' . $textClass,
        'soft-color' => 'bg-' . $color . '/10 text-' . $color . ' dark:bg-' . $color . '-light/15 dark:text-' . $color . '-light',
        'glow' => 'bg-' . $color . ' ' . $textClass . ' shadow-soft shadow-' . $color . '/50',
        'outlined' => 'border border-' . $color . ' text-' . $color . ' dark:border-' . $color . '-light dark:text-' . $color . '-light',
        default => 'bg-' . $color . ' ' . $textClass,
    };
@endphp

<div {{ $attributes->merge(['class' => "$baseClass $roundedClass $typeClass"]) }}>
    @if($icon)
        <span class="flex items-center space-x-2">
            <span>{{ $icon }}</span>
            @if($text) @if(is_object($text)) <span {{ $text->attribute->merge([]) }}>{{ $text }}</span> @else <span>{{ $text }}</span> @endif @else <span>{{ $slot }}</span> @endif
        </span>
    @else
        @if($text) @if(is_object($text)) <p {{ $text->attribute->merge([]) }}>{{ $text }}</p> @else {{ $text }} @endif @else {{ $slot }} @endif
    @endif
</div>
