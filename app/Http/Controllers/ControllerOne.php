<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerOne extends Controller
{
public function funOne()
{
    $varOne="hamidreza";
    return view('one',compact('varOne'));
}
}
