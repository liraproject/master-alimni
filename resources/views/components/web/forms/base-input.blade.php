@props([
    'type' => 'text',
    'name' => '',
    'value' => '',
    'label' => null,
    'placeholder' => '',
    'textHelper' => null,
    'disabled' => false,
    'error' => null,
    'success' => null,
    'variant' => 'outline', // filled, outline
    'style' => [],
    'props' => [
        'main' => [],
        'wrap' => []
    ]
])

@php
    $style = array_merge([
        'rounded' => 'lg', // full, lg, none
        'border' => 'slate',
    ], $style);

    $inputClass = 'form-input w-full rounded-' . $style['rounded'] . ' px-3 py-2 placeholder:text-slate-400/70';

    if ($error) {
        $inputClass .= ' border border-error bg-transparent';
    } elseif ($success) {
        $inputClass .= ' border border-success bg-transparent';
    } elseif ($disabled) {
        $inputClass .= ' border border-slate-300 bg-transparent hover:border-slate-400 focus:border-primary disabled:pointer-events-none disabled:select-none disabled:border-none disabled:bg-zinc-100 dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent dark:disabled:bg-navy-600';
    } elseif ($variant === 'filled') {
        $inputClass .= ' bg-slate-150 ring-primary/50 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900';
    } else {
        $inputClass .= ' border border-slate-300 bg-transparent hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent';
    }
@endphp

<div @foreach (array_merge(['class' => 'mb-3'], $props['main']) as $key => $val) {{ $key }}="{{ $val }}" @endforeach>
    <label @foreach (array_merge(['class' => 'block'], $props['wrap']) as $key => $val) {{ $key }}="{{ $val }}" @endforeach>

        @isset($label)
        <span {{ is_object($label) ? $label->attributes->merge([]) : '' }}>{{ $label }}</span>
        @endisset

        <input
            {{ $attributes->merge(['class' => "mt-1 $inputClass"]) }}
            @if ($disabled) disabled @endif
            placeholder="{{ $placeholder }}"
            value="{{ $value }}"
            type="{{ $type }}"
            @isset($dataList) list="data-list-{{ $name }}" @endisset
        />

        @isset($dataList)
            <datalist id="data-list-{{ $name }}">
                {{ $dataList }} {{-- kasih <option value="Data List"> --}}
            </datalist>
        @endisset

    </label>

    @isset($textHelper)
        <span {{ is_object($textHelper) ? $textHelper->attributes->merge(['class' => 'text-tiny+ text-slate-400 dark:text-navy-300']) : "class='text-tiny+ text-slate-400 dark:text-navy-300'" }}>{{ $textHelper }}</span>
    @endisset

    @isset($success)
        <span @if(is_object($success)) {{ $success->attributes->merge(['class' => 'text-tiny+ text-success']) }} @else class="text-tiny+ text-success" @endif>{{ $success }}</span>
    @endisset

    @isset($error)
        <span @if(is_object($error)) {{ $error->attributes->merge(['class' => 'text-tiny+ text-error']) }} @else class="text-tiny+ text-error" @endif>{{ $error }}</span>
    @endisset
</div>
