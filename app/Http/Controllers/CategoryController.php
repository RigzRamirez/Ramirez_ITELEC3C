<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   public function index(){
    $categories = Category::all();
    return view('admin.category.category',compact('categories'));
   }

   public function create(Request $request) {
      $category = new Category;
      $category->category_name = $request->category_name;
      $category->user_id = $request->user_id;
      $category->save();

      return redirect()->back();
  }
  public function edit($id) {
   $category = Category::find($id);
   return view('admin.category.edit', compact('category'));
   }
   public function edit_confirm(Request $request, $id) {
    $category = Category::find($id);
   $category->category_name = $request->category_name;
   $category->user_id = $request->user_id;
   $category->save();


   return redirect()->back();
   }
   public function delete($id) {
    $category = Category::find($id);
    $category->delete();
    return redirect()->back();
   }
  
}