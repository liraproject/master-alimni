<div id="bottom-navbar" class="flex justify-center block pointer-events-none show sticky-bottom-navbar md:hidden">
    <div class="flex items-start justify-center px-4 py-1 mx-auto space-x-1 bg-white border rounded-full shadow-lg pointer-events-auto border-slate-150 dark:border-navy-700 dark:bg-navy-900">

        <x-web.nav.bottom-nav-item
            text="Materi"
            route="student.menu.material"
            :isRoutes="[
                'student.menu.material',
                'student.tahsin.material',
                'student.tahsin.history',
                'student.tahfidz.material',
                'student.tahfidz.history',
                'student.tahfidz.murajaah',
            ]"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd" />
            </svg>
        </x-web.nav.bottom-nav-item>
        <x-web.nav.bottom-nav-item
            text="Sertifikasi"
            route="student.menu.certification"
            :isRoutes="[
                'student.menu.certification',
                'student.certification.level',
                'student.certification.juz',
                'student.report-card'
            ]"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                    clip-rule="evenodd" />
            </svg>
        </x-web.nav.bottom-nav-item>
        <x-web.nav.bottom-nav-item
            text="Home"
            route="student.dashboard"
            :isRoutes="['student.dashboard']"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor">
                <path
                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
        </x-web.nav.bottom-nav-item>
        <x-web.nav.bottom-nav-item
            text="Ulasan"
            route="student.certification.review"
            :isRoutes="[
                'student.certification.review',
            ]"
        >
            <svg class="size-5 shrink-0" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1437 6.62758C10.9303 4.66658 11.3236 3.68608 12 3.68608C12.6763 3.68608 13.0696 4.66658 13.8562 6.62758L13.8928 6.7189C14.3372 7.82676 14.5594 8.3807 15.0123 8.71739C15.4651 9.05407 16.0596 9.10731 17.2485 9.21379L17.4634 9.23304C19.4092 9.4073 20.3822 9.49443 20.5903 10.1134C20.7985 10.7324 20.076 11.3897 18.6309 12.7044L18.1487 13.1432C17.4172 13.8087 17.0514 14.1415 16.8809 14.5776C16.8491 14.659 16.8227 14.7423 16.8018 14.8271C16.6897 15.2818 16.7968 15.7645 17.0111 16.73L17.0777 17.0305C17.4714 18.8048 17.6682 19.692 17.3246 20.0747C17.1961 20.2177 17.0292 20.3206 16.8438 20.3712C16.3476 20.5066 15.6431 19.9326 14.2342 18.7845C13.309 18.0306 12.8464 17.6537 12.3153 17.5689C12.1064 17.5355 11.8935 17.5355 11.6846 17.5689C11.1535 17.6537 10.6909 18.0306 9.76577 18.7845C8.35681 19.9326 7.65234 20.5066 7.15614 20.3712C6.97072 20.3206 6.80381 20.2177 6.67538 20.0747C6.33171 19.692 6.52854 18.8048 6.92222 17.0305L6.98889 16.73C7.2031 15.7645 7.31021 15.2818 7.19815 14.8271C7.17725 14.7423 7.15081 14.659 7.11901 14.5776C6.94854 14.1415 6.58279 13.8087 5.85128 13.1432L5.369 12.7044C3.92395 11.3897 3.20143 10.7324 3.40961 10.1134C3.61779 9.49443 4.5907 9.4073 6.53651 9.23304L6.75145 9.21379C7.94036 9.10731 8.53482 9.05407 8.98767 8.71739C9.44052 8.3807 9.66272 7.82676 10.1071 6.71889L10.1437 6.62758Z" stroke="#222222"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17 6L19 4" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 16L22 18" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 19.5V22" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7 6L5 4" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 16L2 18" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/>
            </svg>

        </x-web.nav.bottom-nav-item>
        <x-web.nav.bottom-nav-item
            text="Menu"
            route="student.menu.main"
            :isRoutes="[
                'student.menu.main',
            ]"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                    clip-rule="evenodd" />
            </svg>
        </x-web.nav.bottom-nav-item>
    </div>
</div>
