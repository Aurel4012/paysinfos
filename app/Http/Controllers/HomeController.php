<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;

class HomeController extends Controller{
    public function  index(){
      return view('home');
    }
    public function search(SearchRequest $request){
    	$curl = curl_init();
      $tag = $request->tag;
      $search = $request->search;
      curl_setopt_array($curl, array(
      CURLOPT_URL => "http://restcountries.eu/rest/v2/".$tag."/".$search,
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
$response = json_decode($response, true); //because of true, it's in an array

        if (isset($response['status']) == 404) {
          return view('404');
        } else {
          if(count($response) === 1){
                    //temps
                    foreach ($response as $value) {
                      $curl = curl_init();
                          curl_setopt_array($curl, array(
                          CURLOPT_URL => "http://api.openweathermap.org/data/2.5/weather?q=".$value['capital']."&lang=fr&units=metric&appid=1f8c14072d202a541d6d06d2415fb1f9",
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_TIMEOUT => 30,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => "GET",
                          CURLOPT_HTTPHEADER => array(
                            "cache-control: no-cache"
                          ),
                        ));
          
                      $temps = curl_exec($curl);
                      $err = curl_error($curl);
          
                      curl_close($curl);
                      $temps = json_decode($temps, true);
                    }
                    //fin temps
                    // Cours monnaie
                    foreach ($response as $value) {
                      $curl = curl_init();
                          curl_setopt_array($curl, array(
                          CURLOPT_URL => "http://www.apilayer.net/api/live?access_key=f57cdf80296d847b96a54feb55a0830e&currencies=EUR,".$value['currencies'][0]['code'].",CAD,PLN,USD&format=1",
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_TIMEOUT => 30,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => "GET",
                          CURLOPT_HTTPHEADER => array(
                            "cache-control: no-cache"
                          ),
                        ));
          
                      $cours = curl_exec($curl);
                      $err = curl_error($curl);
                      $code = $value['currencies'][0]['code'];
                      $symbol = $value['currencies'][0]['symbol'];
                      curl_close($curl);
                      $cours = json_decode($cours, true);
                    }
                  }
          return view('resultat',compact('response','search','temps','cours','code','symbol','passage'));
        }

    }
}
