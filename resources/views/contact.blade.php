@extends('layouts.master')

@section('content')
     <!-- Hero -->
     <section id="slider" class="hero p-0 odd">
        <div class="swiper-container no-slider animation slider-h-100 slider-h-auto alt">

            <div class="swiper-wrapper">

                <!-- Item 1 -->
                <div class="swiper-slide slide-center">

                    <!-- Media -->
                    <img src="assets/images/bg-1.jpg" alt="Full Image" class="full-image" data-mask="80">  

                    <div class="slide-content row">
                        <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <h1 class="title effect-static-text">Get in Touch</h1>
                                
                                <!-- Action -->
                                <form action="php/form.php" id="nexgen-simple-form" class="nexgen-simple-form">
                                    <input type="hidden" name="section" value="nexgen_form">

                                    <input type="hidden" name="reCAPTCHA">
                                    <!-- Remove this field if you want to disable recaptcha -->

                                    <div class="row form-group-margin">
                                        <div class="col-12 col-md-6 col-lg-3 m-0 p-2 input-group">
                                            <input type="text" name="name" class="form-control field-name" placeholder="Name">
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3 m-0 p-2 input-group">
                                            <input type="email" name="email" class="form-control field-email" placeholder="Email">
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3 m-0 p-2 input-group">
                                            <input type="text" name="phone" class="form-control field-phone" placeholder="Phone">
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3 m-0 p-2 input-group">
                                            <i class="icon-arrow-down mr-3"></i>
                                            <select name="info" class="form-control field-info">
                                                <option value="" selected disabled>More Info</option>
                                                <option>Audit & Assurance</option>
                                                <option>Financial Advisory</option>
                                                <option>Analytics and M&A</option>
                                                <option>Middle Marketing</option>
                                                <option>Legal Consulting</option>
                                                <option>Regulatory Risk</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12 m-0 p-2 input-group">
                                            <textarea name="message" class="form-control field-message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-12 col-12 m-0 pl-md-2">
                                            <span class="form-alert"></span>
                                        </div>
                                        <div class="col-12 input-group m-0 p-2">
                                            <a class="btn primary-button">SEND</a>
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="section-1 odd highlights image-right">
        <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 pr-md-5 align-self-top text">
                <div data-aos="fade-up"  class="row intro">
                    <div class="col-12 p-0">
                        <span class="pre-title m-0">Talk to an expert</span>
                        <h2>Our<br>Business<br>Units</h2>
                        <p>Curabitur convallis, diam a egestas iaculis, neque lorem interdum felis, in viverra lacus tortor in leo.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 pr-md-5 align-self-top text">
                <div class="row items">                             
                    <div data-aos="fade-up" class="col-12 p-0 pr-md-4 item">
                        <div class="contacts">
                            <h4>Branch</h4>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        +1 (305) 1234-5678
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-envelope mr-2"></i>
                                        hello@example.com
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        Main Avenue, 987
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">VIEW MAP</a>
                                </li>
                            </ul>
                        </div>
                    </div>     
                </div>
            </div>
            <div class="col-12 col-md-4 pr-md-5 align-self-top text">
                <div class="row items">                             
                    <div data-aos="fade-up" class="col-12 p-0 pr-md-4 item">
                        <div class="contacts">
                            <h4>Headquarters</h4>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        +1 (305) 1234-5678
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-envelope mr-2"></i>
                                        hello@example.com
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        Main Avenue, 987
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">VIEW MAP</a>
                                </li>
                            </ul>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>

        <!-- Copyright -->
        <section id="copyright" class="p-3 odd copyright">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                        <p>Enjoy the low price. We are tracking any intention of piracy.</p>
                        <!--
                            Suggestion: Replace the text above with a description of your website.
                         -->
                    </div>
                    <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                        <p>© 2020 NEXGEN is Proudly Powered by <a href="https://themeforest.net/user/codingsdev" target="_blank">Codings</a>.</p>
                    </div>
                </div>
            </div>
        </section>

    </footer>

    <!-- Modal [search] -->
    <div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="col-12 p-0 align-self-center">
                            <div class="row">
                                <div class="col-12 p-0">
                                    <h2>What are you looking for?</h2>
                                    <div class="badges">
                                        <span class="badge"><a href="#">Consulting</a></span>
                                        <span class="badge"><a href="#">Audit</a></span>
                                        <span class="badge"><a href="#">Assurance</a></span>
                                        <span class="badge"><a href="#">Advisory</a></span>
                                        <span class="badge"><a href="#">Financial</a></span>
                                        <span class="badge"><a href="#">Capital Markets</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group">
                                    <input type="text" class="form-control" placeholder="Enter Keywords">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group align-self-center">
                                    <button class="btn primary-button">SEARCH</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal [sign] -->
    <div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="modal-body">
                    <form action="/" class="row">
                        <div class="col-12 p-0 align-self-center">
                            <div class="row">
                                <div class="col-12 p-0 pb-3">
                                    <h2>Sign In</h2>
                                    <p>Don't have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#register">Register now</a>.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-12 p-0 input-group">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group align-self-center">
                                    <button class="btn primary-button">SIGN IN</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal [register] -->
    <div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="modal-body">
                    <form action="/" class="row">
                        <div class="col-12 p-0 align-self-center">
                            <div class="row">
                                <div class="col-12 p-0 pb-3">
                                    <h2>Register</h2>
                                    <p>Have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#sign">Sign In</a>.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group">
                                    <input type="text" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="col-12 p-0 input-group">
                                    <input type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-12 p-0 input-group">
                                    <input type="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="col-12 p-0 input-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group align-self-center">
                                    <button class="btn primary-button">REGISTER</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal [map] -->
    <div id="map" class="p-0 modal fade" role="dialog" aria-labelledby="map" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header absolute" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="modal-body p-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.123073808986!2d12.490042215441486!3d41.89021017922119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61b6532013ad%3A0x28f1c82e908503c4!2sColiseu!5e0!3m2!1spt-BR!2sbr!4v1594148229878!5m2!1spt-BR!2sbr" width="600" height="450" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal [responsive menu] -->
    <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
        <div class="modal-dialog modal-dialog-slideout" role="document">
            <div class="modal-content full">
                <div class="modal-header" data-dismiss="modal">
                    <i class="icon-close fas fa-arrow-right"></i>
                </div>
                <div class="menu modal-body">
                    <div class="row w-100">
                        <div class="items p-0 col-12 text-center">
                            <!-- Append [navbar] -->
                        </div>
                        <div class="contacts p-0 col-12 text-center">
                            <!-- Append [navbar] -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


        

       
