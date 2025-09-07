# Nusantara Explorer

Aplikasi web untuk menjelajahi kekayaan kuliner, budaya, dan informasi pariwisata Nusantara. Proyek ini dibangun menggunakan framework PHP Laravel dan _tools_ frontend modern.

## Daftar Isi

- [Nusantara Explorer](#nusantara-explorer)
  - [Daftar Isi](#daftar-isi)
  - [Fitur Utama](#fitur-utama)
  - [Prasyarat](#prasyarat)
  - [Panduan Instalasi](#panduan-instalasi)
  - [Menjalankan Aplikasi](#menjalankan-aplikasi)

---

## Fitur Utama

-   **Halaman Jelajah (Explore):** Menampilkan ringkasan data makanan, artikel, pustaka, dan _event_ terbaru.
-   **Halaman Budaya:** Menampilkan daftar kekayaan budaya (tari, musik, pakaian adat, dll.) yang diambil secara dinamis dari _database_.
-   **Sistem Otentikasi:** Fungsionalitas _login_ dan _register_ untuk pengguna.
-   **Halaman Profil Pengguna:** Menampilkan data profil pengguna, termasuk nama dan email.
-   **_Chatbot_:** Fitur interaktif untuk menjawab pertanyaan seputar Nusantara.
-   **Manajemen _Asset_:** Menggunakan `npm` untuk mengelola dan mengompilasi file CSS dan JavaScript.

---

## Prasyarat

Pastikan Anda telah menginstal _software_ berikut di komputer Anda:

-   **PHP** (versi 8.1 atau lebih tinggi)
-   **Composer**
-   **Node.js** & **npm**
-   **Git**
-   **Database** (MySQL, PostgreSQL, atau SQLite)

---

## Panduan Instalasi

Ikuti langkah-langkah di bawah ini untuk menyiapkan proyek di lingkungan lokal Anda.

1.  **Kloning Repositori**

    ```bash
    git clone [URL_REPOSITORI_ANDA]
    cd nama-proyek
    ```

2.  **Instalasi Dependensi PHP**

    Gunakan Composer untuk menginstal semua pustaka backend Laravel.

    ```bash
    composer install
    ```

3.  **Konfigurasi Lingkungan**

    Buat file `.env` dengan menyalin file `.env.example`.

    ```bash
    cp .env.example .env
    ```

4.  **Generasi Kunci Aplikasi**

    ```bash
    php artisan key:generate
    ```

5.  **Konfigurasi Database**

    Buka file `.env` dan atur detail koneksi _database_ Anda.

    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database_anda
    DB_USERNAME=username_database_anda
    DB_PASSWORD=password_database_anda
    ```

6.  **Jalankan Migrasi Database**

    Ini akan membuat tabel-tabel di _database_ Anda.

    ```bash
    php artisan migrate
    ```

7.  **Instalasi dan Kompilasi _Asset_ Frontend**

    Gunakan npm untuk menginstal dependensi JavaScript dan mengompilasi CSS/JS.

    ```bash
    npm install
    npm run dev  # atau npm run build untuk produksi
    ```

    Jika Anda mengalami error `Asset not found`, pastikan Anda sudah menjalankan perintah ini dan file CSS/JS ada di folder `public`.

---

## Menjalankan Aplikasi

Jalankan perintah berikut untuk memulai server pengembangan Laravel:

```bash
php artisan serve