<div {{ $attributes->merge(['class' => 'px-4 py-4 card sm:px-5']) }}>
    @isset($title)
    <div>
        <h2 @if(is_object($title))
            {{ $title->attributes->merge(['class' => 'text-lg font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100']) }}
            @else
            class="text-lg font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
            @endif
        >
            {{ $title }}
        </h2>
        @isset($subTitle)
            <p  @if(is_object($title))
                {{ $subTitle->attributes->merge(['class' => '']) }}
                @else
                class=""
                @endif
            >
                {{ $subTitle }}
            </p>
        @endisset
    </div>
    @endisset

    @isset($header)
    <div {{ $header->attributes->merge(['class' => 'flex items-center justify-between h-8 my-3']) }}>
        {{ $header }}
        @isset($subHeader)
        <div {{ $subHeader->attributes->merge(['class' => 'd-flex align-items-center mt-50']) }}>
            {{ $subHeader }}
        </div>
        @endisset
    </div>
    @endisset

    @isset($body)
    <div {{ $body->attributes->merge(['class' => 'pt-2']) }}>
        {{ $body }}
    </div>
    @endisset

    {{ $slot }}

</div>
