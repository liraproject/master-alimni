Welcome to Alimni Learning App

# ![Alimni Logo](https://drive.google.com/file/d/1d2xS9GqhaUL4NOPfzegTebT-TDVvPMyN/view?usp=sharing) Alimni - Aplikasi Belajar Online Terbaik

Selamat datang di Alimni, aplikasi belajar online terbaik sepanjang masa!
'#'runToBeEternal

## Template

- **Web**: [LiveOne (Lineone x Livewire)](https://www.notion.so/LiveOne-18618c3ddd11808f812aeaebf01439fb)
- **Mobile**: Sticky Mobile

## Attributions

### Package

1. [DomPDF](https://github.com/barryvdh/laravel-dompdf)
2. [Laravel Excel](https://docs.laravel-excel.com/3.1/getting-started/installation.html)
3. [Image Intervention (for compress uploaded image)](https://image.intervention.io/v3/introduction/installation)
4. [Mobiledetect](https://docs.mobiledetect.net/home/install)
5. [Simple QR-Code](https://github.com/simplesoftwareio/simple-qrcode?tab=readme-ov-file)

### Icons

- [Heroicons]()
- [Fontawesome]()
- [1600 Icons]()

### Icons

- [Poppins]()
- [Inter]()

### Third-Party Library in LineOne

| Library     | Official/Documentation Page                                                                                    |
| ----------- | -------------------------------------------------------------------------------------------------------------- |
| TailwindCSS | [https://tailwindcss.com/](https://tailwindcss.com/)                                                           |
| Iodine      | [https://github.com/mattkingshott/iodine](https://github.com/mattkingshott/iodine)                             |
| Popperjs    | [https://popper.js.org/](https://popper.js.org/)                                                               |
| Apexcharts  | [https://apexcharts.com/](https://apexcharts.com/)                                                             |
| Cleave.js   | [https://nosir.github.io/cleave.js/](https://nosir.github.io/cleave.js/)                                       |
| Day.js      | [https://day.js.org/](https://day.js.org/)                                                                     |
| Filepond    | [https://pqina.nl/filepond/](https://pqina.nl/filepond/)                                                       |
| Flatpickr   | [https://flatpickr.js.org/](https://flatpickr.js.org/)                                                         |
| Gridjs      | [https://gridjs.io/](https://gridjs.io/)                                                                       |
| Quill       | [https://www.quill.org/](https://www.quill.org/)                                                               |
| Simplebar   | [https://github.com/Grsmto/simplebar](https://github.com/Grsmto/simplebar)                                     |
| Sortablejs  | [https://sortablejs.github.io/Sortable/](https://sortablejs.github.io/Sortable/)                               |
| Swiper      | [https://swiperjs.com/](https://swiperjs.com/)                                                                 |
| Tippy.js    | [https://atomiks.github.io/tippyjs/v6/getting-started/](https://atomiks.github.io/tippyjs/v6/getting-started/) |
| Toastify-js | [https://apvarun.github.io/toastify-js/](https://apvarun.github.io/toastify-js/)                               |
| Tom-select  | [https://tom-select.js.org/](https://tom-select.js.org/)                                                       |

## Kuliah Singkat

### A. Cara Menambahkan Role

1. Tambah di seeder / sql database di table roles
2. Tambahkan Properti di `app/Main/Role.php`
3. Tambahkan Middleware di `bootstrap/app.php`
4. Tambahkan Routes di `route/` (buat file `role.php` lagi)
5. Tambahkan Redirect di Login method di `app/Http/Controllers/AuthController.php`
6. Tambahkan Sidebar Menu:
    - Buat File `RoleMenu.php` di `app/Main/Menu/`
    - Daftarkan di `app/Http/View/Composers/SidebarComposer.php`
7. Edit Layout untuk menambahkan Header dan Bottom Navigation:
    - **Web**: `resources/views/components/web/layouts/app.blade.php`
    - **Mobile**: `resources/views/components/mobile/layouts/app.blade.php`

## B. Dokumentasi Components

- **Web**: [LiveOne (Lineone x Livewire)](https://www.notion.so/LiveOne-18618c3ddd11808f812aeaebf01439fb)

#### 1. Cara menggunakan Chart

_Coming soon_

#### 2. Cara menggunakan Notification (alternatif toastr)

_Coming soon_

#### 1. Cara menggunakan Table

_Coming soon_

## C. User Testing

1. Admin
   username : admin
   password : 123456
2. Teacher
   username : teacher
   password : 123456
3. Student
   username : student 1 / student 2 / student 3
   password : 123456
