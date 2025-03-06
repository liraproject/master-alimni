@props([
    'idCanvas' => null,
    'height' => 40,
])

<div class="fixed inset-0 top-0 left-0 z-[100] overflow-y-auto" x-show="showDrawer" x-data="{ showDrawer: false }"
    x-on:show-action-bottom.window="($event.detail.actionBottomId === '{{ $idCanvas }}') && (showDrawer = true)"
    @keydown.window.escape="showDrawer = false"
    {{ $attributes->merge() }}>

    <div class="h-[{{ 100 - $height }}vh] -z-50" @click="showDrawer = false"></div>

    <div class="min-h-[{{ $height }}vh] inset-0 bg-white z-[101] dark:bg-navy-700 rounded-t-xl transition-all duration-300 relative"
        x-show="showDrawer" x-transition:enter="ease-out duration-300" x-transition:enter-start="translate-y-full"
        x-transition:enter-end="translate-y-0" x-transition:leave="ease-in duration-300"
        x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-full"
        x-transition:enter="transition-all ease-out duration-300"
        x-transition:leave="transition-all ease-in duration-300">

        {{-- Close Button --}}
        <div class="absolute -top-2 -right-2 p-6 z-[200] cursor-pointer" @click="showDrawer = false" x-show="showDrawer"
            x-transition:enter="ease-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
            <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 size-5 hover:text-gray-700" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        {{-- #Close Button --}}

        {{-- Divider --}}
        <div class="flex justify-center w-full py-5 pt-3 cursor-pointer">
            <div class="rounded-full bg-gray-300 h-1.5 w-16"></div>
        </div>
        {{-- #Divider --}}

        @isset($title)
            <div class="px-4 mb-4">
                <h2 {{ $title->attributes->merge(['class' => 'text-lg font-semibold text-black']) }}>{{ $title }}</h2>
            </div>
        @endisset

        <div class="px-4 pb-10">
            {{ $slot }}
        </div>

    </div>

    {{-- Overlay Part --}}
    <div class="fixed inset-0 h-20 transition-opacity duration-200 bg-white top-[100vh] -z-1" x-show="showDrawer"></div>
    {{-- #Overlay Part --}}

    {{-- Overlay Part --}}
    <div class="fixed inset-0 top-0 left-0 transition-opacity duration-200 -z-3 bg-slate-900/60" x-show="showDrawer"
        x-transition:enter="ease-out" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
    {{-- #Overlay Part --}}
</div>
