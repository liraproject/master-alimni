@props([
    'parent' => '',
    'wrap' => '',
    'label' => '',
    'name' => '',
    'placeholder' => '',
    'type' => 'text',
    'value' => ''
])

<div {{ $parent->attributes->merge() }}>
    <label {{ $wrap->attributes->merge(['class' => 'block']) }}>
        <span {{ $label->attributes->merge() }}>{{ $label }}</span>
        <input
            {{ $attributes->merge(['class' => 'w-full px-4 py-2 bg-transparent border rounded-full form-input border-slate-300 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) }}
            :placeholder="placeholder" :type="type" :value="value" list="data-list" />

        @isset($dataLists)
            <datalist id="data-list">
                {{ $dataLists }} {{-- kasih <option value="Data List"> --}}
            </datalist>
        @endisset
    </label>
    @isset($textHelper)
        <span {{ $textHelper->attributes->merge(['class' => 'text-tiny+ text-slate-400 dark:text-navy-300']) }}>{{ $textHelper }}</span>
    @endisset
    @isset($error)
        <span class="text-tiny+ text-error">{{ $error }}</span>
    @endisset
</div>
