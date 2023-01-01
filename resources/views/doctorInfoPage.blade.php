<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>معلومات الطبيب - {{config('app.name')}}</title>
        @include('HomePages.head')
    </head>
    <body>
        @include('HomePages.main-header')
        <div class="container">
        @if (Session::has('noReserve'))
            <div class="alert alert-warning" role="alert"><p>لاتوجد حجوزات الكترونية لدى الطبيب {{$doctor->doctor_name}} يرجى التواصل عن طريق رقم العيادة</p></div>
        @endif
        @if (Session::has('success'))
        <div class="alert alert-success" role="alert"><p>تم حجز موعد لدى الطبيب {{$doctor->doctor_name}} يرجى تأكيد الحجز عن طريق الايميل</p></div>
        @endif

        <header class="masthead text-white text-center p-5">
  
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="{{asset('assets/img/avataaars.svg')}}" alt="..." />
    
                <!-- Masthead Heading-->
                <h2 class="masthead-heading mb-0 text-white">{{$doctor->doctor_name}}</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">{{$doctor->specialize}}</p>
            </div>
            <a href="{{route("booking", $doctor->id)}}" class="btn btn-primary btn-lg px-5 mt-2 btn-outline-light">حجز موعد</a>
        </header>
      
        <!-- Footer-->
        <footer class="footer text-center p-5 mb-3">
            <div class="container">
                <div class="row">
                    <!-- Footer doctor Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4 text-white">العنوان</h4>
                        <p class="lead mb-0">
                            {{$doctor->doctor_address1}}
                            {{$doctor->doctor_address2}}
                        </p>
                    </div>
                    {{-- <!-- Footer doctor phone number--> --}}
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4 text-white">رقم العيادة</h4>
                        <p class="lead mb-0">
                            {{$doctor->doctor_phone_number}}
                            
                        </p>
                        
                    </div>
                    {{-- <!-- Footer note from the doctor--> --}}
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4 text-white">ملاحظات</h4>
                        <p class="lead mb-0">{{$doctor->note}}</p>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        @include('HomePages.footer')
    </body>
</html>
