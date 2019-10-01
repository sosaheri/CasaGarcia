<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medias;
use App\Faq;

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

            $videos = Medias::where('type', 'video')->get();

            $faqs = Faq::all();
            
            return view('web.carpas', compact('medias', 'videos', 'faqs'));
    }

    public function cuadrada()
    {
            $medias = Medias::where('category', '=', 'cuadrada')->get();

            $videos = Medias::where('type', 'video')->get();

            $faqs = Faq::all();
            
            return view('web.cuadrada', compact('medias', 'videos', 'faqs'));
    }

    public function mesaVintage()
    {
            $medias = Medias::where('category', '=', 'mesa-vintage')->get();

            $videos = Medias::where('type', 'video')->get();

            $faqs = Faq::all();
            
            return view('web.mesaVintage', compact('medias', 'videos', 'faqs'));
    }

    public function periquera()
    {
            $medias = Medias::where('category', '=', 'periquera')->get();

            $videos = Medias::where('type', 'video')->get();

            $faqs = Faq::all();
            
            return view('web.periquera', compact('medias', 'videos', 'faqs'));
    }

    public function salaVintage()
    {
            $medias = Medias::where('category', '=', 'sala-vintage')->get();

            $videos = Medias::where('type', 'video')->get();

            $faqs = Faq::all();
            
            return view('web.sala-vintage', compact('medias', 'videos', 'faqs'));
    }

    public function lounge()
    {
            $medias = Medias::where('category', '=', 'lounge')->get();

            $videos = Medias::where('type', 'video')->get();

            $faqs = Faq::all();
            
            return view('web.lounge', compact('medias', 'videos', 'faqs'));
    }

    public function bocadillos()
    {
            $medias = Medias::where('category', '=', 'bocadillos')->get();

            $videos = Medias::where('type', 'video')->get();

            $faqs = Faq::all();
            
            return view('web.bocadillos', compact('medias', 'videos', 'faqs'));
    }

}
