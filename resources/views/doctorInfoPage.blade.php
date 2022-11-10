@extends('layout.master')

@section('docInfo')

    <header class="masthead text-white text-center p-5">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="{{asset('assets/img/avataaars.svg')}}" alt="..." />
            <!-- Masthead Heading-->
            <h2 class="masthead-heading mb-0">{{$doctorName->doctor_name}} {{$doctorName->doctor_lastname}}</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">{{$doctorName->specialize}}</p>
        </div>
    </header>
  
    <!-- Footer-->
    <footer class="footer text-center p-5">
        <div class="container">
            <div class="row">
                <!-- Footer doctor Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">العنوان</h4>
                    <p class="lead mb-0">
                        {{$doctorName->doctor_address}}
                    </p>
                </div>
                {{-- <!-- Footer doctor phone number--> --}}
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">رقم العيادة</h4>
                    <p class="lead mb-0">
                        {{$doctorName->doctor_phone_number}}
                        
                    </p>
                    
                </div>
                {{-- <!-- Footer note from the doctor--> --}}
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">ملاحظات</h4>
                    <p class="lead mb-0">{{$doctorName->note}}</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    {{-- <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Your Website 2022</small></div>
    </div> --}}
@endsection