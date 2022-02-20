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
```bash
php artisan make:model (NamaModel) --migration
```
* buat Controllers yang dibutuhkan dengan ctrl+shift+p artisan make controllers atau dengan terminal
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
* isi dengan template starter bootstrap
```html
bs5-$
```
* susun template dengan [blade templating](https://laravel.com/docs/9.x/blade#layouts-using-template-inheritance)
* buat semua halaman .blade.php yang dibutuhkan di folder `resources/views/`
* buat routing untuk semua halaman di `routes/web.php`

### 5. Backend

