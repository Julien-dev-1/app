<?php

namespace App\Http\Controllers\projet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Projet;
Use App\User;
use App\Apropos;
use App\Commentare;
use App\Reponsecommentaire;

class ProjetControllers extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = Projet::select('*')->where('id', $id)->first();
        $user = User::select('*')->where('id',$id)->first();
        $apropos = Projet::find($id)->apropos;
        $commentaire = Commentare::all();
        $reponse = Reponsecommentaire::all();
        // return $reponse;
        // return Auth::user();
         
        return view('projet.show')->with('details', $details)->with('reponse', $reponse)->with('user', $user)->with('apropos',$apropos)->with('commentaire', $commentaire);
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
}
