<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Publicacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
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
            'titulo' => 'required|max:50',
            'comentario' => 'required|max:500',
        ]);

        $request->merge([
            'user_id' => Auth::id(),
        ]);
        Comentario::create($request->all());
        return redirect()->route('publicacion.show', $request->publicacion_id)->with('msg', 'Comentario hecho');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        return view('inspire/comentario_edit', compact('comentario'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        $request->validate([
            'titulo' => 'required|max:50',
            'comentario' => 'required|max:500',
        ]);

        Comentario::where('id', $comentario->id)->update($request->except('_token', '_method'));
        return redirect()->route('publicacion.show', $comentario->publicacion)->with('msg', 'Comentario editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {   
        $temp = $comentario;
        $comentario->delete();
        return redirect()->route('publicacion.show', $temp->publicacion)->with('msg', 'Comentario eliminado');
    }
}
