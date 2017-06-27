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

    public function store(){
        $vak = new Vak();

        $vak->jaar = 2;
        $vak->periode = 3;
        $vak->naam = "test module";
        $vak->ec = 3;
        $vak->gehaald = 0;

        if($vak->save()){
            return $vak;
        }

        return "er is iets misgegaan";


    }
}