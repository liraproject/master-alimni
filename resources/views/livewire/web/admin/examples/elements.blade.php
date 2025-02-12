<div>
    <x-slot:breadcrumb>
        <x-web.breadcrumb.breadcrumb>
            <x-slot:title>Elements</x-slot:title>
            <x-web.breadcrumb.breadcrumb-item text="Elements" />
        </x-web.breadcrumb.breadcrumb>
    </x-slot:breadcrumb>

    <x-slot:main class="grid grid-cols-1 gap-4 sm:gap-5 lg:gap-6">

        <x-web.cards.base-card title="Alert">
            <x-slot:body class="space-y-2">
                <x-web.elements.alert color="primary">
                    This is a default alert
                </x-web.elements.alert>

                <x-web.elements.alert type="outlined" color="secondary">
                    This is a outlined alert
                </x-web.elements.alert>

                <x-web.elements.alert type="borderless" color="info" rounded="full">
                    This is a borderless alert
                </x-web.elements.alert>

                <x-web.elements.alert type="bordered" color="info" rounded="full">
                    This is a bordered alert
                </x-web.elements.alert>

                <x-web.elements.alert type="dismissible" color="warning" dismissible>
                    This is a dismissible alert
                </x-web.elements.alert>
            </x-slot:body>
        </x-web.cards.base-card>

        <x-web.cards.base-card title="Buttons">
            <x-slot:body class="space-y-2">
                <!-- Default Button -->
                <x-web.buttons.base-button type="default" color="primary">
                    Default Button
                </x-web.buttons.base-button>

                <!-- Outlined Button -->
                <x-web.buttons.base-button type="outlined" color="secondary">
                    Outlined Button
                </x-web.buttons.base-button>

                <!-- Borderless Button -->
                <x-web.buttons.base-button type="borderless" color="info">
                    Borderless Button
                </x-web.buttons.base-button>

                <!-- Soft Color Button -->
                <x-web.buttons.base-button type="soft-color" color="success">
                    Soft Color Button
                </x-web.buttons.base-button>

                <!-- Bordered Button -->
                <x-web.buttons.base-button type="bordered" color="warning">
                    Bordered Button
                </x-web.buttons.base-button>

                <!-- Flat Button -->
                <x-web.buttons.base-button type="flat" color="error">
                    Flat Button
                </x-web.buttons.base-button>

                <!-- Glow Button -->
                <x-web.buttons.base-button type="glow" color="primary">
                    Glow Button
                </x-web.buttons.base-button>

                <!-- Gradient Button -->
                <x-web.buttons.base-button type="gradient" color="secondary">
                    Gradient Button
                </x-web.buttons.base-button>

                <!-- Outline Gradient Button -->
                <x-web.buttons.base-button type="outline-gradient" color="info">
                    Outline Gradient Button
                </x-web.buttons.base-button>

                <!-- Button with Icon -->
                <x-web.buttons.base-button type="default" color="success">
                    <x-slot:icon>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                        </svg>
                    </x-slot:icon>
                    Button with Icon
                </x-web.buttons.base-button>

                <!-- Disabled Button -->
                <x-web.buttons.base-button type="default" color="error" disabled>
                    Disabled Button
                </x-web.buttons.base-button>
            </x-slot:body>
        </x-web.cards.base-card>

        <x-web.cards.base-card title="Badge">
            <x-slot:body class="space-y-2">
                <!-- Default Badge -->
                <x-web.elements.badge type="default" color="primary">
                    Default Badge
                </x-web.elements.badge>

                <!-- Soft Color Badge -->
                <x-web.elements.badge type="soft-color" color="secondary">
                    Soft Color Badge
                </x-web.elements.badge>

                <!-- Glow Badge -->
                <x-web.elements.badge type="glow" color="info">
                    Glow Badge
                </x-web.elements.badge>

                <!-- Outlined Badge -->
                <x-web.elements.badge type="outlined" color="success">
                    Outlined Badge
                </x-web.elements.badge>

                <!-- Badge with Icon -->
                <x-web.elements.badge type="default" color="warning">
                    <x-slot:icon>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                        </svg>
                    </x-slot:icon>
                    Badge with Icon
                </x-web.elements.badge>
            </x-slot:body>
        </x-web.cards.base-card>

        <x-web.cards.base-card title="Progress">
            <x-slot:body class="space-y-2">
                <!-- Default Progress -->
                <x-web.elements.progress color="primary" value="25" />

                <!-- Soft Color Progress -->
                <x-web.elements.progress type="soft-color" color="secondary" value="50" />

                <!-- Active Progress -->
                <x-web.elements.progress type="active" color="info" value="75" />

                <!-- Indeterminate Progress -->
                <x-web.elements.progress type="indeterminate" color="success" value="100" />
            </x-slot:body>
        </x-web.cards.base-card>

        <x-web.cards.base-card title="Spinner">
            <x-slot:body class="flex gap-2">
                <x-web.elements.spinner type="default" color="primary" size="md" />
                <x-web.elements.spinner type="soft-color" color="secondary" size="lg" />
                <x-web.elements.spinner type="grow" color="info" size="sm" />
                <x-web.elements.spinner type="svg" color="success" size="xl" />
            </x-slot:body>
        </x-web.cards.base-card>

        <x-web.cards.base-card title="Skeleton">
            <x-slot:body class="space-y-2">
                {{-- TODO : Add Skeleton Component all variant --}}
            </x-slot:body>
        </x-web.cards.base-card>

        <x-web.cards.base-card title="Skeleton">
            <x-slot:body class="space-y-2">
                {{-- TODO : Add Skeleton Component all variant --}}
            </x-slot:body>
        </x-web.cards.base-card>

        <x-web.cards.base-card title="Skeleton">
            <x-slot:body class="space-y-2">
                {{-- TODO : Add Skeleton Component all variant --}}
            </x-slot:body>
        </x-web.cards.base-card>
    </x-slot:main>
</div>
