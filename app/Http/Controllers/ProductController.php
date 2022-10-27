<?php

namespace App\Http\Controllers;

use App\Page;
use App\Brand;
use App\Product;
use App\Category;
use App\Application;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function content()
    {
        $heroProduct = Page::where('name', 'producto')->first()->sections()->first()->contents()->first();
        return view('administrator.product.content', compact('heroProduct'));
    }

    public function create()
    {
        $categories = Category::all();
        $applications = Application::all();
        $brands = Brand::all();
        return view('administrator.product.create', compact('categories', 'applications', 'brands'));
    }

    public function store(ProductRequest $request)
    {
        $data = $request->all();

        if($request->hasFile('data_sheet')) 
            $data['data_sheet'] = $request->file('data_sheet')->store('images/data-sheet', 'public');

        $product = Product::create($data);

        if($request->input('applications'))
            $product->applications()->attach($request->input('applications'));

        if($request->input('brands'))
            $product->brands()->attach($request->input('brands'));
        
        if($request->hasFile('images')){
            foreach($request->file('images') as $image){
                $product->images()->create([
                    'image' => $image->store('images/products', 'public')
                ]);
            }
        }

        return redirect()
            ->route('product.content.edit', ['id' => $product->id])
            ->with('mensaje', 'Producto creado');

    }

    public function edit($id)
    {   
        $categories = Category::all();
        $applications = Application::all();
        $brands = Brand::all();
        $product = Product::findOrFail($id);
        $numberOfImagesAllowed = 3 - $product->images()->count();
        return view('administrator.product.edit', compact('product', 'categories', 'applications', 'numberOfImagesAllowed', 'brands'));
    }

    public function update(ProductRequest $request)
    {        
        $data = $request->all();
        $product = Product::find($request->input('id'));

        if($request->hasFile('data_sheet')){
            if (Storage::disk('public')->exists($product->data_sheet))
                    Storage::disk('public')->delete($product->data_sheet);
            
            $data['data_sheet'] = $request->file('data_sheet')->store('images/data-sheet', 'public');
        }

        $product->update($data);
        $applications = $product->applications;
    
        if($request->input('applications')){
            $product->applications()->wherePivotNotIn('application_id', $request->input('applications'))->detach();

            foreach ($request->input('applications') as $application_id) {
                if(! in_array($application_id, $applications->pluck('id')->toArray()))
                    $product->applications()->attach($application_id);
            }
        }else{
            $product->applications()->detach();
        }

        $brands = $product->brands;
        if($request->input('brands')){
            $product->brands()->wherePivotNotIn('brand_id', $request->input('brands'))->detach();

            foreach ($request->input('brands') as $brand_id) {
                if(! in_array($brand_id, $brands->pluck('id')->toArray()))
                    $product->brands()->attach($brand_id);
            }
        }else{
            $product->brands()->detach();
        }
            
        if($request->hasFile('images')){
            foreach($request->file('images') as $image){
                $product->images()->create([
                    'image' => $image->store('images/products', 'public')
                ]);
            }
        }
                        
        return back()->with('mensaje', 'Producto editado correctamente');
    }



    public function destroy($id)
    {
        Product::find($id)->delete();
    }

    public function find($id)
    {
        $content = Product::find($id);
        return response()->json(['content' => $content]);
    }

    public function getColor($id)
    {
        $product = Product::find($id);

        return response()->json([
            'colors' => $product->colors
        ]);

    }

    public function getList()
    {
        return DataTables::of(Product::query())
        ->editColumn('description', function($product) {
            return $product->description;
        })
        ->addColumn('category', function($product) {
            return $product->category->name;
        })
        ->addColumn('actions', function($product) {
            return '<a href="'.route('product.content.edit', ["id" => $product->id]).'" class="btn btn-sm btn-primary rounded-pill far fa-edit"></a><button class="btn btn-sm btn-danger rounded-pill" onclick="modalProductDestroy('.$product->id.')" title="Eliminar slider"><i class="far fa-trash-alt"></i></button>';
        })
        ->rawColumns(['actions', 'description'])
        ->make(true);
    }
}
