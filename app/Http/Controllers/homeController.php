<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
  public function index () {
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
      "title"=>"首頁 |".config('website.site_name'),
      "meta" => $meta,
      "jsonLd" => $jsonLd
    ];
    return view('welcome', $data);
  }

  // 參數要記得帶
  public function dog ($dogName) {
    $datas = [
      "name" => "Abby",
      "dogName" => $dogName,
      "eee" => 'dog',
    ];
    return view('routesTest', $datas);
  }

  public function about () {
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
      "title"=>"首頁 |".config('website.site_name'),
      "meta" => $meta,
      "jsonLd" => $jsonLd
    ];
    return view('about', $data);
  }
}
