@props([
    'routeBackButton' => null
])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    <link rel="icon" type="image/png" href="{{ asset('logo/alimni-logo.svg') }}" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @isset($title)
            {{ $title }} -
        @endisset {{ config('app.name') }}
    </title>

    @livewireStyles

    <!-- CSS & JS Assets -->
    @vite(['resources/js/app.js'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <script>
        /**
         * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
         */
        localStorage.getItem("_x_darkMode_on") === "true" &&
            document.documentElement.classList.add("dark");
    </script>

    @stack('head')

</head>

<body x-data x-bind="$store.global.documentBody"
    class="@isset($isSidebarPanelOpen) {{ $isSidebarPanelOpen === 'true' ? 'is-sidebar-panel-open' : '' }} @endisset @isset($isHeaderBlur) {{ $isHeaderBlur === 'true' ? 'is-header-blur' : '' }} @endisset @isset($hasMinSidebar) {{ $hasMinSidebar === 'true' ? 'has-min-sidebar' : '' }} @endisset  @isset($headerSticky) {{ $headerSticky === 'false' ? 'is-header-not-sticky' : '' }} @endisset bg-gradient-to-tr from-primary-alimni-400  via-primary-alimni-200 to-amber-100" >

    <div class="fixed top-0 left-0 w-screen h-screen bg-top bg-contain -z-5 bg-origin-content backdrop-blur-xl" style="background-image: url('{{ asset('images/bg-pattern-1.svg') }}')"></div>
    <div class="fixed top-0 left-0 w-screen h-screen backdrop-blur-xl -z-4"></div>

    <!-- Page Wrapper -->
    <div id="root" class="flex min-h-100vh grow dark:bg-navy-900" x-cloak x-data="{ isSidebarExpanded: $store.global.isSidebarExpanded }">

        <!-- App Header -->
        @switch($user->role_id)
            @case(\App\Main\Roles::ADMIN)
                <x-mobile.layouts.partials.headers.admin-header :$routeBackButton />
            @break

            @case(\App\Main\Roles::STUDENT)
                <x-mobile.layouts.partials.headers.student-header :$routeBackButton />
            @break

            @case(\App\Main\Roles::TEACHER)
                <x-mobile.layouts.partials.headers.teacher-header :$routeBackButton />
            @break

            @default
                <x-mobile.layouts.partials.headers.base-header :$routeBackButton />
        @endswitch

        <main class='main-content hidden-header w-full min-h-[100vh] pb-8 @isset($headerPage) !mt-0 @endisset'>

            @isset($breadcrumb)
                {{ $breadcrumb }}
            @endisset

            @isset($headerPage)
                <div {{ $headerPage->attributes->merge([]) }}>
                    {{ $headerPage }}
                </div>
            @endisset

            {{ $slot }}

        </main>

        <!-- Canvas -->
        <x-mobile.layouts.partials.menu-profile.student-menu-profile />

        @stack('canvas')

        <!-- Bottom Navbar -->
        @switch($user->role_id)
            @case(\App\Main\Roles::ADMIN)
                <x-mobile.layouts.partials.bottom-navbar.admin-bottom-navbar />
            @break

            @case(\App\Main\Roles::STUDENT)
                <x-mobile.layouts.partials.bottom-navbar.student-bottom-navbar />
            @break

            @case(\App\Main\Roles::TEACHER)
                <x-mobile.layouts.partials.bottom-navbar.teacher-bottom-navbar />
            @break

            @default
                <x-mobile.layouts.partials.bottom-navbar.base-bottom-navbar />
        @endswitch

    </div>

    <!--
        This is a place for Alpine.js Teleport feature
        @see https://alpinejs.dev/directives/teleport
    -->
    <div id="x-teleport-target"></div>


    @livewireScriptConfig

    {{-- @livewireScripts --}}

    <script>
        window.addEventListener("DOMContentLoaded", () => Livewire.start());
    </script>

    @isset($headerPage)
        <script>
            function handleScrollHeader(domId) {
                const header = document.getElementById(domId);
                let lastScrollTop = 0;
                header.classList.add('hidden');

                window.addEventListener('scroll', function() {
                    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                    if (scrollTop <= 50) {
                        // At the top of the page or within 50px
                        header.classList.add('hidden');
                    } else if (scrollTop > lastScrollTop) {
                        // Scrolling down
                        header.classList.remove('hidden');
                    } else {
                        // Scrolling up
                        header.classList.remove('hidden');
                    }

                    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
                });
            }

            document.addEventListener('DOMContentLoaded', function() {
                handleScrollHeader('header');
            });

            document.addEventListener('livewire:navigated', function() {
                handleScrollHeader('header');
            });
        </script>
    @endisset

    <script>
        function handleScrollSticky(domId) {
            let lastScrollTop = 0;
            const bottomNavbar = document.getElementById(domId);

            window.addEventListener('scroll', function() {
                let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

                if (scrollTop > lastScrollTop) {
                    // Scrolling down
                    bottomNavbar.classList.remove('show');
                } else {
                    // Scrolling up
                    bottomNavbar.classList.add('show');
                }

                lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            handleScrollSticky('bottom-navbar');
        });

        document.addEventListener('livewire:navigated', function() {
            handleScrollSticky('bottom-navbar');
        });
    </script>

    @stack('scripts')

</body>

</html>
