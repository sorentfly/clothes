<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    //
    function __construct()
    {

    }

    /**
     * Метод главной страницы веб-приложения
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function index()
    {
        $images = DB::table('pictures')->get();


        shuffle($images);
        return view('index')->with('images', $images);
    }
}
