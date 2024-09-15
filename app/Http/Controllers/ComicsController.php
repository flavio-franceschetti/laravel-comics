<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index(){

        $comics = config('products');

        return view('comics', compact('comics'));
    }

}
