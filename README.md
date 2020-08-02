<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Ruang Baca
Ruang Baca Adalah web untuk melihat koleksi buku yang dimiliki oleh Ruang Baca. Disini pengguna dapat melihat-lihat daftar buku dan melihat informasi buku dengan detail.
Admin dapat mengubah, menambah, menghapus dan melihat daftar buku. Sedangkan user hanya bisa melihat data buku

## Technology used in this app 
1. HTML
2. CSS
3. PHP
4. Laravel Framework

## Role

1. Disini ada 2 role, guest dan admin.
a. Role guest. Role ini dapa melihat koleksi buku apa saja yang dimiliki Ruang Baca, tetapi hanya melihat tidak mengedit, menambah ataupun menghapus. Melihat buku disini termasuk juga melihat cover buku, melihat detail data dari buku tersebut.
b. Role Admin. Role admin dapat menambah, mengubah dan menghapus data buku. Role admin disini awalnya sudah ada, tetapi jika ingin menambah admin harus melalui admin yang sudah ada.
Beginilah hak akses yang dimiliki role.

| No | Aksi                 | Akses guest | Akses admin |
| -- | -------------------- | ----------- | ----------- |
| 1  | Login dan register   | Tidak       | Ya          |
| 2  | Melihat daftar buku  | Ya          | Ya          |
| 3  | Melihat detail buku  | Ya          | Ya          |
| 4  | Menambah data buku   | Tidak       | Ya          |
| 5  | Mengubah data buku   | Tidak       | Ya          |
| 6  | Menghapus data buku  | Tidak       | Ya          |

## Fitur-fitur

### 1. Login

Pengguna yang memiliki akun yaitu pengguna yang memiliki role admin dapat login dengan cara memasukkan email dan password yang telah didaftarkan.

<img src="/ss/login.png" height="400">

### 2. Register

Memilih menu register dapat dilakukan dengan meng-klik menu register pada navigation bar.

<img src="/ss/register.png">

Pada menu register, pengguna dapat mendaftarkan email dan password untuk admin baru. Tetapi yang dapat melakukan register hanyalah admin yang sudah ada.
Saat memilih menu register, maka admin sebelumnya otomatis akan logout.

<img src="/ss/register2.png" height="400">

Password yang dimasukkan minimal 8 karakter.
Setelah menekan tombol register maka akan otomatis login dengan akun yang baru didaftarkan

### 3. Logout

Logout dapat dilakukan dengan mengklik drop down menu di kanan atas, Maka akan langsung keluar dari sesi login si admin.

<img src="/ss/logout.png">

### 4. Melihat koleksi buku

**Role guest.**

Pada halaman utama, ditampilkan beberapa cover koleksi buku kami, dan ada tombol untuk lihat lebih yang mana akan diarahkan ke halaman daftar buku

<img src="/ss/read_guest.png" height="400">

Halaman daftar buku

<img src="/ss/read_guest2.png" height="300">

**Role Admin**

Pada halaman utama, sama seperti guest, admin juga disajikan cover dari beberapa koleksi buku kami. Lalu admin dapat melihat daftar buku dengan meng-
klik gambar lihat lebih

<img src="/ss/read_admin.png" height="400">

Di halaman ini, admin dapat memilih untuk menambah data, ataupun aksi lain terhadap buku

<img src="/ss/read_admin2.png" height="400">

### 5. Mengubah, menambah, menghapus dan melihat detail data

Aksi tersebut dapat dilakukan dengan memilih tombol di buku yang dipilih (untuk admin)

<img src="/ss/crud_admin.png" height="350">

