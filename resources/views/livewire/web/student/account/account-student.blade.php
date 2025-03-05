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

                {{-- Change Image Profile --}}
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <x-web.elements.avatar
                            image="{{ $user->photo ? asset('profil/photo/' . $user->photo) : null }}"
                            initial="{{ substr($user->fullname, 0, 2) }}"
                            variant="circle"
                            color="primary"
                            rounded="full"
                            size="2xl"
                            dot="none"
                        >
                            <x-slot:action>
                                {{-- <input type="file"
                                    class="w-full h-full filepond"
                                    name="filepond"
                                    accept="image/png, image/jpeg, image/gif"
                                    x-init="$el._x_filepond = FilePond.create($el, {
                                            labelIdle: `Drag & Drop your picture or <span class='filepond--label-action'>Browse</span>`,
                                            imagePreviewHeight: 170,
                                            imageCropAspectRatio: '1:1',
                                            imageResizeTargetWidth: 400,
                                            imageResizeTargetHeight: 400,
                                            stylePanelLayout: 'compact circle',
                                            styleLoadIndicatorPosition: 'center bottom',
                                            styleProgressIndicatorPosition: 'right bottom',
                                            styleButtonRemoveItemPosition: 'left bottom',
                                            styleButtonProcessItemPosition: 'right bottom',
                                        });
                                    "
                                /> --}}
                                <button
                                    class="p-0 font-medium text-white rounded-full btn size-9 bg-info hover:bg-info-focus focus:bg-info-focus active:bg-info-focus/90">
                                    <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                </button>
                            </x-slot:action>
                        </x-web.elements.avatar>
                        <div>
                            <h3 class="text-lg font-semibold">Profile picture</h3>
                            <p class="text-sm opacity-80">PNG, JPEG under 8MB</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <x-web.buttons.base-button text="Unggah foto baru" color="info" size="sm"
                            type="default" />
                        <x-web.buttons.base-button text="Hapus" color="error" size="sm" type="default"
                            :disabled="$user->photo ? false : true" />
                    </div>
                </div>
                {{-- #Change Image Profile --}}

                {{-- Change Name and Email User --}}
                <div class="space-y-3">
                    <h3 class="text-lg font-semibold">Informasi Akun</h3>
                    <x-web.forms.base-input
                        name="fullname"
                        value="{{ $user->fullname }}"
                        placeholder="Masukkan nama lengkap"
                        label="Nama Lengkap"
                    >
                    <x-slot:dataList>
                        <option value="Aldo">Aldo</option>
                        <option value="Muhammad">Muhammad</option>
                        <option value="Zaki">Zaki</option>
                    </x-slot:dataList>
                    </x-web.forms.base-input>
                    <x-web.forms.base-input
                        type="email"
                        name="email"
                        value="{{ $user->email }}"
                        placeholder="Masukkan alamat email"
                        label="Email"
                    />
                </div>
                {{-- #Change Name and Email User --}}

                {{-- Change WhatsApp Number --}}
                <div class="space-y-3" x-data="{ isSendOTPbutton: false }">
                    <div>
                        <h3 class="text-lg font-semibold">Nomor Whatsapp</h3>
                        <p class="text-sm opacity-80">Ubah nomor whatsapp</p>
                    </div>
                    <div class="">
                        <x-web.forms.input-group
                            name="old_password"
                            value="89630270690"
                            placeholder="Masukan Nomor Whatsapp"
                            x-input-mask="{
                                    delimiter: ' ',
                                    blocks: [3, 4, 7],
                                }"
                        >
                            <x-slot:prefixDropdown>
                                <option value="62">+62</option>
                                <option value="63">+63</option>
                                <option value="64">+64</option>
                                <option value="65">+65</option>
                            </x-slot:prefixDropdown>
                            <x-slot:suffixButton @click="isSendOTPbutton = true">
                                Ganti
                            </x-slot:suffixButton>
                        </x-web.forms.input-group>
                        <x-web.forms.input-group
                            name="username"
                            value="{{ $user->username }}"
                            placeholder="Masukan OTP dari pesan Whatsapp"
                        >
                            {{-- <x-slot:suffixButton>
                                Ganti
                            </x-slot:suffixButton> --}}
                        </x-web.forms.input-group>
                        <button class="text-primary hover:text-primary-alimni-300 dark:disabled:text-navy-300 disabled:text-navy-500 disabled:cursor-wait"
                            :disabled="isSendOTPbutton"
                        >
                            Kirim OTP lagi... 0:59
                        </button>
                    </div>
                </div>
                {{-- #Change WhatsApp Number --}}

                <x-web.elements.divider direction="horizontal" />

                {{-- Change Password User --}}
                <div class="space-y-3">
                    <div>
                        <h3 class="text-lg font-semibold">Password</h3>
                        <p class="text-sm opacity-80">Ubah password akun</p>
                    </div>
                    <div class="grid grid-cols-1 sm:gap-3 sm:grid-cols-2">
                        <x-web.forms.base-input
                            name="old_password"
                            placeholder="Masukan Password lama"
                            label="Password Lama"
                        />
                        <x-web.forms.base-input
                            name="new_password"
                            placeholder="Masukan Password baru"
                            label="Password Baru"
                        />
                    </div>
                </div>
                {{-- #Change Password User --}}

                <x-web.elements.divider direction="horizontal" />

                <div class="flex justify-end">
                    <div class="flex flex-col items-end justify-end gap-1">
                        <x-web.forms.checkbox label="Setuju diubah" position="left" />
                        <x-web.buttons.base-button
                            text="Simpan Perubahan" color="primary" size="md"
                            type="default"
                            :disabled="true"
                        />
                    </div>
                </div>

            </x-slot:body>
        </x-web.cards.base-card>
    </div>
</div>
