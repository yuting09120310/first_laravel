<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    public function indexPage()
    {
        return "hello";
    }

    public function getIndex()
    {
        return view('welcome');
    }
}
