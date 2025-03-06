<div class="relative">
    <x-slot:headerPage class="fixed inset-0 top-0 left-0 p-1 transition-opacity duration-200 -z-2 bg-slate-900/60 bg-gradient-to-t from-white via-white/60 to-white/0">
            <div class="h-[20vh]"></div>
        <div class="px-4">
            <x-web.elements.badge text="New in 5.0" color="primary" />
            <div class="h-6"></div>
            <h1 class="text-xl font-bold text-black">Scroll Over <br> Content Cards</h1>
            <p class="text-slate-700">Yout Feedback Made Sticky Better</p>
        </div>
    </x-slot:headerPage>

    <div class="h-[40vh] -z-50"></div>

    <x-web.buttons.icon-button
        class="!rounded-lg !bg-slate-100 !text-black !p-3 mt-2 ml-2 !fixed top-1 left-1"
        route="student.dashboard"
    >
        <x-slot:icon>
            <svg class="size-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 6L9 12L15 18" stroke="currentColor" stroke-width="2" />
            </svg>
        </x-slot:icon>
    </x-web.buttons.icon-button>

    <x-web.cards.base-card>
        {{-- Divider --}}
        <div class="flex justify-center w-full pb-4 cursor-pointer">
            <div class="rounded-full bg-gray-300 h-1.5 w-16"></div>
        </div>
        {{-- #Divider --}}

        {{-- Content --}}
        <div class="flex flex-col gap-6 pb-20">
            <p>
                The best selling Mobile Progressive Web App on the Envato Marketplaces just got even better now, with
                3.0 introducing
                Boostrap 4.x compatibility and a tone of new gorgeous features!
            </p>

            <div class="grid grid-cols-3 gap-6">
                <div>
                    <span class="font-11">PWA</span>
                    <p class="mb-3 mt-n2">
                        <strong class="color-theme">Yes</strong>
                    </p>
                </div>
                <div>
                    <span class="font-11">Boostrap</span>
                    <p class="mb-3 mt-n2">
                        <strong class="color-theme">4.4+</strong>
                    </p>
                </div>
                <div>
                    <span class="font-11">Dark Mode</span>
                    <p class="mb-3 mt-n2">
                        <strong class="color-theme">Yes</strong>
                    </p>
                </div>
                <div>
                    <span class="font-11">Cordova</span>
                    <p class="mb-3 mt-n2">
                        <strong class="color-theme">Compatible</strong>
                    </p>
                </div>
                <div>
                    <span class="font-11">Components</span>
                    <p class="mb-3 mt-n2">
                        <strong class="color-theme">100+</strong>
                    </p>
                </div>
                <div>
                    <span class="font-11">Total Pages</span>
                    <p class="mb-3 mt-n2">
                        <strong class="color-theme">150+</strong>
                    </p>
                </div>
            </div>

            <x-web.elements.divider />

            <div class="flex justify-between">
                <div class="flex-grow-1">
                    <span class="font-11">Share with the World </span>
                    <p class="mt-n2">
                        <strong class="color-theme">Share or Save for Later</strong>
                    </p>
                </div>
                <div class="mt-1 flex-shrink-1">
                    <x-web.buttons.icon-button class="!bg-info" icon="fa fa-share-alt" />
                    <x-web.buttons.icon-button class="!bg-rose-500" icon="fa fa-heart" />
                </div>
            </div>

            <x-web.buttons.base-button class="w-full uppercase">Purchase Today</x-web.buttons.base-button>
            <x-web.elements.divider />

            <h2 class="text-xl font-bold">Product Gallery</h2>
            <p>
                Here are the best and most beautiful features our product has to offer. Just tap and move through the
                images.
            </p>

            <div x-data class="grid grid-cols-4 gap-2">
                <img src="https://picsum.photos/id/1/160/160"
                    @click="$dispatch('lightbox', 'https://picsum.photos/id/1/640/360')" />
                <img src="https://picsum.photos/id/2/160/160"
                    @click="$dispatch('lightbox', 'https://picsum.photos/id/2/640/360')" />
                <img src="https://picsum.photos/id/3/160/160"
                    @click="$dispatch('lightbox', 'https://picsum.photos/id/3/640/360')" />
                <img src="https://picsum.photos/id/4/160/160"
                    @click="$dispatch('lightbox', 'https://picsum.photos/id/4/640/360')" />
            </div>

        </div>

        {{-- #Content --}}
    </x-web.cards.base-card>
</div>


@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            GLightbox({
                selector: '.glightbox'
            });
        });
    </script>
@endpush
