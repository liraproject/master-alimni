<div>

    {{-- Welcome Sentence --}}
    <x-slot:headerPage class="flex items-center justify-between px-3 mt-5">
        <div>
            <h5 class="text-xs+ font-normal tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                Assalaamu'alaikum,
            </h5>
            <h2 class="text-xl font-semibold tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                {{ $user->fullname }}
            </h2>
        </div>
        <div class="-mr-1.5 flex items-center space-x-2">
            <!-- Notification-->
            <x-mobile.layouts.partials.notifications.base-notification />

            <!-- Profile -->
            <button @click="$dispatch('show-profile-drawer')"
                class="flex items-center justify-center w-full p-2 transition-transform duration-1000 ease-in-out rounded-lg hover:bg-primary/20 dark:hover:bg-navy-300/20">
                <x-web.elements.avatar image="{{ $user->photo ? asset('profil/photo/' . $user->photo) : null }}"
                    initial="{{ substr($user->fullname, 0, 2) }}" variant="circle" color="primary" rounded="full"
                    size="sm" dot="visible" />
            </button>
        </div>
    </x-slot:headerPage>
    {{-- #Welcome Sentence --}}

    {{-- Swipe Card Section --}}
    <div class="mt-3">
        <div class="px-3 mt-3 swiper" x-init="$nextTick(() => new Swiper($el, { slidesPerView: 'auto', spaceBetween: 16 }))">
            <div class="swiper-wrapper">
                <x-web.cards.card-swiper title="Tahsin" class="bg-gradient-to-bl from-amber-500 to-primary-alimni-600">
                    <div class="flex items-center justify-between">
                        <p class="text-xl font-semibold tracking-wide">
                            Batch 1
                        </p>
                        <div>
                            <p class="text-xs+ font-semibold tracking-wide">
                                60 Total Pertemuan
                            </p>
                            <p class="mt-1 text-xs font-medium text-white/50">
                                30 pertemuan diikuti
                            </p>
                        </div>
                    </div>
                </x-web.cards.card-swiper>
                <x-web.cards.card-swiper title="Tahfidz" class="bg-gradient-to-bl from-amber-500 to-primary-alimni-600">
                    <div class="flex items-center justify-between">
                        <p class="text-xl font-semibold tracking-wide">
                            Batch 1
                        </p>
                        <div>
                            <p class="text-xs+ font-semibold tracking-wide">
                                60 Total Pertemuan
                            </p>
                            <p class="mt-1 text-xs font-medium text-white/50">
                                30 pertemuan diikuti
                            </p>
                        </div>
                    </div>
                    <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full z-2 bg-black/50">
                        <div class="flex flex-col gap-1">
                            <p class="text-xs text-white/80">Belum terdaftar di program ini.</p>
                            <x-web.buttons.base-button text="Daftar sekarang!" />
                        </div>
                    </div>
                </x-web.cards.card-swiper>
                <x-web.cards.card-swiper title="Bahasa Arab"
                    class="bg-gradient-to-bl from-amber-500 to-primary-alimni-600">
                    <div class="flex items-center justify-between">
                        <p class="text-xl font-semibold tracking-wide">
                            Batch 1
                        </p>
                        <div>
                            <p class="text-xs+ font-semibold tracking-wide">
                                60 Total Pertemuan
                            </p>
                            <p class="mt-1 text-xs font-medium text-white/50">
                                30 pertemuan diikuti
                            </p>
                        </div>
                    </div>
                    <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full z-2 bg-black/50">
                        <div class="flex flex-col gap-1">
                            <p class="text-xs text-white/80">Belum terdaftar di program ini.</p>
                            <x-web.buttons.base-button text="Daftar sekarang!" />
                        </div>
                    </div>
                </x-web.cards.card-swiper>
            </div>
        </div>
    </div>
    {{-- #Swipe Card Section --}}

    {{-- Quick Action Section --}}
    <div class="px-3 mt-4">
        <h2 class="text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            Akses Cepat
        </h2>
        <div class="flex justify-between mt-3">
            @foreach ($this->quickMenu as $menu)
                <a href="{{ route($menu['route']) }}" class="w-12 text-center">
                    <div class="avatar size-10">
                        <div class="text-white is-initial mask is-squircle bg-primary-alimni-500">
                            {!! $menu['icon'] !!}
                        </div>
                    </div>
                    <p
                        class="mt-1.5 overflow-hidden text-ellipsis whitespace-nowrap text-xs text-slate-700 dark:text-navy-100">
                        {{ $menu['name'] }}
                    </p>
                </a>
            @endforeach
        </div>
    </div>
    {{-- #Quick Action Section --}}

    {{-- History Lesson Section --}}
    <div class="mt-4">
        <h2 class="px-3 text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            Riwayat Pembelajaran
        </h2>
        <div class="px-2 mt-3 space-y-3">
            @foreach ($quickMenu as $item)
                <div class="flex justify-between space-x-2 rounded-lg bg-slate-100 p-2.5 dark:bg-navy-700">
                    <div class="flex flex-col justify-between flex-1">
                        <div class="flex justify-between mb-6">
                            <div class="line-clamp-2">
                                <a href="#"
                                    class="font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">Tahsin
                                    (Reguler)
                                </a>
                            </div>
                            <p class="text-tiny+ text-slate-400">pertemuan ke-{{ 8 - $loop->iteration }}</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <x-web.elements.avatar initial="MK" size="xxs" />
                                <div>
                                    <p class="text-xs font-medium line-clamp-1">
                                        Abdullah
                                    </p>
                                    <p class="text-tiny+ text-slate-400 line-clamp-1 dark:text-navy-300">
                                        30 feb 20xx
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <x-web.buttons.base-button
                                    @click="$dispatch('show-action-bottom', { actionBottomId: 'review' })"
                                    type="ghost" class="!size-7">
                                    <i class="my-auto fa-regular fa-star size-7"></i>
                                </x-web.buttons.base-button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- <div class="fixed top-0 right-0 z-10 w-screen h-screen bg-black/50"></div>
         <div class="fixed bottom-0 left-0 w-full bg-white shadow-lg z-[11]">
            <div class="flex justify-around p-4">
                <!-- Action Button 1 -->
                <button class="flex flex-col items-center text-gray-700 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-xs">Action 1</span>
                </button>

                <!-- Action Button 2 -->
                <button class="flex flex-col items-center text-gray-700 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8" />
                    </svg>
                    <span class="text-xs">Action 2</span>
                </button>

                <!-- Action Button 3 -->
                <button class="flex flex-col items-center text-gray-700 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                    <span class="text-xs">Action 3</span>
                </button>

                <!-- Action Button 4 -->
                <button class="flex flex-col items-center text-gray-700 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span class="text-xs">Action 4</span>
                </button>
            </div>
        </div> --}}

    </div>

    {{-- #History Lesson Section --}}

    {{-- Section --}}
    <div class="mt-4">
        <div class="grid grid-cols-2 gap-3 px-3">
            <div class="rounded-lg bg-slate-150 px-2.5 py-2 dark:bg-navy-600">
                <div class="flex items-center justify-between space-x-1">
                    <p>
                        <span class="text-lg font-medium text-slate-700 dark:text-navy-100">11.3</span>
                        <span class="text-xs">hr</span>
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-secondary dark:text-secondary-light"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <p class="mt-0.5 text-tiny+ uppercase">Working Hours</p>

                <div class="progress mt-3 h-1.5 bg-secondary/15 dark:bg-secondary-light/25">
                    <div
                        class="relative w-8/12 overflow-hidden rounded-full is-active bg-secondary dark:bg-secondary-light">
                    </div>
                </div>

                <div class="mt-1.5 flex items-center justify-between text-xs text-slate-400 dark:text-navy-300">
                    <button
                        class="p-0 -ml-1 rounded-full btn size-6 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                    <span> 71%</span>
                </div>
            </div>
            <div class="rounded-lg bg-slate-150 px-2.5 py-2 dark:bg-navy-600">
                <div class="flex items-center justify-between space-x-1">
                    <p>
                        <span class="text-lg font-medium text-slate-700 dark:text-navy-100">13</span>
                        <span class="text-xs">/22</span>
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5 text-success" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                </div>

                <p class="mt-0.5 text-tiny+ uppercase">Completed tasks</p>

                <div class="progress mt-3 h-1.5 bg-success/15 dark:bg-success/25">
                    <div class="relative w-6/12 overflow-hidden rounded-full bg-success"></div>
                </div>

                <div class="mt-1.5 flex items-center justify-between text-xs text-slate-400 dark:text-navy-300">
                    <button
                        class="p-0 -ml-1 rounded-full btn size-6 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                    <span> 49%</span>
                </div>
            </div>
        </div>
    </div>
    {{-- #Section --}}

    {{-- Section --}}
    <div class="mt-4">
        <h2 class="px-3 text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            Stock Market
        </h2>
        <div class="grid grid-cols-2 gap-3 px-3 mt-3">
            <div class="rounded-lg bg-slate-100 p-2.5 dark:bg-navy-600">
                <div class="flex items-center space-x-2">
                    <img class="size-10" src="{{ asset('images/100x100.png') }}" alt="image" />
                    <div>
                        <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                            BTC
                        </h2>
                        <p class="text-xs">Bitcoin</p>
                    </div>
                </div>

                <div class="ax-transparent-gridline">
                    <div x-init="$nextTick(() => {
                        $el._x_chart = new ApexCharts($el, pages.charts.stockMarket1);
                        $el._x_chart.render()
                    });"></div>
                </div>

                <div class="flex items-center justify-between mt-2">
                    <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                        60.33$
                    </p>
                    <p class="text-xs font-medium tracking-wide text-success">
                        +3.3%
                    </p>
                </div>
            </div>

            <div class="rounded-lg bg-slate-100 p-2.5 dark:bg-navy-600">
                <div class="flex items-center space-x-2">
                    <img class="size-10" src="{{ asset('images/100x100.png') }}" alt="image" />
                    <div>
                        <h2 class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                            SOL
                        </h2>
                        <p class="text-xs">Solana</p>
                    </div>
                </div>

                <div class="ax-transparent-gridline">
                    <div x-init="$nextTick(() => {
                        $el._x_chart = new ApexCharts($el, pages.charts.stockMarket2);
                        $el._x_chart.render()
                    });"></div>
                </div>

                <div class="flex items-center justify-between mt-2">
                    <p class="font-medium tracking-wide text-slate-700 dark:text-navy-100">
                        20.56$
                    </p>
                    <p class="text-xs font-medium tracking-wide text-success">
                        +4.11%
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- #Section --}}

    {{-- Section --}}
    <div class="px-3 mt-3">
        <h2 class="text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            Settings
        </h2>
        <div class="flex flex-col mt-2 space-y-2">
            <label class="inline-flex items-center space-x-2">
                <input x-model="$store.global.isDarkModeEnabled"
                    class="w-10 h-5 rounded-lg form-switch bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-navy-400 dark:checked:before:bg-white"
                    type="checkbox" />
                <span>Dark Mode</span>
            </label>
            <label class="inline-flex items-center space-x-2">
                <input x-model="$store.global.isMonochromeModeEnabled"
                    class="w-10 h-5 rounded-lg form-switch bg-slate-300 before:rounded-md before:bg-slate-50 checked:bg-slate-500 checked:before:bg-white dark:bg-navy-900 dark:before:bg-navy-300 dark:checked:bg-navy-400 dark:checked:before:bg-white"
                    type="checkbox" />
                <span>Monochrome Mode</span>
            </label>
        </div>
    </div>
    {{-- #Section --}}

    {{-- Section --}}
    <div class="px-3 mt-3">
        <div class="p-3 rounded-lg bg-slate-100 dark:bg-navy-600">
            <div class="flex items-center justify-between">
                <p>
                    <span class="font-medium text-slate-600 dark:text-navy-100">35GB</span>
                    of 1TB
                </p>
                <a href="#"
                    class="text-xs+ font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70">Upgrade</a>
            </div>

            <div class="h-2 mt-2 progress bg-slate-150 dark:bg-navy-500">
                <div class="w-7/12 rounded-full bg-info"></div>
            </div>
        </div>
    </div>
    {{-- #Section --}}

    <div class="h-18"></div>

</div>

@push('canvas')
    <div class="fixed inset-0 top-0 left-0 z-[100] overflow-y-auto "
        x-show="showDrawer" x-data="{ showDrawer: false }"
        x-on:show-action-bottom.window="($event.detail.actionBottomId === 'review') && (showDrawer = true)"
        @keydown.window.escape="showDrawer = false"
    >

        <div class="h-[60vh] -z-50" @click="showDrawer = false"></div>


        <div class="min-h-[40vh] inset-0 bg-white z-[101] dark:bg-navy-700 rounded-t-xl transition-all duration-300 relative"
            x-show="showDrawer"
            x-transition:enter="ease-out duration-300" x-transition:enter-start="translate-y-full"
            x-transition:enter-end="translate-y-0" x-transition:leave="ease-in duration-300"
            x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-full"
            x-transition:enter="transition-all ease-out duration-300"
            x-transition:leave="transition-all ease-in duration-300">

            {{-- Close Button --}}
            <div class="absolute -top-2 -right-2 p-6 z-[200] cursor-pointer" @click="showDrawer = false"
                x-show="showDrawer" x-transition:enter="ease-out" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-500 size-5 hover:text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
            {{-- #Close Button --}}

            {{-- Divider --}}
            <div class="flex justify-center w-full py-5 pt-3 cursor-pointer">
                <div class="rounded-full bg-gray-300 h-1.5 w-16"></div>
            </div>
            {{-- #Divider --}}

            <div class="px-4">
                <h2 class="text-lg font-semibold text-black">Berikan Rating </h2>
            </div>

            <div class="px-5 py-3">
                <div class="flex items-center space-x-3">
                    <x-web.elements.avatar initial="MK" size="lg" />
                    <div>
                        <h4 class="text-base font-medium text-slate-700 dark:text-navy-50">Abdullah</h4>
                        <p class="text-xs text-slate-400 dark:text-navy-300">Pengajar</p>
                    </div>
                </div>
                <div class="mt-4">
                    <p class="text-sm font-medium text-slate-700 dark:text-navy-100">Rating</p>
                    <div class="flex items-center mt-2 space-x-1">
                        <input type="range" min="1" max="5" step="1" value="3"
                            class="hidden" id="rating-range" />
                        <div class="flex space-x-1" id="star-container">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-400 star"
                                    fill="currentColor" viewBox="0 0 24 24" data-value="{{ $i }}">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>



            <div class="h-24">
                <img class="object-cover object-center w-full h-full" src="{{ asset('images/800x600.png') }}" alt="image" />
            </div>
            <div class="flex px-5 space-x-5">
                <div class="-mt-5 avatar size-20">
                    <img class="border-2 border-white rounded-full dark:border-navy-700" src="{{ asset('images/200x200.png') }}" alt="avatar" />
                </div>
                <div class="w-full mt-2">
                    <div class="flex justify-between space-x-3">
                        <h4 class="text-base font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
                            John Doe
                        </h4>
                        <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                             class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                    class="btn -mr-1.5 size-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>

                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#"
                                               class="flex items-center h-8 px-3 pr-8 font-medium tracking-wide transition-all outline-none hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="flex items-center h-8 px-3 pr-8 font-medium tracking-wide transition-all outline-none hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="flex items-center h-8 px-3 pr-8 font-medium tracking-wide transition-all outline-none hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                else</a>
                                        </li>
                                    </ul>
                                    <div class="h-px my-1 bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#"
                                               class="flex items-center h-8 px-3 pr-8 font-medium tracking-wide transition-all outline-none hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                       class="cursor-pointer text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">@johndoe</a>
                </div>
            </div>
            <div class="h-px mx-5 my-4 bg-slate-200 dark:bg-navy-500"></div>
            <ul class="grow space-y-1.5 px-5 font-inter font-medium">
                <li>
                    <a class="flex items-center space-x-2 rounded-full bg-primary px-5 py-2.5 tracking-wide text-white outline-none transition-all dark:bg-accent"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <span>Getting start</span>
                    </a>
                </li>
                <li>
                    <a class="group flex space-x-2 rounded-full px-5 py-2.5 tracking-wide outline-none transition-all hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary dark:hover:bg-accent-light/15 dark:hover:text-accent-light dark:focus:bg-accent-light/15 dark:focus:text-accent-light"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="transition-colors size-5 text-slate-400 group-hover:text-primary group-focus:text-primary dark:text-navy-300 dark:group-hover:text-accent dark:group-focus:text-accent"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                        </svg>

                        <span>Shipping</span>
                    </a>
                </li>
                <li>
                    <a class="group flex space-x-2 rounded-full px-5 py-2.5 tracking-wide outline-none transition-all hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary dark:hover:bg-accent-light/15 dark:hover:text-accent-light dark:focus:bg-accent-light/15 dark:focus:text-accent-light"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="transition-colors size-5 text-slate-400 group-hover:text-primary group-focus:text-primary dark:text-navy-300 dark:group-hover:text-accent dark:group-focus:text-accent"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        <span>Payments</span>
                    </a>
                </li>
                <li>
                    <a class="group flex space-x-2 rounded-full px-5 py-2.5 tracking-wide outline-none transition-all hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary dark:hover:bg-accent-light/15 dark:hover:text-accent-light dark:focus:bg-accent-light/15 dark:focus:text-accent-light"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="transition-colors size-5 text-slate-400 group-hover:text-primary group-focus:text-primary dark:text-navy-300 dark:group-hover:text-accent dark:group-focus:text-accent"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z" />
                        </svg>
                        <span>Returns</span>
                    </a>
                </li>
                <li>
                    <a class="group flex space-x-2 rounded-full px-5 py-2.5 tracking-wide outline-none transition-all hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary dark:hover:bg-accent-light/15 dark:hover:text-accent-light dark:focus:bg-accent-light/15 dark:focus:text-accent-light"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="transition-colors size-5 text-slate-400 group-hover:text-primary group-focus:text-primary dark:text-navy-300 dark:group-hover:text-accent dark:group-focus:text-accent"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span>My Account</span>
                    </a>
                </li>
                <li>
                    <a class="group flex space-x-2 rounded-full px-5 py-2.5 tracking-wide outline-none transition-all hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary dark:hover:bg-accent-light/15 dark:hover:text-accent-light dark:focus:bg-accent-light/15 dark:focus:text-accent-light"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="transition-colors size-5 text-slate-400 group-hover:text-primary group-focus:text-primary dark:text-navy-300 dark:group-hover:text-accent dark:group-focus:text-accent"
                             viewBox="0 0 24 24" fill="none">
                            <path
                                  d="M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z"
                                  stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                            <path
                                  d="M12.0449 15.8486C12.625 15.8486 13.1318 15.6729 13.5654 15.3213C13.999 14.9697 14.2393 14.5303 14.2861 14.0029H15.8242C15.7949 14.5479 15.6074 15.0664 15.2617 15.5586C14.916 16.0508 14.4531 16.4434 13.873 16.7363C13.2988 17.0293 12.6895 17.1758 12.0449 17.1758C10.75 17.1758 9.71875 16.7451 8.95117 15.8838C8.18945 15.0166 7.80859 13.833 7.80859 12.333V12.0605C7.80859 11.1348 7.97852 10.3115 8.31836 9.59082C8.6582 8.87012 9.14453 8.31055 9.77734 7.91211C10.416 7.51367 11.1689 7.31445 12.0361 7.31445C13.1025 7.31445 13.9873 7.63379 14.6904 8.27246C15.3994 8.91113 15.7773 9.74023 15.8242 10.7598H14.2861C14.2393 10.1445 14.0049 9.64062 13.583 9.24805C13.167 8.84961 12.6514 8.65039 12.0361 8.65039C11.21 8.65039 10.5684 8.94922 10.1113 9.54688C9.66016 10.1387 9.43457 10.9971 9.43457 12.1221V12.4297C9.43457 13.5254 9.66016 14.3691 10.1113 14.9609C10.5625 15.5527 11.207 15.8486 12.0449 15.8486Z"
                                  fill="currentColor" />
                        </svg>
                        <span>Copyright &amp; Legal</span>
                    </a>
                </li>
            </ul>



            <div class="h-24">
                <img class="object-cover object-center w-full h-full" src="{{ asset('images/800x600.png') }}" alt="image" />
            </div>
            <div class="flex px-5 space-x-5">
                <div class="-mt-5 avatar size-20">
                    <img class="border-2 border-white rounded-full dark:border-navy-700" src="{{ asset('images/200x200.png') }}" alt="avatar" />
                </div>
                <div class="w-full mt-2">
                    <div class="flex justify-between space-x-3">
                        <h4 class="text-base font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
                            John Doe
                        </h4>
                        <div x-data="usePopper({ placement: 'bottom-end', offset: 4 })" @click.outside="if(isShowPopper) isShowPopper = false"
                             class="inline-flex">
                            <button x-ref="popperRef" @click="isShowPopper = !isShowPopper"
                                    class="btn -mr-1.5 size-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </button>

                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper && 'show'">
                                <div class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#"
                                               class="flex items-center h-8 px-3 pr-8 font-medium tracking-wide transition-all outline-none hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="flex items-center h-8 px-3 pr-8 font-medium tracking-wide transition-all outline-none hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another
                                                Action</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="flex items-center h-8 px-3 pr-8 font-medium tracking-wide transition-all outline-none hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something
                                                else</a>
                                        </li>
                                    </ul>
                                    <div class="h-px my-1 bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#"
                                               class="flex items-center h-8 px-3 pr-8 font-medium tracking-wide transition-all outline-none hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated
                                                Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#"
                       class="cursor-pointer text-xs+ text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent">@johndoe</a>
                </div>
            </div>
            <div class="h-px mx-5 my-4 bg-slate-200 dark:bg-navy-500"></div>
            <ul class="grow space-y-1.5 px-5 font-inter font-medium">
                <li>
                    <a class="flex items-center space-x-2 rounded-full bg-primary px-5 py-2.5 tracking-wide text-white outline-none transition-all dark:bg-accent"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                        <span>Getting start</span>
                    </a>
                </li>
                <li>
                    <a class="group flex space-x-2 rounded-full px-5 py-2.5 tracking-wide outline-none transition-all hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary dark:hover:bg-accent-light/15 dark:hover:text-accent-light dark:focus:bg-accent-light/15 dark:focus:text-accent-light"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="transition-colors size-5 text-slate-400 group-hover:text-primary group-focus:text-primary dark:text-navy-300 dark:group-hover:text-accent dark:group-focus:text-accent"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                        </svg>

                        <span>Shipping</span>
                    </a>
                </li>
                <li>
                    <a class="group flex space-x-2 rounded-full px-5 py-2.5 tracking-wide outline-none transition-all hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary dark:hover:bg-accent-light/15 dark:hover:text-accent-light dark:focus:bg-accent-light/15 dark:focus:text-accent-light"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="transition-colors size-5 text-slate-400 group-hover:text-primary group-focus:text-primary dark:text-navy-300 dark:group-hover:text-accent dark:group-focus:text-accent"
                             viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        <span>Payments</span>
                    </a>
                </li>
                <li>
                    <a class="group flex space-x-2 rounded-full px-5 py-2.5 tracking-wide outline-none transition-all hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary dark:hover:bg-accent-light/15 dark:hover:text-accent-light dark:focus:bg-accent-light/15 dark:focus:text-accent-light"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="transition-colors size-5 text-slate-400 group-hover:text-primary group-focus:text-primary dark:text-navy-300 dark:group-hover:text-accent dark:group-focus:text-accent"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M16 15v-1a4 4 0 00-4-4H8m0 0l3 3m-3-3l3-3m9 14V5a2 2 0 00-2-2H6a2 2 0 00-2 2v16l4-2 4 2 4-2 4 2z" />
                        </svg>
                        <span>Returns</span>
                    </a>
                </li>
                <li>
                    <a class="group flex space-x-2 rounded-full px-5 py-2.5 tracking-wide outline-none transition-all hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary dark:hover:bg-accent-light/15 dark:hover:text-accent-light dark:focus:bg-accent-light/15 dark:focus:text-accent-light"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="transition-colors size-5 text-slate-400 group-hover:text-primary group-focus:text-primary dark:text-navy-300 dark:group-hover:text-accent dark:group-focus:text-accent"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span>My Account</span>
                    </a>
                </li>
                <li>
                    <a class="group flex space-x-2 rounded-full px-5 py-2.5 tracking-wide outline-none transition-all hover:bg-primary/10 hover:text-primary focus:bg-primary/10 focus:text-primary dark:hover:bg-accent-light/15 dark:hover:text-accent-light dark:focus:bg-accent-light/15 dark:focus:text-accent-light"
                       href="#">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="transition-colors size-5 text-slate-400 group-hover:text-primary group-focus:text-primary dark:text-navy-300 dark:group-hover:text-accent dark:group-focus:text-accent"
                             viewBox="0 0 24 24" fill="none">
                            <path
                                  d="M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z"
                                  stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                  stroke-linejoin="round" />
                            <path
                                  d="M12.0449 15.8486C12.625 15.8486 13.1318 15.6729 13.5654 15.3213C13.999 14.9697 14.2393 14.5303 14.2861 14.0029H15.8242C15.7949 14.5479 15.6074 15.0664 15.2617 15.5586C14.916 16.0508 14.4531 16.4434 13.873 16.7363C13.2988 17.0293 12.6895 17.1758 12.0449 17.1758C10.75 17.1758 9.71875 16.7451 8.95117 15.8838C8.18945 15.0166 7.80859 13.833 7.80859 12.333V12.0605C7.80859 11.1348 7.97852 10.3115 8.31836 9.59082C8.6582 8.87012 9.14453 8.31055 9.77734 7.91211C10.416 7.51367 11.1689 7.31445 12.0361 7.31445C13.1025 7.31445 13.9873 7.63379 14.6904 8.27246C15.3994 8.91113 15.7773 9.74023 15.8242 10.7598H14.2861C14.2393 10.1445 14.0049 9.64062 13.583 9.24805C13.167 8.84961 12.6514 8.65039 12.0361 8.65039C11.21 8.65039 10.5684 8.94922 10.1113 9.54688C9.66016 10.1387 9.43457 10.9971 9.43457 12.1221V12.4297C9.43457 13.5254 9.66016 14.3691 10.1113 14.9609C10.5625 15.5527 11.207 15.8486 12.0449 15.8486Z"
                                  fill="currentColor" />
                        </svg>
                        <span>Copyright &amp; Legal</span>
                    </a>
                </li>
            </ul>




        </div>

        {{-- Overlay Part --}}
        <div class="fixed inset-0 top-0 left-0 transition-opacity duration-200 -z-2 bg-slate-900/60"
            x-show="showDrawer" x-transition:enter="ease-out" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"></div>
        {{-- #Overlay Part --}}
    </div>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star');
            const ratingRange = document.getElementById('rating-range');

            function updateStars(rating) {
                stars.forEach(star => {
                    if (parseInt(star.getAttribute('data-value')) <= rating) {
                        star.classList.add('star-filled');
                    } else {
                        star.classList.remove('star-filled');
                    }
                });
            }

            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const rating = parseInt(star.getAttribute('data-value'));
                    ratingRange.value = rating;
                    updateStars(rating);
                });
            });

            // Initialize stars based on the initial value of the range input
            updateStars(ratingRange.value);
        });
    </script>
@endpush
