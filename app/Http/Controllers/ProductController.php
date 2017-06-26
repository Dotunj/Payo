<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

         return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
         'product_name'=>'required|min:5',
         'price'=>'required|min:3',
        'product_description'=>'required|min:7',
        ]);

        $product = new Product;

        $product->Name = $request->input('product_name');
        $product->price = $request->input('price');
        $product->description = $request->input('product_description');
    

        $product->save();

       return redirect()->route('products.create')->with('status', 'Your product has been successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request, [
       'product_name'=>'required|min:5',
         'price'=>'required|min:3',
        'product_description'=>'required|min:7',
  ]);
       $product= Product::find($id);

       $product->Name = $request->input('product_name');
       $product->price = $request->input('price');
       $product->description = $request->input('product_description');

       $product->save();

       return view('products.edit')->with('status', 'Your product has been updated successfully');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
