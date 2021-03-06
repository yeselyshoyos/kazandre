<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Category::all();
        $rows = DB::table('products')
                ->join('categories', 'products.id_category', '=', 'categories.id')
                ->select('products.*', 'categories.name AS nameCategory')
                ->get();

        return view('products.index', compact('rows', 'categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required',
            'id_category'   => 'required',
            'stock'         => 'required',
            'img'          => 'required|image|mimes:jpeg,png,jpg|max:2024',

        ]);

        $image = $request->file('img')->storeAs('public/img', $request->name.'2'. ".jpg");

        $img = Storage::url($image);

        Product::create([
            'name'          => $request['name'],
            'description'   => $request['description'],
            'price'         => $request['price'],
            'id_category'   => $request['id_category'],
            'stock'         => $request['stock'],
            'img'           => $img,

        ]);

        return back()->with('mensaje', '¡Producto creado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required',
            'id_category'   => 'required',
            'strok'         => 'required',
            'img'          => 'required|image|max:2044',

        ]);



        $product = Product::findOrFail($id);
        $product->fill($request->all());

        //pregunta si la imagen ya exite
        if ($request->hasFile('img')) {

            //elimina la imagen
            Storage::delete($product->img);

            $image = $request->file('img')->storeAs('public/img', $product->name . '2'.'.jpg');


        }

        $img = Storage::url($image);

        $rows = DB::table('products')
                ->where('id', $request->id)
                ->update([
                    'name'          => $request->name,
                    'description'   => $request->description,
                    'price'         => $request->price,
                    'id_category'   => $request->id_category,
                    'stock'         => $request->stock,
                    'img'           => $img,

                ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::find($id);

        $url = str_replace('storage', 'public', $product->img);
        Storage::delete($url);
        $product->delete();

        return redirect()->route('products.index')->with('mensaje', '¡Producto eliminado con exito!');
    }
}
