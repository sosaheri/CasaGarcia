<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
use DB;

class FaqController extends Controller
{
    public function index(){
        $faqs = Faq::latest()->paginate(30);

        return view('dashboard.faq.index', compact('faqs'))
            ->with('i', (request()->input('page', 1) - 1) * 30);
    }

    public function create( Request $request){

        $request->validate([
            'pregunta' => 'required',
            'respuesta' => 'required',
            
        ]);

        Faq::create([
            'question' => $request->pregunta,
            'answer' => $request->respuesta,
            
        ]);
        return redirect()->route('listarFaq')
               ->with('success','Pregunta guardada exitosamente.');

    }

    public function eliminar( $id){

        $faq = Faq::find($id);
        $faq->delete();

        return redirect()->route('listarFaq')
               ->with('success','Pregunta eliminada exitosamente.');

    }

    public function editar($id){

        

        $faq = Faq::find($id);

        

        return view('dashboard.faq.editar', compact('faq'));

    }

    public function actualizar(Request $request){

        $request->validate([
            'pregunta' => 'required',
            'respuesta' => 'required',
            
        ]);
        
        DB::table('faqs')
        ->where('id', $request->id)
        ->update
        (['question' => $request->pregunta,
          'answer' => $request->respuesta,    
                   
        ]);

        return redirect()->route('listarFaq')
               ->with('success','Pregunta editada exitosamente.');

    }

}
