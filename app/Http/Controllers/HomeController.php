<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;

function Api($url)
  {  

$curl = curl_init();
      
      curl_setopt_array($curl, array(
      CURLOPT_URL => "http://".$url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
      ),
    ));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
return $response = json_decode($response, true); //because of true, it's in an array
}//fin de function Api

class HomeController extends Controller{
  public function  index(){
      return view('home');
    }
    public function search(SearchRequest $request){
      
      $tag = $request->tag;
      $search = $request->search;
       $response = Api("restcountries.eu/rest/v2/".$tag."/".$search);//appel sans http      
     
        // dd($response[0]['currencies'][0]['code']);
        if (isset($response['status']) == 404) {
          return view('404');
        } else {
          if(count($response) === 1){
          //temps
            $temps = Api("api.openweathermap.org/data/2.5/weather?q=".$response[0]['capital']."&lang=fr&units=metric&appid=1f8c14072d202a541d6d06d2415fb1f9");//appel sans http   
          //fin temps
          // Cours monnaie
            $cours = Api("www.apilayer.net/api/live?access_key=f57cdf80296d847b96a54feb55a0830e&currencies=EUR,".$response[0]['currencies'][0]['code'].",CAD,PLN,USD&format=1");//appel sans http 
          $code = $response[0]['currencies'][0]['code'];// recup code monaie
          $symbol = $response[0]['currencies'][0]['symbol'];//recup symbol monaie
          }
               }
          return view('resultat',compact('response','search','temps','cours','code','symbol'));
       

    }// fin function search
}
