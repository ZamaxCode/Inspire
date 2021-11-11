<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return view('inspire/publicacion_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'apellido_materno' => 'max:255',
            'codigo' => 'required|max:255|unique:App\Models\Persona,codigo',
            'correo' => 'email|max:255',
            'telefono' => 'max:50'
        ]);*/
        

        $request->merge([
            'user_id' => Auth::id()
        ]);
        $publicacion = Publicacion::create($request->all());
        return redirect()->route('publicacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacion $publicacion)
    {
        return view('inspire/publicacion_show', compact('publicacion'));
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
        /*$request->validate([

            'nombre' => 'required|max:255',
            'apellido_paterno' => 'required|max:255',
            'apellido_materno' => 'max:255',
            'codigo' => [
                        'required',
                        Rule::unique('personas')->ignore($persona->id)
                    ],
            'correo' => 'email|max:255',
            'telefono' => 'max:50'

        ]);*/

        Publicacion::where('id', $publicacion->id)->update($request->except('_token', '_method', 'archivo'));
        return redirect()->route('publicacion.show', $publicacion);
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
        return redirect()->route('publicacion.index');
    }
}
