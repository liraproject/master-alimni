@props([
    'title' => null,
    'width' => '82vw',
])

<div
    {{ $attributes->merge([
        'class' => "relative flex flex-col p-3 overflow-hidden swiper-slide rounded-xl",
        'style' => "width: $width",
    ]) }}>
    @isset($header)
        <div {{ $header->attributes->merge(['class' => 'pb-3']) }}>
            {{ $header }}
        </div>
    @endisset
    @isset($title)
        <div class="font-semibold text-white grow">
            <h2 {{ is_object($title) ? $title->attributes->merge(['class' => 'text-xl']) : 'class=text-xl' }}>
                {{ $title }}</h2>
        </div>
    @endisset
    @isset($body)
        <div {{ $body->attributes->merge() }}>
            {{ $body }}
        </div>
    @endisset
    {{ $slot }}
</div>
