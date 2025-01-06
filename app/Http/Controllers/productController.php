<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\File;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;


class productController extends Controller
{
    public function index(){
        $products = Product::with('category')->get();
        return view('admin.pages.product.index',compact('products'));
    //    foreach ($products as $product) {
    //     dd($product->category->title);
    //    }
    }
    public function create(){
        $category=ProductCategory::all();
        $files = File::all(); // or however you fetch the files

        return view('admin.pages.product.create', compact('category','files'));
    }
    public function store(Request $request){
        $use=$request->validate([
            'name' => 'required',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock'=>'required|numeric',
            'category_id'=>'required',
            'image' => 'required|string',
        ]);
       
        
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock'=>$request->stock,
            'category_id'=>$request->category_id,
            'image' => $request->image,
        ]);
        return redirect()->back()->with('sucess','product sucessfully insert');   
    }

    public function show($id){
        $product= Product::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }
    
        $categoryName = $product->category->name ?? 'No Category';
       // dd('$catetgory');
        return view('admin.pages.product.show', compact('product','categoryName'));
    }
    public function edit($id)
    {
        $product = Product::with('category:id,title')->findOrFail($id); // Fetch the product with its category
        $categories = ProductCategory::all(['id', 'title']); // Fetch all categories for the dropdown
        $files = File::all(); // or however you fetch the files

        return view('admin.pages.product.edit', compact('product', 'categories','files'));
    }
    
    public function update(Request $request,$id){
           
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'stock' => 'required|numeric',
        'category_id' => 'required|exists:product_category,id',
        'image' => 'required|string',
    ]);

    $product = Product::findOrFail($id);
    $product->name = $request->name;
    $product->description = $request->description;
    $product->price = $request->price;
    $product->stock = $request->stock;
    $product->category_id = $request->category_id;
    $product->image = $request->image;
    
    $product->save();

    return redirect()->route('product.index')->with('success', 'Product edit successfully!');
    }
    public function destroy($id)
{
    $product = Product::find($id);

    if ($product) {
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Product deleted successfully!');
    }

    return redirect()->route('product.index')->with('error', 'Product not found!');
}


}
