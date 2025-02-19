<div class="transition-all duration-700 ease-in-out main-sidebar" :class="isSidebarExpanded ? 'w-[17rem]' : ''">
    <div @mouseenter="isSidebarExpanded = $store.global.isSidebarExpanded ? true : true"
        @mouseleave="isSidebarExpanded = $store.global.isSidebarExpanded ? true : false"
        class="flex flex-col items-start w-full h-full px-4 bg-white border-r border-slate-150 dark:border-navy-700 dark:bg-navy-800">
        <!-- Application Logo -->
        <div class="flex items-center justify-between w-full pt-4 overflow-hidden">
            <a wire:navigate href="/" class="flex items-center gap-2">
                <img class="transition-transform duration-1000 ease-in-out size-12 "
                    :class="isSidebarExpanded ? 'rotate-[360deg]' : '-rotate-[360deg]'"
                    src="{{ asset('logo/alimni-logo.svg') }}" alt="logo" />
                <div class="m-3 font-semibold uppercase text-md text-slate-500" x-show="isSidebarExpanded"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                    Alimni
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
                    <div class="min-h-5 max-h-5 m-3 font-semibold uppercase ease-in-out text-slate-500 overflow-hidden lineclamp-1 text-clip"
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

        </div>
    </div>
</div>
