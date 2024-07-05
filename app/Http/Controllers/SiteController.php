<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index() {
        return view('includes');
    }
    public function components() {
        return view('comp');
    }
    public function layout() {
        return view('site');
    }
    public function layout2() {
        return view('pagina2');
    }
}
