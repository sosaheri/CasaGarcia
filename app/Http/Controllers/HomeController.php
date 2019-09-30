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
        $medias = Medias::latest()->paginate(8);

        return view('web.home', compact('medias'))
            ->with('i', (request()->input('page', 1) - 1) * 8);
    }


    public function sociales()
    {
            $medias = Medias::where('category', '=', 'sociales')->get();
            
            return view('web.sociales', compact('medias'))
                ->with('i', (request()->input('page', 1) - 1) * 8);
    }

}
