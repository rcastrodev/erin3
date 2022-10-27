<?php

namespace App\Http\Controllers;

use App\Page;
use App\Color;
use App\Content;
use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\ApplicationRequest;

class ApplicationController extends Controller
{

    public function content()
    {
        return view('administrator.application.content');
    }

    public function store(ApplicationRequest $request)
    {
        $data = $request->all();
        $data['icon'] = $request->file('icon')->store('images/applications', 'public');
        $data['image'] = $request->file('image')->store('images/applications', 'public');
        $data['image_small'] = $request->file('image_small')->store('images/applications', 'public');
        Application::create($data);

        return response()->json([
            'tableReload' => true,
        ],201);
    }

    public function update(ApplicationRequest $request)
    {
        $element = Application::find($request->input('id'));
        $data = $request->all();
        
        if($request->hasFile('icon')){
            if(Storage::disk('public')->exists($element->icon))
                Storage::disk('public')->delete($element->icon);
            
            $data['icon'] = $request->file('icon')->store('images/applications','public');
        }   

        if($request->hasFile('image')){
            if(Storage::disk('public')->exists($element->image))
                Storage::disk('public')->delete($element->image);
            
            $data['image'] = $request->file('image')->store('images/applications','public');
        }   

        if($request->hasFile('image_small')){
            if(Storage::disk('public')->exists($element->image_small))
                Storage::disk('public')->delete($element->image_small);
            
            $data['image_small'] = $request->file('image_small')->store('images/applications','public');
        }  

        $element->update($data);
    }

    public function destroy($id)
    {
        $element = Application::find($id);

        if(Storage::disk('public')->exists($element->icon))
            Storage::disk('public')->delete($element->icon);

        if(Storage::disk('public')->exists($element->image))
            Storage::disk('public')->delete($element->image);

        $element->delete();
    }

    public function find($id)
    {
        return response()->json(['content' => Application::find($id)]);
    }

    public function getList()
    {
        return DataTables::of(Application::query())
        ->editColumn('image', function($application){
            if (isset($application->image)) {
                return '<img src="'.asset($application->image).'" width="120">';
            }
        }) 
        ->editColumn('image_small', function($application){
            if (isset($application->image_small)) {
                return '<img src="'.asset($application->image_small).'" width="120">';
            }
        }) 
        ->editColumn('icon', function($application){
            if (isset($application->icon)) {
                return '<img src="'.asset($application->icon).'">';
            }
        })
        ->addColumn('actions', function($application) {
            return '<button type="button" class="btn btn-sm btn-primary rounded-pill far fa-edit" data-toggle="modal" data-target="#modal-update-element" onclick="findContent('.$application->id.')"><button class="btn btn-sm btn-danger rounded-pill" onclick="modalDestroy('.$application->id.')" title="Eliminar slider"><i class="far fa-trash-alt"></i></button>';
        })
        ->rawColumns(['actions', 'icon', 'image', 'image_small'])
        ->make(true);
    }
}
