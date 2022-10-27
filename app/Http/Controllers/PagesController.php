<?php

namespace App\Http\Controllers;

use SEO;
use App\Data;
use App\Page;
use App\Post;
use App\Brand;
use App\Client;
use App\Product;
use App\Category;
use App\Application;
use App\Represented;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class PagesController extends Controller
{
    private $data;

    public function __construct()
    {
        $this->data = Data::first();
    }

    public function home()
    {
        $page = Page::where('name', 'home')->first();
        SEO::setTitle('home');
        SEO::setDescription($page->keywords);
        $sections = $page->sections;
        $sliders = $sections->where('name', 'section_1')->first()->contents;
        $appsHero = $sections->where('name', 'section_2')->first()->contents()->orderBy('order', 'ASC')->get();
        $s3 = $sections->where('name', 'section_3')->first()->contents()->first();
        $s4 = $sections->where('name', 'section_4')->first()->contents()->first();
        $represented = Represented::orderBy('order', 'ASC')->get();
        $heroProduct = Page::where('name', 'producto')->first()->sections()->first()->contents()->first();
        return view('paginas.index', compact('sliders', 'appsHero', 's3', 's4', 'represented', 'heroProduct'));
    }

    public function empresa()
    {
        $page = Page::where('name', 'empresa')->first();
        SEO::setTitle('empresa');
        SEO::setDescription($page->keywords);
        $sections = $page->sections;
        $s1 = $sections->where('name', 'section_1')->first()->contents;
        $s2 = $sections->where('name', 'section_2')->first()->contents()->first();
        $sliders = collect([$s2->content_2, $s2->content_3, $s2->content_4])->filter(function ($value, $key) {
            return isset($value);
        });
        $represented = Represented::orderBy('order', 'ASC')->get();
        return view('paginas.empresa', compact('s1', 's2', 'sliders', 'represented'));
    }

    public function secciones()
    {
        $heroProduct = Page::where('name', 'producto')->first()->sections()->first()->contents()->first();
        return view('paginas.secciones', compact('heroProduct'));
    }

    public function familias()
    {
        $heroProduct = Page::where('name', 'familias')->first()->sections()->first()->contents()->first();
        return view('paginas.familias', compact('heroProduct'));
    }

    public function familia($id)
    {

        $heroProduct = Page::where('name', 'familias')->first()->sections()->first()->contents()->first();
        $element = Category::findOrFail($id);
        $products = $element->products;
        SEO::setTitle($element->name);
        return view('paginas.productos', compact('element', 'products', 'heroProduct'));
    }

    public function marcas()
    {
        $heroProduct = Page::where('name', 'marcas')->first()->sections()->first()->contents()->first();
        return view('paginas.marcas', compact('heroProduct'));
    }

    public function marca($id)
    {
        $element = Brand::findOrFail($id);
        SEO::setTitle($element->name);
        $products = $element->productsBrands; 
        $heroProduct = Page::where('name', 'marcas')->first()->sections()->first()->contents()->first();
        return view('paginas.productos', compact('element', 'products', 'heroProduct'));
    }

    public function aplicaciones()
    {
        $applications = Application::orderBy('order', 'ASC')->get();
        return view('paginas.aplicaciones', compact('applications'));
    }

    public function aplicacion($id)
    {
        $element = Application::findOrFail($id);
        SEO::setTitle($element->name);
        $products = $element->products;
        return view('paginas.aplicacion', compact('element', 'products'));
    }

    public function productos(Request $request)
    {
        $products = Product::all();
        $heroProduct = Page::where('name', 'familias')->first()->sections()->first()->contents()->first();
        return view('paginas.productos', compact('products', 'heroProduct'));
    }

    public function producto($id)
    {
        $product = Product::findOrFail($id);
        SEO::setTitle($product->name);
        SEO::setDescription(strip_tags($product->description));
        return view('paginas.producto', compact('product'));
    }

    public function servicios()
    {
        $page = Page::where('name', 'servicios')->first();
        SEO::setTitle('servicios');
        SEO::setDescription($page->keywords);
        $posts = $page->posts()->orderBy('order', 'ASC')->get();
        return view('paginas.servicios', compact('posts'));
    }

    public function videos(){
        $page = Page::where('name', 'videos')->first();
        SEO::setTitle("videos");
        SEO::setDescription($page->keywords);
        $posts = $page->posts()->orderBy('order', 'ASC')->get();
        return view('paginas.videos', compact('posts'));
    }

    public function clientes()
    {
        $page = Page::where('name', 'clientes')->first();
        SEO::setTitle("clientes");
        SEO::setDescription($page->keywords);
        $clients = Client::orderBy('order', 'ASC')->get();
        return view('paginas.clientes', compact('clients'));
    }

    public function solicitudDePresupuesto()
    {
        $page = Page::where('name', 'solicitudad-presupuesto')->first();
        SEO::setTitle("cotizador Online");
        SEO::setDescription($page->keywords);
        return view('paginas.solicitud-de-presupuesto');
    }

    public function contacto()
    {
        $page = Page::where('name', 'contacto')->first();
        SEO::setTitle("contacto");
        SEO::setDescription($page->keywords);      
        return view('paginas.contacto');
    }

    public function fichaTecnica($id)
    {
        $producto = Product::findOrFail($id);  
        return Response::download($producto->data_sheet);  
    }

    public function borrarFichaTecnica($id)
    {
        $product = Product::findOrFail($id); 
        
        if(Storage::disk('public')->exists($product->data_sheet))
            Storage::disk('public')->delete($product->data_sheet);

        $product->data_sheet = null;
        $product->save();

        return response()->json([], 200);
    }
}
