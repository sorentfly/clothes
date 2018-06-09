<?php

namespace App\Http\Controllers;

#use Illuminate\Support\Facades\DB;
use App\Item;
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
        $item = new Item();

        $item_list = $item::all();
        $pictures = [];
        $i = 0;

        foreach ($item_list as $num => $one_item) {
            $pictures[$i++] = $one_item->getRelatedPictures();
        }

        return view('index')->with('images', $pictures)->with('items', $item_list);
    }
}
