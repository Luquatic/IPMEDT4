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
        if ($periode == 5) {
            return Vak::where('jaar', $jaar)->get();
        } else {
            return Vak::where('jaar', $jaar)->where('periode', $periode)->get();
        }

    }

    public function ec($jaar) {
        $totaal = Vak::where('jaar', $jaar)->where('gehaald', 1)->sum('ec');
        return $totaal;
    }

    public function gehaald($naam){
//        $vak = new Vak();
//
//        $vak->jaar = 2;
//        $vak->periode = 3;
//        $vak->naam = "test 2222";
//        $vak->ec = 3;
//        $vak->gehaald = 0;

        $vak = Vak::where('naam', $naam)->first();

        if($vak->gehaald == 0) {
            $vak->gehaald = 1;
        } else {
            $vak->gehaald = 0;
        }

        return $vak->save();
    }
}
