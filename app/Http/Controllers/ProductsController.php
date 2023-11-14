<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product as Pro;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Pro::paginate(10);
        return view('Products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'img' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'cod' => 'required|string|min:3|max:20',
            'sab' => 'required|string|min:0|max:250',
            'pre' => 'required|numeric|min:0|max:250',
        ]);
    
        if ($validator->fails()) {
            return redirect()->route('products.create')
                ->withErrors($validator)
                ->withInput();
        }
    
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imageName = $request->img->getClientOriginalName(); // Obtén el nombre original de la imagen
            $img->move(public_path('images'), $imageName);
    
            Pro::create([
                'img' => $imageName, // Almacena el nombre original de la imagen
                'cod' => $request->cod,
                'sab' => $request->sab,
                'pre' => $request->pre,
            ]);
    
            Alert::success('Éxito', 'El Producto se creó con éxito');
        }
    
        return redirect()->route('products.index');
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pro = Pro::find($id);
        return view('Products.update', compact('pro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'img' => 'image|mimes:jpg,jpeg,png|max:2048',
            'cod' => 'required|string|min:3|max:20',
            'sab' => 'required|string|min:0|max:250',
            'pre' => 'required|numeric|min:0|max:250',
        ]);

        if ($validator->fails()) {
            return redirect()->route('products.edit', $id)
                ->withErrors($validator)
                ->withInput();
        }

        $pro = Pro::find($id);

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('images'), $imageName);
            $pro->img = $imageName;
        }

        $pro->cod = $request->cod;
        $pro->sab = $request->sab;
        $pro->pre = $request->pre;
        $pro->save();

        Alert::success('Éxito', 'El Producto se actualizó con éxito');

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pro = Pro::find($id);
        $pro->delete();

        Alert::success('Éxito', 'El Producto se eliminó con éxito');

        return redirect()->route('products.index');
    }

    public function showImage($id)
    {
        $product = Pro::find($id);

        if (!$product) {
            // Manejo de error si el producto no se encuentra
            return abort(404);
        }

        // Obtiene la ruta de la imagen almacenada en la base de datos
        $imagePath = public_path('images/' . $product->img);

        if (file_exists($imagePath)) {
            // Devuelve la imagen al navegador
            return response()->file($imagePath);
        } else {
            // Manejo de error si la imagen no se encuentra
            return abort(404);
        }
    }
}
