@extends('layout.master')

@section('doctorSearch')
<div class="row">
    <div class="col">

        <div class="card w-100">
            <div class="card-body">
                <form action="{{route('docSearch')}}" method="get" >
                    @csrf
                    <h5 class="card-title">ابحث عن الطبيب</h5>
                    <div class="form-floating mb-3 ui-widget">
                        <input name="doc_name" type="search" class="tpyehead form-control ps-5 rounded" id="floatingInput" placeholder="Search">
                        <label for="floatingInput">ابحث...</label>
                    </div>
                    <div class=" mt-4 ">
                        <button type="submit" value="ابحث" class="btn btn-xl btn-outline-dark">
                            <i class="fas fa-search me-2"></i>
                            ابحث
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>


@endsection

@section('footer')
<div class="copyright py-4 text-center text-white">
    <div class="container"><small>Copyright &copy; {{Request::server ("HTTP_HOST")}} 2022</small></div>
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
    {{-- <script>
        $('#floatingInput').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
            type : 'get',
            url : '{{route('docSearch')}}',
            data:{'doc_name':$value},
            success:function(data){
            $('tbody').html(data);
            }
        });
        })
    </script>

    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
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