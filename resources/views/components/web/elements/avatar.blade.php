@props([
    'variant' => 'square', // circle, square, squircle, soft, gradient-border
    'rounded' => 'lg', // lg, full
    'image' => null, // text or object (image)
    'initial' => null,
    'dot' => 'none', // visible, ping
    'size' => 'md', // xs, sm, md, lg, xl
    'color' => 'primary', // primary, secondary, info, success, warning, error
])

@php
    $baseClass = 'avatar';
    $sizeClass = match ($size) {
        'xs' => 'size-8',
        'sm' => 'size-10',
        'md' => 'size-12',
        'lg' => 'size-16',
        'xl' => 'size-20',
        default => 'size-10',
    };
    $textClassInitial = match ($size) {
        'xs' => 'text-xs+',
        'sm' => '',
        'md' => 'text-base',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
        default => 'text-base',
    };
    $variantClass = match ($variant) {
        'squircle' => 'mask is-squircle',
        'circle' => 'rounded-full',
        'square' => 'rounded-lg',
        'soft' => 'rounded-lg',
        'gradient-border' => 'border border-gradient rounded-lg',
        default => 'rounded-full',
    };
    $dotClass = match ($dot) {
        'visible' => 'absolute right-0 size-4 rounded-full border border-white bg-primary dark:border-navy-700 dark:bg-accent',
        'ping' => 'absolute right-0 size-4 rounded-full border border-white bg-primary dark:border-navy-700 dark:bg-accent animate-ping',
        default => '',
    };
@endphp

<div {{ $attributes->merge(['class' => "$baseClass $sizeClass $variantClass"]) }}>
    @if($image)
        <img src="{{ $image }}" alt="avatar" class="{{ $variantClass }}" />
    @elseif($initial)
        <div class="is-initial {{ $variantClass }} {{ $textClassInitial }} bg-{{ $color }} text-base uppercase text-{{ $initial ? 'white' : $color }} dark:bg-{{ $color }}-light/10 dark:text-{{ $color }}-light">
            {{ $initial }}
        </div>
    @endif
    @if($dot !== 'none')
        <div class="{{ $dotClass }}"></div>
    @endif
</div>
