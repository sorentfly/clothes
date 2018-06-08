<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        #echo "MVC";
        return view('index');
    }
}
