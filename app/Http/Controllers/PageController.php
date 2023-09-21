<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __construct(){
        // $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index(int $numero_page)
    {
        return 'Je suis la page n°: ' . $numero_page;
    }
}
