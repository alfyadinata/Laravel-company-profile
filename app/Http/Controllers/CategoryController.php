<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;


class CategoryController extends Controller
{

    public function create()
    {
        $category = Category::orderBy('category','ASC')->get();
        return view('panel.category.data',compact('category'));
    }

    public function store(Request $request)
    {
        $categ = new Category;
        $categ->category = $request->get('category');
        $categ->save();
        return redirect()->back()->with('success','success created data');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $categ = Category::find($id);
        $categ->category = $request->get('category');
        $categ->save();
        return redirect()->back()->with('edit','success updated data');
    }


    public function destroy($id)
    {
        $categ = Category::find($id);
        $categ->delete();
        return redirect()->back()->with('destroy','success deleted data');
    }
}
