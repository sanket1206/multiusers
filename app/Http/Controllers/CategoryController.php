<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CategoryFormRequest;


class CategoryController extends Controller
{
    public function index()
    {
        return view('api.Category.index');
    }

    public function create()
    {

        return view('api.Category.create');
    }
    public function store(CategoryformRequest $request)
    {
        $data = $request ->validated();
        $category = new Category;
        $category->name = $data['name'];
        $category->slug = $data['slug'];
        $category->description = $data['description'];

        if($request->hasfile('image')){
            $file = $request ->file('image');
            $filename=time().','. $file->getClientOriginalExtension();
            $file->move('uploads/category/',$filename);
            $category->image=$filename;

        }
        $category->meta_title = $data['meta_title'];
        $category->meta_description = $data['meta_description'];
        $category->meta_keyword = $data['meta_keyword'];

        $category->navbar_status = $request['navbar_status'];
        $category->status = $request['status'];
        $category->created_by = Auth::user()->id;
        $category->save();

        return redirect('/category')->with('message','Category Added Successfuly');



    
    }

}
