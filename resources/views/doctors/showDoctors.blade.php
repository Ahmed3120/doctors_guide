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
              <div class="row">
                  <div class="col ">
                    
                    @if (Session::has('success'))
                      <div class="alert alert-success" role="alert"><p>تم الحذف بنجاح</p></div>                        
                    @endif

                    @if (Session::has('notfound'))
                    <div class="alert alert-danger"><p>لم يتم العثور على العنصر</p></div>
                        
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">اسم الطبيب</th>
                            <th scope="col">العنوان 1</th>
                            <th scope="col">العنوان 2</th>
                            <th scope="col">التخصص2</th>
                            <th scope="col">رقم الهاتف</th>
                            <th scope="col">ملاحظات</th>
                            <th scope="col">زر</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($all_doc as $doc)  
                            <tr>
                              <th scope="row">{{$doc->id}}</th>
                              <td>{{$doc->doctor_name}}</td>
                              <td>{{$doc->doctor_address1}}</td>
                              <td>{{$doc->doctor_address1}}</td>
                              <td>{{$doc->specialize}}</td>
                              <td>{{$doc->doctor_phone_number}}</td>
                              <td>{{$doc->note}}</td>
                              <td><a class="btn btn-danger mb-2" href="{{route('destroyDoctor', $doc->id)}}"><i class="ti-close"></i> حذف</a>

                                <a class="btn btn-primary text-white" data-toggle="modal" data-target="#exampleModal"><i class="ti-settings"></i> تعديل </a>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
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


 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">تعديل</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{-- start body model --}}

        <form action="{{route('insertDoctor')}}" method="post" class="form">
          @csrf
          <label for="Docname">اسم الطبيب او المركز</label>
          <input class="form-control mb-2" type="text" name="Docname" id="Docname" placeholder="اسم الطبيب">

          <label for="spcial">الاختصاص</label>
          <input class="form-control mb-2" type="text" name="specialize" id="spcial" placeholder="الاختصاص">

          <label for="phone_number">رقم الهاتف</label>
          <input class="form-control mb-2" type="tel" name="phone_number" id="phone_number" placeholder="رقم الهاتف">

          <label for="address1">العنوان 1</label>
          <input class="form-control mb-2" type="text" name="address1" id="address1" placeholder="العنوان 1">

          <label for="address2">العنوان 2</label>
          <input class="form-control mb-2" type="text" name="address2" id="address2" placeholder="العنوان 2">


          <label for="note">ملاحظات</label>
          <input class="form-control mb-2" type="text" name="note" id="note" placeholder="ملاحظات">
          </form>

        {{-- end body model --}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">غلق</button>
        <a href="#" class="btn btn-primary">احفظ التغيرات</a>
      </div>
    </div>
  </div>
</div>

    @include('layouts.footer-scripts')




</body>

</html>
