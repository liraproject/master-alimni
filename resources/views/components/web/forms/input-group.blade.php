@props(['label', 'prefix', 'suffix', 'placeholer' => ''])
<div>
    <span {{ $label->attributes->merge([]) }}>{{ $label }}</span>
    <label class="flex mt-1 -space-x-px">
        @isset($prefix)
            <div
                class="flex items-center justify-center rounded-l-lg border border-slate-300 px-3.5 font-inter dark:border-navy-450">
                <span>{{ $prefix }}</span>
            </div>
        @endisset
        @isset($prefixDropdown)
            <select
                class="px-3 py-2 bg-white border rounded-l-full form-select border-slate-300 pr-9 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:bg-navy-700 dark:hover:border-navy-400 dark:focus:border-accent">
                {{ $prefixDropdown }} {{-- kasih <option>...</option> --}}
            </select>
        @endisset
        <input
            {{ $attributes->merge(['class' => 'w-full px-3 py-2 bg-transparent border form-input border-slate-300 placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) }}
            :placeholder="placeholer" type="text" />
        @isset($suffix)
            <div
                class="flex items-center justify-center rounded-r-lg border border-slate-300 px-3.5 font-inter dark:border-navy-450">
                <span>{{ $suffix }}</span>
            </div>
        @endisset
    </label>
</div>
