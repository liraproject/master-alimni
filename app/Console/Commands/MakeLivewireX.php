<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeLivewireX extends Command
{
    protected $signature = 'make:livewire-x {name}';

    protected $description = 'Buat Livewire component dengan struktur custom (web & mobile)';

    public function handle()
    {
        try {
            $name = $this->argument('name');

            // Jalankan perintah bawaan Livewire
            $artisan = Artisan::call("make:livewire {$name}");

            // Konversi nama ke path yang benar
            $componentPath = resource_path('views/livewire/'.str_replace('/-', '/', str_replace('.', '/', Str::kebab($name))));
            $webPath = explode('/', resource_path('views/livewire/web/'.str_replace('/-', '/', str_replace('.', '/', Str::kebab($name)))));
            $mobilePath = explode('/', resource_path('views/livewire/mobile/'.str_replace('/-', '/', str_replace('.', '/', Str::kebab($name)))));
            // $this->info("bismillah \n" . $componentPath . "\n" . implode('/', $webPath) . "\n" . implode('/', $mobilePath));

            $webFile = array_pop($webPath).'.blade.php';
            $mobileFile = array_pop($mobilePath).'.blade.php';

            // Buat folder web & mobile
            File::ensureDirectoryExists(implode('/', $webPath));
            File::ensureDirectoryExists(implode('/', $mobilePath));

            $componentView = $componentPath.'.blade.php';
            $webView = implode('/', $webPath).'/'.$webFile;
            $mobileView = implode('/', $mobilePath).'/'.$mobileFile;

            if (File::exists($componentView)) {
                File::move($componentView, $webView);

                // Menghapus direktori kosong yang dilewati
                $directories = explode('/', $componentView);
                array_pop($directories); // Menghapus nama file dari array

                while (! empty($directories)) {
                    $directoryPath = implode('/', $directories);
                    if (File::isDirectory($directoryPath) && File::isEmptyDirectory($directoryPath)) {
                        File::deleteDirectory($directoryPath);
                    }
                    array_pop($directories); // Naik satu level ke atas
                }
            }

            // Buat file tambahan untuk mobile jika belum ada
            if (! File::exists($mobileView)) {
                File::put($mobileView, "<div>\n    <!-- Mobile View: $name -->\n</div>");
            }

            $this->info("Livewire component '{$name}' '".$artisan."' berhasil dibuat dengan struktur custom!");
        } catch (\Exception $e) {
            $this->error($e->getMessage());
        }
    }
}
