# Laravel Project

Laravel adalah kerangka kerja aplikasi web yang menyediakan sintaks yang ekspresif dan elegan untuk pengembangan web. Ini menyederhanakan tugas-tugas umum seperti routing, dependency injection, penyimpanan sesi dan cache, ORM database, migrasi skema, pemrosesan pekerjaan latar belakang, dan penyiaran acara real-time.

## Memulai

Untuk memulai dengan Laravel, Anda dapat merujuk ke dokumentasi yang luas dan menyeluruh di [https://laravel.com/docs](https://laravel.com/docs). Anda juga dapat mencoba Laravel Bootcamp ([https://bootcamp.laravel.com](https://bootcamp.laravel.com)) atau menjelajahi perpustakaan tutorial video di Laracasts ([https://laracasts.com](https://laracasts.com)).

### Prasyarat

- PHP ^8.2
- Composer
- Node.js dengan npm

### Instalasi

1. Clone repository ini:
    ```bash
    git clone https://github.com/sandiindika/test-sanstoko.git
    cd test-sanstoko
    ```

2. Instal dependensi PHP:
    ```bash
    composer install
    ```

3. Instal dependensi Node.js:
    ```bash
    npm install
    ```

4. Salin file `.env.example` ke `.env` dan sesuaikan konfigurasi sesuai kebutuhan Anda:
    ```bash
    cp .env.example .env
    ```

5. Generate kunci aplikasi:
    ```bash
    php artisan key:generate
    ```

6. Jalankan migrasi database:
    ```bash
    php artisan migrate
    ```

7. Jalankan seeder database (opsional):
    ```bash
    php artisan db:seed
    ```

8. Jalankan server pengembangan:
    ```bash
    php artisan serve
    ```

### Struktur Proyek

- `app`: Berisi file inti aplikasi, termasuk controller, service provider, dan model.
- `bootstrap`: Menyimpan file bootstrap aplikasi, seperti `app.php` dan `providers.php`.
- `config`: Menyimpan file konfigurasi aplikasi, seperti `app.php`, `auth.php`, dan lainnya.
- `database`: Menyimpan file terkait database, termasuk migrasi dan seeder, serta pabrik untuk menghasilkan catatan database.
- `public`: Berisi file yang dapat diakses publik, seperti `index.php`, `favicon.ico`, dan `robots.txt`.
- `resources`: Menyimpan sumber daya frontend aplikasi, termasuk CSS, JavaScript, dan template Blade.
- `routes`: Berisi file routing aplikasi, seperti `web.php` dan `console.php`.
- `storage`: Menyimpan file penyimpanan aplikasi, seperti data cache dan file yang diunggah.
- `tests`: Berisi file pengujian aplikasi, termasuk kasus pengujian dan suite pengujian.

### Modul

Proyek ini menggunakan package `nwidart/laravel-modules` untuk modularisasi. Modul yang ada saat ini adalah `Shop`.

#### Struktur Modul `Shop`

- `Config`: Konfigurasi khusus modul.
- `Console`: Perintah artisan khusus modul.
- `Database`: Berisi migrasi, seeder, dan pabrik khusus modul.
- `Http`: Berisi controller, middleware, dan request khusus modul.
- `Providers`: Berisi service provider khusus modul.
- `Resources`: Berisi aset, bahasa, dan view khusus modul.
- `Routes`: Berisi file routing khusus modul.
- `Tests`: Berisi pengujian khusus modul.

### Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan buat pull request atau buka issue di GitHub.

### Keamanan

Jika Anda menemukan kerentanan keamanan dalam proyek ini, harap laporkan melalui email ke [sandidikaputra@gmail.com]. Semua kerentanan keamanan akan ditangani segera.

### Lisensi

Proyek ini adalah perangkat lunak open-source yang dilisensikan di bawah lisensi [MIT](LICENSE).
