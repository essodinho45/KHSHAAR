<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $items_by_date = Item::query()->orderBy('created_at', 'desc')->get();
        return view('welcome', compact('brands', 'items_by_date'));
    }
}
