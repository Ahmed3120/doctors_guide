<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Doctor guide basra" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
    <title>{{config('app.name')}}</title>
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
              <div class="row">
                    
                  <div class="col">
                   
                    @if (Session::has('success'))
                      <div class="alert alert-success" role="alert"><p>تم الحذف بنجاح</p></div>                        
                    @endif

                    @if (Session::has('notfound'))
                    <div class="alert alert-danger"><p>لم يتم العثور على العنصر</p></div>
                        
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">اسم المريض</th>
                            <th scope="col">الايميل</th>
                            <th scope="col">رقم الهاتف</th>
                            <th scope="col">وصف الحالة</th>
                            <th scope="col">تاريخ الحجز</th>
                            <th scope="col">العلاج المعطى</th>
                            <th scope="col">التحليلات</th>
                            <th scope="col">المراجعة القادمة</th>
                            <th scope="col">تعديل</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($pation as $pat)
                            @if ($pat->request_case == 1)
                                
                            
                            <tr>
                              <td>{{$pat->pationt_name}}</td>
                              <td>{{$pat->p_email}}</td>
                              <td>{{$pat->p_number}}</td>
                              <td>{{$pat->p_case}}</td>
                              <td>{{$pat->reservation_time}}</td>
                              <td>{{$pat->treatment}}</td>
                              <td>{{$pat->checkups}}</td>
                              <td>{{$pat->next_reservation_time}}</td>
                              <td><a class="btn btn-primary" href="{{route('editpatient', $pat->id)}}">عرض وتعديل</a></td>
                            </tr>
                            @endif
                          @endforeach
                        </tbody>
                      </table>
                     
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
