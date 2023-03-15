@extends('layouts.main')
@section('main-section')
    <div class="wrapper">
        <section id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h1>YOUR DIGITAL BUSINESS IS ONE CLICK FAR</h1>
                            <h2>E-COMMERCE / WEB DESIGN / BRANDING<br>
                                Let's get rid of the complicated<br>
                                so you can start selling faster</h2>
                            <div class="buttons">
                                <a href="#" class="btn btn-learn">Purchase Now</a>
                                <a href="#" class="btn btn-learn">View Featurese</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scrolldown">
                <a id="scroll" href="#features" class="scroll"></a>
            </div>
        </section>
        <section id="features">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>OUR BEST SERVICES</h2>
                            <p>"Creativity is seeing what others see and thinking what no one else ever thought."<br> - Albert Einstein. ...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-6 col-sm-6">
                        <div class="feature-block text-center">
                            <div class="icon-box">
                                <i class="ion-easel"></i>
                            </div>
                            <h4 class="wow fadeInUp" data-wow-delay=".3s">Responsive Design</h4>
                            <p class="wow fadeInUp" data-wow-delay=".5s">“A successful website does three things:<br>
                                It attracts the right kinds of visitors.<br>
                                Guides them to the main services or product you offer.<br>
                                Collect Contact details for future ongoing relation.”<br>
                               <b> ― Mohamed Saad</b></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 col-sm-6">
                        <div class="feature-block text-center">
                            <div class="icon-box">
                                <i class="ion-paintbucket"></i>
                            </div>
                            <h4 class="wow fadeInUp" data-wow-delay=".3s">Outstanding Animation</h4>
                            <p class="wow fadeInUp" data-wow-delay=".5s">“Nothing's occurring in animation<br>
                                 - you manufacture everything.”<br>
                                <b> - Gore Verbinski </b></p>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 col-sm-6">
                        <div class="feature-block text-center">
                            <div class="icon-box">
                                <i class="ion-paintbrush"></i>
                            </div>
                            <h4 class="wow fadeInUp" data-wow-delay=".3s">Unlimited Colors</h4>
                            <p class="wow fadeInUp" data-wow-delay=".5s">“Clouds come floating into my life,<br>
                                 no longer to carry rain or usher storm,<br> but to add color to my sunset sky.”<br>
                              <b>  ― Rabindranath Tagore, Stray Birds</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="counter">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h2>FUN FACTS</h2>
                        <p>“We don't just build websites, we build websites that SELLS”<br>
                          <b class="text-info">  ― Christopher Dayagdag </b></p>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="block wow fadeInRight" data-wow-delay=".3s">
                            <i class="ion-code"></i>
                            <p class="count-text">
                                <span class="counter-digit">147500 </span> k
                            </p>
                            <p>Lines Coded</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="block wow fadeInRight" data-wow-delay=".5s">
                            <i class="ion-compass"></i>
                            <p class="count-text">
                                <span class="counter-digit">74 </span> +
                            </p>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="block wow fadeInRight" data-wow-delay=".7s">
                            <i class="ion-compose"></i>
                            <p class="count-text">
                                <span class="counter-digit">47</span> +
                            </p>
                            <p>Regular Clients</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="block wow fadeInRight" data-wow-delay=".9s">
                            <i class="ion-image"></i>
                            <p class="count-text">
                                <span class="counter-digit">95</span> +
                            </p>
                            <p>Team Member</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>LATEST WORKS</h2>
                            <p>Dantes remained confused and silent by this explanation of the <br> thoughts which had
                                unconsciously
                            </p>
                        </div>
                        <div class="block">
                            <div class="recent-work-mixMenu">
                                <ul>
                                    <li><button class="filter" data-filter="all">All</button></li>
                                    <li><button class="filter" data-filter=".category-2">Printing</button></li>
                                    <li><button class="filter" data-filter=".category-1">Web</button></li>
                                    <li><button class="filter" data-filter=".category-2">Illustration</button></li>
                                    <li><button class="filter" data-filter=".category-1">Media</button></li>
                                </ul>
                            </div>
                            <div class="recent-work-pic">
                                <ul id="mixed-items">
                                    <li class="mix category-1 col-md-4 col-xs-6" data-my-order="1">
                                        <a class="example-image-link" href="img/work1.jpg" data-lightbox="example-set">
                                            <img class="img-responsive" src="img/work1.jpg" alt="">
                                            <div class="overlay">
                                                <h3>Web design</h3>
                                                <i class="ion-ios-plus-empty"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mix category-2 col-md-4 col-xs-6" data-my-order="2">
                                        <a class="example-image-link" href="img/work2.jpg" data-lightbox="example-set">
                                            <img class="img-responsive" src="img/work2.jpg" alt="">
                                            <div class="overlay">
                                                <h3>Web design</h3>
                                                <i class="ion-ios-plus-empty"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mix category-1 col-md-4 col-xs-6" data-my-order="3">
                                        <a class="example-image-link" href="img/work3.jpg" data-lightbox="example-set">
                                            <img class="img-responsive" src="img/work3.jpg" alt="">
                                            <div class="overlay">
                                                <h3>Web design</h3>
                                                <i class="ion-ios-plus-empty"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mix category-2 col-md-4 col-xs-6" data-my-order="4">
                                        <a class="example-image-link" href="img/work4.jpg" data-lightbox="example-set">
                                            <img class="img-responsive" src="img/work4.jpg" alt="">
                                            <div class="overlay">
                                                <h3>Web design</h3>
                                                <i class="ion-ios-plus-empty"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mix category-1 col-md-4 col-xs-6" data-my-order="5">
                                        <a class="example-image-link" href="img/work5.jpg" data-lightbox="example-set">
                                            <img class="img-responsive" src="img/work5.jpg" alt="">
                                            <div class="overlay">
                                                <h3>Web design</h3>
                                                <i class="ion-ios-plus-empty"></i>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mix category-2 col-md-4 col-xs-6" data-my-order="6">
                                        <a class="example-image-link" href="img/work6.jpg" data-lightbox="example-set">
                                            <img class="img-responsive" src="img/work6.jpg" alt="">
                                            <div class="overlay">
                                                <h3>Web design</h3>
                                                <i class="ion-ios-plus-empty"></i>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="play-video">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">GET THE TEMPLATE</h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s">Dantes remained confused and silent by this
                                explanation of
                                the </p>
                            <a href="#" class="html5lightbox" data-width=800 data-height=400>
                                <div class="button ion-ios-play-outline wow zoomIn" data-wow-delay=".3s"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h2>CREATIVE TEAM</h2>
                        <p>“A designer knows he has achieved perfection not when there is nothing left to add,<br>
                             but when there is nothing left to take away.”</p>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="block wow fadeInLeft" data-wow-delay=".3s">
                            <img src="img/ABK.jpg" alt="">
                            <div class="team-overlay">
                                <h3>Mr.Abdul Baqi <span>Product Designer</span></h3>
                                <span class="icon"><i class="ion-quote"></i></span>
                                <p>"You should keep Practicing unless you become a practice"<br>
                                    <b class="text-info">- AbdulBaqi </b><br>
                                    He Plans and Develop the Project Idea.
                                    Monitor Project Progress and Set Deadlines.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-4 col-xs-6">
                        <div class="block wow fadeInLeft" data-wow-delay=".6s">
                            <img src="img/MATI.jpg" alt="">
                            <div class="team-overlay">
                                <h3>Mr.Mati-ur-Rehman <span>Team Leader</span></h3>
                                <span class="icon"><i class="ion-quote"></i></span>
                                <p> An Efficient Problem Solver,<br>
                                    Expert In Delegating Tasks,<br>
                                    Positive Attitude.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-4 col-xs-6">
                        <div class="block wow fadeInLeft" data-wow-delay=".9s">
                            <img src="img/NOMI.jpg" alt="">
                            <div class="team-overlay">
                                <h3>Mr.Nouman <span>CRM Manager</span></h3>
                                <span class="icon"><i class="ion-quote"></i></span>
                                <p> Interact Confidently with clients and team members,<br>
                                    Rich in Professionalism<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="pricing-table">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h2>PRICING TABLE</h2>
                        <p>You want to pay less and grow your business you are at right place</p>
                    </div>
                    <div class="col-md-4 col">
                        <div class="block text-center wow fadeInLeft" data-wow-delay=".3s">
                            <ul>
                                <li>
                                    <h4>STARTER PACK</h4>
                                    <p>&#36; 47 <span>/Month</span></p>
                                </li>
                                <li>
                                    <p>Unlimited Downloads</p>
                                </li>
                                <li>
                                    <p>Unlimited Uploads</p>
                                </li>
                                <li>
                                    <p>Unlimited Email Accounts</p>
                                </li>
                                <li>
                                    <p> Email Forwards </p>
                                </li>
                                <li>
                                    <p>Cloud Storage</p>
                                </li>
                                <li>
                                    <p>Screen Share</p>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-buy">BUY NOW</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col">
                        <div class="block text-center wow zoomIn" data-wow-delay=".3s">
                            <ul>
                                <li>
                                    <h4>STARTER PACK</h4>
                                    <p>&#36; 85 <span>/Month</span></p>
                                </li>
                                <li>
                                    <p>Unlimited Downloads</p>
                                </li>
                                <li>
                                    <p>Unlimited Uploads</p>
                                </li>
                                <li>
                                    <p>Unlimited Email Accounts</p>
                                </li>
                                <li>
                                    <p> Email Forwards </p>
                                </li>
                                <li>
                                    <p>Cloud Storage</p>
                                </li>
                                <li>
                                    <p>Screen Share</p>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-buy">BUY NOW</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col">
                        <div class="block text-center wow fadeInRight" data-wow-delay=".3s">
                            <ul>
                                <li>
                                    <h4>STARTER PACK</h4>
                                    <p>&#36; 160 <span>/Month</span></p>
                                </li>
                                <li>
                                    <p>Unlimited Downloads</p>
                                </li>
                                <li>
                                    <p>Unlimited Uploads</p>
                                </li>
                                <li>
                                    <p>Unlimited Email Accounts</p>
                                </li>
                                <li>
                                    <p> Email Forwards </p>
                                </li>
                                <li>
                                    <p>Cloud Storage</p>
                                </li>
                                <li>
                                    <p>Screen Share</p>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-buy">BUY NOW</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title">
                            <h2>Blog</h2>
                            <p>Dantes remained confused and silent by this explanation of the <br> thoughts which had
                                unconsciously
                            </p>
                        </div>
                        <div id="blog-post" class="owl-carousel">
                            <div>
                                <div class="block">
                                    <img src="img/blog/blog-1.jpg" alt="" class="img-responsive">
                                    <div class="content">
                                        <h4><a href="blog.html">Hey,This is a blog title</a></h4>
                                        <small>By admin / Sept 18, 2014</small>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ex itaque
                                            repudiandae nihil
                                            qui debitis atque necessitatibus aliquam, consequuntur autem!
                                        </p>
                                        <a href="blog.html" class="btn btn-read">Read More</a>

                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <img src="img/blog/blog-2.jpg" alt="" class="img-responsive">
                                    <div class="content">
                                        <h4><a href="blog.html">Hey,This is a blog title</a></h4>
                                        <small>By admin / Sept 18, 2014</small>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ex itaque
                                            repudiandae nihil
                                            qui debitis atque necessitatibus aliquam, consequuntur autem!
                                        </p>
                                        <a href="blog.html" class="btn btn-read">Read More</a>

                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <img src="img/blog/blog-3.jpg" alt="" class="img-responsive">
                                    <div class="content">
                                        <h4><a href="blog.html">Hey,This is a blog title</a></h4>
                                        <small>By admin / Sept 18, 2014</small>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ex itaque
                                            repudiandae nihil
                                            qui debitis atque necessitatibus aliquam, consequuntur autem!
                                        </p>
                                        <a href="blog.html" class="btn btn-read">Read More</a>

                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <img src="img/blog/blog-4.jpg" alt="" class="img-responsive">
                                    <div class="content">
                                        <h4><a href="blog.html">Hey,This is a blog title</a></h4>
                                        <small>By admin / Sept 18, 2014</small>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ex itaque
                                            repudiandae nihil
                                            qui debitis atque necessitatibus aliquam, consequuntur autem!
                                        </p>
                                        <a href="blog.html" class="btn btn-read">Read More</a>

                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="block">
                                    <img src="img/blog/blog-1.jpg" alt="" class="img-responsive">
                                    <div class="content">
                                        <h4><a href="blog.html">Hey,This is a blog title</a></h4>
                                        <small>By admin / Sept 18, 2014</small>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ex itaque
                                            repudiandae nihil
                                            qui debitis atque necessitatibus aliquam, consequuntur autem!
                                        </p>
                                        <a href="blog.html" class="btn btn-read">Read More</a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section id="testimonial">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h2>TESTIMONIAL</h2>
                        <p>OUR HAPPY CLIENTS SAY</p>
                    </div>
                    <div class="col col-md-6">
                        <div class="media wow fadeInLeft" data-wow-delay=".3s">
                            <div class="media-left">
                                <a href="#">
                                    <img src="img/service-img.png" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4 class="media-heading">Jonathon Andrew</h4>
                                </a>
                                <p>Albeit chose at the most reduced cost on a point by point detail of coordinated Web application,<br>
                                   <b> Technoviers </b> ended up being a most ideal decision
                                    for getting our concern settled with accomplishing
                                     exclusive expectation of value and meeting the courses of events.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="media wow fadeInRight" data-wow-delay=".3s">
                            <div class="media-left">
                                <a href="#">
                                    <img src="img/service-img.png" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4 class="media-heading">Jonathon Andrew</h4>
                                </a>
                                <p>Albeit chose at the most reduced cost on a point by point detail of coordinated Web application,<br>
                                    <b> Technoviers </b> ended up being a most ideal decision
                                     for getting our concern settled with accomplishing
                                     exclusive expectation of value and meeting the courses of events.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="media wow fadeInLeft" data-wow-delay=".3s">
                            <div class="media-left">
                                <a href="#">
                                    <img src="img/service-img.png" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4 class="media-heading">Jonathon Andrew</h4>
                                </a>
                                <p>Albeit chose at the most reduced cost on a point by point detail of coordinated Web application,<br>
                                    <b> Technoviers </b> ended up being a most ideal decision
                                     for getting our concern settled with accomplishing
                                     exclusive expectation of value and meeting the courses of events.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6">
                        <div class="media wow fadeInRight" data-wow-delay=".3s">
                            <div class="media-left">
                                <a href="#">
                                    <img src="img/service-img.png" alt="">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="#">
                                    <h4 class="media-heading">Jonathon Andrew</h4>
                                </a>
                                <p>Albeit chose at the most reduced cost on a point by point detail of coordinated Web application,<br>
                                    <b> Technoviers </b> ended up being a most ideal decision
                                     for getting our concern settled with accomplishing
                                      exclusive expectation of value and meeting the courses of events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="client-logo">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <div id="Client_Logo" class="owl-carousel">
                                <div>
                                    <a href="#"><img class="img-responsive" src="img/clientLogo/client-logo1.jpg"
                                            alt=""></a>
                                </div>
                                <div>
                                    <a href="#"><img class="img-responsive" src="img/clientLogo/client-logo2.jpg"
                                            alt=""></a>
                                </div>
                                <div>
                                    <a href="#"><img class="img-responsive" src="img/clientLogo/client-logo3.jpg"
                                            alt=""></a>
                                </div>
                                <div>
                                    <a href="#"><img class="img-responsive" src="img/clientLogo/client-logo4.jpg"
                                            alt=""></a>
                                </div>
                                <div>
                                    <a href="#"><img class="img-responsive" src="img/clientLogo/client-logo5.jpg"
                                            alt=""></a>
                                </div>
                                <div>
                                    <a href="#"><img class="img-responsive" src="img/clientLogo/client-logo6.jpg"
                                            alt=""></a>
                                </div>
                                <div>
                                    <a href="#"><img class="img-responsive" src="img/clientLogo/client-logo1.jpg"
                                            alt=""></a>
                                </div>
                                <div>
                                    <a href="#"><img class="img-responsive" src="img/clientLogo/client-logo2.jpg"
                                            alt=""></a>
                                </div>
                                <div>
                                    <a href="#"><img class="img-responsive" src="img/clientLogo/client-logo3.jpg"
                                            alt=""></a>
                                </div>
                                <div>
                                    <a href="#"><img class="img-responsive" src="img/clientLogo/client-logo4.jpg"
                                            alt=""></a>
                                </div>
                                <div>
                                    <a href="#"><img class="img-responsive" src="img/clientLogo/client-logo5.jpg"
                                            alt=""></a>
                                </div>
                                <div>
                                    <a href="#"><img class="img-responsive" src="img/clientLogo/client-logo6.jpg"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact-form">
            <div class="container">
                <div class="row">
                    <div class="title">
                        <h2>CONTACT US</h2>
                        <p>Dantes remained confused and silent by this explanation of the <br> thoughts which had
                            unconsciously</p>
                    </div>
                    <div class="col-md-6 col">
                        <!-- map -->
                        {{-- <div class="map">
                            <div id="googleMap-"></div>
                        </div> --}}
                        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=lahore&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
                        <!--/map-->

                    </div>
                    <div class="col-md-6">
                        <form>
                            <input type="text" class="form-control" placeholder="Name">
                            <input type="text" class="form-control" placeholder="Email">
                            <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                            <button class="btn btn-default" type="submit">SEND</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
