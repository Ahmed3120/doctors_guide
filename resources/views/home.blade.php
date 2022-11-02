@extends('layout.master')

@section('doctorSearch')
<div class="row">
    <div class="col">

        <div class="card w-100">
            <div class="card-body">
                <form action="" method="POST" >
                    @csrf
                    <h5 class="card-title">ابحث عن الطبيب</h5>
                    <div class="form-floating mb-3 ui-widget">
                        <input type="search" class="tpyehead form-control rounded-pill text-center" id="floatingInput" placeholder="Search">
                        <label for="floatingInput">ابحث...</label>
                    </div>
                
                    <a href="#" class="btn btn-primary">ابحث</a>
                </form>
            </div>
        </div>

    </div>
</div>



@endsection

@section('autoCompleteSearch')

{{-- <script>
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
    </script> --}}

    <script>
        var path = "{{route('autoComplete')}}"
        $('input-tpyehead').typeahead({
            source: function(name, process){
                return $.get(path, {name:name}, function(data){
                    return peocess(data);
                });
            }
        });
    </script>

@endsection