<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type;
use DB;
use App\projet;
use App\Employeur;
use Auth;
use Excel;
class EmployeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $projets=DB::table('projets')->pluck('nom','id');
        return view('Employeur.create',compact('projets'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->all();
        $this->validate($request,[
            'nom'=>'required',
           'prenom'=>'required',
           'date'=>'required',
           'adresse'=>'required',
           'telephone'=>'required',
           'exp'=>'required',
           'projts_id'=>'required',
            
        ]);
        $data=array_add($data,'user_id',Auth::user()->id);
        Employeur::create($data);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
            
        $Employeur =Employeur::findOrFail($id);
        return view('Employeur.show',compact('Employeur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
        public function consulter($id)
    {
        $Employeur =Employeur::findOrFail($id);
           if($Employeur->projets->nom)
      {
        
        $Employeur->save();
        return redirect('/Employeur'.$id.'/show');
       }
  }
}
