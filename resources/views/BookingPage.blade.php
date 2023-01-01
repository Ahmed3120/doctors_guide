
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>حجز - {{config('app.name')}}</title>
      @include('HomePages.head')
    </head>
    <body>
      @include('HomePages.main-header')
      <style>
        
        body{}.card{
          width:400px;
          background-color:#fff;
          border:none;border-radius: 12px
        }label.radio{
          cursor: pointer;
          width: 100%
        }label.radio input{
          position: absolute;
          top: 0;left: 0;visibility: 
          hidden;pointer-events: none
        }label.radio span{
          padding: 7px 14px;
          border: 2px solid #eee;
          display: inline-block;
          color: #039be5;
          border-radius: 10px;
          width: 100%;height: 48px;
          line-height: 27px
        }
        label.radio input:checked+span{
          border-color: #039BE5;
          background-color: #81D4FA;
          color: #fff;
          border-radius:9px;
          height: 48px;
          line-height: 27px
        }.form-control{
          margin-top: 10px;
          height: 48px;
            border: 2px solid #eee;
            border-radius: 10px
          }.form-control:focus{
            box-shadow: none;border: 2px solid #039BE5
          }.agree-text{

            font-size: 12px
          }.terms{f
            ont-size: 12px;
            text-decoration: none;
            color: #039BE5
          }.confirm-button{
            height: 50px;border-radius: 10px}
  
      </style>
      <div class="container mt-1 my-5 d-flex justify-content-center">
        <div class="card px-1 py-4">
            <div class="card-body">
                <h6 class="card-title mb-3">اكمل الحجز</h6>
                {{-- <div class="d-flex flex-row"> <label class="radio mr-1"> <input type="radio" name="add" value="anz" checked> <span> <i class="fa fa-user"></i> Anz CMK </span> </label> <label class="radio"> <input type="radio" name="add" value="add"> <span> <i class="fa fa-plus-circle"></i> Add </span> </label> </div> --}}
                <h6 class="information mt-4">يرجى ادخال المعلومات الاتية لاكمل الحجز لدى الدكتور {{$name->doctor_name}}</h6>
                <form action="{{route('reservaion')}}" method="post">
                  @csrf
                  <input type="hidden" name="docid" value="{{$user_id}}">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <input class="form-control" type="text" name="p_name" placeholder="الاسم" required> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group"> <input class="form-control" type="tel" name="p_phone_number" placeholder="رقم الهاتف" required> </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="input-group"> <input class="form-control" type="email" name="p_email" placeholder="الايميل" required> </div>
                        </div>
                    </div>
  
                    <div class="col-sm-12">
                      <div class="form-group">

                          <div class="input-group">
                             <input class="form-control" id="booktime" type="datetime-local" name="reservation_time" placeholder="تاريخ الحجز" required> 
                            </div>
                      </div>
                  </div>
  
                  <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <textarea class="form-control" name="p_case" id="" cols="40" rows="5" placeholder="اوصف الحالة" maxlength="500"></textarea> </div>
                    </div>
                </div>
                </div>
                <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text">بحجز هذا الموعد، فإنك توافق على</small> <a href="#" class="terms">الشروط والاحكام</a> </div> <button class="btn btn-primary btn-block confirm-button">Confirm</button>
            </div>
        </div>
      </form>
    </div>
    @include('HomePages.footer')
  @include('HomePages.footer-scripts')
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