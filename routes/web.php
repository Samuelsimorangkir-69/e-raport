<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
return view('welcome');
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/user/{id}', function ($id){
    return "User dengan ID " . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Ini adalah dashboard admin";
    });
    Route::get('/users', function () {
        return "admin users";
    });
});

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);