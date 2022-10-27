<?php

namespace App\Http\Controllers;

use App\Page;
use App\Content;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\HomeRequest;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    protected $page;

    public function __construct(){
        
        $this->page = Page::where('name', 'home')->first();
    }

    /**
     * @author Raul castro
     */

    public function index()
    {
        return view('home');
    }
    /**
     * Fin Slider
     */

    public function content()
    {
        $sections   = $this->page->sections;
        $section2   = $sections->where('name', 'section_2')->first()->contents()->orderBy('order', 'ASC')->get();
        $s3   = $sections->where('name', 'section_3')->first()->contents()->first();
        $s4 = $sections->where('name', 'section_4')->first()->contents()->first();
        return view('administrator.home.content', compact('section2', 's3', 's4'));
    }

    /**
     * @param array $request
     * @author Raul castro
     */

    public function store(HomeRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('images/home', 'public');
        $content = Content::create($data);
        return response()->json(['tableReload' => true],201);
    }

    public function update(HomeRequest $request)
    {
        $element = Content::find($request->input('id'));
        $data = $request->all();
        
        if($request->hasFile('image')){
            if(Storage::disk('public')->exists($element->image))
                Storage::disk('public')->delete($element->image);
            
            $data['image'] = $request->file('image')->store('images/home','public');
        }  
        
        if($request->hasFile('content_3')){
            if(Storage::disk('public')->exists($element->content_3))
                Storage::disk('public')->delete($element->content_3);
            
            $data['content_3'] = $request->file('content_3')->store('images/home','public');
        }     

        $element->update($data);
    }

    public function destroy($id)
    {
        Content::find($id)->delete();
        return response()->json([], 200);
    }



    
    /**
     * @author Raul castro
     * @return datatable
     */

    public function sliderGetList()
    {
        $sectionSlider = $this->page
            ->sections()
            ->where('name', 'section_1')
            ->first();

        $sliders = $sectionSlider->contents()
            ->orderBy('order', 'ASC');

        return DataTables::of($sliders)
        ->editColumn('image', function($slider){
            return '<img src="'.asset($slider->image).'" class="img-fluid" style="max-width:100px">';
        })
        ->addColumn('actions', function($slider) {
            return '<button type="button" class="btn btn-sm btn-primary rounded-pill far fa-edit" data-toggle="modal" data-target="#modal-update-element" onclick="findContent('.$slider->id.')"></button><button class="btn btn-sm btn-danger rounded-pill" onclick="modalDestroy('.$slider->id.')" title="Eliminar slider"><i class="far fa-trash-alt"></i></button>';
        })
        ->rawColumns(['actions', 'image'])
        ->make(true);
    }
}



