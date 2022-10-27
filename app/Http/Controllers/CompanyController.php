<?php

namespace App\Http\Controllers;

use App\Page;
use App\Content;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CompanyInfoRequest;
use App\Http\Requests\CompanySliderRequest;

class CompanyController extends Controller
{
    protected $page;

    public function __construct(){
        $this->page = Page::where('name', 'empresa')->first();
    }

    public function content()
    {
        $page = Page::where('name', 'empresa')->first();
        $sections   = $page->sections;
        $section_1   = $sections->where('name', 'section_1')->first()->contents()->first();
        $section_2   = $sections->where('name', 'section_2')->first()->contents()->first();
        return view('administrator.company.content', compact('section_1', 'section_2'));
    }
    
    public function storeSlider(CompanySliderRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store('images/company','public');
        Content::create($data);
        return response()->json(['tableReload' => true],201);
    }

    public function updateSlider(CompanySliderRequest $request)
    {
        $element= Content::find($request->input('id'));
        $data   = $request->all();
        
        if($request->hasFile('image')){
            if(Storage::disk('public')->exists($element->image))
                Storage::disk('public')->delete($element->image);
            
            $data['image'] = $request->file('image')->store('images/company','public');
        } 
        $element->update($data);
    }


    public function updateInfo(CompanyInfoRequest $request)
    {
        $element= Content::find($request->input('id'));
        $data   = $request->all();
        
        if($request->hasFile('content_2')){
            if(Storage::disk('public')->exists($element->content_2))
                Storage::disk('public')->delete($element->content_2);
            
            $data['content_2'] = $request->file('content_2')->store('images/company','public');
        } 

        if($request->hasFile('content_3')){
            if(Storage::disk('public')->exists($element->content_3))
                Storage::disk('public')->delete($element->content_3);
            
            $data['content_3'] = $request->file('content_3')->store('images/company','public');
        } 

        if($request->hasFile('content_4')){
            if(Storage::disk('public')->exists($element->content_4))
                Storage::disk('public')->delete($element->content_4);
            
            $data['content_4'] = $request->file('content_4')->store('images/company','public');
        } 

        $element->update($data);

        return back();
    }


    public function destroySlider($id)
    {
        $element = Content::find($id);
        if(Storage::disk('public')->exists($element->image))
            Storage::disk('public')->delete($element->image);
        
        $element->delete();
        return response()->json([], 200);
    }

    public function sliderGetList()
    {
        //<button class="btn btn-sm btn-danger rounded-pill" onclick="modalDestroy('.$slider->id.')" title="Eliminar slider"><i class="far fa-trash-alt"></i></button>
        $sectionSlider = $this->page->sections()->where('name', 'section_1')->first();

        $sliders = $sectionSlider->contents()->orderBy('order', 'ASC');

        return DataTables::of($sliders)
        ->editColumn('image', function($slider){
            return '<img src="'.asset($slider->image).'" class="img-fluid" style="max-width:100px">';
        })
        ->addColumn('actions', function($slider) {
            return '<button type="button" class="btn btn-sm btn-primary rounded-pill far fa-edit" data-toggle="modal" data-target="#modal-update-element" onclick="findContent('.$slider->id.')"></button>';
        })
        ->rawColumns(['actions', 'image'])
        ->make(true);
    }
}
