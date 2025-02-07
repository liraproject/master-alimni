@props([
    'parent' => '',
    'label' => '',
    'name' => '',
    'placeholder' => '',
    'value' => '',
    'color' => 'default', // default, primary, secondary, info, success, warning, danger
    'size' => '5', // 3, 3.5, 4, 5, 6
    'isChecked' => false
])

<label {{ $parent->attributes->merge(['class' => 'inline-flex items-center space-x-2']) }}>
    <input
        {{ $attibutes->merge(['class' => 'w-10 h-5 rounded-full form-switch bg-slate-300 before:rounded-full before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-navy-400 dark:checked:before:bg-white']) }}
        type="checkbox"
    />
    <span {{ $label->attributes->merge([]) }}>{{ $label }}</span>
</label>
