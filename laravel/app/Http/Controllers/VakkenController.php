<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vak;

class VakkenController extends Controller
{
    public function create() {
        return Vak::all();
    }

    public function jaar($jaar) {
        return Vak::where('jaar', $jaar)->get();
    }

    public function periode($jaar, $periode) {
        return Vak::where('jaar', $jaar)->where('periode', $periode)->get();
    }
}
