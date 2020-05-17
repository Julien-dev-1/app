@extends('layouts.app')
<link href="{{ asset('css/Details/details.css') }}" rel="stylesheet">
@section('content')

<div class="details-content">
  <div class="d-content">
    <div class="flex-row">
      <div class="details_element-title">
        <div class = "bg">
          <div class="img-content">
            <img src='{{ asset("image/slide/$details->path_img") }}' alt="image.jpg" class="d-image-talls ">
          </div>
        </div>
      </div>
      <div class="details_element-title">
        <div class="d-title">
          <div class="d-title-t">
           <div class = "border-angle"></div>
           <div class = "margin-1 title-animate"><h1 id= "title-projet-1">{{ $details -> title }}</h1></div>
          </div>
          <div class="d-sl">
            <p class = "animations-paragraph">
              {{ $details->description }}
              </p>
          </div>
          <div class="d-ct">
            <p class ="categorie-1">{{ $details->categorie }} - ODD -5</p>
            <p class ="categorie-2">en savoir plus sur les ODD</p>
          </div>
        </div>
      </div>
    </div>
    <div class="details-movie">
        <div class="flex-row">
          <div class="m-lg-item">
            <div class="descript">
              <div class="cir-b">
                <div class="circular-details Poney-bottom">
                    <div class="flex-row">
                      <div class="num-col1">
                        <div class="bar-circular-elem">
                          <div class="cirPoney">
                            <div class ="circular">
                              <div class="progress _now-one">
                              <div class = "local-in"></div>
                                  <div class="progress-bar color-ok" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                      <span class="sr-only">70% Complete</span>
                                  </div>
                              </div> 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <div class="num-col">
                          <p><span class="colorIndex">250 Collectés</span></p>
                          <p>sur <span class="colorIndex">{{ $details->projet_jeutons }} </span> Objectifs</p>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="day-num">
                  <div class="j-r">
                    Jours restants <br>
                    J - {{ $details->end_project }}
                  </div>
                  <div class="j-val">
                    Valifunders <br>
                    {{ $details->valifunders }}
                  </div>
                </div>
              </div>
              <div class="bt-dpor">
                <div class="porteur-p">
                  Porteur du projet
                </div>
              </div>
              <div class="identity">
                <div class="rowIdent">
                  <div class="divRowIdent">
                      <div class="UrlimgPorteur">
                        <img class="UrlimgDetails"  src='{{ asset("image/slide/$details->path_img") }}' alt="{{ $details->path_img }}">
                      </div>
                  </div>
                  <div>
                    <div class="DetailsImgPorteur">
                      <p class="colorIndex">{{ $user->firstname }} {{ $user->name }}</p>
                      <p class="colorIndex _localisation">{{ $details->localisation }}</p>
                      <p class="colorIndex">{{ $user->number_project_create }} projet créés</p>
                      <p class="colorIndex"> {{ $user->number_project_soutenue }} projet soutenus</p>
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="movies">
              <video class="i-frame" controls>
                <source src='{{ asset("movie/$details->video_path") }}' type="video/mp4">
              </video>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="tous-ac">
    <div class="show-all">Soutenir ce projet</div>
  </div>
  <div class="ContributionElement">
    <p>
      Votre contribution sera integralement remboursée si le projet n atteint pas 100% de son objectif.
      <br>
      <span class="ContreP">Choisissez votre contrepartie.</span>
    </p>
  </div>
  <!-- contre parie element -->
  <div class="newContrepartie">
    <div class="newPaddingElement">
      <div class="poney-l w-po" >
        <div class="rigth-img">
          <i class="slideToggleLeft fa fa-arrow-left"></i>
        </div>
      </div>
      <div class="poney-r w-po">
        <div class="rigth-img">
          <i class="slideToggleLeft fa fa-arrow-right"></i>
        </div>
      </div>
      <div class="_P026">
        <div class="M_margin">
          {{--  <app-sans-contre-partie></app-sans-contre-partie>  --}}
        </div>
      </div>
    </div>
  </div>

  <div class="TElementTabs">
    <!-- Tab links -->
    <div class="tab _content-tab">
      <button class="tablinks _TabsElemenet" onclick="openCity(event, 'London')" id="defaultOpen">A propos du projet</button>
      <button class="tablinks _TabsElemenet" onclick="openCity(event, 'Paris')">Actualités<span class="badge element-position notification-badge">1</span></button>
      <button class="tablinks _TabsElemenet" onclick="openCity(event, 'Tokyo')">Commentaires<span class="badge element-position notification-badge">3</span></button>
      <button class="tablinks _TabsElemenet" onclick="openCity(event, 'Mada')">Valifunders</button>
    </div>

    <!-- Tab content -->
    <div id="London" class="tabcontent">
      <div class="_containApropos">
        <div class="_borderColorPx">
            <img src="{{ asset('icons/idee.gif') }}" alt="flashlight" class="_IMG02">
            <div class="_containText">
                <div class="_titre0">
                    <h3 class="_titrectif">
                        Titre Introductif
                    </h3>
                    <div class ='idees'>
                        <div class ="idees_img">
                            
                        </div> 
                        <div class ="content_item">
                            {{ $apropos->idees }}
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        <div class="_borderColorBIGEST">
            <img src="{{ asset('icons/constats.gif') }}" alt="none" class="_IMG02">
            <div class="_containText">
                <div class="_titre0">
                    <h3 class="_titreIntroductif">
                        Titre Introductif
                    </h3>
                    <div class ="content_item">
                        {{ $apropos->constatation }}
                    </div>
                </div>
            </div>
        </div>
        <div class="_borderColorPx">
            <img src="{{ asset('icons/Solution.gif') }}" alt="flashlight" class="_IMG02">
            <div class="_containText">
                <div class="_titre0">
                    <h3 class="_titrectif">
                        Titre Introductif
                    </h3>
                    <div class ='content_sol'>
                      <div class ='content_item'>
                          {{ $apropos->Solution }}
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="_borderColorPx">
            <img src="{{ asset('icons/Impact.gif') }}" alt="flashlight" class="_IMG02">
            <div class="_containText">
                <div class="_titre0">
                    <h3 class="_titrectif">
                        Titre Introductif
                    </h3>
                    <div class =''>
                      <div class ='content_item'>
                          {{ $apropos->impacts_positif }}
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

    </div>

    <div id="Paris" class="tabcontent">
      <div class="_containApropos">
        <div class="_borderColorPx">
            <div class="_containText">
                <div class="_titre0">
                    <h3 class="_titreIntroductif">
                        <strong class="titre_de02">Titre de la publication </strong><span class="_dPublic"> _date de publication</span>
                    </h3>
                    <div class="_contentPublicT">
                        <div class="local">
                            <p class="tec">Contenu de la publication (text + image)</p>
                        </div>
                    </div>
                    <div class="_parPub">
                        <p>Publier par RAKOTO</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="_borderColorPx">
                <div class="_containText">
                    <div class="_titre0">
                        <h3 class="_titreIntroductif">
                            <strong class="titre_de02">Titre de la publication </strong><span class="_dPublic"> _date de publication</span>
                        </h3>
                        <div class="_contentPublicT">
                            <div class="local">
                                <p class="tec">Contenu de la publication (text + image)</p>
                            </div>
                        </div>
                        <div class="_parPub">
                            <p>Publier par RAKOTO</p>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>

    <div id="Tokyo"class="tabcontent">
      <div class ="_new-flex">
          <div class="_com">
            <div class="el_01">
                <div class="textC">
                    Commenter et Encourager cette initiative
                </div>
                <div>
                    <textarea placeholder = "votre commentaire" class="_InputCom" name="InputAreaName" id="_InputArea" cols="30" rows="10"></textarea>
                    <div class="_cButton" id ="{{ $details -> id }}">
                    @csrf
                    @guest
                      <button id ="openModalMessage" class="btn _bSubmitR btn-primary" data-toggle="modal" data-target="#ErrorToLogin">Commenter</button>
                    @else
                      <button class="btn _bSubmitR btn-primary" id ="_bSubmitR" real ="{{ Auth::user()->id }}">
                          commenter
                        </button>
                    @endguest
                    </div>
                </div>
                <div class = "message-text _lOgh">
                  <i class = "fa fa-close _leftKol" id = "closeMessage"></i>
                  <div class = "ms_el">
                    blablabla
                  </div>
                </div>
            </div>
          </div>
          <div class="comments_contain">
            <h3 class="_allCOmments"> Tous les commentaires </h3>
            
            <div id = "divCOmments">
            
            @foreach ($commentaire as $commentaire)
            
              @if ($commentaire->projet_id == $details -> id )

                <div class="_containdiv {{ $commentaire -> id }}">
                  <div class="ImgUrlAide">
                      <img src="{{ asset('image/slide/4.jpg') }}" alt="girls" class="image_urlComments">
                  </div>
                  <div class="divContentComment">
                      <div class="useComment">
                      <?php
                        $number = 0;
                        foreach ($reponse->where('commentaire_id', $commentaire->id) as $record)
                          $number = $number + 1;
                        @end
                       ?>  
                       
                       @if ($number != 0)
                          @if ($number > 1 )
                            <a class = "response" href ="/projet/commentaire/reponse/{{ $commentaire -> id }}"> {{ $number }} reponses</a>
                          @else
                            <a class = "response" href ="/projet/commentaire/reponse/{{ $commentaire -> id }}"> {{ $number }} reponse</a>
                          @endif
                       @endif
                          <strong class="ColorProfil">{{ App\User::find($commentaire->user_id)->name }} {{ App\User::find($commentaire->user_id)->firstname }} </strong> à  {{ $commentaire -> created_at }}
                      </div>
                      <div>
                        {{ $commentaire -> commentaires }}
                      </div>
                    <div class = "flex-modify">
                    @guest
                    @else
                      <div class="btn-info edit-suppr componentFound" id ="{{ $commentaire -> commentaires }}" real ="{{ App\User::find($commentaire->user_id)->name }}" name ="{{ $commentaire->id }}" data-toggle="modal" data-target="#myModal">Repondre</div>
                      @if (App\User::find($commentaire->user_id)->id == Auth::user()->id)                  
                          <div class = "edit-suppr btn-warning"> modifier </div>
                          <div class = "edit-suppr btn-danger deleteWithId" real = "{{ $commentaire -> id}}" data-toggle ="modal" data-target ="#DeleteToLogin"> supprimer</div>
                      @endif
                    @endguest
                    </div>
                  </div>
                </div>
              @endif
            @endforeach

          </div>
            
          </div>
      </div>
    </div>

    <div id="Mada" class="tabcontent">
        <h3>Tous les valifunders</h3>
        <div class="_containvalifunders">
          <div class="_containHeigthFlexFunders">
            Mada
          </div>
        </div>
        <h3>Ils Soutiennent aussi ce projet ...</h3>
        <div class="_containvalifunders">
          <!-- <div class="_containHeigthFlexFunders">
          </div> -->
        </div>
    </div>
  </div>

</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" id = "repondre">
      <div class="modal-header">
          <div class = "responseElement">
            <span>Votre reponse sur le commentaire de </span><strong class = "user_modal"></strong> sur le projet <strong class ='projet_modal'></strong>
          </div>
      </div>
      <div class = "commentaire_id"></div>
      <div style = "display:none;" class = "com_id"></div>
      
      <div class="modal-body">
        <p>
          <textarea placeholder = "Votre reponse" class="_InputCom" name="InputAreaName" id="_Ireponse" cols="30" rows="10"></textarea>
        </p>
      </div>
      <div class="modal-footer">
      @guest
      @else
       <button type="button" class="btn btn-primary" data-dismiss="modal" id="repondre_indem" > repondre </button>
      @endguest
        <button type="button" class="btn btn-info" data-dismiss="modal">Quiter</button>
      </div>
    </div>

  </div>
</div>




<div id="ErrorToLogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content top-content">
      <div class="modal-header">
        <h4 class="modal-title center">Vous devez vous identifier avant de donner votre avis sur ce projet</h4>
      </div>
      <div class="modal-body center">
        <p class = "p_text-v">Valintanana est une plateforme de crowdfunding pour les projets universitaires axés sur les Objectifs du Développemet Durable à Madagascar.</p>
        <a class ="btn btn-primary btn-lg" href ="{{ route('login') }}">Se connecter</a>
        <a class ="btn btn-info btn-lg" href ="{{ route('register') }}">Creer un compte</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
      </div>
    </div>

  </div>
</div>


<div id="DeleteToLogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content top-content">
      <div class="modal-header">
        <h4 class="modal-title center">
         <i class ="fa fa-delicious"></i> Supprimer votre commentaire
        </h4>
      </div>
      <div class="modal-body">
        <form>
          <div class = "center">
            Est ce que vous êtes sure de vouloir supprimer ce commentaire
          </div>
          <div class = "IdOnDelete"></div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id = "delete_comment">Supprimer</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">fermer</button>
      </div>
    </div>

  </div>
</div>
@endsection
