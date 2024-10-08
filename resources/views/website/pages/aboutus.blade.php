@extends('website.layouts.master')

@section('content')
    <div style="">
    <div class="top_banner">
        <img src="{{asset('background.jpg')}}"  alt="" width="100%">
        <div class="centered">
            <h1>About Us</h1>
            <p>Home > About Us</p>
        </div>

    </div>
    <!--    Our Story Section-->
    <div class="our-story-section" style=" background-color: var(--soft-white);">
        <div class="our-story-left  mt-3 ">
            <div class="our-story-content">
{{--                <h1>Our Story</h1>--}}
                <h1>Welcome to EEE Innovation Ghar </h1>
                <p>Established on February 12, 2019, EEE Innovation Ghar Pvt. Ltd stands as a beacon of technological advancement in Nepal. Our mission is to deliver cutting-edge solutions in Engineering, Education, and Entertainment while providing exceptional IT services to the global market, leveraging the unparalleled talent of Nepal.
                    <br><br>
                    Our motto is to be the best outsourcing company on the local and global market by trading
                    technologies. EEE Innovation Ghar Pvt Ltd is tied up with a Japanese Tech company named "B-icon.
                    Inc" from the beginning and also provides various IT solutions to them. In near future we will
                    diversify our domain and will be a leading conglomerate in Nepal, We will develop the best
                    technology through innovation and apply them in every possible domain. We have a highly dedicated
                    and expert IT team providing world-class solutions and support from analysis to development and from
                    testing to implementation phase.</p>

                {{--                <a href="#">Learn More</a>--}}
            </div>
        </div>
        <div class="our-story-right">
            <img src="{{asset('our-story.png')}}" alt="" height="400" width="400">

        </div>
    </div>
    <div class="our-story-section" style=" background-color: var(--soft-white); ">
        <div class="our-story-left">
            <img src="{{asset('our-story.png')}}" alt="" height="400" width="400">

        </div>
        <div class="our-story-right">
            <div class="our-story-content">
                <h1>Our Vision</h1>
                <p>
                    Established on February 12, 2019, EEE Innovation Ghar Pvt. Ltd stands as a beacon of technological advancement in Nepal. Our mission is to deliver cutting-edge solutions in Engineering, Education, and Entertainment while providing exceptional IT services to the global market, leveraging the unparalleled talent of Nepal.
                </p>
                <h1>Our Expertise</h1>
                <p>
                    Driven by our motto of excellence, our dedicated team of experts is at the forefront of innovation, crafting bespoke solutions tailored to meet the evolving needs of our clients. From meticulous analysis to seamless development, rigorous testing, and flawless implementation, we are committed to delivering world-class solutions every step of the way.
                </p>
                {{--                <a href="#">Learn More</a>--}}
            </div>


        </div>
    </div>
{{--start of why choose us--}}
    <div class="feat bg-gray pt-5 pb-5" style=" background-color: var(--soft-white); ">
        <div class="container">
            <div class="row">
                <div class="section-head col-sm-12">
                    <h4><span>Why Choose</span> Us?</h4>
                    <p>When you choose us, you'll feel the benefit of 10 years' experience of Web Development. Because we know the digital world and we know that how to handle it. With working knowledge of online, SEO and social media.</p>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_one"><i class="fa fa-globe"></i></span>
                        <h6>Modern Design</h6>
                        <p>We use latest technology for the latest world because we know the demand of peoples.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_two"><i class="fa fa-anchor"></i></span>
                        <h6>Creative Design</h6>
                        <p>We are always creative and and always lisen our costomers and we mix these two things and make beast design.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_three"><i class="fa fa-hourglass-half"></i></span>
                        <h6>24 x 7 User Support</h6>
                        <p>If our customer has any problem and any query we are always happy to help then.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
                        <h6>Business Growth</h6>
                        <p>Everyone wants to live on top of the mountain, but all the happiness and growth occurs while you're climbing it</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_five"><i class="fa fa-upload"></i></span>
                        <h6>Market Strategy</h6>
                        <p>Holding back technology to preserve broken business models is like allowing blacksmiths to veto the internal combustion engine in order to protect their horseshoes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="item"> <span class="icon feature_box_col_six"><i class="fa fa-camera"></i></span>
                        <h6>Affordable cost</h6>
                        <p>Love is a special word, and I use it only when I mean it. You say the word too much and it becomes cheap.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        {{-- end start of why choose us--}}

{{--        start of our team--}}
        <div class="feat bg-gray pt-5 pb-1" style=" background-color: var(--soft-white); ">
            <div class="container">
                <div class="row">
                    <div class="section-head col-sm-12">
                        <h4><span>Meet Our</span> TEAM</h4>
                        <p>
                            "Empowering Innovation, Uniting Excellence: Together We Tech!"</p>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_one"><img src="{{asset('pp.png')}}" alt=""></span>
                            <h6>Mr Rajan Pyakurel</h6>
                            <h6>CEO & Co-Founder</h6>

                            <p>Rajan’s passion, curiosity, and experience in technology and business has made him a competitive CEO for this organization.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_two"><img src="{{asset('pp.png')}}" alt=""></span>
                            <h6>Mr. Uttam Thapa</h6>
                            <h6>Chief Marketing Officer (CMO)</h6>

                            <p>He successfully forwards various projects from the Japanese market. Good understanding of client requirements, communication skills through multiple languages, and good collaboration skills made him a responsible CMO (Chief Marketing Officer)</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_three"><img src="{{asset('pp.png')}}" alt=""></span>
                            <h6>Miss.Sirjana Kapri</h6>
                            <h6>Chief Financial Officer (CFO)</h6>
                            <p>She has a deep understanding of her responsibility for the planning, implementation, managing, and running of all the finance activities of a company including business planning, budgeting, forecasting, and negotiations.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_five"><img src="{{asset('pp.png')}}" alt=""></span>
                            <h6>Mr. Prajal Pyakurel</h6>
                            <h6>Marketing Executive</h6>
                            <P>A versatile professional serving as both a skilled developer and a strategic marketing executive at our company. With a passion for coding and a keen understanding of market trends, he bring a unique blend of technical expertise and business acumen to our team.</P>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_five"><img src="{{asset('pp.png')}}" alt=""></span>
                            <h6>Mr. Prajal Pyakurel</h6>
                            <h6>Marketing Executive</h6>
                            <P>A versatile professional serving as both a skilled developer and a strategic marketing executive at our company. With a passion for coding and a keen understanding of market trends, he bring a unique blend of technical expertise and business acumen to our team.</P>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="item"> <span class="icon feature_box_col_five"><img src="{{asset('pp.png')}}" alt=""></span>
                            <h6>Mr. Prajal Pyakurel</h6>
                            <h6>Marketing Executive</h6>
                            <P>A versatile professional serving as both a skilled developer and a strategic marketing executive at our company. With a passion for coding and a keen understanding of market trends, he bring a unique blend of technical expertise and business acumen to our team.</P>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="team-container" style=" background-color: var(--soft-white); ">
            <div class="team-members" id="teamMembers">
                <!-- Team members go here -->
                <div class="team-member">John Doe - Web Developer</div>
                <div class="team-member">Jane Smith - UI/UX Designer</div>
                <div class="team-member">Alice Johnson - Frontend Developer</div>
                <div class="team-member">Bob Williams - Backend Developer</div>
                <div class="team-member">Eva Davis - Graphic Designer</div>
                <div class="team-member">Michael Brown - Project Manager</div>
                <div class="team-member">Olivia Garcia - QA Engineer</div>
                <div class="team-member">David Taylor - Mobile App Developer</div>
                <div class="team-member">Sophia Clark - Marketing Specialist</div>
                <div class="team-member">Daniel Turner - Data Analyst</div>
            </div>
        </div>
                {{--end of our team --}}


    <!--    End Our Story Section-->

<div style="height:1080px;"></div>



@endsection

