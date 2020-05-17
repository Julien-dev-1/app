@extends('layouts.app')
<link href="{{ asset('css/plan.css') }}" rel="stylesheet">
@section('content')
<div class="bon-content">
  <div class="text-bonPlan">
    <div class="pl">
      <h3>Bons Plans</h3>
    </div>
    <p class="lg-k">
      Etre leader engagé, c est aussi s instruire et s informer.
    </p>
  </div>
  <div class="outerContent flex-content1">
    <div class="_col-flex2">
      <div class="categorie-text text-el">
        Categorie
      </div>
        <div class="tous-option">
          <select name="categories" id="categorie" class="categories-class">
            <option value="default"> Toutes</option>
            <option value="default"> Value 2</option>
            <option value="default"> Value 3</option>
          </select>
        </div>
    </div>
    <div class="_col-flex2">
      <div class="text-el">
        Dates
      </div>
        <div class="tous-option">
          <select name="odd" id="odd" class="categories-class">
            <option value="default"> Tous</option>
            <option value="default"> Value 2</option>
            <option value="default"> Value 3</option>
          </select>
        </div>
    </div>
  </div>


<div class="pan-contain">
  <div class="now-text">
    Aujourd hui
  </div>
    <div class="_flex-item">
    @for ($i = 0; $i < 8; $i++)
        <div class="_eloquent">
            <div class="font-1">
                <div class="item-plan">
                    <div class="img-plan">
                        <div class="cat">
                            Categorie
                        </div>
                    </div>
                    {{--  on insert l'image ici  --}}
                    <div class="titre-plan">
                        Titre de l evenement
                    </div>
                    <div class="l-day">
                        <div class="d"> Date</div>
                            <div class="l">Lieu</div>
                        </div>
                    <a class="detailsPlan" href = "#">
                        Détails
                    </a>
                </div>
            </div>
        </div>
    @endfor

    </div>
  </div>
  <div class="pan-contain">
  <div class="now-text">
    Hière
  </div>
  <div class="_flex-item">


        @for ($i = 0; $i < 5; $i++)
        <div class="_eloquent">
            <div class="font-1">
                <div class="item-plan">
                    <div class="img-plan">
                        <div class="cat">
                            Categorie
                        </div>
                    </div>
                    {{--  on insert l'image ici  --}}
                    <div class="titre-plan">
                        Titre de l evenement
                    </div>
                    <div class="l-day">
                        <div class="d"> Date</div>
                            <div class="l">Lieu</div>
                        </div>
                    <div class="detailsPlan" href ='#'>
                        Détails
                    </div>
                </div>
            </div>
        </div>
        @endfor



  </div>
  </div>
  <div class="pan-contain">
  <div class="now-text">
    Cette semaine
  </div>
  <div class="_flex-item">
    <div class="_eloquent">
      <app-template-palns></app-template-palns>
    </div>
    <div class="_eloquent">
      <app-template-palns></app-template-palns>
    </div>
    <div class="_eloquent">
      <app-template-palns></app-template-palns>
    </div>
    <div class="_eloquent">
      <app-template-palns></app-template-palns>
    </div>
  </div>
  </div>
  <div class="pan-contain">
  <div class="now-text">
    Ce mois-ci
  </div>
  <div class="_flex-item">
    <div class="_eloquent">
      <app-template-palns></app-template-palns>
    </div>
    <div class="_eloquent">
      <app-template-palns></app-template-palns>
    </div>
    <div class="_eloquent">
      <app-template-palns></app-template-palns>
    </div>
  </div>
  </div>
</div>


@endsection
