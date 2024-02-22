<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products=Product::get();
        return view('admin.product.index',compact('products'));
    }
    public function create(){
        return view('admin.product.create');
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required'
        ]);
        $product = New Product;
        $product->name=$validated['name'];
        $product->save();
        return redirect('product/index');
    }
    public function delete($id){
        Product::where('id', $id)->delete();
        return redirect('product/index');
    }
    public function edit($id){
        // dd($id);
        $edit = Product ::find($id);
        return view('admin.product.edit',compact('edit'));

    }
    public function update(Request $request,$id){
        $validated = $request->validate([
            'name'=>'required'
        ]);
        $products = Product::find($id);
        $products->name=$validated['name'];
        $products->save();
        return redirect('product/index');
    }
}
