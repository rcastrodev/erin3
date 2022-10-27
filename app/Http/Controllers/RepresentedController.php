<?php

namespace App\Http\Controllers;

use App\Represented;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\RepresentedRequest;

class RepresentedController extends Controller
{
    public function content()
    {
        return view('administrator.represented.content');
    }

    public function store(RepresentedRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('images/client', 'public');

        Represented::create($data);

        return response()->json([
            'tableReload' => true,
        ],201);
    }

    public function update(RepresentedRequest $request)
    {
        $element = Represented::find($request->input('id'));
        $data = $request->all();
        
        if($request->hasFile('image')){
            if(Storage::disk('public')->exists($element->image))
                Storage::disk('public')->delete($element->image);
            
            $data['image'] = $request->file('image')->store('images/client','public');
        }   

        $element->update($data);
    }

    public function destroy($id)
    {
        $element = Represented::find($id);
        if(Storage::disk('public')->exists($element->image))
            Storage::disk('public')->delete($element->image);
        
        $element->delete();
    }

    public function find($id)
    {
        return response()->json(['content' => Represented::find($id)]);
    }

    public function getList()
    {
        return DataTables::of(Represented::query())
        ->editColumn('image', function($represented){
            return '<img src="'.asset($represented->image).'" style="max-width: 100px; max-height: 80px; object-fit: cover;">';
        })
        ->addColumn('actions', function($represented) {
            return '<button type="button" class="btn btn-sm btn-primary rounded-pill far fa-edit" data-toggle="modal" data-target="#modal-update-element" onclick="findContent('.$represented->id.')"><button class="btn btn-sm btn-danger rounded-pill" onclick="modalDestroy('.$represented->id.')" title="Eliminar slider"><i class="far fa-trash-alt"></i></button>';
        })
        ->rawColumns(['actions', 'image'])
        ->make(true);
    }
}
