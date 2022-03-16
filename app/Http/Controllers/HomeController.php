<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $first = [];
        $second = [];
        $category = ProductCategory::where('status', true)->get();
        foreach ($category as $key => $value) {
            if (++$key > 20) {
                array_push($second, (object)[
                    'id' => $value->id,
                    'category_name' => $value->category_name,
                    'icon' => $value->icon
                ]);
            } else {
                array_push($first, (object)[
                    'id' => $value->id,
                    'category_name' => $value->category_name,
                    'icon' => $value->icon
                ]);
            }
        }
        return view('home', compact("first", "second"));
    }

    public function showProduct($id)
    {
        $product = Product::where('product_category_id', $id)->get();
        return view('product', compact("product"));
    }
}
