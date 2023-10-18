<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home (){
        return view ('welcome');
    }
    public function about (){
        return 'Nama Hildan Zaelani Yulianto <br> Nim D211911029 <br> Kelas KA-2020B';
}
    public function contact (){
        return 'idan.jae@gmail.com';
}

}