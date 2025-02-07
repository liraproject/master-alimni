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
{{-- class tambahan : rounded-full, rounded-md, is-outline  --}}

<label {{ $parent->attributes->merge(['class' => 'inline-flex items-center space-x-2']) }}>
    <input type="radio"
        {{ $attibutes->merge(['class' => 'is-basic rounded']) }}
        :class="
            color == 'default' ? 'form-radio size-' . $size . ' border-slate-400/70 checked:bg-slate-500 checked:border-slate-500 hover:border-slate-500 focus:border-slate-500  disabled:pointer-events-none disabled:opacity-60 disabled:border-slate-300  dark:border-navy-400 dark:checked:bg-navy-400 dark:disabled:border-navy-450'
            : color == 'primary' ? 'form-radio size-' . $size . ' border-slate-400/70 checked:bg-primary checked:border-primary hover:border-primary focus:border-primary  disabled:pointer-events-none disabled:opacity-60 disabled:border-slate-300  dark:border-navy-400 dark:checked:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent'
            : color == 'secondary' ? 'form-radio size-' . $size . ' border-slate-400/70 checked:bg-secondary checked:border-secondary hover:border-secondary focus:border-secondary  disabled:pointer-events-none disabled:opacity-60 disabled:border-slate-300  dark:border-navy-400 dark:checked:bg-secondary-light dark:checked:border-secondary-light dark:hover:border-secondary-light dark:focus:border-secondary-light'
            : color == 'info' ? 'form-radio size-' . $size . ' border-slate-400/70 checked:bg-info checked:!border-info hover:!border-info focus:!border-info  disabled:pointer-events-none disabled:opacity-60 disabled:border-slate-300  dark:border-navy-400'
            : color == 'success' ? 'form-radio size-' . $size . ' border-slate-400/70 checked:bg-success checked:!border-success hover:!border-success focus:!border-success  disabled:pointer-events-none disabled:opacity-60 disabled:border-slate-300  dark:border-navy-400'
            : color == 'warning' ? 'form-radio size-' . $size . ' border-slate-400/70 checked:bg-warning checked:!border-warning hover:!border-warning focus:!border-warning  disabled:pointer-events-none disabled:opacity-60 disabled:border-slate-300  dark:border-navy-400'
            : color == 'danger' ? 'form-radio size-' . $size . ' border-slate-400/70 checked:bg-error checked:!border-error hover:!border-error focus:!border-error  disabled:pointer-events-none disabled:opacity-60 disabled:border-slate-300  dark:border-navy-400'
        "
        :name="name" :checked="isChecked"
    />
    <p {{ $label->attributes->merge([]) }}>{{ $label }}</p>
</label>
