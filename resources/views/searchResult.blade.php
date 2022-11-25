@extends('layout.master')

@section('searchResult')
    @foreach ($doctorName as $doc)
{{-- {{$doc->doctor_name}} --}}
        <div class="card ms-5 mb-3 bg-light bg-gradient" style="max-width: 90%">
            <div class="row g-0">
              {{-- <div class="col-md-4">
                <img src="..." class="img-fluid rounded-start" alt="...">
              </div> --}}
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><a href="{{route('doctorInfoPage', $doc->id)}}">{{$doc->doctor_name}}</a></h5>
                  <p class="card-text">{{$doc->specialize}}</p>
                  <p class="card-text"><small class="text-muted">Last updated {{$doc->updated_at}}</small></p>
                </div>
              </div>
            </div>
          </div>

    
    @endforeach
@endsection