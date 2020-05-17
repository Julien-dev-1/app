<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class suivieModel extends Model
{
    protected $fillable = [
        'user_id', 'projet_id','suivie'
    ];
    
    public function suivie_value($data_projet , $data_user){
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
