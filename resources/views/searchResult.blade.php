@extends('layout.master')

@section('searchResult')
    {{-- @foreach ($doctorName as $doc) --}}
        <div class="row">
            <div class="col">
                <h2>{{$doctorName->doctor_name}}</h2>
            </div>
        </div>
    {{-- @endforeach --}}
@endsection