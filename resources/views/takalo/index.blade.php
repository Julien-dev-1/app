@extends('layouts.app')
{{--  <link href="{{ asset('css/reponse/reponse.css') }}" rel="stylesheet">  --}}
<title>Echange Takalo sur Valintanana</title>
<link rel="shortcut icon" href="{{ asset('image/takalo/Icone_takalo.svg') }}">
@section('content')
    <div id="preloader">
        <div class="loader">
            <img src="{{ asset('image/takalo/loader.gif') }}" alt="">
        </div>
    </div>

	<div class="generate-n£23 margin-left-04">
		<div class="container">
			<div class="row flex-justify-content-center">
				<div class="col-md-offset-5 col-md-2 col-md-offset-5">
                    <img src="{{ asset('image/takalo/Icone_takalo.svg') }}" alt="">
					<p class="generate-n£01">Takalo (tk)</p>
				</div>
			</div><br>
			<div class="generate-n£700 text-takalo-align-center">
				<p>Le takalo est la devise utilisée sur la plateforme Valintanana(nom du domaine) vous permettant de soutenir les bonnes  initiatives.<br>
				1 Takalo (Tk) vaut 1000 Ariary (Ar).<br>
			Vous pouvez acheter et vendre des takalo à tous moments.</p>
			</div>
			<div class="generate-other-text">
				<div class="generate-n£789">Vos Takalo restant:<span class="generate-n00£0"> {{ Auth::user()->jeutons }} </span></div>
			</div>
		</div>
	</div>
	<div class="generate-n£0899">
		<div class="container">
			<div class="row flex-justify-content-center">
				<div class="col-md-4">
					<div class="generate-n£çk">
						<div class="generate-main-button">
							<button type="button" class="g-button generate-special-button-x">Acheter des Takalo</button>
						</div>
						<div class="generate-common-button g-btn-flex g-button generate-common-button">
							<input id="id-0" class="g-input-1 g-div ip-0" name="ip-0" onkeyup="state_change(this.id, 's0');" onmousemove="state_change(this.id, 's0');" onkeypress="state_change(this.id, 's0');" onfocus="setChoice(this.name);"  placeholder="Nb Takalo">
							<div class="g-gbutton g-btn-column">
								<div id="btn10" name="btn10" class="g-button1" onclick="increase('id-0');">up</div>
								<div class="g-button2" onclick="decrease('id-0');" >down</div>
							</div>
						</div>
						<div class="generate-common-button">
							<div id="s0" type="button" class="g-button generate-common-button g-div"><p>(Equiv)<b class="generate-n£789">Ar</b></p></div>
						</div>	 
					</div>
				</div>
				<div class="col-md-offset-4 col-md-4">
					<div class="generate-n£çk">
						<div class="generate-main-button">
							<button type="button" class="g-button generate-special-button-y">Acheter des Takalo</button>
						</div>
						<div class="generate-common-button g-btn-flex g-button generate-common-button">
							<input id="id-1" class="g-input-1 g-div ip-1" name="ip-1" onkeyup="state_change(this.id, 's1');"  onmousemove="state_change(this.id, 's1');" onkeypress="state_change(this.id, 's1');" onfocus="setChoice(this.name);" placeholder="Nb Takalo">
							<div class="g-gbutton g-btn-column">
								<div id="btn11" class="g-button1" onclick="increase('id-1');">up</div>
								<div class="g-button2" onclick="decrease('id-1');">down</div>
							</div>
						</div>
						<div class="generate-common-button">
							<div id="s1" type="button" class="g-button generate-common-button g-div"><p>(Equiv)<b class="generate-n£789">Ar</b></p></div>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="generate-last-button">
			<div class="row flex-content-width">
				<div class="col-md-offset-5 col-md-2 col-md-offset-5">
					<div class="generate-button width-320">
						<a  onclick="validate();" class="g-button generate-special-button-z generate-link-button" href="#identification-box" >valider la transaction</a>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="generate-n£23">
		<div class="container generate-flex" id="identification-box">
			<div  id="for-change-1">
			<!-- gallerie start -->
			<div class="generate-gallerie">
                @for ($i = 0; $i < 3; $i++)
                    <div class="generate-image">
                        @for ($j = 0; $j < 3; $j++)
                            <div class="generate-gallerie-item">
                                <img src="{{ asset('image/takalo/chat.jpg') }}" class="g-item" alt="">
                                <div class="generate-john-text">
                                Lorem ipsum araguis ipmen aftruipe trim lorem ipsum.Lorem ipsum araguis ipmen aftruipe.
                                </div>
                            </div>
                        @endfor
                    </div>
                @endfor
			</div>
		</div>
		<section>	
            <div id="for-change-2">Veuillez entrer le nombre de Tk !</div>
		</section>
	</div>
</div>
@endsection