@extends('website.layouts.master')
@section('content')
    {{-- our service banner section --}}
    <div class="top_banner">
        <img src="{{ asset('background.jpg') }}" alt="" width="100%">
        <div class="centered">
            <h1>About Us</h1>
            <p>Home > Services</p>
        </div>

    </div>
    {{-- service banner end --}}

    {{-- for-experts section --}}
    <section class="section-experts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pe-4">
                    <div class="title-2">
                        <h2> Our Experts and Consultants are <span>Here to Guide You</span></h2>
                    </div>
                    <div class="our-guide">
                        <p>Sometimes, all it takes to unlock your organization’s full potential for innovation is a
                            little
                            outside support or guidance. Whether it’s taking over an active part in your innovation
                            projects, assistance in market and technology scouting, or a fresh perspective when planning
                            your innovation strategy, our consultants and innovation experts will empower you to
                            innovate.
                            <br><br>
                            Our innovation services are designed to extract the secrets of emerging trends, uncover your
                            competitors’ strategies, unveil the true potential of new technologies, accelerate your R&D
                            development, and leverage the full potential of your innovation intelligence. We can take
                            over
                            the critical roles at every stage of the process and train your team to become self-reliant
                            innovation experts. With our services, we get you from “thinking about new ways to innovate”
                            to
                            actually doing it.
                        </p>
                    </div>
                    <div class="speak-btn">
                        <a href="#" class="main-btn">Speak to our expert
                            <i class="fa-solid fa-angle-down"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 ps-4">
                    <div class="service-img">
                        <img src="{{ asset('service.png') }}" alt="" height="1920" width="1080">
                    </div>
                </div>
            </div>
            <hr>
        </div>

    </section>
    {{-- end-expert-section --}}

    {{-- start-innovation-services --}}
    <section class="innovation-services">
        <div class="container">
            <div class="title-2 pb-5">
                <h2>Discover our full range of innovation services</h2>
            </div>
            <div class="for-card-1st">
                <div class="flex-content d-flex">
                    <div class="first-img">
                        <img src="{{ asset('medium.png') }}" alt="" height="180" width="190">
                    </div>
                    <div class="first-content">
                        <div class="title-2">
                            <h2>Innovation Consulting</h2>
                        </div>
                        <div class="our-guide">
                            <p>
                                Our consulting team will join your innovation project or transformation process to fully embrace your challenges. With unparalleled expertise at the intersection of business intelligence, market analytics, IP, and scientific knowledge, they are the missing link needed to align your innovation processes with your overall strategy and deliver actionable recommendations for a successful future.
                            </p>
                        </div>
                        <div class="speak-btn">
                            <a href="#" class="main-btn">Find Out More
                                <i class="fa-solid fa-angle-down ps-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection
