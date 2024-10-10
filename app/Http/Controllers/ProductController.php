<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //This method will show products page
    public function index(){
        return view('products.list');


    }

// This method will show create product page
    public function create(){
        return view('products.create');

    }

    //This method will stroe a product in database(db)

public function store(Request $request)
{
    $rules = [
        'name' => 'required|min:5',
        'sku'  => 'required|min:3',
        'price' => 'required|numeric', // Corrected rule
    ];

    // Validator method to validate the request
    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->route('products.create') // Corrected route method
                         ->withInput()              // To retain form input
                         ->withErrors($validator);  // To display validation errors
    }

    // Store product logic here...
    // here we will store product in  database
    $product = new Product();
    $product->name = $request ->name;
    $product->sku = $request  ->sku;
    $product->price =$request ->price;
    $product ->description  = $request ->descritoin;
    $product ->save();
    return redirect()->route('products.index')->with('success', 'Product added successfilly');
}

    // This method will show edit product page
    public function edit(){

    }
    //This  method will update a product
  public function update(){

  }
  //This method  will delete a product
  public function destroy(){

  }



}


