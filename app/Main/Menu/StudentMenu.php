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
                    'title' => 'Beranda',
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
                    'title' => 'Pembelajaran',
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
                            'route' => 'student.learning.tahsin.materi',
                        ],
                        [
                            'title' => 'Riwayat Tahsin',
                            'route' => 'student.learning.tahsin.riwayat',
                        ],
                    ],

                ],
                [
                    'title' => 'Tahfidz',
                    'route' => 'student.learning.tahfidz',
                    'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="none" class="size-6">
                            <path fill="currentColor" d="M0 96C0 43 43 0 96 0l96 0 0 190.7c0 13.4 15.5 20.9 26 12.5L272 160l54 43.2c10.5 8.4 26 .9 26-12.5L352 0l32 0 32 0c17.7 0 32 14.3 32 32l0 320c0 17.7-14.3 32-32 32l0 64c17.7 0 32 14.3 32 32s-14.3 32-32 32l-32 0L96 512c-53 0-96-43-96-96L0 96zM64 416c0 17.7 14.3 32 32 32l256 0 0-64L96 384c-17.7 0-32 14.3-32 32z"/>
                        </svg>',
                    'sub_menu' => [
                        [
                            'title' => 'Materi',
                            'route' => 'student.learning.tahfidz.materi',
                        ],
                        [
                            'title' => 'Sabaq (hafalan baru)',
                            'route' => 'student.learning.tahfidz.sabaq',
                        ],
                        [
                            'title' => 'Sabqi',
                            'route' => 'student.learning.tahfidz.sabqi',
                        ],
                        [
                            'title' => 'Manzil',
                            'route' => 'student.learning.tahfidz.manzil',
                        ],
                    ],
                ],
                [
                    'title' => 'Ujian',  // student.exam
                    'isDevider' => true,
                ],
                [
                    'title' => 'Sertifikasi',
                    'route' => 'student.exam.certification',
                    'icon' => '<svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M5 5C5 3.89543 5.89543 3 7 3H11.75C11.8881 3 12 3.11193 12 3.25V8C12 9.10457 12.8954 10 14 10H18.75C18.8881 10 19 10.1119 19 10.25V19C19 20.1046 18.1046 21 17 21H7C5.89543 21 5 20.1046 5 19V5Z" fill="#7E869E" fill-opacity="0.25"/>
                            <path fill="currentColor" d="M13 8V3.60355C13 3.38083 13.2693 3.26929 13.4268 3.42678L18.5732 8.57322C18.7307 8.73071 18.6192 9 18.3964 9H14C13.4477 9 13 8.55228 13 8Z" fill="#222222"/>
                            <path fill="currentColor" d="M8.5 13.5L14.5 13.5" stroke="#222222" stroke-linecap="round"/>
                            <path fill="currentColor" d="M8.5 16.5L13.5 16.5" stroke="#222222" stroke-linecap="round"/>
                        </svg>',
                    'sub_menu' => [],
                ],
                [
                    'title' => 'Ujian',
                    'route' => 'student.exam.placement',
                    'icon' => '<svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect fill="currentColor" x="5" y="3" width="14" height="18" rx="2" fill="#7E869E" fill-opacity="0.25"/>
                            <circle fill="currentColor" cx="15.5" cy="16.5" r="2" stroke="#222222"/>
                            <path fill="currentColor" d="M18 19L19.5 20.5" stroke="#222222" stroke-linecap="round"/>
                            <path fill="currentColor" d="M7.5 6.5L14.5 6.5" stroke="#222222" stroke-linecap="round"/>
                            <path fill="currentColor" d="M7.5 9.5L11.5 9.5" stroke="#222222" stroke-linecap="round"/>
                        </svg>',
                    'sub_menu' => [
                        [
                            'title' => 'Kenaikan Level',
                            'route' => 'student.exam.placement.level',
                        ],
                        [
                            'title' => 'Kenaikan Juz',
                            'route' => 'student.exam.placement.juz',
                        ],
                    ],
                ],
                [
                    'title' => 'Lainnya',
                    'isDevider' => true,
                ],
                [
                    'title' => 'Raport',
                    'route' => 'student.raport',
                    'icon' => '<svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect fill="currentColor" x="3" y="3" width="18" height="18" rx="2" fill="#7E869E" fill-opacity="0.25"/>
                            <path fill="currentColor" d="M18 8L14.1047 12.8691C14.0488 12.9389 13.9447 12.9447 13.8815 12.8815L11.1161 10.1161C11.0538 10.0538 10.9513 10.0584 10.8948 10.1262L6 16" stroke="#222222" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>',
                    'sub_menu' => [],
                ],
                [
                    'title' => 'Ulasan',
                    'route' => 'student.review',
                    'icon' => '<svg class="size-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M10.1437 6.62758C10.9303 4.66658 11.3236 3.68608 12 3.68608C12.6763 3.68608 13.0696 4.66658 13.8562 6.62758L13.8928 6.7189C14.3372 7.82676 14.5594 8.3807 15.0123 8.71739C15.4651 9.05407 16.0596 9.10731 17.2485 9.21379L17.4634 9.23304C19.4092 9.4073 20.3822 9.49443 20.5903 10.1134C20.7985 10.7324 20.076 11.3897 18.6309 12.7044L18.1487 13.1432C17.4172 13.8087 17.0514 14.1415 16.8809 14.5776C16.8491 14.659 16.8227 14.7423 16.8018 14.8271C16.6897 15.2818 16.7968 15.7645 17.0111 16.73L17.0777 17.0305C17.4714 18.8048 17.6682 19.692 17.3246 20.0747C17.1961 20.2177 17.0292 20.3206 16.8438 20.3712C16.3476 20.5066 15.6431 19.9326 14.2342 18.7845C13.309 18.0306 12.8464 17.6537 12.3153 17.5689C12.1064 17.5355 11.8935 17.5355 11.6846 17.5689C11.1535 17.6537 10.6909 18.0306 9.76577 18.7845C8.35681 19.9326 7.65234 20.5066 7.15614 20.3712C6.97072 20.3206 6.80381 20.2177 6.67538 20.0747C6.33171 19.692 6.52854 18.8048 6.92222 17.0305L6.98889 16.73C7.2031 15.7645 7.31021 15.2818 7.19815 14.8271C7.17725 14.7423 7.15081 14.659 7.11901 14.5776C6.94854 14.1415 6.58279 13.8087 5.85128 13.1432L5.369 12.7044C3.92395 11.3897 3.20143 10.7324 3.40961 10.1134C3.61779 9.49443 4.5907 9.4073 6.53651 9.23304L6.75145 9.21379C7.94036 9.10731 8.53482 9.05407 8.98767 8.71739C9.44052 8.3807 9.66272 7.82676 10.1071 6.71889L10.1437 6.62758Z" stroke="#222222"/>
                            <path fill="currentColor" d="M17 6L19 4" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/>
                            <path fill="currentColor" d="M20 16L22 18" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/>
                            <path fill="currentColor" d="M12 19.5V22" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/>
                            <path fill="currentColor" d="M7 6L5 4" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/>
                            <path fill="currentColor" d="M4 16L2 18" stroke="#2A4157" stroke-opacity="0.24" stroke-linecap="round"/>
                        </svg>',
                    'sub_menu' => [],
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
