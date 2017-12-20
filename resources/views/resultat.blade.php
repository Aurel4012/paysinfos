@extends('layout')
@section('title', 'Résultat')
@section('content')
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
@endsection