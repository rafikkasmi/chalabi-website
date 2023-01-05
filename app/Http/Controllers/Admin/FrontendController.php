<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return redirect('/admin/products');
    }
    public function users()
    {
        return view('admin.index');
    }
}
