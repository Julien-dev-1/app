<?php

namespace App\Http\Controllers\projet\reponse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reponsecommentaire;
use App\Commentare;
use App\User;
use App\Projet;

class reponse extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
    public function store()
    {
        $user_reponse = $_POST['user_reponse'];
        $commentaire = $_POST['com'];
        $projet_id = $_POST['projet_id'];
        $reponse = $_POST['reponse'];

        Reponsecommentaire::create([
            "user_id" => $user_reponse,
            "response" => $reponse,
            "commentaire_id" => $commentaire
        ]);

        return $reponse;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reponse = Reponsecommentaire::all()->where('commentaire_id', $id);
        $commentaire = Commentare::find($id);
        $user = User::find($commentaire->user_id);
        $projet = Projet::find(Commentare::find( $id)->projet_id);
        $users = User::all();
        // return $commentaire;
        return view('response.show')->with('users', $users)->with('reponse', $reponse)->with('commentaire', $commentaire)->with('user', $user)->with('projet', $projet);
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
