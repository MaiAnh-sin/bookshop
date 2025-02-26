<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function truyen(){
        return view('pages.truyen');
    }
    public function sach(){
        return view('pages.sach');
    }

}
