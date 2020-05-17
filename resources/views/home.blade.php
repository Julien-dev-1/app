@extends('layouts.app')
@extends('components.create_value_notification')

@guest
    <title> Bienvenue sur valinanana</title>
@else
    <title> Bienvenue {{ Auth::user()->name }}! Accueil valinanana</title>
@endguest
<link rel="shortcut icon" href="{{ asset('image/header/valintanana.png') }}">
@section('content')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <br>
  <div class="_projetUne">
    <h2>Projet à la une</h2>     
  </div>
    <div class="contains-projet">
    <div class="arrow-l left-r"><i class="fa fa-arrow-left r arow-hover slideToggleLeft"></i> </div>
    <div class="_padding">
      <div class="_projet-home">


      @foreach ($projets as $projets)


        {{--  commencement du projet  --}}

        <div class="v-width ac-poney">
            <div class="title-project rotateInDownRight animate delay-5s">
                {{ $projets->title }}
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
                        <p class ="long_user">{{ $users[$projets->user_id]->firstname ?? '' }} {{ $users[$projets->user_id]->name ?? '' }}</p>
                        <p class ="long_universite">{{ $users[$projets->user_id]->universite ?? '' }}</p>
                    </div>
                </div>
                <div class="categories-odd">
                    -CATEGORIE PROJET-ODD-5
                </div>
            </div>
            <div class="number-collect">
                <div class="number-jeuton">
                    <p class="total-number">350</p>
                    <p class="total">sur {{ $projets -> projet_jeutons }}</p>
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
                    <p class="valifunders valifunders-days">J - {{ $projets->days }}</p>
                </div>
            </div>
            <div class="project-description">
                <p class="_wrapper">
                    {{ $projets -> description }}
                </p>
            </div>
            <div class="button-details">
                <a class="details" href="projet/details/{{ $projets -> id }}">
                    <div>Details</div>
                </a>
                <div class="suivre hearth_id">
                @guest
                    <div>
                        <i class="not fa fa-heart-o _h" onclick = "ElementAlert()" real = "{{ $projets -> title }}"></i>
                    </div>
                    <div class="_t">
                        Suivre
                    </div>
                @else
                    <?php
                        $suivie = App\SuivieModel::all()->where('projet_id',$projets->id);
                        $nb = 0;
                        
                        foreach ($suivie as $value)
                        {
                            if($value->suivie == true){
                                $nb = $nb + 1;
                            }
                            
                            if ($value->user_id == Auth::user()->id)
                            {
                                
                                if ($value->suivie == true)
                                {
                                    $class = 'fa-heart';
                                }
                                else
                                {
                                    $class = 'fa-heart-o';
                                }
                            }

                            else{
                                $class = 'fa-heart-o';
                                }
                        }
                        
                        if ($nb > 1)
                        {
                            $suivie = 'suivies';
                        }
                        else
                        {
                            $suivie = 'suivie';
                        }
                        
                        
                    ?>
                    @csrf               
                    <div><i class="fa {{ $class }}  _heart louange" id ="{{ Auth::User()->id }}" real = "{{ $projets -> id }}"></i></div>
                    <div class="_t"><span class ="{{ $projets -> id }}_class"> {{ $nb }} </span><span class = "{{ $projets -> id }}_suivie"> {{ $suivie }} </span></div>
                @endguest
                </div>
            </div>
        </div>

        @endforeach
        <br>
        {{-- fin du projet--}}

      </div>
    </div>
    <div class="arrow-r right-r"><i class="fa fa-arrow-right arow-hover" id = "slideToggleRigth"></i></div>
  </div>
    <div class="tous-ac" >
        <a class="show-all" href ="#">
            Voir tous les projets
        </a>
    </div>
  <div class ="_bon01">
    <div class ="_bon_padding">
      <div class ="_bon_project">

    @for ($i = 0; $i < 10; $i++)

        {{--  commencement du bon plan  --}}

            <div class ="_001">
                <div class="font-1">
                    <div class="item-plan">
                        <div class="img-plan">
                            <div class="cat">
                                Categorie
                            </div>
                        </div>
                        <div class="titre-plan">
                            Titre evenement
                        </div>
                        <div class="l-day">
                            <div class="d"> Date</div>
                                <div class="l">Lieu</div>
                            </div>
                        <a class="detailsPlan">
                            Détails
                        </a>
                    </div>
                </div>
            </div>
    @endfor
    {{--  fin su boucle de bon plan  --}}
      </div>
    </div>
  </div>
  <br>
    <div class="tous-ac">
        <a class="show-all" href ="#">
            Voir plus de bons plans
        </a>
    </div>
@endsection
