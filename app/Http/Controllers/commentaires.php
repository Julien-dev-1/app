<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commentare;
use App\User;
use App\Notification;

class commentaires extends Controller
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
        $user_id = $_POST['user_id'];
        $value = $_POST['value'];
        $projet_id = $_POST['projet_id'];
        Commentare::create([
            "user_id" => $user_id,
            "projet_id" => $projet_id,
            "commentaires" => $value
        ]);
        $commentaire_id = Commentare::all()->where("commentaires", $value)->first();
        Notification::create([
            "user_id" => $user_id,
            "projet_id" => $projet_id,
            // "commentaire_id" => $commentaire_id->id,
            "textone" => "à egalement commenté  dans la page du projet",
            "lienNotification" => "/projet/commentaire/reponse"
        ]);
        $user = User::find($user_id);
        $data = [
            "name" => $user->name,
            "firstname" => $user ->firstname,
            "commentaires" => $value
            
        ];
        return $data;
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
    public function del()
    {
        $id = $_POST['id'];
        $commentaire = Commentare::find($id)->delete();
        return $id;
    }
}
