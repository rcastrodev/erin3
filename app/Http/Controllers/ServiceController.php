<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function content()
    {
        return view('administrator.service.content');
    }

    public function store(PostRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('images/service', 'public');
        Post::create($data);

        return response()->json([
            'tableReload' => true,
        ],201);
    }

    public function update(PostRequest $request)
    {
        $element = Post::find($request->input('id'));
        $data = $request->all();
        
        if($request->hasFile('image')){
            if(Storage::disk('public')->exists($element->image))
                Storage::disk('public')->delete($element->image);
            
            $data['image'] = $request->file('image')->store('images/service','public');
        }   

        $element->update($data);
    }

    public function destroy($id)
    {
        $element = Post::find($id);
        
        if(Storage::disk('public')->exists($element->image))
            Storage::disk('public')->delete($element->image);
            
        $element->delete();
    }

    public function find($id)
    {
        $content = Post::find($id);
        return response()->json(['content' => $content]);
    }

    public function getList()
    {
        $posts = Post::where('page_id', 7);

        return DataTables::of($posts)
        ->editColumn('content1', function($post){
            return $post->content1;
        })
        ->addColumn('actions', function($post) {
            return '<button type="button" class="btn btn-sm btn-primary rounded-pill far fa-edit" data-toggle="modal" data-target="#modal-update-element" onclick="findContent('.$post->id.')"></button><button class="btn btn-sm btn-danger rounded-pill" onclick="modalDestroy('.$post->id.')" title="Eliminar"><i class="far fa-trash-alt"></i></button>';
        })
        ->rawColumns(['actions', 'icon', 'content1'])
        ->make(true);
    }
}   
