@props([
    'text' => null,
    'direction' => 'horizontal',
])

@if ($direction == 'horizontal')
    @if ($text != null)
        <div class="flex items-center my-4 space-x-3">
            <div class="flex-1 h-px bg-slate-200 dark:bg-navy-500"></div>
            <p>{{ $text }}</p>
            <div class="flex-1 h-px bg-slate-200 dark:bg-navy-500"></div>
        </div>
    @else
        <div class="h-px my-4 bg-slate-200 dark:bg-navy-500"></div>
    @endif
@else
    @if ($text != null)
        <div class="flex flex-col items-center my-4 space-y-3">
            <div class="w-px h-px bg-slate-200 dark:bg-navy-500"></div>
            <p>{{ $text }}</p>
            <div class="w-px h-px bg-slate-200 dark:bg-navy-500"></div>
        </div>
    @else
        <div class="w-px mx-4 my-1 bg-slate-200 dark:bg-navy-500"></div>
    @endif
@endif
