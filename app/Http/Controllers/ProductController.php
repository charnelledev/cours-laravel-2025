<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $Products = Product::orderBy('id', 'desc')->paginate(5);
        // $Products = Product::all();
        
        $totalProducts = $Products->count();

        return view('pages.products-index',
    [
            'Products' => $Products,
            'totalProducts' => $totalProducts,
        ]);
    }
    public function create()
    {
        
        return view('pages.products-create');
    
    }
    public function store(Request $request)
    {
        $validation  = $request->validate([
            'title' => 'required|max:255',
           'category' => 'required|max:255',
            'price' => 'required|numeric|min:0',
            
        ]);
        Product::create($validation);
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
       
    }

    public function edit($id)
    {
              $product = Product::findOrFail($id); 
        return view('pages.products-edit' , compact('product')); 

    }
    public function update(Request $request, $id)
    {
  
    $validation = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|max:255',
            'price' => 'required|numeric|min:0',
        ]);

      $product = Product::findOrFail($id); 
        $product->title = $validation['title'];
        $product->category = $validation['category'];
        $product->price = $validation['price'];
      $product->save();
      return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')
            ->with('errot', 'Product deleted successfully.');
    }
  
    
}
