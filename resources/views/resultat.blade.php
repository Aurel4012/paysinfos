@extends('layout')
@section('title', 'Résultat')
@section('content')

      <div class="container-fluid">

        @foreach($response as $key => $value)
          <div class="row text-center vertical-center">

           <div class="col-md-6">
             
              <article>
                <h1>Résultat de votre recherche "{{ $search }}"</h1>
                 <span>Pays: {{ $value['name'] }} <img src="{{$value['flag']}}" alt="{{ $value['name']}}" height="20" width="35"></span><br>
                <span>Capitale: {{ $value['capital'] }}</span><br>
                <span>Population: {{ $value['population'] }}</span><br>
                <span>Surface: {{ $value['area'] }} km²</span><br>
                <span>Continent: {{ $value['region'] }}</span><br>
                <span>Monnaie: {{ $value['currencies'][0]['name'] }}</span><br>
                <span>Indicatif téléphonique: +{{ $value['callingCodes'][0] }}</span><br>
                <span>Langue: {{ $value['languages'][0]['nativeName'] }}</span><br>
                <span>Latitude: {{ $value['latlng'][0] }}</span><br>
                <span>Longitude: {{ $value['latlng'][1] }}</span><br>

                <div class="text-center mx-auto">

                  @if (count($response) === 1)

                     @foreach($response as $key => $value)

                       <a target="_blank" href="https://www.google.fr/maps/place/{{$value['name']}}"> 

                          <div data-lat="{{$value['latlng'][0] }}" data-long="{{$value['latlng'][1] }}" id="map" style="height: 200px; width: 100%; ">MAP</div>

                          <script async defer src="js/map.js"></script>

                          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFJQ1tXrOUzskfwG8pEj5EXvvrX-w08SU&callback=initMap">
                           </script>

                       </a>

                     @endforeach

                  @endif
              </div>

              </article>

           </div>
            @if (count($response) === 1)
             <div class="col-md-6 meteo">

              <article>
                <span>Temps actuel à {{ $temps['name'] }}</span><br>
               <span>État du ciel : {{ str_replace("é","e",$temps['weather'][0]['description']) }}</span><br>
               <span>Température : {{ $temps['main']['temp'] }}°</span><br>
               <span>Humidité : {{ $temps['main']['humidity'] }}</span><br>
               <span>Vitesse du vent : {{ $temps['wind']['speed'] }}</span><br>
              </article>

             </div>
             @endif

        </div><!--row pays et monnaie-->
          @if (count($response) === 1)
         <div class="row text-center">

          <div class="col-md-12 monnaie">

            <article>

             <span>Cours de la monnaie {{ $code }} par rapport au dollars Américains:</span><br/>
             <span>1$ = {{ $cours['quotes']['USD'.$code] }} {{ $symbol }}</span>

            </article>

           </div>

          </div>
          @endif
      </div><!--container-fluid-->

  @endforeach

@endsection