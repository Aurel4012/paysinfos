@extends('layout')
@section('title', 'Résultat')
@section('content')

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
  @endforeach
   @if (count($response) === 1)
     @foreach($response as $key => $value)
                  <div data-lat="{{$value['latlng'][0] }}" data-long="{{$value['latlng'][1] }}" id="map" style="height: 200px; width: 300px; ">test</div> <script async defer src="js/map.js"></script>

            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFJQ1tXrOUzskfwG8pEj5EXvvrX-w08SU&callback=initMap">
             </script>
                        @endforeach

            
            @endif
@endsection