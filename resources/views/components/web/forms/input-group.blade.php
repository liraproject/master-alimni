@props([
    'type' => 'text', // text, number
    'label' => null,
    'prefix' => null,
    'suffix' => null,
    'placeholer' => '',
    'variant' => 'default', // default, merged
    'style' => [
        'rounded' => 'lg', // full, lg, none
    ],
    'props' => [
        'main' => [],
        'wrap' => [],
    ],
])

@php
    if (!(isset($prefix) || isset($prefixText) || isset($prefixButton) || isset($prefixDropdown)) && !(isset($suffix) || isset($suffixText) || isset($suffixButton) || isset($suffixDropdown))) {
        $roundedClass = 'rounded-' . $style['rounded'];
    } elseif ((isset($prefix) || isset($prefixText) || isset($prefixButton) || isset($prefixDropdown)) && (isset($suffix) || isset($suffixText) || isset($suffixButton) || isset($suffixDropdown))) {
        $roundedClass = '';
    } elseif (isset($prefix) || isset($prefixText) || isset($prefixButton) || isset($prefixDropdown)) {
        $roundedClass = 'rounded-r-' . $style['rounded'];
    } elseif (isset($suffix) || isset($suffixText) || isset($suffixButton) || isset($suffixDropdown)) {
        $roundedClass = 'rounded-l-' . $style['rounded'];
    } else {
        $roundedClass = '';
    }

    // style button
    $buttonClass = 'btn font-medium disabled:pointer-events-none disabled:select-none disabled:opacity-60';
    if ($style['rounded'] === 'full') {
        $roundedClassPrefixButton = 'rounded-l-full';
        $roundedClassSuffixButton = 'rounded-r-full';
    } else {
        $roundedClassPrefixButton = 'rounded-r-none';
        $roundedClassSuffixButton = 'rounded-l-none';
    }

@endphp

<div
    @foreach (array_merge(['class' => 'mb-3'], $props['main']) as $key => $val) {{ $key }}="{{ $val }}" @endforeach>
    @isset($label)
        <span {{ is_object($label) ? $label->attributes->merge([]) : '' }}>{{ $label }}</span>
    @endisset

    @if ($variant == 'default')
        <label
            @foreach (array_merge(['class' => 'flex my-1 -space-x-px'], $props['wrap']) as $key => $val) {{ $key }}="{{ $val }}" @endforeach>

            @isset($prefix)
                {{ $prefix }}
            @endisset
            @isset($prefixText)
                <div
                    {{ $prefixText->attributes->merge(['class' => 'flex items-center justify-center rounded-l-' . $style['rounded'] . ' border border-slate-300 px-3.5 font-inter dark:border-navy-450']) }}>
                    <span>{{ $prefixText }}</span>
                </div>
            @endisset
            @isset($prefixButton)
                <button
                    {{ $prefixButton->attributes->merge(['class' => "$buttonClass $roundedClassPrefixButton bg-slate-150 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"]) }}>
                    {{ $prefixButton }}
                </button>
            @endisset
            @isset($prefixDropdown)
                <select
                    {{ $prefixDropdown->attributes->merge(['class' => 'px-3 py-2 bg-white border rounded-l-' . $style['rounded'] . ' form-select border-slate-300 pr-9 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent']) }}>
                    {{ $prefixDropdown }} {{-- kasih <option>...</option> --}}
                </select>
            @endisset

            <input
                {{ $attributes->merge(['class' => "w-full px-3 py-2 bg-transparent border $roundedClass form-input border-slate-300 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"]) }}
                placeholder="{{ $placeholer }}" type="{{ $type }}" />

            @isset($suffix)
                {{ $suffix }}
            @endisset
            @isset($suffixText)
                <div
                    {{ $suffixText->attributes->merge(['class' => 'flex items-center justify-center rounded-r-' . $style['rounded'] . ' border border-slate-300 px-3.5 font-inter dark:border-navy-450']) }}>
                    <span>{{ $suffixText }}</span>
                </div>
            @endisset
            @isset($suffixButton)
                <button
                    {{ $suffixButton->attributes->merge(['class' => "$buttonClass $roundedClassSuffixButton bg-slate-150 text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90"]) }}>
                    {{ $suffixButton }}
                </button>
            @endisset
            @isset($suffixDropdown)
                <select
                    {{ $suffixDropdown->attributes->merge(['class' => 'px-3 py-2 bg-white border rounded-r-' . $style['rounded'] . ' form-select border-slate-300 pr-9 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent']) }}>
                    {{ $suffixDropdown }} {{-- kasih <option>...</option> --}}
                </select>
            @endisset

        </label>
    @elseif ($variant == 'merged')
        {{-- --- ---- on progress ---- --- --}}
        <label class="relative flex">
            <input
                class="w-full py-2 bg-transparent border rounded-' . $style['rounded'] . ' form-input peer border-slate-300 px-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent"
                placeholder="Search here..." type="text" />
            <div
                class="absolute flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 transition-colors duration-200"
                    fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z">
                    </path>
                </svg>
            </div>
            <div
                class="absolute right-0 flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                <div
                    class="border-2 rounded-full spinner size-5 animate-spin border-slate-150 border-r-slate-400 dark:border-navy-500 dark:border-r-navy-300">
                </div>
            </div>
        </label>
        {{-- --- ---- #on progress ---- --- --}}
    @endif

    @isset($textHelper)
        <span {{ is_object($textHelper) ? $textHelper->attributes->merge(['class' => 'text-tiny+ text-slate-400 dark:text-navy-300']) : "class='text-tiny+ text-slate-400 dark:text-navy-300'" }}>{{ $textHelper }}</span>
    @endisset
</div>
