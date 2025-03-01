@props([
    'routeBackButton' => null,
])

<nav id="header" class="header print:hidden">
    <!-- App Header  -->
    <div class="relative flex w-full bg-white header-container dark:bg-navy-750 print:hidden">
        <!-- Header Items -->
        <div class="flex items-center justify-between w-full">
            <!-- Left: Sidebar Toggle Button -->
            <div class="flex items-center gap-3">
                @if ($routeBackButton != null)
                    <div class="size-7">
                        <a @if ($routeBackButton) wire:navigate href="{{ route($routeBackButton) }}" @else @click="window.history.back()" @endif
                            class="back-button ml-0.5 flex size-7 flex-col justify-center space-y-1.5 text-primary outline-none focus:outline-none dark:text-accent-light/80 md:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                    </div>
                @endif

                <!-- Notification-->
                <x-mobile.layouts.partials.notifications.base-notification />

                <!-- Dark Mode Toggle -->
                <button @click="$store.global.isDarkModeEnabled = !$store.global.isDarkModeEnabled"
                    class="p-0 rounded-full btn size-8 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                    <svg x-show="$store.global.isDarkModeEnabled"
                        x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                        x-transition:enter-start="scale-75" x-transition:enter-end="scale-100 static"
                        class="size-6 text-amber-400" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M11.75 3.412a.818.818 0 01-.07.917 6.332 6.332 0 00-1.4 3.971c0 3.564 2.98 6.494 6.706 6.494a6.86 6.86 0 002.856-.617.818.818 0 011.1 1.047C19.593 18.614 16.218 21 12.283 21 7.18 21 3 16.973 3 11.956c0-4.563 3.46-8.31 7.925-8.948a.818.818 0 01.826.404z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x-show="!$store.global.isDarkModeEnabled"
                        x-transition:enter="transition-transform duration-200 ease-out absolute origin-top"
                        x-transition:enter-start="scale-75" x-transition:enter-end="scale-100 static"
                        class="size-6 text-amber-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            clip-rule="evenodd" />
                    </svg>
                </button>

            </div>

            <!-- Right: Header buttons -->
            <div class="-mr-1.5 flex items-center space-x-2">

                <!-- Profile -->
                <button @click="$dispatch('show-profile-drawer')"
                    class="flex items-center w-full justify-center p-2 transition-transform duration-1000 ease-in-out rounded-lg hover:bg-primary/20 dark:hover:bg-navy-300/20">
                    <x-web.elements.avatar image="{{ $user->photo ? asset('profil/photo/' . $user->photo) : null }}"
                        initial="{{ substr($user->fullname, 0, 2) }}" variant="circle" color="primary" rounded="full"
                        size="sm" dot="visible" />
                </button>

            </div>
        </div>
    </div>
</nav>

@push('scripts')
    <script></script>
@endpush
