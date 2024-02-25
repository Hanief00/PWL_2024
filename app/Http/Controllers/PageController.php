<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Nama: Hanief Mochsin <br> NIM: 2241720181';
    }

    public function article($id){
        return "Halaman Artikel dengan Id ". $id;
    }
}