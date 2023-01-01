<!doctype html>
<html lang="ar" dir="rtl">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    
    @include('HomePages.head')
    
  </head>
 
  <body>

   @include('HomePages.main-header')

   @include('HomePages.searchBox')

    @include('HomePages.catigory')
 

    @yield('searchResult')

  
  
    {{-- @yield('footer') --}}
    @include('HomePages.footer')

    @include('HomePages.footer-scripts')
    
  </body>
</html>
