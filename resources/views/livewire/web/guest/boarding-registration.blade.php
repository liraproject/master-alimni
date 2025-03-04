<div class="place-items-center">
    <div class="py-10 text-center lg:py-6">
        <p class="text-sm uppercase">Sudah siap menjadi santri?</p>
        <h3 class="mt-1 text-xl font-semibold text-slate-600 dark:text-navy-100">
            Pilih program anda disini!
        </h3>
    </div>

    <div class="grid max-w-4xl grid-cols-1 gap-4 sm:grid-cols-3 sm:gap-5 lg:gap-6">
        @forelse ($programCategories as $program)
            <div class="card">
                <div class="flex justify-center p-5">
                    <img class="w-9/12" src="images/illustrations/creativedesign.svg" alt="image">
                </div>
                <div class="px-4 pb-8 text-center sm:px-5">
                    <h4 class="text-lg font-semibold text-slate-700 dark:text-navy-100">
                        {{ $program->category_name }}
                    </h4>
                    <p class="pt-3">
                        {{ $program->description }}
                    </p>
                    <x-web.buttons.base-button class="mt-8" size="md" type="glow">
                        Daftar Sekarang
                    </x-web.buttons.base-button>
                </div>
            </div>
        @empty

        @endforelse
    </div>
</div>
