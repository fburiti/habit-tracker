<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        $name = 'Felisberto';
        $habits = ['Ler', 'Correr', 'Estudar', 'comer'];

        return view('home', [
            'name' => $name,
            'habits' => $habits

        ]);
    }

}
