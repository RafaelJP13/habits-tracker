<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function index()
    {

        $name = 'Rafael Santos Fernandes';
        $habits = ['Correr', 'Estudar'];

        return view('home', [
            'name' => $name,
            'habits' => $habits,
        ]);

    }
}
