
<div class="mt-4">
    <h2 class="px-3 text-lg font-semibold tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100">
        Riwayat Pembelajaran
    </h2>
    {{-- Badge Filter --}}
    <x-web.swiper.swiper gap="8">
        <x-web.elements.badge text="Semua" color="primary" class="!w-auto text-nowrap swiper-slide font-medium" />
        <x-web.elements.badge text="Tahsin" color="secondary" class="!w-auto text-nowrap swiper-slide font-medium" />
        <x-web.elements.badge text="Tahfidz" color="secondary" class="!w-auto text-nowrap swiper-slide font-medium" />
        <x-web.elements.badge text="B. Arab" color="secondary" class="!w-auto text-nowrap swiper-slide font-medium" />
        <x-web.elements.badge text="Mobile Development" color="secondary" class="!w-auto text-nowrap swiper-slide font-medium" />
    </x-web.swiper.swiper>
    {{-- #Badge Filter --}}
    <div class="px-2 mt-3 space-y-3">
        @foreach ($quickMenu as $key => $item)
            <x-web.cards.base-card class="text-slate-700" @click="Livewire.navigate('{{ route('student.tahsin.history.detail', $loop->iteration) }}')">
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
