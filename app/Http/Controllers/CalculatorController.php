<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function sum($num1,$num2)
    {
        $data = [
            'num1' => $num1,
            'num2' => $num2,
        ];
        return view('calculator.index',$data);
    }
}
