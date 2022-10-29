@extends('layout.master')

@section('doctorSearch')
<div class="row">
    <div class="col">

        <div class="card w-100 text-dark p-5 bg-white">
            <div class="card-body bg-white">
                {{-- <form action="" method="POST" > --}}
                    {{-- @csrf --}}
                    <h5 class="card-title mx-10">ابحث عن الطبيب</h5>
                    <div class="form-floating mb-3 ui-widget">
                        <input type="search" class="form-control rounded-pill text-center" id="floatingInput" placeholder="Search">
                        <label for="floatingInput">ابحث</label>
                    </div>
                
                    <a href="#" class="btn btn-primary">ابحث</a>
                {{-- </form> --}}
            </div>
        </div>

    </div>
</div>



@endsection

@section('autoCompleteSearch')

<script>
    $( function() {
      var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
      ];
      $( "#floatingInput" ).autocomplete({
        source: availableTags
      });
    } );
    </script>

@endsection