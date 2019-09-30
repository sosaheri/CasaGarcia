<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medias;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $medias = Medias::all();

        
        return view('web.home', compact('medias'))
            ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    public function carpas()
    {
            $medias = Medias::where('category', '=', 'carpas')->get();
            
            return view('web.carpas', compact('medias'))
                ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    public function cuadrada()
    {
            $medias = Medias::where('category', '=', 'cuadrada')->get();
            
            return view('web.cuadrada', compact('medias'))
                ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    public function mesaVintage()
    {
            $medias = Medias::where('category', '=', 'mesa-vintage')->get();
            
            return view('web.mesaVintage', compact('medias'))
                ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    public function periquera()
    {
            $medias = Medias::where('category', '=', 'periquera')->get();
            
            return view('web.periquera', compact('medias'))
                ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    public function salaVintage()
    {
            $medias = Medias::where('category', '=', 'sala-vintage')->get();
            
            return view('web.sala-vintage', compact('medias'))
                ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    public function lounge()
    {
            $medias = Medias::where('category', '=', 'lounge')->get();
            
            return view('web.lounge', compact('medias'))
                ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    public function bocadillos()
    {
            $medias = Medias::where('category', '=', 'bocadillos')->get();
            
            return view('web.bocadillos', compact('medias'))
                ->with('i', (request()->input('page', 1) - 1) * 8);
    }

}
