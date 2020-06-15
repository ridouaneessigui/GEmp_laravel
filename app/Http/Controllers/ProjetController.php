<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type;
use DB;
use App\projet;
use App\Employeur;
use Auth;
use Excel;
class ProjetController extends Controller
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
        $types=DB::table('types')->pluck('nom','id');
        return view('projet.create',compact('types'));
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
            'ter'=>'required',
            'date'=>'required',
            'type_id'=>'required',
            
        ]);
        $data=array_add($data,'user_id',Auth::user()->id);
        projet::create($data);
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
        $projet =projet::findOrFail($id);
        return view('projet.show',compact('projet'));
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
      $projet =projet::findOrFail($id);
      if($projet->type->nom=='non')
      {
        $projet->type->nom='non';
        $projet->save();
        return redirect('/projet'.$id.'/show');
      }
      
  }
}
