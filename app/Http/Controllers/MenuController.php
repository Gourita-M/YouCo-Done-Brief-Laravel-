<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
     public function addMenu()
    {
        return View('Restaurant.addMenu');
    }
}
