@props([
    'route' => '',
    'text' => ''
])

<div>
    @if ($route || $route == '#')
        <li class="flex items-center space-x-2">
            <a {{ $attributes->merge(['class' => 'transition-colors text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent']) }}
                href="{{ route($route) }}">{{ $text }}</a>
            <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </li>
    @else
        <li {{ $attributes->merge([]) }}>{{ $text }}</li>
    @endif
</div>
