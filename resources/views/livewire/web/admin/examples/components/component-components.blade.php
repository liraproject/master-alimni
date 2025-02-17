<div>
    <x-slot:breadcrumb>
        <x-web.breadcrumb.breadcrumb>
            <x-slot:title>Components</x-slot:title>
            <x-web.breadcrumb.breadcrumb-item text="Components" />
        </x-web.breadcrumb.breadcrumb>
    </x-slot:breadcrumb>

    <div class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">

        <x-web.cards.base-card title="Modal">
            <x-slot:body class="space-y-2">
                <x-web.buttons.base-button class="" />
            </x-slot:body>
        </x-web.cards.base-card>

        <x-web.cards.base-card title="Notification">
            <x-slot:body class="space-y-2">
                {{-- <x-web.buttons.base-button @click="$notification({text: 'Coba notification'} )" /> --}}
                <x-web.buttons.base-button wire:click="handleNotification()" text="submit" />
                <div wire:click='handleNotification()' class="btn bg-primary">Coba</div>
            </x-slot:body>
        </x-web.cards.base-card>

        <x-web.cards.base-card title="Alert">
            <x-slot:body class="space-y-2">

            </x-slot:body>
        </x-web.cards.base-card>

    </div>
</div>

{{-- @push('script')
    <script>
        document.addEventListener('notification', event => {
            $notification({
                text: event.detail.text
            });
        });
    </script>
@endpush --}}
