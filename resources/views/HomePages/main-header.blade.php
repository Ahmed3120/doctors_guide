<nav class="navbar navbar-expand-lg" id="mainNavBar">


      <ul class="navbar-nav">

        
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a>
            </li>
            @if (Route::has('register'))
                
            @endif
            @endguest
    

        <li class="nav-item active mx-auto">

          
        </li>
          
        </ul>

        <div class="nav-item active mx-auto my-2 my-lg-0">

            <a class="nav-link navbar-brand" href="/">الصفحة الرئيسية</a>

        </div>
    </div>
    
  </nav>

