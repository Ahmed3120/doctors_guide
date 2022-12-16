<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
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
                        <h4 class="mb-0">اعدادات الحساب</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                        </ol>
                    </div>
                </div>
            </div>
            <div class="calendar-main mb-30">
              <div class="row">
                    
                  <div class="col-lg-3 ">
                   
                     <form action="{{route('docupdate', $docinfo->id)}}" method="POST" class="form">
                        @csrf
                        <label for="Docname">اسم الطبيب او المركز</label>
                        <input class="form-control mb-2" type="text" name="Docname" id="Docname" placeholder="اسم الطبيب" value="{{$docinfo->doctor_name}}">

                        <label for="spcial">الاختصاص</label>
                        <input class="form-control mb-2" type="text" name="specialize" id="spcial" placeholder="الاختصاص" value="{{$docinfo->specialize}}">

                        <label for="phone_number">رقم الهاتف</label>
                        <input class="form-control mb-2" type="tel" name="phone_number" id="phone_number" placeholder="رقم الهاتف" value="{{$docinfo->doctor_phone_number}}">

                        <label for="address1">العنوان 1</label>
                        <input class="form-control mb-2" type="text" name="address1" id="address1" placeholder="العنوان 1" value="{{$docinfo->doctor_address1}}">

                        <label for="address2">العنوان 2</label>
                        <input class="form-control mb-2" type="text" name="address2" id="address2" placeholder="العنوان 2" value="{{$docinfo->doctor_address2}}">


                        <label for="note">ملاحظات</label>
                        <input class="form-control mb-2" type="text" name="note" id="note" placeholder="ملاحظات" value="{{$docinfo->note}}">
                     
                        <input type="submit" value="تعديل" class="btn btn-success"><label class="" for="">@if (Session::has('success'))
                            <div class="alert alert-success ms-2 me-2" role="alert"><p>تم التعديل بنجاح</p></div>                        
                        @endif
        
                        @if (Session::has('erorr'))
                        <div class="alert alert-danger"><p>لم يتم العثور على العنصر</p></div>
                            
                        @endif</label>
                    </form>
                  </div>
              </div>
          </div> 
           
            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            @include('layouts.footer')
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('layouts.footer-scripts')

</body>

</html>
