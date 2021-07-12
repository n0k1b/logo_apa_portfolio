@extends('template.app')
@section('content')

<!--About Section Start-->
<section class="about pt-100 pb-100" data-scroll-index="1">

    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <!--About Content-->
                <div class="about-div">
                    <div class="about-title">
                        <h2>About <span>Me</span></h2>
                        <h4> Graphics Designer And Website Developer.</h4>
                    </div>
                    <p>Me <b>Tasniya</b> I am a Graphic Designer & Web Developer based in Bangladesh, specializing in Logo Design, Flyer Design, Packaging, Website Design & Development. I build clean, appealing, and functional interfaces which comply
                        with the latest web standards. But that’s just a part of it. Design is my life. It’s my five-star spa. I enjoy new and challenging projects that push me to learn more in the great field of design.<b>Logo Apa</b> is my startup
                        where I offer all kind of Graphical Content Service, Website Desing & Development Service and Digital Marketing Service.</p>

                    <div class="table-responsive">
                        <table class="info-table">
                            <tbody>


                                <tr>
                                    <th>
                                        <i class="hidden-xs  fas fa-paper-plane"></i>
                                        <span>Email</span>
                                    </th>
                                    <td>tasniyatonni83@gmail.com</td>
                                </tr>



                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <!--About Image-->
                <div class="about-img">
                    <img src="assets/images/background/logo_apa.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--About Section End-->
<section class="skills pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="skill-div">
                    <h2 class="headline">My <span>Skill</span></h2>
                    <p>I am expert in graphics designing stack such as logo designing, banner designing, Facebook content designing, Business card designing, Packaging. I have also expertise in web design and development stack such as website development
                        with WordPress, website development with PHP & Laravel, PSD to HTML design.</p>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="skill-div ">
                    <div class="skills-item mb-35">
                        <h6>PHP</h6>
                        <div class="bar">
                            <span class="fill" data-width="90%"></span>
                        </div>
                        <div class="tip"></div>
                    </div>

                    <div class="skills-item mb-35">
                        <h6>HTML5 & CSS</h6>
                        <div class="bar">
                            <span class="fill" data-width="80%"></span>
                        </div>
                        <div class="tip"></div>
                    </div>

                    <div class="skills-item mb-35">
                        <h6>Wordpress</h6>
                        <div class="bar">
                            <span class="fill" data-width="90%"></span>
                        </div>
                        <div class="tip"></div>
                    </div>

                    <div class="skills-item ">
                        <h6>Graphcs Designiing</h6>
                        <div class="bar">
                            <span class="fill" data-width="99%"></span>
                        </div>
                        <div class="tip"></div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!--Services Section Start-->
<section class="services pt-100 pb-100" data-scroll-index="2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <div class="main-title">
                        <h4>My <span>Services</span></h4>
                        <h6>What i offer</h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <!--Service Item-->
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h2>Graphcs Design</h2>
                    <p>All Kind of Graphcal content such as Logo, Banner, Flyer, Social Media Content</p>
                </div>
            </div>
            <div class="col-md-4">
                <!--Service Item-->
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-desktop"></i>
                    </div>
                    <h2>Website Design</h2>
                    <p>Responsive,clean, appealing website design with html,css,bootstrap & javascript </p>
                </div>
            </div>
            <div class="col-md-4">
                <!--Service Item-->
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-quidditch"></i>
                    </div>
                    <h2>UI/UX Design</h2>
                    <p>Eye catchy ui/ux design form Adnroid and Web Application</p>
                </div>
            </div>
            <div class="col-md-4">
                <!--Service Item-->
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h2>Website Devloping with PHP & Laravel</h2>
                    <p>Developed multi functional website on client requirements.</p>
                </div>
            </div>
            <div class="col-md-4">
                <!--Service Item-->
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <h2>Website Desinging & Devloping with Wordpress</h2>
                    <p>Design and Develop Personal & Business portfolio with customized theme</p>
                </div>
            </div>
            <div class="col-md-4">
                <!--Service Item-->
                <div class="service-item">
                    <div class="service-icon">
                        <i class="fab fa-medapps"></i>
                    </div>
                    <h2>E-Commerece Webesite</h2>
                    <p>Developed single vendor e-commerce with customized client requirements</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Services Section End-->


<!-- <section class="counter-area pt-100 pb-100" style="background-image: url('assets/images/pexels-photo-220067.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">

<div class="counter-item">
    <h2 class="counter" data-count="220"></h2>
    <h5>Happy Clients</h5>

</div>
</div>
<div class="col-lg-3 col-md-6">

    <div class="counter-item">
        <h2 class="counter" data-count="700">250</h2>
        <h5>Projects Done</h5>
    </div>
</div>
<div class="col-lg-3 col-md-6">

    <div class="counter-item">
        <h2 class="counter" data-count="1100">150</h2>
        <h5>Awards Won</h5>

    </div>
</div>
<div class="col-lg-3 col-md-6">

    <div class="counter-item ">
        <h2 class="counter" data-count="160">1500</h2>
        <h5>Cups Tea</h5>
    </div>
</div>
</div>
</div>
</section> -->
<!--Counter Section End-->
<!--Portfolio Section Start-->
<section class="portfolio bg-gray pt-100 pb-100" data-scroll-index="3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <div class="main-title">
                        <h4>My <span>Portfolio</span></h4>
                        <h6>What i do</h6>
                    </div>

                </div>
                <div class="port-filter text-center">
                    <ul>
                        <li class="filter-item" data-filter="*">All</li>
                        @foreach ($types as $type)
                        <li data-filter=".{{$type->id}}">{{$type->name}}</li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
        <div class="row portfolio-section">
            <!--Portfolio Item-->
            @foreach ($projects as $project)
            <div class="col-lg-4 col-md-4 item {{ $project->type_id }}">
                <div class="portfolio-item">
                    <img src="{{ asset('assets/uploads/projects').'/'.$project->image }}" alt="">
                    <div class="item-overlay">
                        <h6>{{ $project->title }}</h6>
                        <div class="icons">
                            <span class="icon">
                                    <span class="port-link">
                                    <a href="">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    </span>
                            <a href="project-details.html">
                                <i class="fas fa-link"></i>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            <!--Portfolio Item-->
            {{-- <div class="col-lg-4 col-md-4 item design">
                <div class="portfolio-item">
                    <img src="assets/images/portfolio/img-2.jpg" alt="">
                    <div class="item-overlay">
                        <h6>Brand Logo</h6>
                        <div class="icons">
                            <span class="icon">
                                    <span class="port-link">
                                    <a href="assets/images/portfolio/img-2.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    </span>
                            <a href="project-details.html">
                                <i class="fas fa-link"></i>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Item-->

            <div class="col-lg-4 col-md-4 item application">
                <div class="portfolio-item">
                    <img src="assets/images/portfolio/img-3.jpg" alt="">
                    <div class="item-overlay">
                        <h6>Flyers</h6>
                        <div class="icons">
                            <span class="icon">
                                    <span class="port-link">
                                    <a href="assets/images/portfolio/img-3.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    </span>
                            <a href="project-details.html">
                                <i class="fas fa-link"></i>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Item-->
            <div class="col-lg-4 col-md-4 item design design">
                <div class="portfolio-item">
                    <img src="assets/images/portfolio/img-4.jpg" alt="">
                    <div class="item-overlay">
                        <h6>Brand Logo</h6>
                        <div class="icons">
                            <span class="icon">
                                    <span class="port-link">
                                    <a href="assets/images/portfolio/img-4.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    </span>
                            <a href="project-details.html">
                                <i class="fas fa-link"></i>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Item-->
            <div class="col-lg-4 col-md-4 item development development">
                <div class="portfolio-item">
                    <img src="assets/images/portfolio/img-5.jpg" alt="">
                    <div class="item-overlay">
                        <h6>Business Card</h6>
                        <div class="icons">
                            <span class="icon">
                                    <span class="port-link">
                                    <a href="assets/images/portfolio/img-5.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    </span>
                            <a href="project-details.html">
                                <i class="fas fa-link"></i>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!--Portfolio Item-->
            <div class="col-lg-4 col-md-4 item application design">
                <div class="portfolio-item">
                    <img src="assets/images/portfolio/img-6.jpg" alt="">
                    <div class="item-overlay">
                        <h6>Brand Logo</h6>
                        <div class="icons">
                            <span class="icon">
                                    <span class="port-link">
                                    <a href="assets/images/portfolio/img-6.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    </span>
                            <a href="project-details.html">
                                <i class="fas fa-link"></i>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 item application design">
                <div class="portfolio-item">
                    <img src="assets/images/portfolio/img-7.jpg" alt="">
                    <div class="item-overlay">
                        <h6>Brand Logo</h6>
                        <div class="icons">
                            <span class="icon">
                                    <span class="port-link">
                                    <a href="assets/images/portfolio/img-6.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    </span>
                            <a href="project-details.html">
                                <i class="fas fa-link"></i>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 item application application">
                <div class="portfolio-item">
                    <img src="assets/images/portfolio/img-8.jpg" alt="">
                    <div class="item-overlay">
                        <h6>Flyers</h6>
                        <div class="icons">
                            <span class="icon">
                                    <span class="port-link">
                                    <a href="assets/images/portfolio/img-6.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    </span>
                            <a href="project-details.html">
                                <i class="fas fa-link"></i>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 item application design">
                <div class="portfolio-item">
                    <img src="assets/images/portfolio/img-9.jpg" alt="">
                    <div class="item-overlay">
                        <h6>Brand Logo</h6>
                        <div class="icons">
                            <span class="icon">
                                    <span class="port-link">
                                    <a href="assets/images/portfolio/img-6.jpg">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    </span>
                            <a href="project-details.html">
                                <i class="fas fa-link"></i>
                            </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>
</section>
<!--Portfolio Section End-->
<!-- <section class="timeline pt-100 pb-100" data-scroll-index="2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <div class="main-title">
                        <h4>My <span>Experience</span></h4>
                        <h6>My Recent Experiences</h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="main-timeline">
                <div class="timeline">
                    <div class="timeline-icon"></div>
                    <div class="timeline-content">
                        <span class="date">Apr 2015 - Mar 2016</span>
                        <h5 class="title">Software Engineer</h5>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.
                        </p>
                    </div>
                </div>

                <div class="timeline">
                    <div class="timeline-icon"></div>
                    <div class="timeline-content">
                        <span class="date">Apr 2016 - Mar 2017</span>
                        <h5 class="title">Web Developer</h5>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.
                        </p>
                    </div>
                </div>

                <div class="timeline">
                    <div class="timeline-icon"></div>
                    <div class="timeline-content">
                        <span class="date">Apr 2017 - Present</span>
                        <h5 class="title">Frontend Developer</h5>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum mattis felis vitae risus pulvinar tincidunt. Nam ac venenatis enim. Aenean hendrerit justo sed.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--Testimonials Section Start-->
<!-- <section class="testimonials counter-area pt-100 pb-100" style="background-image: url('assets/images/pexels-photo-220067.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div id="testimonial-slider" class="owl-carousel">
                    <div class="testimonial">
                        <p class="testi-description">
                            Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries.
                        </p>

                        <div class="testimonial-review">
                            <div class="pic">
                                <img src="assets/images/user/6.jpg" alt="">
                            </div>
                            <h4 class="testimonial-title">
                                Johne Doe
                                <small>Web Developer</small>
                            </h4>
                        </div>
                    </div>
                    <div class="testimonial">
                        <p class="testi-description">
                            Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries.
                        </p>

                        <div class="testimonial-review">
                            <div class="pic">
                                <img src="assets/images/user/10.jpg" alt="">
                            </div>
                            <h4 class="testimonial-title">
                                Johne Doe
                                <small>Web Developer</small>
                            </h4>
                        </div>
                    </div>
                    <div class="testimonial">
                        <p class="testi-description">
                            Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries.
                        </p>

                        <div class="testimonial-review">
                            <div class="pic">
                                <img src="assets/images/user/8.jpg" alt="">
                            </div>
                            <h4 class="testimonial-title">
                                Johne Doe
                                <small>Web Developer</small>
                            </h4>
                        </div>
                    </div>
                    <div class="testimonial">
                        <p class="testi-description">
                            Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took a galley of type and scrambled it to make a type specimen book It has survived not only five centuries.
                        </p>

                        <div class="testimonial-review">
                            <div class="pic">
                                <img src="assets/images/user/9.jpg" alt="">
                            </div>
                            <h4 class="testimonial-title">
                                Johne Doe
                                <small>Web Desginer</small>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--Testimonials Section End-->
<!--Blog Section Start-->
<!-- <section id="blog" class="blog pt-100 pb-100" data-scroll-index="4">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section-title">
                    <div class="main-title">
                        <h4>My <span>Blog</span></h4>
                        <h6>Latest blog</h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4">

<div class="post-slide">
    <div class="post-img">
        <a href="blog-details.html"><img src="assets/images/blog/60.jpg" alt=""></a>
    </div>
    <div class="post-content">
        <div class="post-date">
            <span class="month">apr</span>
            <span class="date">10</span>
        </div>
        <h5 class="post-title"><a href="blog-details.html">Learn Web Design</a></h5>
        <p class="post-description">
            Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took
        </p>
        <a class="read-more" href="blog-details.html">Read More</a>
    </div>
    <ul class="post-bar">
        <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
        <li> <i class="fa fa-comments"></i> <a href="#">2</a> </li>
        <li> <i class="fa fa-thumbs-up"></i> <a href="#">2 Likes</a> </li>
    </ul>
</div>
</div>
<div class="col-md-4">

    <div class="post-slide">
        <div class="post-img">
            <a href="blog-details.html"><img src="assets/images/blog/50.jpg" alt=""></a>
        </div>
        <div class="post-content">
            <div class="post-date">
                <span class="month">apr</span>
                <span class="date">10</span>
            </div>
            <h5 class="post-title"><a href="blog-details.html">Learn UI/UX Design</a></h5>
            <p class="post-description">
                Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took
            </p>
            <a class="read-more" href="blog-details.html">Read More</a>
        </div>
        <ul class="post-bar">
            <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
            <li> <i class="fa fa-comments"></i> <a href="#">2</a> </li>
            <li> <i class="fa fa-thumbs-up"></i> <a href="#">2 Likes</a> </li>
        </ul>
    </div>
</div>
<div class="col-md-4">

    <div class="post-slide">
        <div class="post-img">
            <a href="blog-details.html"><img src="assets/images/blog/30.jpg" alt=""></a>
        </div>
        <div class="post-content">
            <div class="post-date">
                <span class="month">apr</span>
                <span class="date">10</span>
            </div>
            <h5 class="post-title"><a href="blog-details.html">Latest News of Wordpress</a></h5>
            <p class="post-description">
                Lorem Ipsum is simply dummy text of the printing and type setting industry when an unknown printer took
            </p>
            <a class="read-more" href="blog-details.html">Read More</a>
        </div>
        <ul class="post-bar">
            <li> <i class="fa fa-users"></i> <a href="#">admin</a> </li>
            <li> <i class="fa fa-comments"></i> <a href="#">2</a> </li>
            <li> <i class="fa fa-thumbs-up"></i> <a href="#">2 Likes</a> </li>
        </ul>
    </div>
</div>
</div>
</div>
</section> -->
<!--Blog Section End-->


<!--Contact Section Start-->
<!--Contact Section Start-->
<section class="contact pt-100 pb-100" data-scroll-index="5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section-title">
                    <div class="main-title">
                        <h4>Contact <span>Me</span></h4>
                        <h6>Contact With Me</h6>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <!--Contact Form-->
                <form id='contact-form' method='POST'><input type='hidden' name='form-name' value='contactForm' />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="first-name" placeholder="Name *" required="required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email *" required="required">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea rows="6" name="message" class="form-control" id="description" placeholder="Message *" required="required"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <!--contact button-->
                            <button id="contact-submit" class="div-btn">
                                    Send Message
                                </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="contact-info">

                    <div class="contact-info-item">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> tasniyatonni83@gmail.com</li>

                        </ul>
                    </div>
                    <div class="social-icons mt-15">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"> </i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section>
          <div class="contact-map">
              <iframe   class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3689.7863885381144!2d91.81020831453182!3d22.361693185291596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd9f3d2063673%3A0x6411900fd40637c8!2sSynchronise+IT!5e0!3m2!1sen!2sbd!4v1531126085037" style="border:0" allowfullscreen></iframe>
          </div>
    </section> -->
<!--Contact Section End-->
@endsection

