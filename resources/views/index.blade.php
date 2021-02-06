<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Rank The Top - Your Success Is Our Top Priority</title>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=Edge">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="author" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/custome.css')}}">
      <!-- MAIN CSS -->
      <link rel="stylesheet" href="{{asset('frontend/css/templatemo-style.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/custome.css')}}">
   </head>
   <body>
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
                      <li class="section-btn"><a href="{{url('/account')}}"><i class="fa fa-user"></i> Account</a></li>
                     <li class="section-btn"><a href="{{url('/user-logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                  @endif
               </ul>
            </div>
         </div>
      </section>
      <!-- HOME -->
      <section id="home" data-stellar-background-ratio="0.5">
         <div class="overlay"></div>
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-sm-12">
                  <div class="home-info">
                     <h1>Content Is The Fuel of Your Business</h1>
                     <a href="#about" class="btn section-btn smoothScroll">Start a project</a>
                     <span>
                     support@rankthetop.com
                     <small>For any inquiry</small>
                     </span>
                  </div>
               </div>
               <div class="col-md-6 col-sm-12">
                  <div class="home-video">
                     <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/EmmhDJWifls" frameborder="0" allowfullscreen></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ABOUT -->
      <section id="about" data-stellar-background-ratio="0.5">
         <div class="container">
            <div class="row">
               <div class="col-md-5 col-sm-6">
                  <div class="section-title">
                     <h2>Your Success Is Our Top Priority</h2>
                     <span class="line-bar">...</span>
                  </div>
                  <p>In January 1996, Bill Gates wrote the following essay titled “Content is King”, which was published on the Microsoft website.</p>
                  <p>So, to provide you the best content writing service, we want to be a part of your successful business.</p>
                  <p>As a pioneer among content platforms, we offer flexible solutions for content creation.</p>
                  <p>Not only content creation but also we are ready for you to do Website Traffic Analysis, SEO, Guest Post, Social Media Boosting.</p>
                  <a href="#" class="btn section-btn">Start a Project</a>
               </div>
               <div class="col-md-3 col-sm-6">
                  <div class="section-title">
                     <h2>Service & Security</h2>
                     <span class="line-bar">...</span>
                  </div>
                  <strong>PREMIUM CONTENT</strong>
                  <div class="progress">
                     <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                  </div>
                  <strong>GREAT ON-PAGE</strong>
                  <div class="progress">
                     <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                  </div>
                  <strong>ON-TIME DELIVERY</strong>
                  <div class="progress">
                     <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 99%;">99.9%</div>
                  </div>
                  <strong>FLEXIBLE</strong>
                  <div class="progress">
                     <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100%</div>
                  </div>
                  <strong>REVISION</strong>
                  <div class="progress">
                     <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">Unlimited</div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="section-title">
                     <h2>Really, Is Content King?</h2>
                     <span class="line-bar">...</span>
                  </div>
                  <p>Maybe, you believe that content is king. Yes, I agree with you. But not agree fully. In very short, I am describing why I do not fully agree.</p>
                  <p>Every content has a main topic that is called Keyword. If your keyword analysis is not perfect then it's really tough to rank.</p>
                  <p>Similarly, your keyword is low competitive or perfect, but your content is not visitor relevant, then your content can't generate profit. </p>
                  <p>So, I think Keyword+Content is king.</p>
               </div>
            </div>
         </div>
      </section>
      <!-- BLOG -->
      <section id="blog" data-stellar-background-ratio="0.5">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="section-title">
                     <h2>Our Sample Articles</h2>
                     <span class="line-bar">...</span>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6">
                  <!-- BLOG THUMB -->
                  <div class="media blog-thumb">
                     <div class="media-object media-left">
                        <a href="#"><img src="{{asset('frontend/images/Best-Ceramic-Coating.jpg')}}" class="img-responsive" style="padding-top:50px" alt=""></a>
                     </div>
                     <div class="media-body">
                        <h3><a href="#">The Best Ceramic Coating For Cars</a></h3>
                        <p>Nowadays, the term “Car Ceramic Coating” is more popular with car buyers.
                           Because most of the car owners are more proactive in protecting their car shine.
                           There are two processes to keep the car shine. A very common and old process is car waxing.
                           But ceramic coating is the modern process that is the best replacement of car wax.
                        </p>
                        <a href="#" class="btn section-btn">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6">
                  <!-- BLOG THUMB -->
                  <div class="media blog-thumb">
                     <div class="media-object media-left">
                        <a href="#"><img src="{{asset('frontend/images/blog-image2.jpg')}}" class="img-responsive" alt=""></a>
                     </div>
                     <div class="media-body">
                        <h3><a href="#">Woman Sportwear.</a></h3>
                        <p>If there's one good thing to come out of 2020 so far, it's that activewear has become an acceptable everyday uniform.
                           Work meeting? Leggings and a stylish, yet sporty (a.k.a. comfortable) top.
                           Virtual happy hour? Same as above.
                           Gym session? You guessed it—the same outfit yet again.
                           Since more and more of us are wearing athleisure most of the time...
                        </p>
                        <a href="#" class="btn section-btn">Read More</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6">
                  <!-- BLOG THUMB -->
                  <div class="media blog-thumb">
                     <div class="media-object media-left">
                        <a href="#"><img src="{{asset('frontend/images/Best-Yoga-Bra.jpg')}}" class="img-responsive" style="padding-top:50px" alt=""></a>
                     </div>
                     <div class="media-body">
                        <h3><a href="blog-detail.html">The Best Yoga Sports Bra </a></h3>
                        <p>Sports bras are designed for exercise.
                           They are different than the regular bra while providing extra support that minimizes movement and handles moisture.
                           Sports bra are made of comfortable materials like microfiber, moisture-wicking technology, and appropriate linings.
                           However, most of them are made with a combination of cotton, nylon, spandex, and polyamides.
                        </p>
                        <a href="#" class="btn section-btn">Read article</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6 col-sm-6">
                  <!-- BLOG THUMB -->
                  <div class="media blog-thumb">
                     <div class="media-object media-left">
                        <a href="#"><img src="{{asset('frontend/images/blog-image4.jpg')}}" class="img-responsive" alt=""></a>
                     </div>
                     <div class="media-body">
                        <h3><a href="#">The Best Sunglasses</a></h3>
                        <p>Sunglasses for men are not just a fashion statement. Sure, the right pair of men’s shades can upgrade your style.
                           But they’re protective necessities in the harsh sunlight.
                           For instance, the best sunglasses for men can also prevent wrinkles around the eyes.
                           If you expose your eyes to strong sunlight without wearing proper sunglasses, you can wind up with a burnt cornea.
                        </p>
                        <a href="#" class="btn section-btn">View Detail</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- WORK -->
      <section id="main" data-stellar-background-ratio="0.5">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="section-title">
                     <h2>NOW, WOULD YOU PLEASE PICK YOUR TYPE?</h2>
                     <span class="line-bar">...</span>
                  </div>
               </div>
               <div class="">
                  <div class="pricing-table">
                     <div class="pricing-card">
                        <h3 class="pricing-card-header">Personal</h3>
                        <div class="price"><sup>$</sup>15<span>/1K Words</span></div>
                        <ul>
                           <li style="list-style:disc">Executive Wordcraft</li>
                           <li style="list-style:disc">Expert Proofread</li>
                           <li style="list-style:disc">72 Hour Delivery</li>
                           <li style="list-style:disc">Unlimited Revisions</li>
                           <li style="list-style:disc">Top-Notch Support</li>
                        </ul>
                        <a href="#" class="order-btn">Order Now</a>
                     </div>
                     <div class="pricing-card">
                        <h3 class="pricing-card-header">Professional</h3>
                        <div class="price"><sup>$</sup>30<span>/1K Words</span></div>
                        <ul>
                           <li style="list-style:disc">Lucubrate Wordcraft</li>
                           <li style="list-style:disc">Expert Proofread</li>
                           <li style="list-style:disc">72 Hours Delivery</li>
                           <li style="list-style:disc">Unlimited Revisions</li>
                           <li style="list-style:disc">Top-Notch Support</li>
                        </ul>
                        <a href="#" class="order-btn">Order Now</a>
                     </div>
                     <div class="pricing-card">
                        <h3 class="pricing-card-header">Premium</h3>
                        <div class="price"><sup>$</sup>50<span>/1K Words</span></div>
                        <ul>
                          <li style="list-style:disc">As Per Preference</li>
                          <li style="list-style:disc">Expert Proofread</li>
                          <li style="list-style:disc">Negotiated Deadlines</li>
                          <li style="list-style:disc">Unlimited Revisions</li>
                          <li style="list-style:disc">On-Demand Support</li>
                        </ul>
                        <a href="#" class="order-btn">Order Now</a>
                     </div>
                     <div class="pricing-card">
                        <h3 class="pricing-card-header">Ultimate</h3>
                        <div class="price"><sup>$</sup>80<span>/1K Words</span></div>
                        <ul>
                          <li style="list-style:disc"> As Per Preference</li>
                          <li style="list-style:disc">As Per Preference</li>
                          <li style="list-style:disc">Negotiated Deadlines</li>
                          <li style="list-style:disc">Unlimited Revisions</li>
                          <li style="list-style:disc">On-Demand Support</li>
                        </ul>
                        <a href="#" class="order-btn">Order Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- CONTACT -->
      <section id="contact" data-stellar-background-ratio="0.5">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="section-title">
                     <h2>Contact us</h2>
                     <span class="line-bar">...</span>
                  </div>
               </div>
               <div class="col-md-8 col-sm-8">
                  <!-- CONTACT FORM HERE -->
                  <form id="contact-form" role="form" action="{{route('contact.store')}}" method="post">
                     @csrf
                     <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" value="{{old('name')}}" placeholder="Full Name" id="cf-name" name="name" required="">
                        @if($errors->has('name'))
                         <label id="name-error" class="text-danger" for="name">{{ $errors->first('name') }}</label>
                        @endif
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <input type="email" class="form-control" value="{{old('email')}}" placeholder="Your Email" id="cf-email" name="email" required="">
                        @if($errors->has('email'))
                                            <label id="email-error" class="text-danger" for="email">{{ $errors->first('email') }}</label>
                                            @endif
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <input type="tel" class="form-control" value="{{old('phone')}}" placeholder="Your Phone" id="cf-number" name="phone" required="">
                        @if($errors->has('phone'))
                                            <label id="phone-error" class="text-danger" for="phone">{{ $errors->first('phone') }}</label>
                                            @endif
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <select class="form-control" id="cf-budgets" name="service_type" required="">
                           <option disabled selected>Service Type</option>
                           <option value="Personal">Personal</option>
                           <option value="Professional">Professional</option>
                           <option value="Premium">Premium</option>
                           <option value="Untimate">Untimate</option>
                        </select>
                        @if($errors->has('service_type'))
                                            <label id="service_type-error" class="text-danger" for="service_type">{{ $errors->first('service_type') }}</label>
                                            @endif
                     </div>
                     <div class="col-md-12 col-sm-12">
                        <textarea class="form-control" rows="6"  placeholder="Your requirements" id="cf-message" name="message" required="">{{old('message')}}</textarea>
                         @if($errors->has('message'))
                                            <label id="message-error" class="text-danger" for="message">{{ $errors->first('message') }}</label>
                                            @endif
                     </div>
                     <div class="col-md-4 col-sm-12">
                        <input type="submit" class="form-control" name="submit" value="Send Message">
                       @if(!empty($errors->all()))       
                        {{ implode(' | ',$errors->all()) }}
                        @elseif(\Session::has('success'))
                        {{ session('success') }}
                        @elseif(\Session::has('error'))
                        {{ session('error') }}
                         @endif
                     </div>
                  </form>
               </div>
               <div class="col-md-4 col-sm-4">
                  <div class="google-map">
                     <!-- How to change your own map point
                        1. Go to Google Maps
                        2. Click on your location point
                        3. Click "Share" and choose "Embed map" tab
                        4. Copy only URL and paste it within the src="" field below
                        -->
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- FOOTER -->
      <footer data-stellar-background-ratio="0.5">
         <div class="container">
            <div class="row">
               <div class="col-md-5 col-sm-12">
                  <div class="footer-thumb footer-info">
                     <h2>RANK THE TOP</h2>
                     <p>Best Content Writing Service Provider.Not only content creation but also we are ready for you to do Website Traffic Analysis, SEO, Guest Post, Social Media Boosting.</p>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4">
                  <div class="footer-thumb">
                     <h2>Our Identity</h2>
                     <ul class="footer-link">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Join our team</a></li>
                        <li><a href="#">Read Blog</a></li>
                        <li><a href="#">Press</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-2 col-sm-4">
                  <div class="footer-thumb">
                     <h2>Services</h2>
                     <ul class="footer-link">
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Support</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3 col-sm-4">
                  <div class="footer-thumb">
                     <h2>Find us</h2>
                     <p>123 Grand Rama IX, <br> Krung Thep Maha Nakhon 10400</p>
                  </div>
               </div>
               <div class="col-md-12 col-sm-12">
                  <div class="footer-bottom">
                     <div class="col-md-6 col-sm-5">
                        <div class="copyright-text">
                           <p>Copyright &copy; 2020 @ RANK THE TOP</p>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-7">
                        <div class="phone-contact">
                           <p>Submit All Queries<span>support@rankthetop.com</span></p>
                        </div>
                        <ul class="social-icon">
                           <li><a href="https://www.facebook.com/templatemo" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                           <li><a href="#" class="fa fa-twitter"></a></li>
                           <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- MODAL -->
      <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg">
            <div class="modal-content modal-popup">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-md-12 col-sm-12">
                           <div class="modal-title">
                              <h2>Hydro Co</h2>
                           </div>
                           <!-- NAV TABS -->
                           <ul class="nav nav-tabs" role="tablist">
                              <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                              <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                           </ul>
                           <!-- TAB PANES -->
                           <div class="tab-content">
                              <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                 <form action="{{route('user.register')}}" method="post">
                                    @csrf
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                    <input type="telephone" class="form-control" name="phone" placeholder="Phone" required>
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    <input type="text" class="form-control" name="social_link" placeholder="Social Link">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
                                    <input type="submit" class="form-control" name="submit" value="Submit Button">
                                 </form>
                              </div>
                              <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                 <form action="{{route('user.login')}}" method="post">
                                    @csrf
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    <input type="submit" class="form-control" value="Submit Button">
                                    {{-- <button type="submit" class="form-control btn" name="submit">Submit Button</button> --}}
                                    <a href="https://www.facebook.com/templatemo">Forgot your password?</a>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- SCRIPTS -->
      <script src="{{asset('frontend/js/jquery.js')}}"></script>
      <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>
      <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
      <script src="{{asset('frontend/js/smoothscroll.js')}}"></script>
      <script src="{{asset('frontend/js/custom.js')}}"></script>
   </body>
</html>
