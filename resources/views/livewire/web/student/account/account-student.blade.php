<div>
    <x-slot:breadcrumb>
        <x-web.breadcrumb.breadcrumb>
            <x-slot:title>Menejemen Akun</x-slot:title>
        </x-web.breadcrumb.breadcrumb>
    </x-slot:breadcrumb>

    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
        <x-web.cards.base-card>
            <x-slot:title>Manajemen Akun</x-slot:title>
            <x-slot:body class="flex flex-col gap-4">
                <x-web.elements.divider direction="horizontal" />
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <x-web.elements.avatar image="{{ $user->photo ? asset('profil/photo/' . $user->photo) : null }}"
                            initial="{{ substr($user->fullname, 0, 2) }}" size="2xl" variant="circle" color="primary"
                            dot="none" rounded="full">
                            <x-slot:action>
                                <button
                                    class="p-0 font-medium text-white rounded-full btn size-9 bg-info hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                </button>
                            </x-slot:action>
                        </x-web.elements.avatar>
                        <div>
                            <h3 class="text-lg font-medium">{{ $user->fullname }}</h3>
                            <p class="text-sm text-gray-500">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <x-web.buttons.base-button text="Unggah foto baru" color="info" size="sm"
                            type="default" />
                        <x-web.buttons.base-button text="Hapus" color="error" size="sm" type="default"
                            :disabled="$user->photo ? false : true" />
                    </div>
                </div>
                <h3 class="text-lg font-semibold">Informasi Akun</h3>
                <div class="flex flex-col ">
                    <x-web.forms.base-input type="text" name="fullname" value="{{ $user->fullname }}"
                        placeholder="Masukkan nama lengkap" label="Nama Lengkap" />
                    <x-web.forms.base-input type="email" name="email" value="{{ $user->email }}"
                        placeholder="Masukkan alamat email" label="Email" />
                    <x-web.forms.base-input type="text" name="username" value="{{ $user->username }}"
                        placeholder="Masukkan username" label="Username" />
                </div>
            </x-slot:body>
        </x-web.cards.base-card>
    </div>
</div>
