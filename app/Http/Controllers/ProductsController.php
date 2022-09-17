<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * show
     * @return array of product list.
     */
    function show(){
        $products=Products::select('id','name','brand','model','price')->get();
        return view('welcome',compact('products'));
    }
}
