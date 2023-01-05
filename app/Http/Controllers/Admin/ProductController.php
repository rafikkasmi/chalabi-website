<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('admin.product.index', compact('products'));
    }

    public function add()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product.add', compact('categories','brands'));
    }

    public function insert(Request $request)
    {   
       
         $product = $request->all();
         $product['slug'] = str_replace(' ', '-', strtolower($request->name));
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $ext = $file->extension();
            $filename = uniqid() . '.' . $ext;
            $file->move(public_path('assets/uploads/products'), $filename);
            $product['image'] = $filename;
        }
        $productDb= Product::create($product);
        if($request->hasFile('productimages')){
        foreach ($request->file('productimages') as $file) {
            $ext = $file->extension();
            $filename = uniqid().$product['name'] . '.' . $ext;
            $file->move(public_path('assets/uploads/products'), $filename);
            $productDb->images()->create(['path'=>$filename]);
        }
        }

        return redirect('/admin/products')->with('status', 'Product Added Successfully');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product.edit', compact('product','categories','brands'));
    }

    public function update(Request $request, $id)
    {
        
        $product = Product::find($id);
        $updatedData = $request->all();
        if ($request->hasFile('image')) {
            $path = 'assets/uploads/products/' . $product->image;
            if (file_exists($path)) {
                unlink($path);
            }

            $file = $request->file('image');
            $ext = $file->extension();
            $filename = uniqid() . '.' . $ext;
            $file->move(public_path('assets/uploads/products'), $filename);
            $updatedData['image'] = $filename;
        }else{
            $updatedData['image'] = $product->image;
        }

        foreach ($product->images as $image) {
            $path = 'assets/uploads/products/' . $image->path;
            if (file_exists($path)){
                unlink($path);
            }
            $image->delete();
        }
      
        if($request->hasFile('productimages')){
            foreach ($request->file('productimages') as $file) {
                $ext = $file->extension();
                $filename = uniqid().$product['name'] . '.' . $ext;
                $file->move(public_path('assets/uploads/products'), $filename);
                $product->images()->create(['path'=>$filename]);
            }
        }
        
        $product->update($updatedData);
        return redirect('/admin/products')->with('status', 'Product Updated Successfully');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product->image) {
            $path = 'assets/uploads/products/' . $product->image;
            if (file_exists($path)) {
                unlink($path);
            }
        }
        $product->delete();
        return redirect('/admin/products')->with('status', 'Product Deleted Successfully');
    }
}
