@props([
    'type' => 'default', // default, outlined, borderless, bordered
    'color' => 'primary', // primary, secondary, info, success, warning, error
    'rounded' => 'lg', // lg, full
    'icon' => true, // can object (icon)
    'closeButton' => true, // can object (icon)
])

@php
    $baseClass = 'alert flex px-4 py-4 sm:px-5';
    $textClass = $type === 'default' ? 'text-white' : 'text-' . $color;
    $bgClass = match ($type) {
        'default' => 'bg-' . $color,
        'outlined' => '',
        'borderless' => 'bg-' . $color . '/10',
        'bordered' => 'bg-' . $color . '/10',
        default => '',
    };
    $colorClass = match ($color) {
        'primary' => $bgClass . ' ' . $textClass . ' dark:bg-accent',
        'secondary' => $bgClass . ' ' . $textClass,
        'info' => $bgClass . ' ' . $textClass,
        'success' => $bgClass . ' ' . $textClass,
        'warning' => $bgClass . ' ' . $textClass,
        'error' => $bgClass . ' ' . $textClass,
        default => 'bg-slate-200 text-slate-600 dark:bg-navy-500 dark:text-navy-100',
    };
    $borderClass =
        $type === 'bordered' || $type === 'outlined'
            ? 'border border-' .
                $color .
                ' text-' .
                $color .
                ' dark:border-' .
                $color .
                ' dark:text-' .
                $color .
                '-light'
            : '';
    $roundedClass = 'rounded-' . $rounded;
    $iconClass = $icon ? 'flex items-center space-x-2' : '';
@endphp

<div x-data="{ isShow: true }" data-alert-root :class="!isShow && 'opacity-0 transition-opacity duration-300'"
    {{ $attributes->merge(['class' => "$baseClass $colorClass $borderClass $roundedClass $iconClass"]) }}>

    @if (!is_object($icon) && $icon == true)
        {{-- <div class="text-white bg-{{ $color }}"> --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        {{-- </div> --}}
    @else
        <div class="text-white bg-{{ $color }}">
            {{ $icon }}
        </div>
    @endif

    <div class="flex-1">
        {{ $slot }}
    </div>

    <div class="px-2">

        @if (!is_object($icon) && $icon == true)
            <button @click="isShow = false; setTimeout(()=>$root.remove(),300)"
                class="p-0 font-medium rounded-full btn size-7 text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        @else
            <div class="text-white bg-{{ $color }}">
                {{ $icon }}
            </div>
        @endif

    </div>

</div>
