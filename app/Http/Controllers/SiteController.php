<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
class SiteController extends Controller
{
    function index(): View
    {

        return view('home');

    }

    public function dashboard()
    {

        $habits = auth()->user()->habits;
        return view('dashboard', compact('habits'));
    }

}