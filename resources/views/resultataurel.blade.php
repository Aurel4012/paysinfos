@extends('layout')
@section('title', 'Résultat')
@section('content')
            @foreach($response as $key => $value)

         <article>
             <span>Aurel</span>
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
    @if (count($response) === 1)
     @foreach($response as $key => $value)
                  <div data-lat="{{$value['latlng'][0] }}" data-long="{{$value['latlng'][1] }}" id="map" style="height: 200px; width: 300px; ">test</div> <script async defer src="js/map.js"></script>

            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFJQ1tXrOUzskfwG8pEj5EXvvrX-w08SU&callback=initMap">
             </script>
                        @endforeach

            
            @endif

@endsection