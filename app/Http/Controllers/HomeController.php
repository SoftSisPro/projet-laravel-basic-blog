<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /** Si es directo con clase y metodo
    public function index()
    {
        return "Hello World";
    }
    */

    public function __invoke()
    {
        return "Hello World";
    }
}
