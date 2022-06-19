  {{-- line 抓這 --}}
  <meta name="description" content="{{ $meta["description"] }}">
  <link rel="image_src" href="{{ $meta["meta_image"] }}"/>
  <meta name="URL" content="{{ $meta["url"] }}">
  <meta content="" name="source">
  <meta content="" name="copyright">
  <meta content="" name="author">
  <link rel="canonical" href="{{$meta["url"]}}"/>
  <link rel="icon" type="image/png" href="/favicon.png">
  {{-- fb 抓這 --}}
  <meta property="fb:app_id" content="262985910442482" />
  <meta property="fb:admins" content="1526930116"/>
  <meta property="og:type" content="website"/>
  <meta property="og:site_name" content="{{config('website.site_name')}}"/>
  <meta property="og:title" content="{{$title}}"/>
  <meta property="og:url" content="{{$meta["url"]}}"/>
  <meta property="og:image" content="{{$meta["meta_image"]}}"/>
  <meta property="og:description" content="{{$meta["description"]}}"/>
  {{-- twitter 抓這 --}}
  <meta name="twitter:creator" content="@deathhell"/>
  <meta name="twitter:image" content="{{$meta["meta_image"]}}">
  <meta name="twitter:title" content="{{$title}}">
  <meta name="twitter:description" content="{{$meta["description"]}}">
  {{-- 結構化資料 要設定好否則 google 會扣分 --}}
  <script type="application/ld+json">
    @json($jsonLd)
  </script>