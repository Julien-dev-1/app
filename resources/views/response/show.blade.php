@extends('layouts.app')
<link href="{{ asset('css/reponse/reponse.css') }}" rel="stylesheet">
@section('content')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <div class="col-flew">

        <div class="v-width ac-poney">
            <div class="title-project rotateInDownRight animate delay-5s">
                {{ $projet->title }}
            </div>
            <div class="projectPicture">
                <img src="{{ asset('image/slide/2.jpg') }}" class="item-projet" alt="">
            </div>
            <div class="project-builder">
                <div class="flex-user-builder">
                    <div class="user-contain-picture">
                        <img src="{{ asset('image/slide/2.jpg') }}" class="user-contain-picture" alt="">
                    </div>
                    <div class="details-user">
                        <p class ="long_user">{{ $users[$projet->user_id]->firstname ?? '' }} {{ $users[$projet->user_id]->name ?? '' }}</p>
                        <p class ="long_universite">{{ $users[$projet->user_id]->universite ?? '' }}</p>
                    </div>
                </div>
                <div class="categories-odd">
                    -CATEGORIE PROJET-ODD-5
                </div>
            </div>
            <div class="number-collect">
                <div class="number-jeuton">
                    <p class="total-number">350</p>
                    <p class="total">sur {{ $projet-> projet_jeutons }}</p>
                </div>
            <div class="number-valifunders">
                <p class="total-valifunders">15</p>
                <p class="valifunders">Valifunders</p>
            </div>
            </div>
            <div class="progress w3-progress-width">
                <div class="progress-bar role-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:50%"></div>
            </div>
                <div class="number-collect collect-top">
                <div class="number-jeuton">
                    <p class="total-number">58%</p>
                </div>
                <div class="number-valifunders days">
                    <p class="valifunders valifunders-days">J - {{ $projet->days }}</p>
                </div>
            </div>
            <div class="project-description">
                <p class="_wrapper">
                    {{ $projet -> description }}
                </p>
            </div>
        </div>


        <div class="response-content with">
            <div class="comment-content">
                <div class="user_comment">
                    <img class = "reponse-user" src ='{{ asset("users/$user->user_path") }}'>
                </div>
                <div class="tex-user">
                    <div class="useComment">
                        <strong class="ColorProfil">{{ App\User::find($commentaire->user_id)->name }} {{ App\User::find($commentaire->user_id)->firstname }} </strong> à  {{ $commentaire -> created_at }}
                    </div>
                    <div class = "_0000">
                        {{ $commentaire -> commentaires }}
                    </div>
                </div>
            </div>
            <div  class ="_kvXX">
                @foreach ($reponse as $rep)
                <div class ="flex_99">
                    <div class="user_comment">
                        <img class = "reponse-user" src = "/users/{{ App\User::find($rep->user_id)->user_path }}">
                    </div>
                    <div class="hei-wid">
                        <div class="useComment">
                            <strong class="ColorProfil">{{ App\User::find($rep->user_id)->name }} {{ App\User::find($commentaire->user_id)->firstname }} </strong> à  {{ $rep -> created_at }}
                        </div>
                        <div class = "_0000">
                            {{ $rep-> response }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
    </div>

@endsection
