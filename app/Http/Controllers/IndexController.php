<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	$categories = Category::all();
    	$products = Product::all();
        $popularCats = $categories->where('popular', 1);
       
    	$fProducts = $products->where('featured', '1');
        $featuredProducts = $fProducts->shuffle()->take(10);

        $sProducts =  $products->where('on_sale', '1');
        $saleProducts = $sProducts->shuffle()->take(10);
    	//$saleProducts = $products->where('on_sale', '1')->random()->max(16);
    	return view('pages.index', compact('categories', 'products', 'featuredProducts', 'saleProducts', 'popularCats'));
    }
}
