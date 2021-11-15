<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Comentario;
use App\Models\Publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except("index", 'show');
    }

    public function index()
    {
        $publicaciones = Publicacion::all();
        return view('inspire/publicacion_index', compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('inspire/publicacion_create', compact('categorias'));
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
            'titulo' => 'required|max:50',
            'descripcion' => 'required|max:255',
            'explicacion' => 'required',
            'pais' => 'max:15',
        ]);
        

        $request->merge([
            'user_id' => Auth::id()
        ]);
        $publicacion = Publicacion::create($request->all());
        //$publicacion->categorias()->attach($request->categoria_id);
        return redirect()->route('publicacion.index')->with('msg', 'Publicacion creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacion $publicacion)
    {
        $comentarios = $publicacion->comentarios;
        return view('inspire/publicacion_show', compact('publicacion', 'comentarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicacion $publicacion)
    {   
        return view('inspire/publicacion_edit', compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicacion $publicacion)
    {
        $request->validate([
            'titulo' => 'required|max:50',
            'descripcion' => 'required|max:255',
            'explicacion' => 'required',
            'pais' => 'max:15',
        ]);

        Publicacion::where('id', $publicacion->id)->update($request->except('_token', '_method', 'archivo'));
        return redirect()->route('publicacion.show', $publicacion)->with('msg', 'Publicacion editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publicacion $publicacion)
    {
        $publicacion->delete();
        return redirect()->route('publicacion.index')->with('msg', 'Publicacion eliminada');
    }
}
