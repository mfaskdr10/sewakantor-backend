# SewaKantor Backend

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Repositori ini merupakan backend dari aplikasi **Sewa Kantor**, sebuah platform untuk menyewa ruang kantor secara online. Backend dibangun menggunakan framework Laravel dan berfungsi sebagai RESTful API yang mendukung frontend berbasis React.

### ✅ Fitur

- Autentikasi dan otorisasi pengguna
- Manajemen data kantor (CRUD) menggunakan Filament
- Pencarian properti kantor
- Endpoint API untuk frontend

### ⚙️ Teknologi yang Digunakan

- **PHP >= 8.0**
- **Laravel**
- **MySQL**
- **Composer**
- **Sanctum** (untuk otentikasi berbasis token)
- **Laravel Migration**


### 📖 Prasyarat

Pastikan sudah menginstal:

- PHP >= 8.2
- Composer
- MySQL
- Git

### Langkah Instalasi

1. Clone repository:

   ```bash
   git clone https://github.com/mfaskdr10/sewakantor-backend.git
   cd sewakantor-backend
2. Install dependensi Laravel:
   ```bash
   composer install
3. Salin file konfigurasi .env:
   ```bash
   cp .env.example .env
4. Konfigurasikan database Anda di file .env:
   ```bash
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
5. Generate application key:
   ```bash
   php artisan key:generate
6. Jalankan migrasi:
   ```bash
   php artisan migrate
7. Jalankan server lokal:
   ```bash
   php artisan serve
Aplikasi backend akan berjalan di http://localhost:8000.

### Struktur Direktori
- **app/** – Model dan logika aplikasi
- **routes/api.php** – Rute-rute API
- **database/migrations/** – Struktur database
- **config/** – Konfigurasi aplikasi

