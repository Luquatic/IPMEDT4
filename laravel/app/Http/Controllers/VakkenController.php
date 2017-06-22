<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vak;

class VakkenController extends Controller
{
    public function create() {
        return Vak::all();
    }

    public function jaar() {
        Vak::get([
            'jaar' => \request('jaar')
        ]);
    }
}
