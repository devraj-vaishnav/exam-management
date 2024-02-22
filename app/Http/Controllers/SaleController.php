<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\Customer;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index(){
        return view('admin.sale.index');
    }
    public function create(){
        $products= Product::get();
        return view('admin.sale.create',compact('products'));
    }
public function store(Request $request) {
    
     $request->validate([
        'name' => 'required',
        'mobile_no' => 'required',
        'date' => 'required',
        'address' => 'required'
    ]);
      $customer = new Customer;
    
    $customer->name=$request->input('name'); 
    $customer->mobile_no=$request->input('mobile_no'); 
    $customer->date=$request->input('date'); 
    $customer->address=$request->input('address'); 
    $customer->save();
     
 $productId = $request->input('product_id', []);
 $sales = $request->input('sale', []);

foreach ($productId as $index => $productId) {
    $customerProduct = new Sale;
    $customerProduct->customer_id = $customer->id;
    $customerProduct->product_id = $productId;
    $customerProduct->sale = isset($sales[$index]) ? $sales[$index] : null;
    $customerProduct->save();
}
   
    }

}
