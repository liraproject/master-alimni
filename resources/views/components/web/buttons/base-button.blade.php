@props([
    'text' => null,
    'type' => 'default', // default, outlined, borderless / soft-color, bordered, flat, glow, gradient, outline-gradient,
    'size' => 'sm', // xs, sm, md, lg, xl
    'color' => 'primary', // primary, secondary, info, success, warning, error, ghost
    'gradient' => 'from-sky-400 to-blue-600',
    'rounded' => 'lg', // lg, full
    'disabled' => false,
    'icon' => null, // object (icon)
])

@php
    $baseClass = 'btn font-medium disabled:pointer-events-none disabled:select-none disabled:opacity-60';
    $sizeClass = match ($size) {
        'xs' => ($type != "outline-gradient" ? 'h-6' : '') . ' text-xs',
        'sm' => ($type != "outline-gradient" ? 'h-8' : '') . ' text-xs+',
        'md' => ($type != "outline-gradient" ? 'h-10' : '') . ' text-sm',
        'lg' => ($type != "outline-gradient" ? 'h-12' : '') . ' text-base',
        'xl' => ($type != "outline-gradient" ? 'h-14' : '') . ' text-lg',
        default => 'h-8 text-xs+',
    };
    $roundedClass = 'rounded-' . $rounded;
    $typeClass = match ($type) {
        'default' => 'bg-' . $color . ' text-white hover:bg-' . $color . '-focus focus:bg-' . $color . '-focus active:bg-' . $color . '-focus/90',
        'outlined' => 'border border-' . $color . ' text-' . $color . ' hover:bg-' . $color . ' hover:text-white focus:bg-' . $color . ' focus:text-white active:bg-' . $color . '/90',
        'borderless' => 'bg-' . $color . '/10 text-' . $color . ' hover:bg-' . $color . '/20 focus:bg-' . $color . '/20 active:bg-' . $color . '/25',
        'soft-color' => 'bg-' . $color . '/10 text-' . $color . ' hover:bg-' . $color . '/20 focus:bg-' . $color . '/20 active:bg-' . $color . '/25',
        'bordered' => 'border border-' . $color . '/30 bg-' . $color . '/10 text-' . $color . ' hover:bg-' . $color . '/20 focus:bg-' . $color . '/20 active:bg-' . $color . '/25',
        'flat' => 'text-' . $color . ' hover:bg-' . $color . '/20 focus:bg-' . $color . '/20 active:bg-' . $color . '/25',
        'glow' => 'bg-' . $color . ' text-white hover:bg-' . $color . '-focus hover:shadow-lg hover:shadow-' . $color . '/50 focus:bg-' . $color . '-focus focus:shadow-lg focus:shadow-' . $color . '/50 active:bg-' . $color . '-focus/90',
        'gradient' => 'bg-gradient-to-r ' . $gradient . ' text-white',
        'outline-gradient' => 'bg-gradient-to-r ' . $gradient . ' p-0.5 font-medium',
        default => 'bg-' . $color . ' text-white hover:bg-' . $color . '-focus focus:bg-' . $color . '-focus active:bg-' . $color . '-focus/90',
    };
@endphp

<button {{ $attributes->merge(['class' => "$baseClass $sizeClass $roundedClass $typeClass"]) }} @if($disabled) disabled @endif>
    @if($icon)
        <span class="flex items-center space-x-2">
            @isset($icon)
            <span>{{ $icon }}</span>
            @endisset
            <span @if($type == 'outline-gradient') class="bg-white btn dark:bg-navy-700" @endif>{{ $slot }}</span>
        </span>
    @elseif($type == 'outline-gradient')
    <span @if(is_object($text)) {{ $text->attribute->merge(['class' => 'bg-white btn dark:bg-navy-700']) }} @else class="bg-white btn dark:bg-navy-700" @endif>@if($text) {{ $text }} @else {{ $slot }} @endif</span>
    @else
        @if($text) @if(is_object($text)) <p {{ $text->attribute->merge([]) }}>{{ $text }}</p> @else {{ $text }} @endif @else {{ $slot }} @endif
    @endif
</button>
