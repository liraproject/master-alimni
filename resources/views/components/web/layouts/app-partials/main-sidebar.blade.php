<div class="transition-all duration-700 ease-in-out main-sidebar" :class="isSidebarExpanded ? 'w-[17rem]' : ''">
    <div @mouseenter="isSidebarExpanded = $store.global.isSidebarExpanded ? true : true"
        @mouseleave="isSidebarExpanded = $store.global.isSidebarExpanded ? true : false"
        class="flex flex-col items-start w-full h-full px-4 bg-white border-r border-slate-150 dark:border-navy-700 dark:bg-navy-800">
        <!-- Application Logo -->
        <div class="flex items-center justify-between w-full pt-4 overflow-hidden">
            <a wire:navigate href="/" class="flex items-center gap-2">
                <img class="transition-transform duration-1000 ease-in-out size-12 "
                    :class="isSidebarExpanded ? 'rotate-[360deg]' : '-rotate-[360deg]'"
                    src="{{ asset('images/app-logo.svg') }}" alt="logo" />
                <div class="m-3 font-semibold uppercase text-md text-slate-500" x-show="isSidebarExpanded"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                    LaraOne
                </div>
            </a>

            <div x-show="isSidebarExpanded" x-transition>
                <div @click="$store.global.isSidebarExpanded = !$store.global.isSidebarExpanded"
                    class="p-0 rounded-full cursor-pointer btn size-7 text-primary hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:text-accent-light/80 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                    <i class="fa-circle" :class="$store.global.isSidebarExpanded ? 'fa' : 'fa-regular'"></i>
                </div>
            </div>
        </div>

        <!-- Main Sections Links -->
        <div class="flex flex-col w-full pt-6 space-y-4 overflow-y-auto ease-in-out is-scrollbar-hidden grow"
            x-data="{ expandedItem: '{{ $routePrefix }}' }">

            @foreach ($menu[0]['menu'] as $menu)
                @if ($menu['isDevider'] ?? false)
                    <div class="h-5 m-3 font-semibold uppercase ease-in-out text-slate-500"
                        x-transition.duration.500ms x-text="isSidebarExpanded ? '{{ $menu['title'] }}' : '. . .'"></div>
                @elseif ($menu['sub_menu'] != [])
                    <div x-data="accordionItem('{{ explode('.', $menu['route'])[1] }}')" class="ease-in-out" :class="isSidebarExpanded ? 'w-full' : ''">
                        <div @click="expanded = !expanded"
                            class="flex h-11 cursor-pointer items-center justify-between px-2 rounded-lg outline-none transition-colors duration-200 {{ $routePrefix === explode('.', $menu['route'])[1] ? 'text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 bg-primary/10 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90' : 'hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25' }}">
                            <h4 class="flex items-center gap-2">
                                <div class="object-cover">
                                    {!! $menu['icon'] ?? '' !!}
                                </div>
                                <span x-show="isSidebarExpanded" class="overflow-hidden line-clamp-1 text-clip"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 scale-90"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-50"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-90">{{ $menu['title'] ?? '' }}</span>
                            </h4>
                            <div :class="expanded && '-rotate-180'" x-show="isSidebarExpanded"
                                class="text-sm font-normal leading-none transition-transform duration-300 text-slate-400 dark:text-navy-300">
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </div>
                        <div x-transition.duration.duration.500ms x-show="isSidebarExpanded">
                            <div x-collapse x-transition.duration.500ms x-show="expanded">
                                <ul class="pl-4 mt-2">
                                    @foreach ($menu['sub_menu'] ?? [] as $subMenu)
                                        <li
                                            @if ($subMenu['route'] ?? '' === $pageName) x-init="$el.scrollIntoView({block:'center'});" @endif>
                                            @if ($subMenu['route'] ?? false)
                                                <a wire:navigate href="{{ route($subMenu['route']) }}"
                                                    class="flex text-xs+ py-2 ml-2 items-center gap-2 tracking-wide outline-none transition-colors duration-300 ease-in-out hover:text-primary {{ $subMenu['route'] === $pageName ? 'text-primary dark:text-accent-light font-medium' : 'text-slate-600  hover:text-primary dark:text-navy-200 dark:hover:text-navy-50' }}">
                                                    <i
                                                        class="{{ $subMenu['route'] === $pageName ? 'fa' : 'fa-regular' }} fa-circle"></i>
                                                    <span x-show="isSidebarExpanded"
                                                        class="overflow-hidden line-clamp-1 text-clip"
                                                        x-transition:enter="transition ease-out duration-300"
                                                        x-transition:enter-start="opacity-0 scale-90"
                                                        x-transition:enter-end="opacity-100 scale-100"
                                                        x-transition:leave="transition ease-in duration-50"
                                                        x-transition:leave-start="opacity-100 scale-100"
                                                        x-transition:leave-end="opacity-0 scale-90">{{ $subMenu['title'] ?? '' }}</span>
                                                </a>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="ease-in-out" :class="isSidebarExpanded ? 'w-full' : ''">
                        <a wire:navigate href="{{ route($menu['route']) }}"
                            class="flex gap-2 h-11 w-full items-center justify-start px-2 rounded-lg outline-none transition-colors duration-200 {{ $routePrefix === explode('.', $menu['route'])[1] ? 'text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 bg-primary/10 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90' : 'hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25' }}">
                            <h4 class="flex items-center gap-2">
                                <div class="object-cover">
                                    {!! $menu['icon'] ?? '' !!}
                                </div>
                                <p x-show="isSidebarExpanded" class="overflow-hidden line-clamp-1 text-clip"
                                    x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 scale-90"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-50"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-90">{{ $menu['title'] ?? '' }}</p>
                            </h4>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>

        <!-- Bottom Links -->
        <div class="flex flex-col items-center justify-center w-full py-3 space-y-3 ">
            <!-- Settings -->
            <div class="w-full" class="overflow-hidden transition-transform duration-1000 ease-in-out">
                <a wire:navigate href="#"
                    class="flex gap-2 h-11 w-full items-center justify-end px-2 rounded-lg outline-none transition-colors duration-200 {{ $routePrefix === 'setting' ?? '' ? 'text-primary hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:bg-navy-600 bg-primary/10 dark:text-accent-light dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90' : 'hover:bg-primary/20 focus:bg-primary/20 active:bg-primary/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25' }}">
                    <span x-show="isSidebarExpanded" class="overflow-hidden line-clamp-1 text-clip"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90">Settings</span>
                    <div class="object-cover">
                        <svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-opacity="0.3" fill="currentColor"
                                d="M2 12.947v-1.771c0-1.047.85-1.913 1.899-1.913 1.81 0 2.549-1.288 1.64-2.868a1.919 1.919 0 0 1 .699-2.607l1.729-.996c.79-.474 1.81-.192 2.279.603l.11.192c.9 1.58 2.379 1.58 3.288 0l.11-.192c.47-.795 1.49-1.077 2.279-.603l1.73.996a1.92 1.92 0 0 1 .699 2.607c-.91 1.58-.17 2.868 1.639 2.868 1.04 0 1.899.856 1.899 1.912v1.772c0 1.047-.85 1.912-1.9 1.912-1.808 0-2.548 1.288-1.638 2.869.52.915.21 2.083-.7 2.606l-1.729.997c-.79.473-1.81.191-2.279-.604l-.11-.191c-.9-1.58-2.379-1.58-3.288 0l-.11.19c-.47.796-1.49 1.078-2.279.605l-1.73-.997a1.919 1.919 0 0 1-.699-2.606c.91-1.58.17-2.869-1.639-2.869A1.911 1.911 0 0 1 2 12.947Z" />
                            <path fill="currentColor"
                                d="M11.995 15.332c1.794 0 3.248-1.464 3.248-3.27 0-1.807-1.454-3.272-3.248-3.272-1.794 0-3.248 1.465-3.248 3.271 0 1.807 1.454 3.271 3.248 3.271Z" />
                        </svg>
                    </div>
                </a>
            </div>

            <!-- Profile -->
            <div x-data="usePopper({ placement: 'right-end', offset: 12 })" class="w-full" @click.outside="if(isShowPopper) isShowPopper = false"
                class="flex transition-transform duration-1000 ease-in-out">
                <button @click="isShowPopper = !isShowPopper" x-ref="popperRef"
                    class="flex items-center w-full gap-2 p-2 transition-transform duration-1000 ease-in-out rounded-lg hover:bg-primary/20 dark:hover:bg-navy-300/20"
                    :class="isSidebarExpanded ? 'justify-end' : 'justify-center'">
                    <div class="text-right" x-show="isSidebarExpanded"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                        <p
                            class="overflow-hidden text-base font-medium text-slate-700 dark:text-navy-100 dark:focus:text-accent-light line-clamp-1 text-clip">
                            {{ $user->name }}
                        </p>
                        <p class="overflow-hidden text-xs text-slate-400 dark:text-navy-300 line-clamp-1 text-clip">
                            {{ $user->role->name }}
                        </p>
                    </div>
                    <div class="avatar size-12 ">
                        <img class="flex items-center justify-center overflow-hidden text-white rounded-full bg-primary text-bold"
                            src="{{ asset('images/200x200.png') }}"
                            alt="{{ substr(auth()->user()->name, 1, 2) }}" />
                        <span
                            class="absolute right-0 size-3.5 rounded-full border-2 border-white bg-success dark:border-navy-700"></span>
                    </div>
                </button>
                <div :class="isShowPopper && 'show'" class="fixed popper-root" x-ref="popperRoot">
                    <div
                        class="w-64 bg-white border rounded-lg popper-box border-slate-150 shadow-soft dark:border-navy-600 dark:bg-navy-700">
                        <div class="flex items-center px-4 py-5 space-x-4 rounded-t-lg bg-slate-100 dark:bg-navy-800">
                            <div class="avatar size-14">
                                <img class="rounded-full" src="{{ asset('images/200x200.png') }}" alt="avatar" />
                            </div>
                            <div>
                                <a wire:navigate href="#"
                                    class="text-base font-medium text-slate-700 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                                    {{ $user->name }}
                                </a>
                                <p class="text-xs text-slate-400 dark:text-navy-300">
                                    {{ $user->email }}
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col pt-2 pb-5">
                            <a wire:navigate href="#"
                                class="flex items-center px-4 py-2 space-x-3 tracking-wide transition-all outline-none group hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                <div class="flex items-center justify-center text-white rounded-lg size-8 bg-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </div>
                                <div>
                                    <h2
                                        class="font-medium transition-colors text-slate-700 group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                        Profile
                                    </h2>
                                    <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                        Your profile setting
                                    </div>
                                </div>
                            </a>
                            <a wire:navigate href="#"
                                class="flex items-center px-4 py-2 space-x-3 tracking-wide transition-all outline-none group hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                <div class="flex items-center justify-center text-white rounded-lg size-8 bg-info">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </div>

                                <div>
                                    <h2
                                        class="font-medium transition-colors text-slate-700 group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                        Messages
                                    </h2>
                                    <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                        Your messages and tasks
                                    </div>
                                </div>
                            </a>
                            <a wire:navigate href="#"
                                class="flex items-center px-4 py-2 space-x-3 tracking-wide transition-all outline-none group hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                <div
                                    class="flex items-center justify-center text-white rounded-lg size-8 bg-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>

                                <div>
                                    <h2
                                        class="font-medium transition-colors text-slate-700 group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                        Team
                                    </h2>
                                    <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                        Your team activity
                                    </div>
                                </div>
                            </a>
                            <a wire:navigate href="#"
                                class="flex items-center px-4 py-2 space-x-3 tracking-wide transition-all outline-none group hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                <div class="flex items-center justify-center text-white rounded-lg size-8 bg-error">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </div>

                                <div>
                                    <h2
                                        class="font-medium transition-colors text-slate-700 group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                        Activity
                                    </h2>
                                    <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                        Your activity and events
                                    </div>
                                </div>
                            </a>
                            <a wire:navigate href="#"
                                class="flex items-center px-4 py-2 space-x-3 tracking-wide transition-all outline-none group hover:bg-slate-100 focus:bg-slate-100 dark:hover:bg-navy-600 dark:focus:bg-navy-600">
                                <div class="flex items-center justify-center text-white rounded-lg size-8 bg-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>

                                <div>
                                    <h2
                                        class="font-medium transition-colors text-slate-700 group-hover:text-primary group-focus:text-primary dark:text-navy-100 dark:group-hover:text-accent-light dark:group-focus:text-accent-light">
                                        Settings
                                    </h2>
                                    <div class="text-xs text-slate-400 line-clamp-1 dark:text-navy-300">
                                        Webapp settings
                                    </div>
                                </div>
                            </a>
                            <div class="px-4 mt-3">
                                <form method="GET" action="{{ route('logout') }}">
                                    @method('GET')
                                    <button type="submit"
                                        class="w-full space-x-2 text-white btn h-9 bg-primary hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <span>Logout</span>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
