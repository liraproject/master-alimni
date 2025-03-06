@props([
    'icon' => null,
    'route' => null,
])

@if ($route)
    <a wire:navigate href="{{ route($route) }}"
        {{ $attributes->merge(['class' => 'btn p-4 rounded-full relative text-white bg-primary hover:bg-primary-alimni-700 active:bg-primary-alimni-700']) }}>
        @if (is_object($icon))
            {{ $icon }}
        @else
            <i class="{{ $icon }} absolute"></i>
        @endif
    </a>
@else
    <button
        {{ $attributes->merge(['class' => 'btn p-4 rounded-full relative text-white bg-primary hover:bg-primary-alimni-700 active:bg-primary-alimni-700']) }}>
        @if (is_object($icon))
            {{ $icon }}
        @else
            <i class="{{ $icon }} absolute"></i>
        @endif
    </button>
@endif
