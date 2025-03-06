<div>

    {{-- Welcome Sentence --}}
    <x-slot:headerPage class="flex items-center justify-between px-3 mt-5">
        <div class="flex items-center gap-2">
            <img src="{{ asset('logo/alimni-1.svg') }}" alt="logo" class="size-12">
            <div>
                <h5 class="text-xs+ font-normal tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                    Assalaamu'alaikum,
                </h5>
                <h2 class="text-xl font-semibold tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
                    {{ $user->fullname }}
                </h2>
            </div>
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
        <x-web.swiper.swiper>
            <x-web.swiper.card-swiper class="bg-gradient-to-bl from-amber-500 to-primary-alimni-600">
                <x-slot:header class="text-white grow">
                    <x-web.buttons.icon-button class="!p-2">
                        <x-slot:icon>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-5" fill="white">
                                <path fill="white" d="M352 0c53 0 96 43 96 96l0 320c0 53-43 96-96 96L64 512l-32 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l0-64c-17.7 0-32-14.3-32-32L0 32C0 14.3 14.3 0 32 0L64 0 352 0zm0 384L96 384l0 64 256 0c17.7 0 32-14.3 32-32s-14.3-32-32-32zM274.1 150.2l-8.9 21.4-23.1 1.9c-5.7 .5-8 7.5-3.7 11.2L256 199.8l-5.4 22.6c-1.3 5.5 4.7 9.9 9.6 6.9L280 217.2l19.8 12.1c4.9 3 10.9-1.4 9.6-6.9L304 199.8l17.6-15.1c4.3-3.7 2-10.8-3.7-11.2l-23.1-1.9-8.9-21.4c-2.2-5.3-9.6-5.3-11.8 0zM96 192c0 70.7 57.3 128 128 128c25.6 0 49.5-7.5 69.5-20.5c3.2-2.1 4.5-6.2 3.1-9.7s-5.2-5.6-9-4.8c-6.1 1.2-12.5 1.9-19 1.9c-52.4 0-94.9-42.5-94.9-94.9s42.5-94.9 94.9-94.9c6.5 0 12.8 .7 19 1.9c3.8 .8 7.5-1.3 9-4.8s.2-7.6-3.1-9.7C273.5 71.5 249.6 64 224 64C153.3 64 96 121.3 96 192z"/>
                            </svg>
                        </x-slot:icon>
                    </x-web.buttons.icon-button>
                </x-slot:header>
                <x-slot:body class="text-white">
                    <div class="flex items-end justify-between mb-1">
                        <h2 class="text-xl font-bold tracking-wider line-clamp-1">Tahsin</h2>
                        <p class="font-medium text-slate-50">Batch 1</p>
                    </div>
                    <div class="p-2.5 space-y-1 rounded-lg bg-secondary/40 backdrop-blur-xl">
                        <p class="text-lg font-semibold tracking-wider line-clamp-1 ellipse">
                            Ust. Muhammad Abdullah
                        </p>
                        <p class="text-xs font-medium">Halaqoh Al-Fatih</p>
                        <p class="text-xs font-medium">
                            <span class="font-semibold">30</span>/60 pertemuan
                        </p>
                    </div>
                </x-slot:body>
                <div class="absolute top-0 right-0 -m-3 mask is-reuleaux-triangle size-16 bg-white/20">
                </div>
            </x-web.swiper.card-swiper>
            <x-web.swiper.card-swiper class="bg-gradient-to-bl from-amber-500 to-primary-alimni-600">
                <x-slot:header class="text-white grow">
                    <x-web.buttons.icon-button class="!p-2">
                        <x-slot:icon>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-5" fill="white">
                                <path fill="white" d="M352 0c53 0 96 43 96 96l0 320c0 53-43 96-96 96L64 512l-32 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l0-64c-17.7 0-32-14.3-32-32L0 32C0 14.3 14.3 0 32 0L64 0 352 0zm0 384L96 384l0 64 256 0c17.7 0 32-14.3 32-32s-14.3-32-32-32zM274.1 150.2l-8.9 21.4-23.1 1.9c-5.7 .5-8 7.5-3.7 11.2L256 199.8l-5.4 22.6c-1.3 5.5 4.7 9.9 9.6 6.9L280 217.2l19.8 12.1c4.9 3 10.9-1.4 9.6-6.9L304 199.8l17.6-15.1c4.3-3.7 2-10.8-3.7-11.2l-23.1-1.9-8.9-21.4c-2.2-5.3-9.6-5.3-11.8 0zM96 192c0 70.7 57.3 128 128 128c25.6 0 49.5-7.5 69.5-20.5c3.2-2.1 4.5-6.2 3.1-9.7s-5.2-5.6-9-4.8c-6.1 1.2-12.5 1.9-19 1.9c-52.4 0-94.9-42.5-94.9-94.9s42.5-94.9 94.9-94.9c6.5 0 12.8 .7 19 1.9c3.8 .8 7.5-1.3 9-4.8s.2-7.6-3.1-9.7C273.5 71.5 249.6 64 224 64C153.3 64 96 121.3 96 192z"/>
                            </svg>
                        </x-slot:icon>
                    </x-web.buttons.icon-button>
                </x-slot:header>
                <x-slot:body class="text-white">
                    <div class="flex items-end justify-between mb-1">
                        <h2 class="text-xl font-bold tracking-wider line-clamp-1">Tahsin</h2>
                        <p class="font-medium text-slate-50">Batch 1</p>
                    </div>
                    <div class="p-2.5 space-y-1 rounded-lg bg-secondary/40 backdrop-blur-xl">
                        <p class="text-lg font-semibold tracking-wider line-clamp-1 ellipse">
                            Ust. Muhammad Abdullah
                        </p>
                        <p class="text-xs font-medium">Halaqoh Al-Fatih</p>
                        <p class="text-xs font-medium">
                            <span class="font-semibold">30</span>/60 pertemuan
                        </p>
                    </div>
                </x-slot:body>
                <div class="absolute top-0 right-0 -m-3 mask is-reuleaux-triangle size-16 bg-white/20">
                </div>
                <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full z-2 bg-black/50">
                    <div class="flex flex-col gap-1">
                        <p class="text-xs text-white/80">Belum terdaftar di program ini.</p>
                        <x-web.buttons.base-button text="Daftar sekarang!" />
                    </div>
                </div>
            </x-web.swiper.card-swiper>
            <x-web.swiper.card-swiper class="bg-gradient-to-bl from-amber-500 to-primary-alimni-600">
                <x-slot:header class="text-white grow">
                    <x-web.buttons.icon-button class="!p-2">
                        <x-slot:icon>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-5" fill="white">
                                <path fill="white" d="M352 0c53 0 96 43 96 96l0 320c0 53-43 96-96 96L64 512l-32 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l0-64c-17.7 0-32-14.3-32-32L0 32C0 14.3 14.3 0 32 0L64 0 352 0zm0 384L96 384l0 64 256 0c17.7 0 32-14.3 32-32s-14.3-32-32-32zM274.1 150.2l-8.9 21.4-23.1 1.9c-5.7 .5-8 7.5-3.7 11.2L256 199.8l-5.4 22.6c-1.3 5.5 4.7 9.9 9.6 6.9L280 217.2l19.8 12.1c4.9 3 10.9-1.4 9.6-6.9L304 199.8l17.6-15.1c4.3-3.7 2-10.8-3.7-11.2l-23.1-1.9-8.9-21.4c-2.2-5.3-9.6-5.3-11.8 0zM96 192c0 70.7 57.3 128 128 128c25.6 0 49.5-7.5 69.5-20.5c3.2-2.1 4.5-6.2 3.1-9.7s-5.2-5.6-9-4.8c-6.1 1.2-12.5 1.9-19 1.9c-52.4 0-94.9-42.5-94.9-94.9s42.5-94.9 94.9-94.9c6.5 0 12.8 .7 19 1.9c3.8 .8 7.5-1.3 9-4.8s.2-7.6-3.1-9.7C273.5 71.5 249.6 64 224 64C153.3 64 96 121.3 96 192z"/>
                            </svg>
                        </x-slot:icon>
                    </x-web.buttons.icon-button>
                </x-slot:header>
                <x-slot:body class="text-white">
                    <div class="flex items-end justify-between mb-1">
                        <h2 class="text-xl font-bold tracking-wider line-clamp-1">Tahsin</h2>
                        <p class="font-medium text-slate-50">Batch 1</p>
                    </div>
                    <div class="p-2.5 space-y-1 rounded-lg bg-secondary/40 backdrop-blur-xl">
                        <p class="text-lg font-semibold tracking-wider line-clamp-1 ellipse">
                            Ust. Muhammad Abdullah
                        </p>
                        <p class="text-xs font-medium">Halaqoh Al-Fatih</p>
                        <p class="text-xs font-medium">
                            <span class="font-semibold">30</span>/60 pertemuan
                        </p>
                    </div>
                </x-slot:body>
                <div class="absolute top-0 right-0 -m-3 mask is-reuleaux-triangle size-16 bg-white/20">
                </div>
                <div class="absolute top-0 left-0 flex items-center justify-center w-full h-full z-2 bg-black/50">
                    <div class="flex flex-col gap-1">
                        <p class="text-xs text-white/80">Belum terdaftar di program ini.</p>
                        <x-web.buttons.base-button text="Daftar sekarang!" />
                    </div>
                </div>
            </x-web.swiper.card-swiper>
        </x-web.swiper.swiper>
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
                    <div class="avatar size-12">
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

    {{-- Your Schedules Section --}}
    <div class="mt-3">
        <h2 class="text-xs+ px-3 -mb-2.5 font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            Jadwal Anda
        </h2>
        <x-web.swiper.swiper class="!overflow-y-visible pt-2.5" :pagination="true">
            <x-web.swiper.card-swiper class="border bg-slate-100 border-primary text-slate-600 !overflow-visible min-h-40 flex flex-col justify-between">
                <div class="flex gap-2">
                    <h1 class="text-xl font-semibold tracking-wider">Tahsin</h1>
                    <x-web.elements.badge text="Premium" />
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <x-web.elements.avatar initial="MA" size="sm" variant="circle" />
                        <p class="text-lg font-medium line-clamp-2 ellipse">Ust. Muhammad Abdullah</p>
                    </div>
                    <x-web.buttons.icon-button icon="fa-brands fa-whatsapp fa-lg" class="!bg-slate-150 !text-slate-700" />
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-regular fa-calendar"></i>
                    <p class="">Jum'at, Pukul 16:00</p>
                </div>
                <x-web.elements.badge text="Sesi hai ini!" color="primary" class="absolute -top-3 -right-4" />
            </x-web.swiper.card-swiper>
            <x-web.swiper.card-swiper class="border bg-slate-100 border-primary text-slate-600 !overflow-visible min-h-40 flex flex-col justify-between">
                <div class="flex gap-2">
                    <h1 class="text-xl font-semibold tracking-wider">Tahsin</h1>
                    <x-web.elements.badge text="Premium" />
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <x-web.elements.avatar initial="MA" size="sm" variant="circle" />
                        <p class="text-lg font-medium line-clamp-2 ellipse">Ust. Muhammad Abdullah</p>
                    </div>
                    <x-web.buttons.icon-button icon="fa-brands fa-whatsapp fa-lg" class="!bg-slate-150 !text-slate-700" />
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-regular fa-calendar"></i>
                    <p class="">Sabtu, Pukul 10:00</p>
                </div>
            </x-web.swiper.card-swiper>
            <x-web.swiper.card-swiper class="border bg-slate-100 border-primary text-slate-600 !overflow-visible min-h-40 flex flex-col justify-between">
                <div class="flex gap-2">
                    <h1 class="text-xl font-semibold tracking-wider">Tahfidz</h1>
                    <x-web.elements.badge text="Premium" />
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <x-web.elements.avatar initial="AB" size="sm" variant="circle" />
                        <p class="text-lg font-medium line-clamp-2 ellipse">Ust. Abdurrahman</p>
                    </div>
                    <x-web.buttons.icon-button icon="fa-brands fa-whatsapp fa-lg" class="!bg-slate-150 !text-slate-700" />
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-regular fa-calendar"></i>
                    <p class="">Sabtu, Pukul 11:00</p>
                </div>
            </x-web.swiper.card-swiper>
            <x-web.swiper.card-swiper class="border bg-slate-100 border-primary text-slate-600 !overflow-visible min-h-40 flex flex-col justify-between">
                <div class="flex gap-2">
                    <h1 class="text-xl font-semibold tracking-wider">Tahfidz</h1>
                    <x-web.elements.badge text="Premium" />
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <x-web.elements.avatar initial="AB" size="sm" variant="circle" />
                        <p class="text-lg font-medium line-clamp-2 ellipse">Ust. Abdurrahman</p>
                    </div>
                    <x-web.buttons.icon-button icon="fa-brands fa-whatsapp fa-lg" class="!bg-slate-150 !text-slate-700" />
                </div>
                <div class="flex items-center gap-2">
                    <i class="fa-regular fa-calendar"></i>
                    <p class="">Ahad, Pukul 07:00</p>
                </div>
            </x-web.swiper.card-swiper>
        </x-web.swiper.swiper>
    </div>
    {{-- #Your Schedules Section --}}

    {{-- History Lesson Section --}}
    <div class="mt-4">
        <h2 class="px-3 text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            Riwayat Pembelajaran
        </h2>
        {{-- Badge Filter --}}
        <x-web.swiper.swiper>
            <x-web.elements.badge text="Semua" color="primary" class="!w-auto text-nowrap swiper-slide font-medium" />
            <x-web.elements.badge text="Tahsin" color="secondary" class="!w-auto text-nowrap swiper-slide font-medium" />
            <x-web.elements.badge text="Tahfidz" color="secondary" class="!w-auto text-nowrap swiper-slide font-medium" />
            <x-web.elements.badge text="B. Arab" color="secondary" class="!w-auto text-nowrap swiper-slide font-medium" />
            <x-web.elements.badge text="Mobile Development" color="secondary" class="!w-auto text-nowrap swiper-slide font-medium" />
        </x-web.swiper.swiper>
        {{-- #Badge Filter --}}
        <div class="px-2 mt-3 space-y-3">
            @foreach ($quickMenu as $key => $item)
                <x-web.cards.base-card class="text-slate-700">
                    <div class="flex justify-between">
                        <div class="space-y-1">
                            <div class="flex items-center gap-2">
                                <h4 class="font-semibold text-md">@if($key % 2 == 0) Tahsin - Level 3 @else Tahfidz - Level 4 @endif</h4>
                                @if($key % 2 == 0) <i class="fa-regular fa-note-sticky"></i> @endif
                            </div>
                            <p>Ustadz Ahmad</p>

                            <div class="flex mt-1"  @click="$dispatch('show-action-bottom', { actionBottomId: 'review' })">
                                @for ($i = 1; $i <= 5; $i++)
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 size-4 star" :class="{ 'text-yellow-500': {{ $i }} <3 }" fill="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                        </svg>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="space-y-1 text-right">
                            <p class="text-gray-400 ">{{ 16 - $loop->iteration }} Jan 2025</p>
                            <p class="">Nilai: {{ 10 * $loop->iteration }}</p>
                            <p class="">Sangat Baik</p>
                        </div>
                    </div>
                    <div class="p-2.5 space-y-1 text-sm rounded-lg bg-secondary/40 backdrop-blur-xl mt-2 -mx-2 -mb-2 text-slate-800">
                        @if($key % 2 == 0)
                        <div class="flex justify-between">
                            <p>Jumlah Kesalahan :</p>
                            <p>2x</p>
                        </div>
                        @else
                        <div class="flex justify-between">
                            <p>Ziyadah/Murajaah :</p>
                            <p>10 baris</p>
                        </div>
                        <div class="flex justify-between">
                            <p>Surat :</p>
                            <p>Al-Baqrah 1-10</p>
                        </div>
                        @endif
                    </div>
                </x-web.cards.base-card>
            @endforeach
            <x-web.buttons.base-button class="w-full" text="Lihat Semua" />
        </div>
    </div>
    {{-- #History Lesson Section --}}

    {{-- Report Card Section --}}
    <div class="mt-4">
        <h2 class="px-3 text-xs+ font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
            Rapor Pembelajaran
        </h2>
        <div class="px-2 mt-3 space-y-3">
            <x-web.cards.base-card>
                <div class="flex justify-between">
                    <div>
                        <h4 class="font-semibold">Batch 1 - Thasin Reguler</h4>
                        <p>Ustadz Fulan</p>
                    </div>
                    <x-web.buttons.icon-button icon="fa-solid fa-print" class="!bg-slate-150 !text-slate-700" />
                </div>
                <div class="grid grid-cols-2 gap-2 mt-2">
                    <div class="col-span-1 py-1 text-center bg-secondary/40">
                        <p>Total Pertemuan</p>
                        <p>8</p>
                    </div>
                    <div class="col-span-1 py-1 text-center bg-secondary/40">
                        <p>Nilai Akhir</p>
                        <p>90</p>
                    </div>
                    <div class="col-span-2 py-1 text-center bg-secondary/40">
                        <p>Predikat</p>
                        <p>Sangat Baik</p>
                    </div>
                </div>
            </x-web.cards.base-card>
            <x-web.buttons.base-button class="w-full" text="Lihat Semua" />
        </div>
    </div>
    {{-- #Report Card Section --}}

    <div class="h-12"></div>

</div>

@push('canvas')
    <x-mobile.canvas.action-bottom idCanvas="review" height="60"
        x-init="$watch('showDrawer', value => { if (value) { $nextTick(() => { setTimeout(() => { document.getElementById('comment-textarea').focus(); }, 250); }); } })"
        {{-- x-init="$watch('showDrawer', value => { if (value) { $nextTick(() => { document.getElementById('comment-textarea').focus(); }); } })" --}}
    >
        <x-slot:title>Berikan Ulasan</x-slot:title>
        <div class="space-y-4">
            <div class="flex items-center space-x-3">
                <x-web.elements.avatar initial="AB" size="lg" type="circle" />
                <div>
                    <h4 class="text-base font-medium text-slate-700 dark:text-navy-50">Abdullah</h4>
                    <p class="text-xs text-slate-400 dark:text-navy-300">Pengajar</p>
                </div>
            </div>
            <p class="text-sm font-medium text-slate-700 dark:text-navy-100">Rating</p>
            <div class="flex gap-2" id="star-container" x-data="{ rating: 0 }">
                @for ($i = 1; $i <= 5; $i++)
                    <div @click="rating = {{ $i }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 size-6 star" :class="{'text-yellow-500': rating >= {{ $i }} }" fill="currentColor"
                            viewBox="0 0 24 24" data-value="{{ $i }}">
                            <path
                                d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                        </svg>
                    </div>
                @endfor
            </div>
            <p class="text-sm font-medium text-slate-700 dark:text-navy-100">Masukan</p>
            {{-- Predifined text --}}
            <x-web.swiper.swiper class="-mx-3">
                <x-web.elements.badge text="Penjelasan materi sudah baik" color="secondary" class="!w-auto text-nowrap swiper-slide font-medium" />
                <x-web.elements.badge text="Pengajar nya sabar dan perhatian" color="secondary" class="!w-auto text-nowrap swiper-slide font-medium" />
                <x-web.elements.badge text="Pengajar terlambat" color="secondary" class="!w-auto text-nowrap swiper-slide font-medium" />
                <x-web.elements.badge text="Pengajar tidak fokus" color="secondary" class="!w-auto text-nowrap swiper-slide font-medium" />
            </x-web.swiper.swiper>
            {{-- #Predifined text --}}
            <x-web.forms.textarea id="comment-textarea" name="inputSuggestions" placeholder="Tulis ulasan Anda disini...">
                <x-slot:submitButton>Kirim</x-slot:submitButton>
                <x-slot:footer class="flex justify-end">
                    <x-web.buttons.base-button text="Kirim" />
                </x-slot:footer>
            </x-web.forms.textarea>
        </div>
    </x-mobile.canvas.action-bottom>
@endpush
