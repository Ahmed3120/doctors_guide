@extends('layout.master')

@section('docInfo')
    
    {{-- <div class="row">
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
    </div> --}}

    
    <div class="row">
        
        <div class="col p-10">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">اسم الطبيب: {{$doctors[1]->doctor_name}} {{$doctors[1]->doctor_lastname}}</h4>
                    <h5>الاختصاص: {{$doctors[1]->specialize}}</h5>
                    <h5>رقم الهاتف: {{$doctors[1]->doctor_phone_number}}</h5>
                    <h5>العنوان: {{$doctors[1]->doctor_address}}</h5>
                    <h5>ملاحظة: {{$doctors[1]->note}}</h5>

                </div>
            </div>
        </div>
    </div>
    

@endsection