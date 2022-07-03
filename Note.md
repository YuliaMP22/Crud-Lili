Cara membuat aplikasi CRUD
1. instal laravel melalui composer,
buka powershell kemudian ketikkan
perintah "composer create-project
Laravel/laravel crudmurid"

2. buka XAMPP, lalu buat database 
i MySql "crudlili" setelah membuat
pengaturan database .env dengan mengubah
DB_DATABASE=crudlili agar terhubung
dengan database.

3. buat migrasi di terminal dengan
perintah "php artisan make:migration
create_murid_table", kemudian buat
model dengan perintah "php atisan
make:model Murid".

4. buat controller dengan menggunakan
perintah "php artisan make:controller
MuridController"

5. buat controller dengan menggunakan
perintah "php artisan make:controller
MurirController".

6. buat function di MuridController untuk
menampilkan data dengan menggunakan
public function index().

7. kemudian buat route baru dengan membuka
route/web.php dan tambahkan route Route::get('/murid',
[MuridController::class, 'index']); untuk membuka
posting data halaman.

8. buat folder murid, recources/views/murid
di dalam folder murid buat file dengan nama
index.blade.php

9. buat fuction di MuridController untuk
menambahkan data dengan menggunakan public
 fuction create() dan public fuction store(),
setelah menambahkan route di web.php
Route::get('/murid/create',[MuridController::class, 'create' ]);
kemudian view baru sesuai dengan yang ada di method
view('murid.create'). kemudian membuat file view baru
 recources/views/mahasiswa/create.blade.php

10. buat form action mengarah ke route murid.store dengan
menggunakan public fuction store() untuk menambahkan data,
kemudian tambahkan route di web.php Route::post('/murid/store',
[MuridController::class, 'store']) ;

11.buat fungsi di MuridController untuk mengedit
data dengan menggunakan public fuction edit()
dan public fuction update(), setelah itu tambahkan
route di web.php Route::get('/murid/{id}/edit',
[MuridController::class , 'edit']); dan 
route::put('/murid/{id}',[MuridController::class, 'update']); kemudian tambahkan view baru sesuai
dengan yang ada di method view('mahasiswa.edit').
kemudian membuat file view baru recources/views/murid/edit.blade.php

12. buat fungsi di MuridController untuk menghapus
data dengan menggunakan public fuction destory(),
setelah itu tambahkan route di web.php Route::delete('/murid/{id}',
[MuridController::class, 'destory']); lalu pada view
index.blade.php tambahkan methot('delete').

* Kendal selama membuat aplikasi crud 
1. Saya membuat aplikasi ini dari tutorial video di you tube,
di video tersebut sudah di jelaskan fungsi
dari scrip codingan yng dibutuhkan,
Akan tetapi saya lupa dikarenakan banyaknya 
Scrip kodingan.

2. kendala dibagian tidak ketika menghapus
no tidak bisa berubah atau tidak berurutan
{{$m->id}} saya rubah menjadi {{$loop->iteration}}.
