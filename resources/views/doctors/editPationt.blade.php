<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{config('app.name')}}</title>
    @include('layouts.head')
</head>

<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="{{asset('assets/images/pre-loader/loader-01.svg')}}" alt="">
        </div>

        <!--=================================
 preloader -->

        @include('layouts.main-header')

        @include('doctors.main-sidebar-doc')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="mb-0">المراجعيين</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                        </ol>
                    </div>
                </div>
            </div>
            <div class="calendar-main mb-30">
                <style>
                    body{}.card{width:400px;background-color:#fff;border:none;border-radius: 12px}label.radio{cursor: pointer;width: 100%}label.radio input{position: absolute;top: 0;left: 0;visibility: hidden;pointer-events: none}label.radio span{padding: 7px 14px;border: 2px solid #eee;display: inline-block;color: #039be5;border-radius: 10px;width: 100%;height: 48px;line-height: 27px}label.radio input:checked+span{border-color: #039BE5;background-color: #81D4FA;color: #fff;border-radius: 9px;height: 48px;line-height: 27px}.form-control{margin-top: 10px;height: 48px;border: 2px solid #eee;border-radius: 10px}.form-control:focus{box-shadow: none;border: 2px solid #039BE5}.agree-text{font-size: 12px}.terms{font-size: 12px;text-decoration: none;color: #039BE5}.confirm-button{height: 50px;border-radius: 10px}
               
                   </style>
                   @if (Session::has('success'))
                        <div class="alert alert-success"><p>تم تحديث المعلومات</p></div>
                   @endif
                   <div class="container mt-1 mb-5 d-flex justify-content-center">
                     <div class="card px-1 py-4">
                         <div class="card-body">
                             <h6 class="card-title mb-3">معلومات المراجع</h6>
                             {{-- <h6 class="information mt-4">يرجى ادخال المعلومات الاتية للاكمل الحجز</h6> --}}
                             <form action="/pationts/edit/updated/{{$reservaion->id}}" method="post">
                               @csrf
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <input value="{{$reservaion->pationt_name}}" class="form-control" type="text" name="p_name" placeholder="الاسم" required> </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <div class="input-group"> <input value="{{$reservaion->p_number}}" class="form-control" type="text" name="p_phone_number" placeholder="رقم الهاتف" required> </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <div class="input-group"> <input value="{{$reservaion->p_email}}" class="form-control" type="text" name="p_email" placeholder="الايميل" required> </div>
                                     </div>
                                 </div>
               
                                 <div class="col-sm-12">
                                   <div class="form-group">
                                       <div class="input-group"> <input value="{{$reservaion->reservation_time}}" class="form-control" id="booktime" type="datetime-local" name="reservation_time" placeholder="تاريخ الحجز" required> </div>
                                   </div>
                               </div>

                               <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="input-group"> <input value="{{$reservaion->next_reservation_time}}" class="form-control" id="booktime" type="datetime-local" name="next_reservation_time" placeholder="  تاريخ الحجز التالي" required> </div>
                                </div>
                            </div>
               
                               <div class="col-sm-12">
                                 <div class="form-group">
                                     <div class="input-group"> <textarea class="form-control" name="p_case" id="" cols="40" rows="5" placeholder="اوصف الحالة" maxlength="500">{{$reservaion->p_case}}</textarea> </div>
                                 </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="input-group"> <textarea class="form-control" name="treatment" id="" cols="40" rows="5" placeholder="الادوية" maxlength="500">{{$reservaion->treatment}}</textarea> </div>
                                    </div>
                                   </div>

                                   <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="input-group"> <textarea class="form-control" name="checkups" id="" cols="40" rows="5" placeholder="الفحوصات" maxlength="500">{{$reservaion->checkups}}</textarea> </div>
                                    </div>
                                   </div>
                             </div>
                             {{-- <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text">بحجز هذا الموعد، فإنك توافق على</small> <a href="#" class="terms">الشروط والاحكام</a> </div>  --}}
                             <button class="btn btn-primary btn-block confirm-button">Confirm</button>
                         </div>
                     </div>
                   </form>
                 </div>               
          </div> 
            @include('layouts.footer')
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('layouts.footer-scripts')
    <script>

        config = {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            weekNumbers: true,
            minDate: "today",
            maxDate: new Date().fp_incr(60),
            minTime: "15:00",
            maxTime: "22:00",
        
            
        }
        flatpickr("#booktime", config);
    
    </script>
   

</body>

</html>
