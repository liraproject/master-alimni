<?php

namespace App\Main\Menu;

class StudentMenu
{
    public static function sidebar()
    {
        return [
            'title' => 'Dashboard Pengampu',
            'menu' => [
                [
                    'title' => 'Dashboard',
                    'route' => 'student.dashboard',
                    'icon' => '<svg class="size-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-opacity=".3"
                        d="M5 14.059c0-1.01 0-1.514.222-1.945.221-.43.632-.724 1.453-1.31l4.163-2.974c.56-.4.842-.601 1.162-.601.32 0 .601.2 1.162.601l4.163 2.974c.821.586 1.232.88 1.453 1.31.222.43.222.935.222 1.945V19c0 .943 0 1.414-.293 1.707C18.414 21 17.943 21 17 21H7c-.943 0-1.414 0-1.707-.293C5 20.414 5 19.943 5 19v-4.94Z" />
                        <path fill="currentColor"
                        d="M3 12.387c0 .267 0 .4.084.441.084.041.19-.04.4-.204l7.288-5.669c.59-.459.885-.688 1.228-.688.343 0 .638.23 1.228.688l7.288 5.669c.21.163.316.245.4.204.084-.04.084-.174.084-.441v-.409c0-.48 0-.72-.102-.928-.101-.208-.291-.355-.67-.65l-7-5.445c-.59-.459-.885-.688-1.228-.688-.343 0-.638.23-1.228.688l-7 5.445c-.379.295-.569.442-.67.65-.102.208-.102.448-.102.928v.409Z" />
                        <path fill="currentColor" d="M11.5 15.5h1A1.5 1.5 0 0 1 14 17v3.5h-4V17a1.5 1.5 0 0 1 1.5-1.5Z" />
                        <path fill="currentColor"
                        d="M17.5 5h-1a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5Z" />
                    </svg>',
                    'sub_menu' => [],
                ],
                [
                    'title' => 'Profil',
                    'route' => 'student.profile',
                    'icon' => '<svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle fill="currentColor" cx="12" cy="8" r="4" fill="#222222"/>
                        <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M12 13C8.33033 13 5.32016 15.4204 5.02395 18.5004C4.99752 18.7753 5.22389 19 5.50003 19H18.5C18.7762 19 19.0025 18.7753 18.9761 18.5004C18.6799 15.4204 15.6697 13 12 13Z" fill="#7E869E" fill-opacity="0.25"/>
                    </svg>',
                    'sub_menu' => [],
                ],
                [
                    'title' => 'Pendaftaran',
                    'route' => 'student.registration',
                    'icon' => '<svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect fill="currentColor" x="5" y="8" width="11" height="13" rx="2" fill="#7E869E" fill-opacity="0.25"/>
                            <path fill="currentColor" d="M8 14L14 14" stroke="#222222" stroke-width="1.2" stroke-linecap="round"/>
                            <path fill="currentColor" d="M8 11L12 11" stroke="#222222" stroke-width="1.2" stroke-linecap="round"/>
                            <path fill="currentColor" d="M8 17L12 17" stroke="#222222" stroke-width="1.2" stroke-linecap="round"/>
                            <path fill="currentColor" d="M19 13V15C19 17.8284 19 19.2426 18.1213 20.1213C17.2426 21 15.8284 21 13 21H11C8.17157 21 6.75736 21 5.87868 20.1213C5 19.2426 5 17.8284 5 15V9C5 6.17157 5 4.75736 5.87868 3.87868C6.75736 3 8.17157 3 11 3H12" stroke="#222222" stroke-width="1.2" stroke-linecap="round"/>
                            <path fill="currentColor" d="M18 3L18 9" stroke="#222222" stroke-width="1.2" stroke-linecap="round"/>
                            <path fill="currentColor" d="M21 6L15 6" stroke="#222222" stroke-width="1.2" stroke-linecap="round"/>
                        </svg>',
                    'sub_menu' => [],
                ],
                [
                    'title' => 'PROGRAM & MATERI',
                    'isDevider' => true,
                ],
                [
                    'title' => 'Tahsin',
                    'route' => 'student.tahsin',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="none" class="size-6">
                            <path fill="currentColor" d="M352 0c53 0 96 43 96 96l0 320c0 53-43 96-96 96L64 512l-32 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l0-64c-17.7 0-32-14.3-32-32L0 32C0 14.3 14.3 0 32 0L64 0 352 0zm0 384L96 384l0 64 256 0c17.7 0 32-14.3 32-32s-14.3-32-32-32zM274.1 150.2l-8.9 21.4-23.1 1.9c-5.7 .5-8 7.5-3.7 11.2L256 199.8l-5.4 22.6c-1.3 5.5 4.7 9.9 9.6 6.9L280 217.2l19.8 12.1c4.9 3 10.9-1.4 9.6-6.9L304 199.8l17.6-15.1c4.3-3.7 2-10.8-3.7-11.2l-23.1-1.9-8.9-21.4c-2.2-5.3-9.6-5.3-11.8 0zM96 192c0 70.7 57.3 128 128 128c25.6 0 49.5-7.5 69.5-20.5c3.2-2.1 4.5-6.2 3.1-9.7s-5.2-5.6-9-4.8c-6.1 1.2-12.5 1.9-19 1.9c-52.4 0-94.9-42.5-94.9-94.9s42.5-94.9 94.9-94.9c6.5 0 12.8 .7 19 1.9c3.8 .8 7.5-1.3 9-4.8s.2-7.6-3.1-9.7C273.5 71.5 249.6 64 224 64C153.3 64 96 121.3 96 192z"/>
                        </svg>',
                    'sub_menu' => [
                        [
                            'title' => 'Materi',
                            'route' => 'student.tahsin.material',
                        ],
                        [
                            'title' => 'Riwayat Belajar',
                            'route' => 'student.tahsin.history',
                        ],
                    ],

                ],
                [
                    'title' => 'Tahfidz',
                    'route' => 'student.tahfidz',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="none" class="size-6">
                            <path fill="currentColor" d="M0 96C0 43 43 0 96 0l96 0 0 190.7c0 13.4 15.5 20.9 26 12.5L272 160l54 43.2c10.5 8.4 26 .9 26-12.5L352 0l32 0 32 0c17.7 0 32 14.3 32 32l0 320c0 17.7-14.3 32-32 32l0 64c17.7 0 32 14.3 32 32s-14.3 32-32 32l-32 0L96 512c-53 0-96-43-96-96L0 96zM64 416c0 17.7 14.3 32 32 32l256 0 0-64L96 384c-17.7 0-32 14.3-32 32z"/>
                        </svg>',
                    'sub_menu' => [
                        [
                            'title' => 'Materi',
                            'route' => 'student.tahfidz.material',
                        ],
                        [
                            'title' => 'Riwayat Setoran',
                            'route' => 'student.tahfidz.history',
                        ],
                        [
                            'title' => 'Murojaah',
                            'route' => 'student.tahfidz.murojaah',
                        ],
                    ],
                ],
                [
                    'title' => 'LAPORAN BELAJAR',
                    'isDevider' => true,
                ],
                [
                    'title' => 'Sertifikasi',
                    'route' => 'student.certification',
                    'icon' => '<svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect fill="currentColor" x="5" y="3" width="11" height="13" rx="2" fill="#7E869E" fill-opacity="0.25"/>
                            <path fill="currentColor" d="M9 7L13 7" stroke="#222222" stroke-width="1.2" stroke-linecap="round"/>
                            <path fill="currentColor" d="M9 15L12 15" stroke="#222222" stroke-width="1.2" stroke-linecap="round"/>
                            <path fill="currentColor" d="M9 11L15 11" stroke="#222222" stroke-width="1.2" stroke-linecap="round"/>
                            <path fill="currentColor" d="M19 11V9C19 6.17157 19 4.75736 18.1213 3.87868C17.2426 3 15.8284 3 13 3H11C8.17157 3 6.75736 3 5.87868 3.87868C5 4.75736 5 6.17157 5 9V15C5 17.8284 5 19.2426 5.87868 20.1213C6.75736 21 8.17157 21 11 21H12" stroke="#222222" stroke-width="1.2" stroke-linecap="round"/>
                            <circle fill="currentColor" cx="17.5" cy="17.5" r="2.5" stroke="#222222" stroke-width="1.2" stroke-linecap="round"/>
                            <path fill="currentColor" d="M21 21L19.5 19.5" stroke="#222222" stroke-width="1.2" stroke-linecap="round"/>
                        </svg>',
                    'sub_menu' => [
                        [
                            'title' => 'Kenaikan Level',
                            'route' => 'student.certification.level',
                        ],
                        [
                            'title' => 'Ulasan',
                            'route' => 'student.certification.review',
                        ],
                        [
                            'title' => 'Kenaikan Juz',
                            'route' => 'student.certification.juz',
                        ],
                    ],
                ],
                [
                    'title' => 'Rapor',
                    'route' => 'student.report-card',
                    'icon' => '<svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect fill="currentColor" x="3" y="3" width="18" height="18" rx="2" fill="#7E869E" fill-opacity="0.25"/>
                            <path fill="currentColor" d="M18 8L14.1047 12.8691C14.0488 12.9389 13.9447 12.9447 13.8815 12.8815L11.1161 10.1161C11.0538 10.0538 10.9513 10.0584 10.8948 10.1262L6 16" stroke="#222222" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>',
                    'sub_menu' => [],
                ],
                [
                    'title' => 'Lainnya',
                    'isDevider' => true,
                ],
                [
                    'title' => 'Akun Anda',
                    'route' => 'student.account',
                    'icon' => '<svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle fill="currentColor" cx="12" cy="9" r="3" fill="#222222"/>
                            <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M17.4514 15.9084C17.5088 16.0121 17.4793 16.1415 17.3843 16.2125C15.8828 17.3352 14.0191 18 12.0001 18C9.98102 18 8.11725 17.3351 6.61576 16.2124C6.52078 16.1414 6.49125 16.0121 6.54868 15.9083C7.49884 14.1915 9.58245 13 12 13C14.4176 13 16.5012 14.1915 17.4514 15.9084Z" fill="#7E869E" fill-opacity="0.25"/>
                            <path fill="currentColor" d="M17.5 3.5H17.7C19.4913 3.5 20.387 3.5 20.9435 4.0565C21.5 4.61299 21.5 5.50866 21.5 7.3V7.5" stroke="#222222" stroke-linecap="round"/>
                            <path fill="currentColor" d="M17.5 20.5H17.7C19.4913 20.5 20.387 20.5 20.9435 19.9435C21.5 19.387 21.5 18.4913 21.5 16.7V16.5" stroke="#222222" stroke-linecap="round"/>
                            <path fill="currentColor" d="M6.5 3.5H6.3C4.50866 3.5 3.61299 3.5 3.0565 4.0565C2.5 4.61299 2.5 5.50866 2.5 7.3V7.5" stroke="#222222" stroke-linecap="round"/>
                            <path fill="currentColor" d="M6.5 20.5H6.3C4.50866 20.5 3.61299 20.5 3.0565 19.9435C2.5 19.387 2.5 18.4913 2.5 16.7V16.5" stroke="#222222" stroke-linecap="round"/>
                        </svg>',
                    'sub_menu' => [],
                ],
            ],
        ];
    }

    public static function bottom() {}

    public static function all()
    {
        return [self::sidebar(), self::bottom()];
    }
}
