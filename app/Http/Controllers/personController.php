<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class personController extends Controller
{
  public function add () {
    $description = "Test site";
    $jsonLd=[
      "@context"=> "https://schema.org",
      "@type"=> "WebPage",
      "name"=> config('website.site_name'),
      "description"=> $description
    ];
    $meta=[
      "description" => "Test site",
      "url" => config('website.url'),
      "meta_image" => config('website.url').config('website.meta_image')
    ];
    $data=[
      "title"=>"使用者首頁 |".config('website.site_name'),
      "meta" => $meta,
      "jsonLd" => $jsonLd,
      "people" => 123
    ];
    return view('people.add', $data);
  }
  public function create (Request $request) {
    $newData=[
      "name"=>$request->name,
      "email"=>$request->email,
      "phone"=>$request->phone
    ];
    var_dump($newData);
    People::create($newData);
  }
}
