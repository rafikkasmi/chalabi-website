<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StoreData;
use Illuminate\Http\Request;

class StoreDataController extends Controller
{
    public function indexData()
    {
        $storeData = StoreData::first();
        return view('admin.store-data.index', compact('storeData'));
    }


    public function updateData(Request $request)
    {
       StoreData::first()->update([
            'phone_number' => $request->phone_number,
            'secondary_phone_number' => $request->secondary_phone_number,
            'address' => $request->address
       ]);
        return redirect('/admin/store-data')->with('status', 'Les Données sont modifiés avec succes!');
    }


     public function indexImages()
    {
        $storeData = StoreData::first();
        return view('admin.store-data.images', compact('storeData'));
    }


    public function updateImages(Request $request)
    {
        $storeData = StoreData::first();   
        $newData=$request->all();
        for($i=1;$i<=3;$i++){
            $imageKey="slider_image$i";
            if ($request->hasFile($imageKey)) {
            $path = $storeData[$imageKey];
            if (file_exists($path)) {
                unlink($path);
            }

            $file = $request->file($imageKey);
            $ext = $file->extension();
            $filename = uniqid() . '.' . $ext;
            $file->move(public_path('assets/uploads/slider'), $filename);
            $newData[$imageKey] = "assets/uploads/slider/$filename";
        }
        }
        $storeData->update($newData);
        return redirect('/admin/store-front-images')->with('status', 'Les Données sont modifiés avec succes!');
    }


}
