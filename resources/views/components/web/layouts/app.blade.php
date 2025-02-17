<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} @isset($title)
            - {{ $title }}
        @endisset
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
    class="@isset($isSidebarPanelOpen) {{ $isSidebarPanelOpen === 'true' ? 'is-sidebar-panel-open' : '' }} @endisset @isset($isHeaderBlur) {{ $isHeaderBlur === 'true' ? 'is-header-blur' : '' }} @endisset @isset($hasMinSidebar) {{ $hasMinSidebar === 'true' ? 'has-min-sidebar' : '' }} @endisset  @isset($headerSticky) {{ $headerSticky === 'false' ? 'is-header-not-sticky' : '' }} @endisset">

    <!-- App preloader-->
    {{-- <x-web.layouts.app-preloader></x-web.layouts.app-preloader>  --}}

    <!-- Page Wrapper -->
    <div id="root" class="flex min-h-100vh grow bg-slate-50 dark:bg-navy-900" x-cloak x-data="{ isSidebarExpanded: $store.global.isSidebarExpanded }">
        <!-- Sidebar -->
        <div class="sidebar print:hidden">
            <!-- Main Sidebar -->
            <x-web.layouts.app-partials.main-sidebar></x-web.layouts.app-partials.main-sidebar>

        </div>

        <!-- App Header -->
        <x-web.layouts.app-partials.header></x-web.layouts.app-partials.header>

        <!-- Mobile Searchbar -->
        <x-web.layouts.app-partials.mobile-searchbar></x-web.layouts.app-partials.mobile-searchbar>

        <!-- Right Sidebar -->
        <x-web.layouts.app-partials.right-sidebar></x-web.layouts.app-partials.right-sidebar>

        {{-- @isset($main)
        <main {{ $main->attributes->merge(['class' => 'main-content w-full px-[var(--margin-x)] min-h-[100vh] pb-8']) }}>

            @isset($breadcrumb)
            {{ $breadcrumb }}
            @endisset

            {{ $main }}

        </main>
        @endisset --}}

        <main class="main-content w-full px-[var(--margin-x)] min-h-[100vh] pb-8'">
            @isset($breadcrumb)
            {{ $breadcrumb }}
            @endisset

            {{ $slot }}

        </main>

    </div>

    <!--
        This is a place for Alpine.js Teleport feature
        @see https://alpinejs.dev/directives/teleport
    -->
    <div id="x-teleport-target"></div>


    @livewireScriptConfig

    @livewireScripts

    <script>
        // window.addEventListener("DOMContentLoaded", () => Alpine.start());
        window.addEventListener("DOMContentLoaded", () => Livewire.start());
    </script>



    @stack('script')

</body>

</html>
