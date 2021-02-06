<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">
       <span class="spinner-rotate"></span>
    </div>
 </section>
 <!-- MENU -->
 <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">
       <div class="navbar-header">
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          </button>
          <!-- lOGO TEXT HERE -->
          <a href="index.html" class="navbar-brand">Rank The Top</a>
       </div>
       <!-- MENU LINKS -->
       <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-nav-first">
             <li><a href="#home" class="smoothScroll">Home</a></li>
             <li><a href="#about" class="smoothScroll">About</a></li>
             <li><a href="#blog" class="smoothScroll">Blog</a></li>
             <li><a href="#work" class="smoothScroll">Our Work</a></li>
             <li><a href="#contact" class="smoothScroll">Contacts</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
             <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
             <li><a href="#"><i class="fa fa-twitter"></i></a></li>
             <li><a href="#"><i class="fa fa-instagram"></i></a></li>
             {{-- <li class="section-btn"><a href="{{url('/login-register')}}" data-toggle="modal" data-target="#modal-form"> <i class="fa fa-lock"></i> Sign in / Join</a></li> --}}
             @if(empty(Auth::check()))
                <li class="section-btn"><a href="{{url('/login-register')}}" data-toggle="modal" data-target="#modal-form"> <i class="fa fa-lock"></i> Sign in / Join</a></li>
             @else
                 <li><a href="{{url('/account')}}"><i class="fa fa-user"></i> Account</a></li>
                <li><a href="{{url('/user-logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
             @endif
          </ul>
       </div>
    </div>
 </section>