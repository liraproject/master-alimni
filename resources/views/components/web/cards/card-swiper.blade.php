@props([
    'title' => null
])

<div {{ $attributes->merge(['class' => 'relative flex flex-col w-[84vw] p-3 overflow-hidden swiper-slide h-48 rounded-xl relative']) }}>
    <div class="grow font-bold text-white">
        <h2 class="font-semibold text-xl">{{ $title }}</h2>
    </div>
    <div class="text-white">
        {{ $slot }}
    </div>
    <div class="absolute top-0 right-0 -m-3 mask is-reuleaux-triangle size-16 bg-white/20">
    </div>
</div>
