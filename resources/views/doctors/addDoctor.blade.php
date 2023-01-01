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

        @include('layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="mb-0">Add Doctor</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                        </ol>
                    </div>
                </div>
            </div>
            <div class="calendar-main mb-30">
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert"><p>تم اضافة طبيب جديد</p></div>
                @endif
              <div class="row">
                  <div class="col-lg-3 ">
                     <form action="{{route('insertDoctor')}}" method="post" class="form">
                        @csrf
                        <label for="Docname">اسم الطبيب او المركز</label>
                        <input class="form-control mb-2" type="text" name="Docname" id="Docname" placeholder="اسم الطبيب" required>

                        <label for="spcial">الاختصاص</label>
                        <input class="form-control mb-2" type="text" name="specialize" id="spcial" placeholder="الاختصاص" required>

                        <label for="phone_number">رقم الهاتف</label>
                        <input class="form-control mb-2" type="tel" name="phone_number" id="phone_number" placeholder="رقم الهاتف" required>

                        <label for="address1">العنوان 1</label>
                        <input class="form-control mb-2" type="text" name="address1" id="address1" placeholder="العنوان 1" required>

                        <label for="address2">العنوان 2</label>
                        <input class="form-control mb-2" type="text" name="address2" id="address2" placeholder="العنوان 2" required>


                        <label for="note">ملاحظات</label>
                        <input class="form-control mb-2" type="text" name="note" id="note" placeholder="ملاحظات" required>
                     
                        <input type="submit" value="اضف" class="btn btn-success">
                    </form>
                  </div>
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

</body>

</html>
