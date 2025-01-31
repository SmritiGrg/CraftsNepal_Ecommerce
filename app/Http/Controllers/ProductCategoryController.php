<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

class ProductCategoryController extends Controller
{
    
     //  $table->id('product_category_id');
    //  $table->string('title');
    //  $table->string('image');
    private const DROPDOWN_OPTIONS = ['Clothing', 'Art and Craft', 'Accessories'];


    public function index()
    {
        $ProductCategories = ProductCategory::all();
        // dd($ProductCategories);
        return view('admin.pages.ProductCategoryPages.index', compact('ProductCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $files = File::all(); 
        $dropdownOptions = self::DROPDOWN_OPTIONS;
        return view('admin.pages.ProductCategoryPages.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'string|max:100|min:1|required',
            // 'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'image' => 'required|string',
        ]);

        $productCategory = new ProductCategory;
        $productCategory->title = $request->title;
        $productCategory->image = $request->image;
        $productCategory->save();
        return redirect()->route('productCategory.index')->with('message', 'Added Successfully');
        // return redirect()->route('admin.pages.ProductCategoryPages.index')->with('message', 'Added Successfully');
        // return redirect('admin.pages/ProductCategoryPages')->with('message', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        // $productCategory = productCategory::query()->where('id',$id)->get()->first();
        // return view('admin.Pages.ProductCategoryPages.view', data: compact('productCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $files = File::all(); // Retrieve all images for selection in the edit view
        $productCategory = productCategory::query()->where('id',$id)->get()->first();
        $dropdownOptions = self::DROPDOWN_OPTIONS; 
        return view('admin.pages.ProductCategoryPages.edit', compact('productCategory', 'files'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|string|max:100|min:1',
            'image' => 'required|string',
  
        ]);

        $productCategory = new ProductCategory;
        $productCategory =$productCategory->where('id',$id)->get()->first();
        $productCategory->title = $request->title;
        $productCategory->image = $request->image; 


        $productCategory->update();
        return redirect()->route('productCategory.index')->with('message', 'Edited Successfully');
        // return redirect('admin.pages/ProductCategoryPages')->with('message', 'Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $productCategory = productCategory::query()->where('id',$id)->get()->first();
        $productCategory->delete();
        return redirect()->route('productCategory.index')->with('message', 'Edited Successfully');
        // return redirect('admin.pages/ProductCategoryPage')->with('message', 'Deleted Successfully');
    }

    
}

