<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function Hello($name,$surname,$age)
    {
        $data = [
            'name' => $name,
            'surname' => $surname,
            'age' => $age
        ];
        return view('user.hello',$data);
    }
}
