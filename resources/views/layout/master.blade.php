<!doctype html>
<html lang="ar" dir="rtl">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    {{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
 
    <title>دليلي</title>
    
  </head>
 
  <body>

    <nav class="navbar navbar-expand-lg" id="mainNavBar">
      {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">heelo</span>
      </button> --}}
      <div class="mx-auto" >
        <ul class="navbar-nav">
          <a class="navbar-brand" href="/">دليلي</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <li class="nav-item active">
              <a class="nav-link" href="/">الصفحة الرئيسية </a>
            </li>
            {{-- <li class="nav-item active">
              <input type="search" name="search" id="search" class="form-control ps-5 rounded">
            </li> --}}
          </ul>
        </div>
      </div>
      
    </nav>

    <div class="container">
      @yield('doctorSearch')
    </div>
@yield('catigories')
    <div class="container1">
      @yield('docInfo')
    </div>

    @yield('searchResult')

  
  
    @yield('footer')


    {{-- cdn's for javaScript lib --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    {{-- javascript codes  --}}
    @yield('autoCompleteSearch')
    
  </body>
</html>
