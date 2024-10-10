<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    //This method will show products page
    public function index(){


    }

// This method will show create product page
    public function create(){
        return view('products.create');

    }

    //This method will stroe a product in database(db)
    public function store(){


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


