<?php

namespace App\Http\Controllers\notification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notification;
use App\Projet;
use App\User;


class notificationController extends Controller
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
        $JsonFiles = $this->GetAllDays();
        // return $JsonFiles;
        // compact('type', 'column', 'values', 'boolean', 'not');
        return view('Notification')->with('notif', $JsonFiles);
    }

    public function longueurOfArray($ArrayOnLength){
        $number = 0;
        foreach ($ArrayOnLength as $value) {
            $number ++;
        }
        return $number;
    }
    public function GettextNotified($val){
        if ($val == "suivie") {
            return " à également suivie l'évolution de votre projet ";
        }
        elseif($val == "commentaire") {
            return " à également commenté votre projet ";
        }
        else{
            return "Not Found";
        }
    }

    public function GetAllDays(){
        $beginOfDate = date('Y-m-d 00:00:00');
        $endOfDate = date('Y-m-d 23:59:59');

        $aujoudhui =  Notification::all()->where('created_at','>=', $beginOfDate, '<=' ,$endOfDate);

        $day = Notification::all()->where('created_at','>=', "2020-04-01 00:00:00", '<=' ,"2020-05-17 23:59:59");

        $hierDay = date('d') - 1;
        $hier = date("Y-m-$hierDay");
        $hierValue = Notification::all()->where('created_at','>=', "$hier 00:00:00:00:00", '<=', "$hier 00:00:00:00");

        $MonthDay = date('m')-1;
        $MonthBegin = date("Y-$MonthDay-01");
        $MonthEnd = date("Y-m-01");
        $MonthValue = Notification::all()->where('created_at','<=',"$MonthEnd 00:00:00" ,'>=', "$MonthBegin 23:59:59");

        $jourJson = [];
        foreach ($aujoudhui as $value) {
            $type = $this->GetTypeOfNotification($value);
            $user = $this->GetUserOfProject($value);
            $suivieText = $this->GettextNotified($type);
            $projet = $this->GetProjetTitle($value);
            $own = $this->OwnProject($value);         
            array_push($jourJson,
                [
                    "Projet" => $projet,
                    "User" => $user,
                    "Own" => $own,
                    "NotifText" => $suivieText,
                    "UserTimeNotif" => $value->created_at->format("Y-m-d"),
                    "Nouveau" => $value->Isnew,
                    "Jours" => date('Y-m-d')
                ]
            );
        }
        $HierJson = [];
        foreach ($hierValue as $value) {
            $type = $this->GetTypeOfNotification($value);
            $user = $this->GetUserOfProject($value);
            $suivieText = $this->GettextNotified($type);
            $projet = $this->GetProjetTitle($value); 
            $own = $this->OwnProject($value);           
            array_push($HierJson,
                [
                    "Projet" => $projet,
                    "User" => $user,
                    "Own" => $own,
                    "NotifText" => $suivieText,
                    "UserTimeNotif" => $value->created_at->format("Y-m-d"),
                    "Nouveau" => $value->Isnew,
                    "Jours" => date('Y-m-d')
                ]
            );
        }
        $MonthJson = [];
        foreach ($MonthValue as $value) {
            $type = $this->GetTypeOfNotification($value);
            $user = $this->GetUserOfProject($value);
            $suivieText = $this->GettextNotified($type);
            $projet = $this->GetProjetTitle($value);
            $own = $this->OwnProject($value);            
            array_push($MonthJson,
                [
                    "Projet" => $projet,
                    "User" => $user,
                    "Own" => $own,
                    "NotifText" => $suivieText,
                    "UserTimeNotif" => $value->created_at->format("Y-m-d"),
                    "Nouveau" => $value->Isnew,
                    "Jours" => date('Y-m-d')
                ]
            );
        }
        $repartition = [
            "aujourdhui" => ["number" => $this->longueurOfArray($jourJson), "value" => $jourJson],
            "hier" => ["number" => $this->longueurOfArray($HierJson), "value" => $HierJson],
            "OneMonth" => ["number" => $this->longueurOfArray($MonthJson), "value" => $MonthJson]
        ];
        return $repartition;
    }
    public function GetUserOfProject($value){
        return User::find($value->user_id)->name;
    }
    public function GetTypeOfNotification($value){
        return $value->type;
    }
    public function GetProjetTitle($value){
        return Projet::find($value->projet_id)->title;
    }
    public function OwnProject($value){
        $user = Projet::find($value->projet_id);
        return User::find($user->user_id)->id;
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
}
