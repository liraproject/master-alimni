@props([
    'type' => 'default', // default, soft-color, active, indeterminate
    'size' => 'md', // sm, md, lg, xl
    'color' => 'primary', // primary, secondary, info, success, warning, error
    'value' => '50', // progress value in percentage
])

@php
    $baseClass = 'progress';
    $sizeClass = match ($size) {
        'sm' => 'h-1',
        'md' => 'h-2',
        'lg' => 'h-3',
        'xl' => 'h-4',
        default => 'h-2',
    };
    $bgClass = $type == 'soft-color' ? 'bg-' . $color . '/15 dark:bg-' . $color . '/25' : 'bg-slate-150 dark:bg-navy-500';
    $progressClass = match ($type) {
        'default' => 'bg-' . $color . ' dark:bg-' . $color,
        'soft-color' => 'bg-' . $color . ' dark:bg-' . $color,
        'active' => 'is-active relative overflow-hidden bg-' . $color . ' dark:bg-' . $color,
        'indeterminate' => 'is-indeterminate relative overflow-hidden bg-' . $color . ' dark:bg-' . $color,
        default => 'bg-' . $color . ' dark:bg-' . $color,
    };
@endphp

<div {{ $attributes->merge(['class' => "$baseClass $sizeClass $bgClass"]) }}>
    <div x-data="{ value: {{ $value }} }" :style="{ width: value + '%' }" class="rounded-full {{ $progressClass }}"></div>
</div>
