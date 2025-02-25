<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function index() {
    return 'Selamat Datang';
  }

  public function about() {
    return 'Nama: Ismi Atika, NIM: 2341760036';
  }

  public function articles($id) {
    return 'Halaman Artikel dengan ID ' . $id;
  }

  public function hello(){
    return('Hello World');
}

public function greeting(){
    return view('blog.hello')
    ->with('name','Ismi')
    ->with('occupation','Astronaut');
}

}
