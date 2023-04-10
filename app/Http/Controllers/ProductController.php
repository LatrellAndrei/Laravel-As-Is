<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreproductRequest;
use App\Http\Requests\UpdateproductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = product::all();
        return view('product.product',['products'=>$data]);
    }

    
   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
       
        $data=Product::find($request->id);
        $data->prodName = $request->input('prodName');
        $data->prodQuantity = $request->input('prodQuantity');
        $data->prodPrice = $request->input('prodPrice');
        $data->save();

        return redirect('/')->with('success', 'Product Updated Successfully');
    }

    public function edit($id){
        $data=Product::findOrFail($id);
        return view('product.pedit',['product'=>$data]);
        return redirect('/')-> with('success', 'A Product Record has been edited successfully!');
     }
   
    public function delete($id){
        $delete = DB::table('products')
        ->where('id', $id)
        ->delete();
        return redirect('/')-> with('success', 'Product Deleted');
    }

    public function addProduct(){
        return view('product.padd');
    }
    public function saveProduct(Request $req){
        
        $validated=$req->validate([
            "prodName"=>['required'],
            "prodQuantity"=>['required'],
            "prodPrice"=>['required'],
        ]);
        $data=Product::create($validated);
        return redirect("/product")->with('success', 'A New product has been added!');

    }
}
