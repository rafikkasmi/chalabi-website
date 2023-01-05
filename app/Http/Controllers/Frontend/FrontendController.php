<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\StoreData;
use App\Models\Product;
use App\Models\PricesTable;
use App\Models\Brand;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->with('images')->with('brand')->limit(10)->get();
        $trending_category = Category::take(15)->get();
        $store_data = StoreData::first();
        $prices_table = PricesTable::all();
        $newestPriceChange= PricesTable::orderBy('updated_at', 'desc')->first()->updated_at->format('d/m/Y');
        $brands= Brand::all();
        $categories= Category::all();

        return view('frontend.index', compact('products', 'trending_category','store_data','prices_table','newestPriceChange','brands','categories'));
    }

    public function category()
    {
        $category = Category::where('status', '0')->get();
        return view('frontend.category', compact('category'));
    }
    public function viewCategory($slug)
    {
        if (Category::where('slug', $slug)->exists()) {
            $category = Category::where('slug', $slug)->first();
            $product = Product::where('cate_id', $category->id)->where('status', '0')->get();
            return view('frontend.products.index', compact('category', 'product'));
        } else {
            return redirect('/')->with('status', "Slug Doesn't Exisits");
        }
    }
    public function viewProduct($cate_slug, $prod_slug)
    {
        if (Category::where('slug', $cate_slug)->exists()) {

            if (Product::where('slug', $prod_slug)->exists()) {

                $product = Product::where('slug', $prod_slug)->first();
                return view('frontend.products.view', compact('product'));
            } else {
                return redirect('/')->with('status', "Product Not Found");
            }
        } else {
            return redirect('/')->with('status', "Category Not Found");
        }
    }

    public function productsPage(Request $request){
        //get products and query by category or search or brand or gender or price
        $products = Product::orderBy('id', 'desc')->with('images')->with('brand');
        $brands= Brand::all();
        $categories= Category::all();
        
        if($request->category){
            $products->where('cate_id', $request->category);
        }else if($request->search){
            $products->where('name', 'like', '%'.$request->search.'%');
        }else if($request->brand){
            $products->where('brand', $request->brand);
        }else if($request->gender){
            $products->where('gender', $request->g);
        }   

        $products=$products->paginate(12);
        $store_data = StoreData::first();

        return view('frontend.products.index', compact('products','store_data','brands','categories'));

    }
}
