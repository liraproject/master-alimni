<div>
    <x-slot:breadcrumb>
        <x-web.breadcrumb.breadcrumb>
            <x-slot:title>Profil</x-slot:title>
            <x-web.breadcrumb.breadcrumb-item route="student.dashboard" text="Dashboard" />
            <x-web.breadcrumb.breadcrumb-item text="Profil" />
        </x-web.breadcrumb.breadcrumb>
    </x-slot:breadcrumb>

    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
        <x-web.cards.base-card>
            <x-slot:title>Profil</x-slot:title>
        </x-web.cards.base-card>
    </div>
</div>
