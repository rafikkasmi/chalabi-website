<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\PricesTable;
use Illuminate\Http\Request;

class PricesTableController extends Controller
{
    public function index()
    {
        $prices = PricesTable::all();
        return view('admin.price-table.index', compact('prices'));
    }


    public function update(Request $request)
    {
        PricesTable::find(1)->update([
            'from' => $request->priceFrom1,
            'to' => $request->priceTo1
        ]);
        PricesTable::find(2)->update([
            'from' => $request->priceFrom2,
            'to' => $request->priceTo2
        ]);
        PricesTable::find(3)->update([
            'from' => $request->priceFrom3,
            'to' => $request->priceTo3
        ]);
        return redirect('/admin/prices-table')->with('status', 'Les prix sont modifiés avec succes!');
    }


}
