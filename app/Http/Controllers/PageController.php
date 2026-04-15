<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama: Abelas Solihin <br> NIM: 2441php artisan make:controller HomeController
php artisan make:controller AboutController
php artisan make:controller ArticleController07020052';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}