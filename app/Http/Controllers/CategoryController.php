<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class CategoryController extends Controller
{
    // Show all categories
    function category(){
        $all_cat = Category::all()->toArray();
        session()->put("email", "rajiv@gmail.com");
        return view("websoft.admin.add-category", ["all_category"=>$all_cat]);
    }


    function add_category(Request $req){
        $catName = $req["cat_name"];
        $catStatus = $req["cat_status"];

        if($catStatus == "on"){
            $catStatus = 1;
        }else{
            $catStatus = 0;
        }

        $cat = new Category();
        $cat->cat_name = $catName;
        $cat->cat_status = $catStatus;
        $cat->save();

        return redirect(route("name_Category"))->with("data", "Category Added");
    }

    function edit_category(Request $req, $cat_id=null){
        $cat_single_data = Category::find($cat_id);
        if($cat_single_data){
            $cat_single_data = Category::find($cat_id);
            return redirect()->route("name_Category", ["cat_name"=>$cat_single_data["cat_name"], "cat_id"=>$cat_single_data["id"], "action"=>"edit_cat"]);
        }else{
            return redirect(route(("name_Category")));
        }
        // if($cat_id!=null && $cat_single_data){
        //     $cat_single_data = Category::find($cat_id);
        //     return view("add-category", ["cat_single_data"=>$cat_single_data]);
        // }else{
        //     return redirect(route(("name_Category")));
        // }
    }
    

    


}
