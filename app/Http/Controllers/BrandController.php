<?php

namespace App\Http\Controllers;

use App\Page;
use App\Brand;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\BrandRequest;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{

    public function content()
    {
        $heroProduct = Page::where('name', 'marcas')->first()->sections()->first()->contents()->first();
        return view('administrator.brand.content', compact('heroProduct'));
    }

    public function store(BrandRequest $request)
    {
        $data = $request->all();
        $data['icon'] = $request->file('icon')->store('images/brand', 'public');
        Brand::create($data);

        return response()->json([
            'tableReload' => true,
        ], 201);
    }

    public function update(BrandRequest $request)
    {
        $element = Brand::find($request->input('id'));
        $data = $request->all();
        
        if($request->hasFile('icon')){
            if(Storage::disk('public')->exists($element->icon))
                Storage::disk('public')->delete($element->icon);
            
            $data['icon'] = $request->file('icon')->store('images/brand','public');
        }   

        $element->update($data);
    }

    public function destroy($id)
    {
        $element = Brand::find($id);

        if(Storage::disk('public')->exists($element->icon))
            Storage::disk('public')->delete($element->icon);

        $element->delete();
    }

    public function find($id)
    {
        return response()->json(['content' => Brand::find($id)]);
    }

    public function getList()
    {
        return DataTables::of(Brand::query())
        ->editColumn('icon', function($brand){
            if (isset($brand->icon)) {
                return '<img src="'.asset($brand->icon).'">';
            }
        })
        ->addColumn('actions', function($brand) {
            return '<button type="button" class="btn btn-sm btn-primary rounded-pill far fa-edit" data-toggle="modal" data-target="#modal-update-element" onclick="findContent('.$brand->id.')"><button class="btn btn-sm btn-danger rounded-pill" onclick="modalDestroy('.$brand->id.')" title="Eliminar slider"><i class="far fa-trash-alt"></i></button>';
        })
        ->rawColumns(['actions', 'icon'])
        ->make(true);
    }
}
