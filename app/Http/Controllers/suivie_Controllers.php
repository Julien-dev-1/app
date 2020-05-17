<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\SuivieModel;
use App\Notification;

class suivie_Controllers extends Controller
{

    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $data_projet = $_POST['projet_id'];
        $data_user = $_POST['user_id'];
        $value = SuivieModel::all()->where('projet_id', $data_projet )->where('user_id', $data_user)->first();
        if ($value){
            if ($value->suivie == false) {
                $value->update(["suivie" => true]);
                return 1;
            }
            else{
                $value->update(["suivie" => false]);
                // update value
                return 0;
            }
        } else {
             //creer dans la base de donne
            SuivieModel::create([
                "user_id" => $data_user,
                "projet_id" => $data_projet,
                "suivie" => true
            ]);
            //creer la notification aproprier
            Notification::create([
                "user_id" => $data_user,
                "projet_id" => $data_projet,
                "type" => 'suivie'
            ]);

            return 1;
        }
    }
}
