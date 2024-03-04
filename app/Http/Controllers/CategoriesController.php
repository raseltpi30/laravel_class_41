<?php

namespace App\Http\Controllers;
use App\Http\Requests\CategoriesRequest;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['categories'] = Category::all();
        return view('categories.category',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriesRequest $request)
    {
        $catData = $request->all();
        $newCat = Category::create($catData);

        if($newCat){
            Session::flash('message','New Category Created Successfully');
        }
        return redirect()->to('categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->data['category'] = Category::findOrFail($id);
        return view('categories.create',$this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $category = Category::findOrFail($id);
        $category->title = $data['title'];
        $category->save();
        if($category->save()){
            Session::flash('message','Title Update Successfully');
        }
        return redirect()->to('categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if($category->delete()){
            Session::flash('message','Title Delete Successfully');
        }
        return redirect()->to('categories');
    }
}
