@props([
    'label' => '',
    'name' => '',
    'checked' => false,
    'color' => 'default', // default, primary, secondary, info, success, warning, danger
    'size' => '5', // 3, 3.5, 4, 5, 6
    'position' => 'right', // left, right
])
{{-- class tambahan : rounded-full, is-outline --}}
@php
    $baseClass = 'form-checkbox size-' . $size . ' border-slate-400/70 dark:border-navy-400';
    $colorClass = match ($color) {
        'default' => 'checked:bg-slate-500 checked:border-slate-500 hover:border-slate-500 focus:border-slate-500',
        'primary' => 'checked:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:checked:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent',
        'secondary' => 'checked:bg-secondary checked:border-secondary hover:border-secondary focus:border-secondary dark:checked:bg-secondary-light dark:checked:border-secondary-light dark:hover:border-secondary-light dark:focus:border-secondary-light',
        'info' => 'checked:bg-info checked:border-info hover:border-info focus:border-info',
        'success' => 'checked:bg-success checked:border-success hover:border-success focus:border-success',
        'warning' => 'checked:bg-warning checked:border-warning hover:border-warning focus:border-warning',
        'danger' => 'checked:bg-error checked:border-error hover:border-error focus:border-error',
        default => '',
    };
@endphp

<label class='inline-flex items-center space-x-2'>
    @if ($position == 'left')
        <p {{ is_object($label) ? $label->attributes->merge([]) : '' }}>{{ $label }}</p>
    @endif
    <input type="checkbox"
        {{ $attributes->merge(['class' => 'is-basic rounded ' . $baseClass . ' ' . $colorClass]) }}
        name="{{ $name }}" {{ $checked ? 'checked' : '' }}
    />
    @if ($position == 'right')
        <p {{ is_object($label) ? $label->attributes->merge([]) : '' }}>{{ $label }}</p>
    @endif
</label>
