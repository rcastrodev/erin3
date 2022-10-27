<?php

namespace App\Http\Controllers;

use App\Page;
use App\Content;
use App\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function content()
    {
        $heroProduct = Page::where('name', 'familias')->first()->sections()->first()->contents()->first();
        return view('administrator.category.content', compact('heroProduct'));
    }

    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        
        if($request->hasFile('image'))
            $data['image'] = $request->file('image')->store('images/category','public');

        Category::create($data);
        
        return response()->json([], 201);
    }

    public function update(CategoryRequest $request)
    {
        $element = Category::find($request->input('id'));
        $data = $request->all();
        
        if($request->hasFile('image')){
            if(Storage::disk('public')->exists($element->image))
                Storage::disk('public')->delete($element->image);
            
            $data['image'] = $request->file('image')->store('images/category','public');
        }   

        $element->update($data);
    }

    public function find($id)
    {
        $content = Category::find($id);
        return response()->json(['content' => $content]);
    }

    public function destroy($id)
    {
        $element = Category::find($id);
        if(Storage::disk('public')->exists($element->image))
            Storage::disk('public')->delete($element->image);

        $element->delete();
        return response()->json([], 200);
    }


    public function getList()
    {
        return DataTables::of(Category::query())
        ->addColumn('actions', function($slider) {
            return '<button type="button" class="btn btn-sm btn-primary rounded-pill far fa-edit" data-toggle="modal" data-target="#modal-update-element" onclick="findContent('.$slider->id.')"></button><button class="btn btn-sm btn-danger rounded-pill" onclick="modalDestroy('.$slider->id.')" title="Eliminar slider"><i class="far fa-trash-alt"></i></button>';
        })
        ->rawColumns(['actions'])
        ->make(true);
    }

}
