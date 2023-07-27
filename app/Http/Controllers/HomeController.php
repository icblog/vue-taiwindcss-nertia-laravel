<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends BaseController
{
    public function index(){
        return Inertia::render('Home');
    }
}
