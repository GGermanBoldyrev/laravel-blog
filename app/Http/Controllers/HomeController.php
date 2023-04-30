<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $benefits = Benefit::all();
        return view('home', ['benefits' => $benefits]);
    }
}
