<div>

    {{-- Welcome Sentence --}}
    <x-slot:headerPage class="flex justify-between items-center mt-5 px-3">
        <div>
            <h5 class="text-xs+ font-normal tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                Assalaamu'alaikum,
            </h5>
            <h2 class="text-xl font-semibold tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                {{ $user->fullname }}, Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores culpa fuga
                consectetur ab asperiores beatae deserunt nulla? Eveniet a incidunt at eum atque. Est veniam facere
                dolorum commodi tempora fugit.
            </h2>
        </div>
        <div class="-mr-1.5 flex items-center space-x-2">
            <!-- Notification-->
            <x-mobile.layouts.partials.notifications.base-notification />

            <!-- Profile -->
            <button @click="$dispatch('show-profile-drawer')"
                class="flex items-center w-full justify-center p-2 transition-transform duration-1000 ease-in-out rounded-lg hover:bg-primary/20 dark:hover:bg-navy-300/20">
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
                    <div class="flex justify-between items-center">
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
                    <div class="flex justify-between items-center">
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
                    <div class="absolute z-2 w-full h-full bg-black/50 top-0 left-0 flex justify-center items-center">
                        <div class="flex flex-col gap-1">
                            <p class="text-xs text-white/80">Belum terdaftar di program ini.</p>
                            <x-web.buttons.base-button text="Daftar sekarang!" />
                        </div>
                    </div>
                </x-web.cards.card-swiper>
                <x-web.cards.card-swiper title="Bahasa Arab"
                    class="bg-gradient-to-bl from-amber-500 to-primary-alimni-600">
                    <div class="flex justify-between items-center">
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
                    <div class="absolute z-2 w-full h-full bg-black/50 top-0 left-0 flex justify-center items-center">
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
        <div class="mt-3 flex justify-between">
            @foreach ($this->quickMenu as $menu)
                <a href="{{ route($menu['route']) }}" class="w-12 text-center">
                    <div class="avatar size-10">
                        <div class="text-white is-initial mask is-squircle bg-primary">
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
                        <div class="mb-6 flex justify-between">
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
                                    <i class="fa-regular fa-star size-7 my-auto"></i>
                                </x-web.buttons.base-button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- <div class="fixed bg-black/50 w-screen h-screen top-0 right-0 z-10"></div>
         <div class="fixed bottom-0 left-0 w-full bg-white shadow-lg z-[11]">
            <div class="flex justify-around p-4">
                <!-- Action Button 1 -->
                <button class="flex flex-col items-center text-gray-700 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-xs">Action 1</span>
                </button>

                <!-- Action Button 2 -->
                <button class="flex flex-col items-center text-gray-700 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m4-4H8" />
                    </svg>
                    <span class="text-xs">Action 2</span>
                </button>

                <!-- Action Button 3 -->
                <button class="flex flex-col items-center text-gray-700 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M12 5l7 7-7 7" />
                    </svg>
                    <span class="text-xs">Action 3</span>
                </button>

                <!-- Action Button 4 -->
                <button class="flex flex-col items-center text-gray-700 hover:text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
    <div x-show="showDrawer" x-data="{ showDrawer: false, startY: 0, currentY: 0, expandedDrawer: false }"
        x-on:show-action-bottom.window="($event.detail.actionBottomId === 'review') && (showDrawer = true)"
        @keydown.window.escape="showDrawer = false">
        {{-- Overlay Part --}}
        <div class="fixed inset-0 z-[100] bg-slate-900/60 transition-opacity duration-200" @click="showDrawer = false"
            x-show="showDrawer" x-transition:enter="ease-out" x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100" x-transition:leave="ease-in" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"></div>
        {{-- #Overlay Part --}}

        <div class="fixed inset-x-0 bottom-0 z-[101] h-64 bg-white dark:bg-navy-700 rounded-t-xl max-h-[100%] overflow-y-auto transition-all duration-300"
            :class="{ 'h-[80vh]': expandedDrawer }" x-ref="bodyDrawer" x-show="showDrawer"
            x-transition:enter="ease-out duration-300" x-transition:enter-start="translate-y-full"
            x-transition:enter-end="translate-y-0" x-transition:leave="ease-in duration-300"
            x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-full"
            x-transition:enter="transition-all ease-out duration-300"
            x-transition:leave="transition-all ease-in duration-300">

            <div class="w-full flex justify-center pt-3 py-5 cursor-pointer" @click="expandedDrawer = !expandedDrawer">
                <div class="rounded-full bg-gray-300 h-1.5 w-16"></div>
            </div>

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
                    <div class="flex items-center space-x-1 mt-2">
                        <input type="range" min="1" max="5" step="1" value="3"
                            class="hidden" id="rating-range" />
                        <div class="flex space-x-1" id="star-container">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 star"
                                    fill="currentColor" viewBox="0 0 24 24" data-value="{{ $i }}">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>

        </div>
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
