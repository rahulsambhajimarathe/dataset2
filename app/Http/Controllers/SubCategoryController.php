<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Category;
use \App\Models\Subcategory;

class SubCategoryController extends Controller
{
    function list_sub_category(){
        $allMainCategories = Category::all()->toArray();
        // $subcat = Category::find("1")->sub_category_rel;
        // return $subcat;
        $catAndSubCat = Category::with("sub_category_rel")->get();
        
        return view("websoft.admin.add-subCategory", ["allSubCat"=>$catAndSubCat]);
    }

    function add_sub_category(Request $req){
        $mainCat = Category::find($req->category_id);
        // return $mainCat;
        $catStatus = $req["sub_cat_status"];

        if($catStatus == "on"){
            $catStatus = 1;
        }else{
            $catStatus = 0;
        }

        $subCat = new Subcategory();
        $subCat->sub_cat_name = $req->sub_cat;
        $subCat->sub_cat_status = $catStatus;
        $subCat->category_id = $req->category_id;
        $mainCat->sub_category_rel()->save($subCat);

        return redirect(route("name_SubCategory"))->with("data", "Sub Category Added");   
    }


}
