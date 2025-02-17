<div>
    <x-slot:breadcrumb>
        <x-web.breadcrumb.breadcrumb>
            <x-slot:title>Form Component</x-slot:title>
            <x-web.breadcrumb.breadcrumb-item route="admin.forms.layouts" text="Layouts" />
            <x-web.breadcrumb.breadcrumb-item text="Components" />
        </x-web.breadcrumb.breadcrumb>
    </x-slot:breadcrumb>

    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
        <x-web.cards.base-card>
            <x-slot:title>Input basic</x-slot:title>
            <x-slot:body class="grid max-w-xl grid-cols-2 gap-4 sm:gap-5 lg:gap-6">
                {{-- manggil component tanpa close tag --}}
                <x-web.forms.base-input
                    class="col-span-1 bg-lime-500"
                    label="Base Input"
                    placeholder="Ini Place Holder"
                    textHelper=""
                    value="Ini Default Value"
                    :props="[
                        'main' => [
                            'class' => 'bg-rose-500'
                        ],
                        'wrap' => [
                            'class' => 'bg-slate-500'
                        ]
                    ]"
                />

                {{-- manggil component dengan close tag --}}
                <x-web.forms.base-input class="col-span-1" placeholder="Base Input 2" :variant="['rounded' => 'full']">
                    <x-slot:label>Base Input 2</x-slot:label>
                    <x-slot:dataList>
                        <option value="Data List 1"></option>
                        <option value="Data List 2"></option>
                        <option value="Data List 3"></option>
                    </x-slot:dataList>
                </x-web.forms.base-input>

                <h4 class="col-span-2">Input validasi</h4>
                <x-web.forms.base-input label="Alamat Email:" placeholder="Email" value="miko@lira.id" :success="'success' == 'success' ? 'Email terdaftar' : ''" />
                <x-web.forms.base-input label="Alamat Email:" placeholder="Email" value="mikogmail" :error="'error' == 'error' ? 'Email tidak terdaftar' : ''" />

                <h4 class="col-span-2">Input Group</h4>
                <x-web.forms.input-group label="Input Nomor" placeholde="8xx xxxx xxxx">
                    <x-slot:prefix>+64</x-slot:prefix>
                    <x-slot:suffix>Telp</x-slot:suffix>
                </x-web.forms.input-group>

            </x-slot:body>
        </x-web.cards.base-card>

        <x-web.cards.base-card>
            <x-slot:body class="max-w-xl">
                <x-slot:title>Form Components</x-slot:title>
                <x-web.forms.base-input label="Base Input" placeholder="Ini Place Holder" value="Ini Default Value" />
                <x-web.forms.base-input>
                    <x-slot:label>Base Input</x-slot:label>
                </x-web.forms.base-input>
            </x-slot:body>
        </x-web.cards.base-card>
    </div>
</div>
