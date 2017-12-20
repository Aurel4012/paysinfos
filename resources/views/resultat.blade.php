@extends('layout')
@section('title', 'Résultat')
@section('content')
<<<<<<< HEAD

       @foreach($response as $key => $value)

      <div class="container-fluid">

         <div class="row text-center vertical-center">

           <div class="col-md-6">
             
              <article>
                <h1>Résultat de votre recherche "{{ $search }}"</h1>
                <span>Pays: {{ $value['name'] }}</span><br>
                <span>Capitale: {{ $value['capital'] }}</span><br>
                <span>Population: {{ $value['population'] }}</span><br>
                <span>Continent: {{ $value['region'] }}</span><br>
                <span>Monnaie: {{ $value['currencies'][0]['name'] }}</span><br>
                <span>Indicatif téléphonique: +{{ $value['callingCodes'][0] }}</span><br>
                <span>Langue: {{ $value['languages'][0]['nativeName'] }}</span><br>
                <span>Latitude: {{ $value['latlng'][0] }}</span><br>
                <span>Longitude: {{ $value['latlng'][1] }}</span><br>
              </article>

           </div>

         </div>

      </div>
=======
            @foreach($response as $key => $value)
         <article>
             <span>Pays: {{ $value['name'] }}</span>
             <span>Capitale: {{ $value['capital'] }}</span>
             <span>Population: {{ $value['population'] }}</span>
             <span>Continent: {{ $value['region'] }}</span>
             <span>Monnaie: {{ $value['currencies'][0]['name'] }}</span>
             <span>Indicatif téléphonique: +{{ $value['callingCodes'][0] }}</span>
             <span>Langue: {{ $value['languages'][0]['nativeName'] }}</span>
             <span>Latitude: {{ $value['latlng'][0] }}</span>
             <span>Latitude: {{ $value['latlng'][1] }}</span>
         </article>
         @endforeach

>>>>>>> 0652de154bd0c4610c7088dd89dfd9150c44201e

@endsection