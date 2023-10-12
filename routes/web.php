<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/", [LoginRegisterController::class, "login"])->name("name_login")->middleware("guard");
// Route::get("/admin", [AdminController::class, "admin"])->name("name_admin")->middleware("guard");
// Route::get("/add-product", [ProductController::class, "addProduct"])->name("name_addProduct");
// Route::get("/add-category", [CategoryController::class, "category"])->name("name_Category");
// Route::post("/add-category", [CategoryController::class, "add_category"])->name("name_addCategory");
// Route::get("/edit-category/{cat_id?}", [CategoryController::class, "edit_category"])->name("name_editCategory");
// Route::get("/add-subCategory", [SubCategoryController::class, "add_sub_category"])->name("name_addSubCategory");

// Group Middelware

Route::view("/", "websoft/login/login");
Route::post("/", [LoginRegisterController::class, "login"])->name("name_login");
Route::get("/admin", [AdminController::class, "admin"])->name("name_admin");
Route::get("/add-product", [ProductController::class, "addProduct"])->name("name_addProduct");

// Category
Route::get("/add-category", [CategoryController::class, "category"])->name("name_Category");
Route::post("/add-category", [CategoryController::class, "add_category"])->name("name_addCategory");
Route::get("/edit-category/{cat_id?}", [CategoryController::class, "edit_category"])->name("name_editCategory");
Route::get("/main", [SubCategoryController::class, "show_main_cat"]);
// Sub Category
Route::get("/subCategory", [SubCategoryController::class, "list_sub_category"])->name("name_SubCategory");
Route::post("/add-subCategory", [SubCategoryController::class, "add_sub_category"])->name("name_addSubCategory");


// Route::middleware(['guard'])->group(function () {
//     Route::get("/add-category", [CategoryController::class, "category"])->name("name_Category");
//     Route::get("/add-category", [CategoryController::class, "category"])->name("name_Category");
//     Route::get("/add-category", [CategoryController::class, "category"])->name("name_Category");
//     Route::get("/add-category", [CategoryController::class, "category"])->name("name_Category");
// });