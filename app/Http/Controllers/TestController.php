<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index($building = "建物です")
    {
        return  $building;
    }
}