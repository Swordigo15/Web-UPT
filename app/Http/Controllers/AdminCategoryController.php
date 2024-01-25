<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.categories.index',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'image' => 'image|file|max:1024',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('category-images');
        }
        
        //!!! category id not added yet
        // $validatedData['category_id'] = auth()->user()->id;

        Category::create($validatedData);

        return redirect('dashboard/categories')->with('success', 'New Category has been created!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('Dashboard.categories.edit', [
            'categories' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $rules = [
            'name' => 'required|max:255',
            'image' => 'image|file|max:1024',
        ];
        
        // if($request->slug != $post->slug){
        //     $rules['slug']  = 'required|unique:posts';
        // }
        
        $validatedData = $request->validate($rules);
        
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('category-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Category::where('id', $category->id)
            ->update($validatedData);

        return redirect('dashboard/categories')->with('success', 'Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->image){
            Storage::delete($category->image);
        }
        Category::destroy($category->id);
        return redirect('dashboard/categories')->with('success', 'Category has been deleted!');
    }
}
