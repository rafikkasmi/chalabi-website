<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::all();
        return view('admin.brand.index', compact('brand'));
    }

    public function add()
    {
        $brand = Brand::all();
        return view('admin.brand.add',compact('brand'));
    }

    public function insert(Request $request)
    {
        // if ($request->hasFile('image')) {

        //     $file = $request->file('image');
        //     $ext = $file->extension();
        //     $filename = time() . '.' . $ext;
        //     $file->move(public_path('assets/uploads/brand/'), $filename);
        //     $brand->image = $filename;
        // }
        Brand::create($request->all());
        return redirect('/admin/brands')->with('status', 'Brand Added Successfully');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brand.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);

        $brand->update($request->all());
        return redirect('/admin/brands')->with('status', 'brand Updated Successfully');
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('/admin/brands')->with('status', 'brand Deleted Successfully');
    }
}
