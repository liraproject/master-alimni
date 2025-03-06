@props([
    'pagination' => false
])

<div {{ $attributes->merge(['class' => 'px-3 mt-3 swiper']) }}
    x-init="$nextTick(() => new Swiper($el, { slidesPerView: 'auto', spaceBetween: 16, pagination: { el: '.swiper-pagination', clickable: true}}))" {{ $attributes->merge() }}
>

    <div class="swiper-wrapper">
        {{ $slot }}
    </div>


    <div class="static mt-1 swiper-pagination @if(!$pagination) hidden @endif" ></div>

</div>
