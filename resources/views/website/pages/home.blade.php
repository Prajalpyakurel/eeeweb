@extends('website.layouts.master')

@section('content')
    {{--    <h1>ram is a good boy</h1> --}}
    <!--    Hero Section-->
    <div class="hero-section">
        <div class="inner-hero-container">
            <div class="hero-section-wrapper grid">
                <div class="hero-section-left">
                    <div class="hero-left-content">
                        <div class="hero-left-heading">
                            <h1>Education,</h1>
                            <h1>Engineeing,</h1>
                            <h1>Entertainment.</h1>
                        </div>
                        <div class="hero-left-info">
                            <div class="hero-left-info-first">
                                <p>Let us be the <span class="first-span"> answer</span></p>
                                <p>Let us be the <span class="first-span"> semi-colon</span></p>
                                <p>Let us be the <span class="first-span"> harvey</span></p>
                                <p>Let us be the <span class="first-span"> dumbledore</span></p>
                            </div>
                            <div class="hero-left-info-second">
                                <p>to your learning <span class="second-span"> challenges</span></p>
                                <p>to your learning <span class="second-span"> C++ Code</span></p>
                                <p>to your learning <span class="second-span"> mike ross</span></p>
                                <p>to your learning <span class="second-span"> Harry Potter</span></p>
                            </div>
                        </div>
                        <div class="button-group">
                            <a href="#" class="boton">
                                Explore<i class="fa-solid fa-angle-down fa-bounce"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="hero-section-right">
                    <video class="hero-video" src="{{ asset('raw.mp4') }}" autoplay loop muted></video>
                </div>
            </div>
        </div>
    </div>
    <!--    End Hero Section-->
    <!--    Our Story Section-->
    <div class="our-story-section">
        <div class="our-story-left">
            <img src="{{ asset('our-story.png') }}" alt="" height="400" width="400">
        </div>
        <div class="our-story-right">
            <div class="our-story-content">
                <h1>Our Story</h1>
                <p>EEE Innovation Ghar Pvt. Ltd was established in 12 February, 2019 to provide appropriate and advanced
                    technical solutions in the field of Engineering, Education, and Entertainment. We also aim to
                    provide good IT services in the global market by utilizing the best-skilled manpower of Nepal.
                    <br><br>
                    Our motto is to be the best outsourcing company on the local and global market by trading
                    technologies. EEE Innovation Ghar Pvt Ltd is tied up with a Japanese Tech company named "B-icon.
                    Inc" from the beginning and also provides various IT solutions to them. In near future we will
                    diversify our domain and will be a leading conglomerate in Nepal, We will develop the best
                    technology through innovation and apply them in every possible domain. We have a highly dedicated
                    and expert IT team providing world-class solutions and support from analysis to development and from
                    testing to implementation phase.
                </p>
                <a href="#">Learn More</a>
            </div>
        </div>
    </div>
    <!--    End Our Story Section-->

    <!--    What We Do Section-->
    <div class="what-we-do-section">
        <div class="what-we-do-heading">
            <h2>professional</h2>
            <h1>Our Service</h1>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{ asset('what-we-do-slider/graphic.jpg') }}" alt=""
                            style="height: 250px; object-fit: cover; border-radius:10px 10px 0 0;">
                    </div>
                    <div class="what-we-do-text-section">
                        <h1>Graphics & Design</h1>
                        <p>We create user friendly design for good experience and impactful feel for your business
                            Application.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{ asset('what-we-do-slider/machine-learning.jpg') }}" alt=""
                            style="height: 250px; object-fit: cover; border-radius:10px 10px 0 0;">
                    </div>
                    <div class="what-we-do-text-section">
                        <h1>Machine Learning</h1>
                        <p>We help complete Machine Learning projects to help businesses leverage consumer data to build
                            useful customer profiles, increase sales and improve brand loyalty.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{ asset('what-we-do-slider/machine-learning.jpg') }}" alt=""
                            style="height: 250px; object-fit: cover; border-radius:10px 10px 0 0;">
                    </div>
                    <div class="what-we-do-text-section">
                        <h1>Mobile Development</h1>
                        <p>We help reflect your business on mobile applications (both android and IOS) to grow in the
                            competitive portable world.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{ asset('what-we-do-slider/machine-learning.jpg') }}" alt=""
                            style="height: 250px; object-fit: cover; border-radius:10px 10px 0 0;">
                    </div>
                    <div class="what-we-do-text-section">
                        <h1>Web Development</h1>
                        <p>We help integrate with your overall marketing goal and brand identity by designing static,
                            dynamic, E-commerce, News portal, CMS and other custom websites.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="img">
                        <img src="{{ asset('what-we-do-slider/machine-learning.jpg') }}" alt=""
                            style="height: 250px; object-fit: cover; border-radius:10px 10px 0 0;">
                    </div>
                    <div class="what-we-do-text-section">
                        <h1>Data Mining & Management</h1>
                        <p>We gather and convert the historical,real time and/or traditional big data into actionable
                            insights and automate the reporting system.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next">
            <img src="{{ asset('svg-images/arrow-right.svg') }}" alt="">
        </div>
        <div class="swiper-button-prev">
            <img src="{{ asset('svg-images/arrow-left.svg') }}" alt="">
        </div>
    </div>
    <!--    End What We Do Section-->
    {{-- Testimonial section --}}
    <section class="testimonials-area ">
        <div class="container-5">
            <div class="items row">
                <div class="col-lg-4">
                    <div class="testimonials-title">
                        <h2 class="title">Our Students Review</h2>
                        <span class="line"></span>
                        <p>Even slightly believable. If you are going use a passage of Lorem Ipsum need desire to obtain
                            pain of itself, because it is pain de sires to obtain pain of itself occur</p>
                    </div>
                </div>
                <div class="col-lg-8 main">
                    <div class="testimonials-wrapper">
                        <div class="testimonials-shape shape-1"></div>
                        <div class="testimonials-shape shape-2"></div>
                        <div class="testimonials-shape shape-3"></div>
                    </div>
                    <div class="row ">
                        <div class="col-lg-6">
                            <div class="testimonials-image ">
                                <div class="slick-list">
                                    <div class="slider slider-for">
                                        <div>
                                            <img src="{{asset('testimonials-1.webp')}}"  alt="">
                                        </div>
                                        <div>
                                            <img src="{{asset('testimonials-1.webp')}}" alt="">
                                        </div>
                                        <div>
                                            <img src="{{asset('testimonials-3.webp')}}" alt="">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="testimonials-content">
                                <div class="slick-list ">
                                    <div class="slick-track  slider slider-nav"
                                        style="opacity: 1; width: 2492px; transform: translate3d(-356px, 0px, 0px);">
                                        <div class="single-testimonial-content" style="width: 356px;">
                                            <div class="content-text">
                                                <i class="fas fa-quote-right"></i>
                                                <p>
                                                    Best pleasure rationally encounter consequences that are very nice
                                                    a again is there anyone who loves or desires to obtain pain of
                                                    itself.
                                                </p>
                                            </div>
                                            <div class="content-meta">
                                                <img src="{{asset('man.png')}}" alt="">                                                <p class="name">Prajal Pyakurel</p>
                                                <p class="designation">
                                                    CEO, Xelopex Group
                                                </p>
                                            </div>
                                        </div>
                                        <div class=" single-testimonial-content " style="width: 356px;">
                                            <div class="content-text">
                                                <i class="fas fa-quote-right"></i>
                                                <p>
                                                    Best pleasure rationally encounter consequences that are very nice
                                                    a again is there anyone who loves or desires to obtain pain of
                                                    itself.
                                                </p>
                                            </div>
                                            <div class="content-meta">
                                                <img src="{{asset('man.png')}}" alt="">                                                <p class="name">Manish Karki</p>
                                                <p class="designation">
                                                    CEO, Xelopex Group
                                                </p>
                                            </div>
                                        </div>
                                        <div class=" single-testimonial-content " style="width: 356px;">
                                            <div class="content-text">
                                                <i class="fas fa-quote-right"></i>
                                                <p>
                                                    Best pleasure rationally encounter consequences that are very nice
                                                    a again is there anyone who loves or desires to obtain pain of
                                                    itself.
                                                </p>
                                            </div>
                                            <div class="content-meta">
                                                <img src="{{asset('man.png')}}" alt="">
                                                <p class="name">Alex Smith</p>
                                                <p class="designation">
                                                    CEO, Xelopex Group
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- end of Testimonial section --}}
    <!--   Our Achievements -->
    <div class="our-achievements-section">
        <div class="what-we-do-heading">
            <h2>Valuable</h2>
            <h1>Our Achievements</h1>
        </div>
        <div class="wrapper">
            <div class="achivements-container">
                <img src="{{ asset('achievements/operation.png') }}" alt="" height="100" width="100">
                <div class="counter-text-section">
                    <span class="num counter" data-target="400">0</span>
                    <span class="counter-plus">+</span>
                </div>
                <span class="text">Years of Operation</span>
            </div>
            <div class="achivements-container">
                <img src="{{ asset('achievements/client.png') }}" alt="" height="100" width="100">
                <div class="counter-text-section">
                    <span class="num counter" data-target="300">0</span>
                    <span class="counter-plus">+</span>
                </div>
                <span class="text">Happy Clients</span>
            </div>
            <div class="achivements-container">
                <img src="{{ asset('achievements/project.png') }}" alt="" height="100" width="100">
                <div class="counter-text-section">
                    <span class="num counter" data-target="225">0</span>
                    <span class="counter-plus">+</span>
                </div>
                <span class="text">Project Delivered</span>
            </div>
            <div class="achivements-container">
                <img src="{{ asset('achievements/expert.png') }}" alt="" height="100" width="100">
                <div class="counter-text-section">
                    <span class="num counter" data-target="280">0</span>
                    <span class="counter-plus">+</span>
                </div>
                <span class="text">Experts</span>
            </div>
        </div>
    </div>
    <!--   End Our Achievements -->

    <!--   Working Process -->
    <div class="our-working-process-section">
        <div class="what-we-do-heading our-work-heading">
            <h2>Profession</h2>
            <h1>Our Working Process</h1>
        </div>
        <div class="working-container">
            <div class="working-first-container">
                <div class="first-step step-section">
                    <p>Step 1</p>
                </div>
                <div class="working-first-inner-container working-inner-container">
                    <h1>Requirement gathering</h1>
                    <p>It all start with a great idea. Our team will get in touch with you to review your project
                        specification in detail.</p>
                </div>
            </div>
            <div class="working-second-container">
                <div class="second-step step-section">
                    <p>Step 2</p>
                </div>
                <div class="working-second-inner-container working-inner-container">
                    <h1>WIRE FRAMING</h1>
                    <p>We will then produce wireframe/blueprints of the project based on your specification with regular
                        discussion with you.</p>
                </div>
            </div>
            <div class="working-third-container">
                <div class="third-step step-section">
                    <p>Step 3</p>
                </div>
                <div class="working-third-inner-container working-inner-container">
                    <h1>DESIGN AND DEVELOPMENT</h1>
                    <p>We will come up with creative design of your choice and make changes after your review. And after
                        the designs are approved we start actual development.</p>
                </div>
            </div>
            <div class="working-forth-container">
                <div class="forth-step step-section">
                    <p>Step 4</p>
                </div>
                <div class="working-forth-inner-container working-inner-container">
                    <h1>testing</h1>
                    <p>After development, our Quality Assurance team perform thorough testing to ensure bug free
                        solution before going live.</p>
                </div>
            </div>
            <div class="working-fifth-container">
                <div class="fifth-step step-section">
                    <p>Step 5</p>
                </div>
                <div class="working-fifth-inner-container working-inner-container">
                    <h1>DELIVERY OF PROJECT</h1>
                    <p>Once the product has been validated through testing it can be deployed to the server which
                        involves pilot launch, maintenance contract, user testing and so on.</p>
                </div>
            </div>
        </div>
        <div class="process-image">
            <img src="{{ asset('/achievements/process.png') }}" alt="" height="300" width="300">
        </div>
    </div>

    <!--   End Working Process --
@endsection
