@extends('layout.master')

@section('docInfo')
    
    <div class="row">
        <div class="col">
            <h5 class="h5">{{$doctors[0]->doctor_name}} {{$doctors[0]->doctor_lastname}}</h5>
        </div>
        <div class="col">
            <h5 class="h5">{{$doctors[0]->doctor_address}}</h5>
        </div>

        <div class="col">
            <h5 class="h5">{{$doctors[0]->doctor_phone_number}}</h5>
        </div>

        <div class="col">
            <h5 class="h5">{{$doctors[0]->specialize}}</h5>
        </div>

        <div class="col">
            <h5 class="h5">{{$doctors[0]->note}}</h5>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <h5 class="h5">{{$doctors[1]->doctor_name}} {{$doctors[1]->doctor_lastname}}</h5>
        </div>
        <div class="col">
            <h5 class="h5">{{$doctors[1]->doctor_address}}</h5>
        </div>

        <div class="col">
            <h5 class="h5">{{$doctors[1]->doctor_phone_number}}</h5>
        </div>

        <div class="col">
            <h5 class="h5">{{$doctors[1]->specialize}}</h5>
        </div>

        <div class="col">
            <h5 class="h5">{{$doctors[1]->note}}</h5>
        </div>
    </div>

@endsection