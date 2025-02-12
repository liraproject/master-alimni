<div>
    <x-slot:breadcrumb>
        <x-web.breadcrumb.breadcrumb>
            <x-slot:title>Dashboard</x-slot:title>
        </x-web.breadcrumb.breadcrumb>
    </x-slot:breadcrumb>

    <x-slot:main class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">
        <x-web.cards.base-card>
            <x-slot:title>Welcome {{ auth()->user()->name }} ({{ auth()->user()->role->name }})</x-slot:title>
        </x-web.cards.base-card>
    </x-slot:main>
</div>
