<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>نتائج البحث - {{config('app.name')}}</title>
    @include('HomePages.head')
  </head>

  <body>
    @include('HomePages.main-header')
         @foreach ($doctorName as $doc)
            <div class="card ms-5 my-4 bg-light bg-gradient" style="max-width: 90%">
                <div class="row g-0">
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
        @include('HomePages.footer')
  </body>
   
</html>

@section('searchResult')
   
@endsection