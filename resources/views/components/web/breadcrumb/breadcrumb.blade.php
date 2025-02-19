
<div {{ $attributes->merge(['class' => 'flex items-center py-5 space-x-4 lg:py-6']) }} >
    <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
        {{ $title }}
    </h2>
    @isset($slot)
    <div class="hidden h-full py-1 sm:flex">
        <div class="w-px h-full bg-slate-300 dark:bg-navy-600"></div>
    </div>
    @endisset
    <ul class="flex-wrap items-center hidden space-x-2 sm:flex">
        {{ $slot }}
    </ul>
</div>
