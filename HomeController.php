<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
   public function index()
   {
        return view('index');
   }

   public function profil()
   {
        return view('profil');
   }
}
