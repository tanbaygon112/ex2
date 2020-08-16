<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

public function index()
{
    $data = [
        "name" => "Chanon Namkow",
        "age" => 30,
    ];
    return view("welcome", $data);
}
}
