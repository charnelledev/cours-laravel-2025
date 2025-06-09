<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $Products = Product::all();
        
        $totalProducts = $Products->count();

        return view('pages.products-index',
    [
            'Products' => $Products,
            'totalProducts' => $totalProducts,
        ]);
    }
    
    }

