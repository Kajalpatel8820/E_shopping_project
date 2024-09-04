<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UseCondition extends Controller
{
    public function condition()
    {
        $name = "kajal patel";
        return view ('UseConditions',compact('name'));

    }
}
