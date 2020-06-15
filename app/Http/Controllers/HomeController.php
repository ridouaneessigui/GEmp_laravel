<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\projet;
use App\employeur;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



          if(Auth::user()->role=='admin')
      {
          $projets=projet::paginate(10);
      }
      else
      {
          $projets=projet::where('user_id',Auth::user()->id)->paginate(10);
      }

        $employeurs=employeur::paginate(10);
        return view('home',compact('projets','employeurs'));
    }
}
