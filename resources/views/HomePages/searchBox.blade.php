
<div class="container">
    <div class="row">
        <div class="col">

            <div class="card w-100 mb-4">
                <div class="card-body">

                    <form action="{{route('docSearch')}}" method="get" >
                        @csrf
                        <h5 class="card-title">ابحث عن الطبيب</h5>
                        <div class="form-floating mb-3 ui-widget">
                            <input name="doc_name" type="search" class="tpyehead form-control ps-5 rounded" id="floatingInput" placeholder="Search">
                            <label for="floatingInput">ابحث...</label>
                        </div>
                        <div class=" mt-4 ">
                            <button type="submit" value="ابحث" class="btn btn-xl btn-outline-dark">
                                <i class="ti-search me-2"></i>
                                ابحث
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
