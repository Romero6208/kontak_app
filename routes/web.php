<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $html = "
         <h1>Aplikasi Kontak</h1>
         <div>
             <a href='/contacts'>Kontak</a>
             <a href='/contacts/create'>Buat Kontak</a>
             <a href='/contacts/2'>Tampilkan Kontak</a>
             <a href='/students/Adi'>Tampilkan Nama</a>
             <a href='/companies/Abudata123'>Perusahaan</a>
         </div>
    ";
    return $html;
});

Route::get('/admin/contacts', function () {
    return "<h1><marquee>Kontak</marquee></h1>";
}) ->name('contacts.index');

Route::get('/admin/contacts/create', function () {
    return "<h1><marquee direction='up'>Kontak Baru</marquee></h1>";
}) ->name('contacts.create');

Route::get('/contacts/{id}', function ($id) {
    return "Tampilkan Kontak: ".$id;
});

Route::get('/students/{name}', function ($name=null) {
    return "Nama Lengkap: ".$name;
});

Route::get('/companies/{name?}', function($name=null) {
    if($name) {
        return "Nama Perusahaan: " . $name;
    } else {
        return "Nama Perusahaan Kosong";
    }
 });