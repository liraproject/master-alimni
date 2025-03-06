<div
    class="w-full rounded-xl border border-slate-300 transition-colors duration-200 focus-within:!border-primary hover:border-slate-400 dark:border-navy-450 dark:focus-within:!border-accent dark:hover:border-navy-400">
    <label class="block">
        <textarea {{ $attributes->merge(['
                class' => 'w-full p-3 pb-0 bg-transparent resize-none form-textarea placeholder:text-slate-400/70',
                'rows' => 5,
                'placeholder' => 'Write a comment',
            ]) }}
        >{{ $slot }}</textarea>
    </label>
    @isset($footer)
        <div {{ $footer->attributes->merge(['class' => 'p-2']) }}>
            {{ $footer }}
        </div>
    @endisset
</div>
