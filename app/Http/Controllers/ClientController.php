<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    public function content()
    {
        return view('administrator.clients.content');
    }

    public function store(ClientRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('images/client', 'public');

        Client::create($data);

        return response()->json([
            'tableReload' => true,
        ],201);
    }

    public function update(ClientRequest $request)
    {
        $element = Client::find($request->input('id'));
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
        $element = Client::find($id);
        if(Storage::disk('public')->exists($element->image))
            Storage::disk('public')->delete($element->image);
        
        $element->delete();
    }

    public function find($id)
    {
        return response()->json(['content' => Client::find($id)]);
    }

    public function getList()
    {
        return DataTables::of(Client::query())
        ->editColumn('image', function($client){
            return '<img src="'.asset($client->image).'" style="max-width: 100px; max-height: 80px; object-fit: cover;">';
        })
        ->addColumn('actions', function($client) {
            return '<button type="button" class="btn btn-sm btn-primary rounded-pill far fa-edit" data-toggle="modal" data-target="#modal-update-element" onclick="findContent('.$client->id.')"><button class="btn btn-sm btn-danger rounded-pill" onclick="modalDestroy('.$client->id.')" title="Eliminar slider"><i class="far fa-trash-alt"></i></button>';
        })
        ->rawColumns(['actions', 'image'])
        ->make(true);
    }
}
