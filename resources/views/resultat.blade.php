@extends('layout')
@section('title', 'Résultat')
@section('content')
        @if(isset($usersearch))
        <h1>MusicInfos</h1>
         <form class="form-inline mr-auto" method="POST" action="/">
                      {{ csrf_field() }}
            <input class="form-control mr-sm-2" type="text" name="search" value="{{$usersearch}}" aria-label="Search">
            <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Rechercher</button>
        </form>
        <p>Résultats pour {{$usersearch}}</p>
        @foreach($search as $key => $value)
        <a href="/artiste?id={{$value->id}}">
        <div class="media mb-1 border border-dark px-3">
        <div class="media-body">
            <h4 class="media-heading">{{$value->name}}</h4>
        </div>
        </div>
        </a>
    @endforeach
    @else
    <h1>MusicInfos</h1>
         <form class="form-inline mr-auto" method="POST" action="/">
                      {{ csrf_field() }}
            <input class="form-control mr-sm-2" type="text" name="search" value="" aria-label="Search">
            <button class="btn btn-outline-success btn-rounded btn-sm my-0" type="submit">Rechercher</button>
        </form>
        <p>Veuillez faire une recherche et non jouer avec les urls merci</p>
    @endif


@endsection