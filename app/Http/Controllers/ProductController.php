<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        return view("websoft.admin.add-product");
    }
}
