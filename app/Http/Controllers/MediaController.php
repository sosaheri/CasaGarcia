<?php

namespace App\Http\Controllers;

use App\Medias;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $medias = Medias::latest()->paginate(30);

        return view('dashboard.images.index', compact('medias'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('dashboard.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        

        $request->validate([
            'ruta' => 'required',
            'type' => 'required',
            'category' => 'required',
        ]);
        

        if($request->hasFile('ruta')){
            $path = $request->ruta->store('public');

            Medias::create([
                'url' => $path,
                'type' => $request->type,
                'category' => $request->category,
            ]);
            return redirect()->route('listarImagen')
                   ->with('success','Imagen Guardada exitosamente.');

        }else{
            return redirect()->route('listarImagen')
                   ->with('error','Error al subir Imagen.');
        }
   
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medias  $medias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        
        $data = Medias::find($id);
       
        $data->delete();

        
  
        return redirect()->route('listarImagen')
                        ->with('success','Imagen Eliminada');
    }
}
