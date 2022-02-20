### 1. Wireframing
* identifikasi kebutuhan sistem
* tentukan tabel apa saja yang dibutuhkan
* tentukan record/kolom apa saja yang harus dibuat
* tentukan halaman apa saja yang harus dibuat
* catat

### 2. Instalasi
* buka folder `c:/xampp/htdocs/`
* shift+klik kanan, jalankan pwsh 
```bash
composer create-project laravel/laravel (nama_project)
```
* buat database di phpmyadmin

### 3. Setup Project
* buka vscode, open folder
* setup environment .env
```env
DB_DATABASE=(nama_database)
```
* buat semua Model + Migration yang dibutuhkan dengan ctrl+shift+p artisan make model atau dengan terminal
* aturan penamaan model : diawali dengan huruf kapital
```bash
php artisan make:model (NamaModel) --migration
```
* buat Controllers yang dibutuhkan dengan ctrl+shift+p artisan make controllers atau dengan terminal
* * aturan penamaan controller : diawali dengan huruf kapital diikuti dengan Controller
```bash
php artisan make:controller NamaController
```
* jalankan migration
```env
php artisan migrate
```
* jalankan server
```env
php artisan serve
```

### 4. Frontend
* buat template dengan nama base.blade.php simpan di folder `resources/views/layout/`
* isi dengan template starter bootstrap lalu susun template dengan [blade templating](https://laravel.com/docs/9.x/blade#layouts-using-template-inheritance)
* tambahkan container untuk membungkus `@yield('content')`
```html
bs5-$
```
* atau
```blade
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
  <div class="container">
    @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
```
* tambahkan navbar `bs5-navbar` di atas `@yield('content')`
* ubah `welcome.blade.php` menjadi halaman utama sesuai ketentuan soal
* buat semua halaman .blade.php yang dibutuhkan di folder `resources/views/`
* atur templating di setiap halaman kecuali halaman login
```blade
@extends('layouts.app')
@section('title', 'Judul Halaman')
@section('content')
    semua konten halaman wajib di dalam sini
@endsection
```
* buat routing untuk semua halaman di `routes/web.php`
* teliti lagi penamaan, peletakan, dan pemanggilan halaman .blade.php

### 5. Backend
* tambahkan data contoh / dummy ke dalam database
* tambahkan fillable / kolom yang boleh diisi di dalam class Model
```php
class NamaModel extends Model
{
    //kode di atasnya
    protected $fillable = ['kolom1','kolom2','dst'];
}
```

