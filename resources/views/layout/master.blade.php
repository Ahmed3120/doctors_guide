<!doctype html>
<html lang="ar" dir="rtl">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

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
            
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      @yield('doctorSearch')
    </div>

    <div class="container1">
      @yield('docInfo')
    </div>


    {{-- cdn's for javaScript lib --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    {{-- javascript codes  --}}
    @yield('autoCompleteSearch')
    
  </body>
</html>
