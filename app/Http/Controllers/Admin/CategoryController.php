<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    public function add()
    {
        $category = Category::all();
        return view('admin.category.add',compact('category'));
    }

    public function insert(Request $request)
    {
        // if ($request->hasFile('image')) {

        //     $file = $request->file('image');
        //     $ext = $file->extension();
        //     $filename = time() . '.' . $ext;
        //     $file->move(public_path('assets/uploads/category/'), $filename);
        //     $category->image = $filename;
        // }
        $category = $request->all();
        $category['slug'] = str_replace(' ', '-', strtolower($request->name));
        Category::create($category);
        return redirect('/admin/categories')->with('status', 'Category Added Successfully');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $categoryDb = Category::find($id);

        $category = $request->all();
        $category['slug'] = str_replace(' ', '-', strtolower($request->name));
        
        $categoryDb->update($category);
        return redirect('/admin/categories')->with('status', 'Category Updated Successfully');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin/categories')->with('status', 'Category Deleted Successfully');
    }
}
