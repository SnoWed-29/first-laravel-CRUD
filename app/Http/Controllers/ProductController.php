<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use App\Models\product;
class ProductController extends Controller
{
    public function index(){
        $products = product::all();
        return view('product.index',['products' => $products]);
    }

    public function create(){
        return view('product.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'price'=>'required|decimal:0,2',
            'description'=>'nullable'
        ]);
        $newProduct = Product::create($data);
        return redirect(route('product.index'));
    }
    public function edit (product $product){
        return view('product.edit',['product' => $product]);
    }
    public function update(product $product , Request $request){
        $data = $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'price'=>'required|decimal:0,2',
            'description'=>'nullable'
        ]);
        $product->update($data);
        return redirect(route('product.index'))->with('Success' , 'Product updated Succesfully');
    }
    public function  destroy(product $product){
        $product->delete();
        return redirect(route('product.index'))->with('Success' , 'Product Deleted Succesfully');
    }
}
