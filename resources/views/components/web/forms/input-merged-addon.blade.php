{{-- @props(['propName', 'placeholder', 'type' => 'text', 'isLoading' => false, 'prefixIcon' => ''])

<div class="space-y-4">
    <label class="relative flex">
        <input
            {{ $attributes->merge(['class' => 'w-full px-3 py-2 bg-transparent border rounded-lg form-input peer border-slate-300 pl-9 placeholder:text-slate-400/70 hover:border-slate-400 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent']) }}
            :placeholder="placeholder" :type="type" />
        <div
            class="absolute flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
            {!! $prefixIcon !!}
        </div>
        @if ($isLoading == true)
        <div
            class="absolute right-0 flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
            <div
                class="border-2 rounded-full spinner size-5 animate-spin border-slate-150 border-r-slate-400 dark:border-navy-500 dark:border-r-navy-300">
            </div>
        </div>
        @endif
    </label>
</div> --}}
