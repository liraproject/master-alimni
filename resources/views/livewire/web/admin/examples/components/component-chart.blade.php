<div>
    <x-slot:breadcrumb>
        <x-web.breadcrumb.breadcrumb>
            <x-slot:title>Chart</x-slot:title>
            <x-web.breadcrumb.breadcrumb-item route="admin.components.components" text="Components" />
            <x-web.breadcrumb.breadcrumb-item text="Component Chart" />
        </x-web.breadcrumb.breadcrumb>
    </x-slot:breadcrumb>

    <x-slot:main class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">

        <x-web.cards.base-card title="Alert">
            <x-slot:body class="space-y-2">

            </x-slot:body>
        </x-web.cards.base-card>

        <x-web.cards.base-card title="Alert">
            <x-slot:body class="space-y-2">

            </x-slot:body>
        </x-web.cards.base-card>

        <x-web.cards.base-card title="Alert">
            <x-slot:body class="space-y-2">

            </x-slot:body>
        </x-web.cards.base-card>

        <x-web.cards.base-card title="Alert">
            <x-slot:body class="space-y-2">

            </x-slot:body>
        </x-web.cards.base-card>

    </x-slot:main>
</div>
