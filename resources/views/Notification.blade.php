
@extends('layouts.app')
<title> {{ Auth::user()->name }}, 25 nouveaux notifications</title>
@section('content')

<link href="{{ asset('css/notification.css') }}" rel="stylesheet">
<?php
    //longueur of aujourdhui
    $length1 = $notif['aujourdhui']['number'];
    $value = $notif['aujourdhui']['value'];
    //longueur of aujourdhui
    $length2 = $notif['hier']['number'];
    $value2 = $notif['hier']['value'];
    //longueur of aujourdhui
    $length3 = $notif['OneMonth']['number'];
    $value3 = $notif['OneMonth']['value'];

?>
<div class="notif-contain">
    <div class="contain-day jumbotron">
        <h3>Ce Jour</h3>
    </div>
    @if ($length2 != 0)
    <div class="row-index">
        @foreach ($value as $rec)
        
            @if ($rec['Own'] == Auth::user()->id)
                @if ($rec['Nouveau'])
                    <div class ="new1">
                        1
                    </div>
                @endif
                <div class="col-padding-right">
                    <div class="notif-item">
                        <div class="img-notif">
                            <img src="{{ asset('image/slide/3.jpg') }}" alt="image.png" class="img-notif">
                        </div>
                        <div class="titre-notif">
                            {{ $rec['Projet'] ?? '' }}
                        </div>
                        <div class="text-content">
                            <span class="notif-text">{{ $rec['User'] ?? "" }} </span> {{ $rec['NotifText'] }}
                        </div>
                    </div>
                </div>
            @endif

        @endforeach
    </div>
    @else

        <div class="container">
            <div class ="jumbotron text-center">
                Aucune notification pour ce jour
            </div>
        </div>
        
    @endif
    <div class="contain-day jumbotron">
        <h3>Hière</h3>
    </div>
    @if ($length1 != 0)
    <div class="row-index">
        @foreach ($value2 as $rec)
            @if ($rec['Own'] == Auth::user()->id)
                @if ($rec['Nouveau'])
                    <div class ="new1">
                        1
                    </div>
                @endif
                <div class="col-padding-right">
                    <div class="notif-item">
                        <div class="img-notif">
                            <img src="{{ asset('image/slide/3.jpg') }}" alt="image.png" class="img-notif">
                        </div>
                        <div class="titre-notif">
                            {{ $rec['Projet'] ?? '' }}
                        </div>
                        <div class="text-content">
                            <span class="notif-text">{{ $rec['User'] ?? "" }} </span> {{ $rec['NotifText'] }}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    @else

        <div class="container">
            <div class ="jumbotron text-center">
               Aucune notification Hière
            </div>
        </div>
        
    @endif
    <div class="contain-day jumbotron">
        <h3>Il y a 1 mois</h3>
    </div>
    @if ($length3 != 0)
    <div class="row-index">
        @foreach ($value3 as $rec)
            @if ($rec['Own'] == Auth::user()->id)
                @if ($rec['Nouveau'])
                    <div class ="new1">
                        1
                    </div>
                @endif
                <div class="col-padding-right">
                    <div class="notif-item">
                        <div class="img-notif">
                            <img src="{{ asset('image/slide/3.jpg') }}" alt="image.png" class="img-notif">
                        </div>
                        <div class="titre-notif">
                            {{ $rec['Projet'] ?? '' }}
                        </div>
                        <div class="text-content">
                            <span class="notif-text">{{ $rec['User'] ?? "" }} </span> {{ $rec['NotifText'] }}
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    @else

        <div class="container">
            <div class ="jumbotron text-center">
               Aucune notification
            </div>
        </div>
        
    @endif
<div>
    <div class ="jumbotron">
        <a href = '#' class = "link"><h4>Voir plus</h4></a>
    </div>
</div>
@endsection
