<div>
    <x-slot:breadcrumb>
        <x-web.breadcrumb.breadcrumb>
            <x-slot:title>Form Layouts</x-slot:title>
            <x-web.breadcrumb.breadcrumb-item route="admin.forms.components" text="Components" />
            <x-web.breadcrumb.breadcrumb-item text="Layouts" />
        </x-web.breadcrumb.breadcrumb>
    </x-slot:breadcrumb>

    <x-slot:main class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
        <x-web.cards.base-card>
            <x-slot:title>Form Layouts</x-slot:title>
        </x-web.cards.base-card>
    </x-slot:main>
</div>
