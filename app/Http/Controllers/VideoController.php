<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\VideoRequest;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    public function content()
    {
        return view('administrator.video.content');
    }

    public function store(VideoRequest $request)
    {
        $data = $request->all();
        Post::create($data);

        return response()->json([
            'tableReload' => true,
        ],201);
    }

    public function update(VideoRequest $request)
    {
        $element = Post::find($request->input('id'));
        $data = $request->all();
        $element->update($data);
    }

    public function destroy($id)
    {
        $element = Post::find($id);

        if(Storage::disk('public')->exists($element->icon))
            Storage::disk('public')->delete($element->icon);

        $element->delete();
    }

    public function find($id)
    {
        return response()->json(['content' => Post::find($id)]);
    }

    public function getList()
    {
        $applications = Post::where('page_id', 8);
        return DataTables::of($applications)
        ->addColumn('actions', function($application) {
            return '<button type="button" class="btn btn-sm btn-primary rounded-pill far fa-edit" data-toggle="modal" data-target="#modal-update-element" onclick="findContent('.$application->id.')"><button class="btn btn-sm btn-danger rounded-pill" onclick="modalDestroy('.$application->id.')" title="Eliminar slider"><i class="far fa-trash-alt"></i></button>';
        })
        ->rawColumns(['actions'])
        ->make(true);
    }
}
