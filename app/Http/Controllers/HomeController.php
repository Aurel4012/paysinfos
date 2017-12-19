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
        return view('resultat',compact('response'));
    }
}
