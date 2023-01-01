<div class="card-layout row my-5 mx-2">
    @foreach ($specialize as $spec)
        <div class="card-layout__item">
          <div class="card p-0 bg-transparent border border-0 text-center font-weight-light ">
            <div class="card-body catigory-catigory-card"> 
              <a class="link-dark" href="{{route('doctorSearches', $spec->specialize)}}"><h5 class="card-title">{{$spec->specialize}}</h5></a>
            </div>
          </div>
        </div> 
    @endforeach
    
</div>