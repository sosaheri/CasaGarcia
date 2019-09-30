<?php

namespace App\Http\Controllers;

use App\Medias;
use Illuminate\Http\Request;
use DB;

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createEnlace(){
       
        $enlaces = DB::table('medias')->select('id','url', 'type')
                    ->where('type', '=', 'video')
                    ->get();

        return view('dashboard.videos.create', compact('enlaces'));

    }

    public function guardarEnlaces(Request $request){

        

             $data = Medias::find(1);
             $data->url = $request->slider1;
             $data->save();

             $data = Medias::find(2);
             $data->url = $request->slider2;
             $data->save();

             $data = Medias::find(3);
             $data->url = $request->slider3;
             $data->save();

             
             $data = Medias::find(4);
             $data->url = $request->v1;
             $data->save();
             
             $data = Medias::find(5);
             $data->url = $request->v2;
             $data->save();
             
             $data = Medias::find(6);
             $data->url = $request->v3;
             $data->save();
             
             $data = Medias::find(7);
             $data->url = $request->v4;
             $data->save();
                        
         return redirect()->back()->with('success', 'Ha actualizado exitosamente los enlaces de video.');

                        
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
