@props([
    'variant' => 'square', // circle, square, squircle, soft, gradient-border
    'image' => null, // text or object (image)
    'initial' => null,
    'dot' => 'none', // none, visible, ping
    'size' => 'md', // xs, sm, md, lg, xl
    'color' => 'primary', // primary, secondary, info, success, warning, error
    'action' => null,
])

@php
    $baseClass = 'avatar';
    $sizeClass = match ($size) {
        'xxs' => 'size-7',
        'xs' => 'size-8',
        'sm' => 'size-10',
        'md' => 'size-12',
        'lg' => 'size-16',
        'xl' => 'size-20',
        '2xl' => 'size-24',
        '3xl' => 'size-32',
        default => 'size-10',
    };
    $textClassInitial = match ($size) {
        'xxs' => 'text-xs',
        'xs' => 'text-xs+',
        'sm' => '',
        'md' => 'text-base',
        'lg' => 'text-lg',
        'xl' => 'text-xl',
        '2xl' => 'text-2xl',
        '3xl' => 'text-3xl',
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
        'visible' => 'absolute right-0 size-3.5 rounded-full border border-2 border-white bg-primary dark:border-navy-700 dark:bg-accent',
        'ping' => 'absolute right-0 size-4 rounded-full border border-white bg-primary dark:border-navy-700 dark:bg-accent animate-ping',
        default => '',
    };
    $actionClass = $action != null ? 'relative col-span-12 group sm:col-span-4' : '';
@endphp

<div {{ $attributes->merge(['class' => "$baseClass $sizeClass $variantClass $actionClass"]) }}>

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

    @isset($action)
        <div
            class="absolute top-0 flex items-center justify-center w-full h-full transition-all duration-300 rounded-{{ $variant == 'circle' ? 'full' : 'lg'  }} opacity-0 bg-black/30 group-hover:opacity-100">
            {{ $action }}
        </div>
    @endisset
</div>
