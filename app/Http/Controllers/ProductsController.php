<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        // $products = Product::latest('id')paginate(3);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.product.create', compact('categories'));
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
            'title' => 'required',
            'description' => 'required',
            // 'size' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:1000',
            ]);
        
        $formData = $request->except('image');
        // $formData['title'] = $request->title; assign to db

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() .'.' .$image->getClientOriginalExtension();
            $location = ('images/'.$filename);//saves image on images dir
            Image::make($image)->resize(447, 559)->save($location);

            $formData['image'] = $filename;

        }

        $products = Product::create($formData);
        session()->flash('success', 'New Product added, '.$products->title);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('name', 'id');
        return view('admin.product.edit', compact(['categories','product']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        session()->flash('success', $product->title .', updated');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('success', $product->title .', deleted');
        return redirect()->route('product.index');
    }
}
