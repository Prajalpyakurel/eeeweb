@extends('website.layouts.master')
@section('content')
    {{-- our service banner section --}}
    <div class="top_banner">
        <img src="{{ asset('background.jpg') }}" alt="" width="100%">
        <div class="centered">
            <h1>Digital Marketing</h1>
            <p>Home > Services > Digital Marketing</p>
        </div>

    </div>
    {{-- service banner end --}}
    <div class="container-fluid">
        <div class="team-container" style=" background-color: var(--soft-white); ">
            <div class="team-members" id="teamMembers">
                <!-- Team members go here -->
                <div class="team-member card">Social Media Marketing (SMM)</div>
                <div class="team-member card">Search Engine Marketing(SEM)</div>
                <div class="team-member card">Search Engine Optimization (SEO)</div>
                <div class="team-member card">Content Marketing</div>
                <div class="team-member card">Email Marketing</div>
                <div class="team-member card">Affiliate Marketing</div>
                <div class="team-member card">Influencer Marketing</div>
                <div class="team-member card">Viral Marketing</div>
                <div class="team-member card">Mobile Advertising</div>
                <div class="team-member card">Video Marketing</div>
                <div class="team-member card">SMS Marketing</div>
                <div class="team-member card">App Store Optimization</div>
                <div class="team-member card">Display Advertising</div>
                <div class="team-member card">E-commerce Marketing</div>
                <div class="team-member card">Content Automation</div>
                <div class="team-member card">Marketing Automation</div>
                <div class="team-member card">Data-driven Marketing</div>
                <div class="team-member card">Campaign Marketing</div>
                <div class="team-member card">Social Media Optimization</div>
                <div class="team-member card">Social Media Management</div>
                <div class="team-member card">Social Media Advertising</div>
                <div class="team-member card">Pay-per-click Advertising</div>
                <div class="team-member card">Google Ads</div>
                <div class="team-member card">Facebook Ads</div>
                <div class="team-member card">Instagram Ads</div>
                <div class="team-member card">LinkedIn Ads</div>
                <div class="team-member card">Twitter Ads</div>
                <div class="team-member card">Pinterest Ads</div>
                <div class="team-member card">Snapchat Ads</div>
                <div class="team-member card">TikTok Ads</div>
                <div class="team-member card">YouTube Ads</div>
                <div class="team-member card">Reddit Ads</div>
                <div class="team-member card">Quora Ads</div>
                <div class="team-member card">Bing Ads</div>


            </div>
        </div>
    </div>
    {{-- for-experts section --}}
    <section class="section-experts">

        <div class="container">
            <div class="row">

                <div class="col-lg-6 pe-4 digital">
                    <div class="title-2">
                        <h2> About <span>Digital Marketing</span></h2>
                    </div>
                    <div class="our-guide">
                        <p>In today's business landscape, digital marketing has emerged as a vital component for success,
                            offering unparalleled advantages in reaching, engaging, and converting audiences. Its
                            significance lies in its ability to transcend geographical boundaries, enabling businesses of
                            all sizes to connect with a global audience through channels like social media, search engines,
                            and email. What sets digital marketing apart is its precision targeting capabilities, allowing
                            businesses to tailor their messages to specific demographics, behaviors, and preferences, thus
                            maximizing the efficiency of marketing efforts. Moreover, its cost-effectiveness makes it
                            accessible to startups and small enterprises, offering a level playing field in the competitive
                            market. The real-time analytics provided by digital marketing empower businesses to measure the
                            impact of their campaigns accurately, enabling them to optimize strategies for better results
                            continually. Beyond mere reach and conversion, digital marketing fosters direct engagement and
                            interaction between businesses and consumers, building brand awareness, loyalty, and trust.
                            <br><br>
                            Furthermore, its adaptability enables businesses to stay agile in the face of evolving
                            technologies and trends, ensuring relevance and competitiveness. Ultimately, digital marketing
                            is not just about promotion; it's about creating meaningful connections, delivering personalized
                            experiences, and driving sustainable growth in the modern business era.
                        </p>
                    </div>
                    {{-- <div class="speak-btn">
                        <a href="#" class="main-btn">
                            <i class="fa-solid fa-angle-down"></i>
                        </a>
                    </div> --}}
                    <div class="button-group">
                        <a href="#" class="boton">
                            Speak to our expert<i class="fa-solid fa-angle-down fa-bounce"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 ps-4">
                    <div class="service-img">
                        <img src="{{ asset('digital.jpeg') }}" alt="" height="1920" width="100%">
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
                <h2>Take our Services and Make your ROI</h2>
            </div>
            <div class="for-card-1st digital">
                <div class="flex-content d-flex">
                    <div class="first-img">
                        <img src="{{ asset('medium.png') }}" alt="" height="180" width="190">
                    </div>
                    <div class="first-content">
                        <div class="title-2">
                            <h2>Social Media Marketing (SMM)</h2>
                        </div>
                        <div class="our-guide">
                            <p>
                                EEE Innovation Ghar elevates your brand’s digital presence with comprehensive Social Media
                                Marketing (SMM) services. Our expert team crafts tailored strategies to engage your
                                audience, amplify your message, and drive growth. Leveraging the latest trends and
                                analytics, we ensure your brand stands out in the bustling social media landscape. From
                                creative content creation to targeted ad campaigns, EEE Innovation Ghar is your partner in
                                navigating the social media world. Connect with us to transform your social media journey
                                into a success story.
                            </p>
                        </div>
                        <div class="button-group">
                            <a style="color: white" href="#" class="boton">
                                Speak to our expert<i class="fa-solid fa-angle-down fa-bounce"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-card ">
                <div class="flex-content d-flex">
                    <div class="first-content digital">
                        <div class="title-2">
                            <h2 style="color: var(--primary-color)">Search Engine Optimization (SEO)</h2>
                        </div>
                        <div class="our-guide">
                            <p>At EEE Innovation Ghar, we specialize in elevating your website’s visibility with our Search
                                Engine Optimization (SEO) services. Our approach includes meticulous keyword research,
                                on-page optimization, and authoritative link-building strategies. We focus on driving
                                relevant traffic and improving search rankings to connect you with your target audience.
                                Trust in our expertise to boost your online presence and ensure your business thrives in the
                                digital landscape. Partner with us for SEO solutions that deliver measurable results.</p>
                        </div>
                        <div class="button-group">
                            <a style="color: white" href="#" class="boton">
                                Speak to our expert<i class="fa-solid fa-angle-down fa-bounce"></i>
                            </a>
                        </div>

                    </div>
                    <div class="first-img">
                        <img src="{{ asset('_workflow.png') }}" alt="" height="180" width="190">
                    </div>
                </div>
            </div>
            <div class="for-card-1st ">
                <div class="flex-content d-flex">
                    <div class="first-img">
                        <img src="{{ asset('mimi.png') }}" alt="" style="height: 508px; width: 1312px;">
                    </div>
                    <div class="first-content">
                        <div class="title-2">
                            <h2>What We Offer?</h2>
                        </div>
                        <div class="our-guide">
                            <p>
                                EEE Innovation Ghar offers a comprehensive suite of digital marketing services tailored to
                                elevate your brand’s online presence. Our expertise spans content marketing, where we create
                                engaging narratives that resonate with your audience, and email marketing, with personalized
                                campaigns designed to nurture leads. We harness the power of affiliate and influencer
                                marketing to expand your brand’s reach, while our viral and mobile advertising strategies
                                ensure your content is shared widely. </p>
                            <p>Our video and SMS marketing initiatives engage customers through dynamic and interactive
                                media. We optimize your visibility in app stores and through display advertising, ensuring
                                you’re seen by those who matter most. For e-commerce businesses, we streamline the online
                                sales process with content automation, and our marketing automation and data-driven
                                strategies are informed by analytics for maximum impact.</p>
                            <p>Campaign marketing and social media optimization are key to our approach, maximizing your
                                impact across various platforms. We manage your social media presence, building robust
                                communities, and provide targeted advertising solutions, including pay-per-click and
                                platform-specific ads, covering everything from Google to TikTok. With EEE Innovation Ghar,
                                you can expect a results-driven approach that propels your brand to new heights</p>
                        </div>
                        {{-- <div class="speak-btn">
                            <a href="#" class="main-btn">
                                <i class="fa-solid fa-arrow-right pe-2"></i>
                                Find Out More
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="second-card ">
                <div class="flex-content d-flex">
                    <div class="first-content">
                        <div class="title-2">
                            <h2 style="color: var(--primary-color)">Localization</h2>
                        </div>
                        <div class="our-guide">
                            <p>Our translation, localization, and interpretation experts provide leading global
                                organizations with the support and tools they need to operate seamlessly in foreign markets,
                                overcome regulatory hurdles, and connect with audiences around the world. Our expertise will
                                facilitate your growth – no matter which region, industry or scientific field.</p>
                        </div>
                        <div class="speak-btn">
                            <a href="#" class="main-btn">
                                <i class="fa-solid fa-arrow-right pe-2"></i>
                                Find Out More
                            </a>
                        </div>

                    </div>
                    <div class="first-img">
                        <img src="{{ asset('karolina.png') }}" alt="" height="180" width="190">
                    </div>
                </div>
            </div>
            <div class="for-card-1st ">
                <div class="flex-content d-flex">
                    <div class="first-img">
                        <img src="{{ asset('gleen.png') }}" alt="" height="180" width="190">
                    </div>
                    <div class="first-content">
                        <div class="title-2">
                            <h2>eLearning</h2>
                        </div>
                        <div class="our-guide">
                            <p>
                                Knowledge is power! And access to the right knowledge will accelerate your innovation
                                programs: Less time spent on looking up information and more focus on finding solutions and
                                innovative ideas. Building knowledgeable teams and establishing purposeful knowledge bases
                                is a cornerstone for innovative organizations. Our eLearning solutions will help you get
                                there.
                        </div>
                        <div class="speak-btn">
                            <a href="#" class="main-btn">
                                <i class="fa-solid fa-arrow-right pe-2"></i>
                                Find Out More
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    {{-- end-innovation-services --}}
    <div class="plan container">

        <h1>Choose your plan</h1>
        <div class="card-container">
            <div class="card">
                <div class="offer-title">Silver Package</div>
                {{-- <p class="offer-description">For beginners.</p> --}}
                <p class="offer-price"> 14999/-</p>
                <button class="buy">Buy now</button>
                <hr>
                <ul>
                    <li>Planning & Strategy</li>
                    <li>Research, Analysis & Consulting </li>
                    <li>Creating SEO & User Engaging Post Caption</li>
                    <li>Scheduling & Publishing Post</li>
                    <li>Automated Response Handling</li>
                    <li>Festive Pos</li>
                    <li>6 Creative Graphic Post Per Month</li>
                    <li>60$ Boosting Per Month</li>
                    <li>Facebook,Instagram,Meta Ads Management</li>
                    <li>Monthly Reporting</li>

                </ul>
            </div>
            <div class="card recommended-offer">
                <div class="offer-title">Golden Package</div>
                {{-- <p class="offer-description">For professionals.</p> --}}
                <p class="offer-price"> 24999/-</p>
                <button class="buy">Buy now</button>
                <hr>
                <ul>
                    <li> Planning & Strategy</li>
                    <li> Research, Analysis & Consulting</li>
                    <li> Creating SEO & User Engaging Post Caption</li>
                    <li> Scheduling & Publishing Post</li>
                    <li> Automated Response Handling</li>
                    <li> Festive Post</li>
                    <li> 9 Creative Graphic Post Per Month</li>
                    <li> 1 Gif Video</li>
                    <li> 90$ Boosting Per Month</li>
                    <li> Facebook,Meta Add, Instagram  Management</li>
                    <li> Monthly Reporting</li>

                </ul>
            </div>
            <div class="card">
                <div class="offer-title">Diamond Package</div>
                {{-- <p class="offer-description">.</p> --}}
                <p class="offer-price">39999/-</p>
                <button class="buy">Buy now</button>
                <hr>
                <ul>
                   <li> Planning & Strategy </li>
                   <li> Research, Analysis & Consulting</li>
                   <li> Creating SEO & User Engaging Post Caption</li>
                   <li> Scheduling & Publishing Post</li>
                   <li> Automated Response Handling</li>
                  <li>  Festive Post</li>
                  <li>  12 Creative Graphic Post Per Month</li>
                   <li> 1 Gif Video</li>
                   <li> 1 Motion Graphics Video</li>
                   <li> 120$ Boosting Per Month</li>
                   <li> Facebook,Meta Add, Instagram  Management</li>
                   <li> Monthly Reporting</li>

                </ul>
            </div>

            <div class="card">
                <div class="offer-title">Premium</div>
                <p class="offer-description">For companies.</p>
                <p class="offer-price">40</p>
                <button class="buy">Buy now</button>
                <hr>
                <ul>
                    <li>Unlimited images</li>
                    <li>All formats</li>
                    <li>Use without attribution</li>
                    <li>Edit color, background...</li>
                </ul>
            </div>
        </div>
    </div>


    {{-- start-resources --}}
    <section class="related-cntn">
        <div class="container">
            <div class="title-2 ">
                <h2>Read our related content</h2>
                <div class="speak-btn mb-3">
                    <a href="#" class="main-btn">
                        <i class="fa-solid fa-arrow-right pe-2"></i>
                        Resource Hub
                    </a>
                </div>
            </div>
            <div class="for-grid mt-5">
                <div class="single-blog">
                    <div class="second-img">
                        <img src="{{ asset('img-card.png') }}" alt="blog-1">
                    </div>
                    <div class="blog-text">
                        <span>BLOG POST</span>
                        <h4 class="blog-title mt-2">
                            <a href="#">Patenting Software: <br> How can it be done?</a>
                        </h4>
                        <hr class="mt-4">
                        <div class="our-guide">
                            <p style="text-align: start">Even though life without computers is today nearly impossible to
                                imagine, patent-based
                                protection of the necessary software supporting such devices is still somewhat abstract.
                                This is quite surprising...</p>
                        </div>
                        <a href="#" class="read mt-4">
                            <i class="fa-solid fa-arrow-right pe-2"></i>
                            Read More

                        </a>
                    </div>
                </div>
                <div class="single-blog">
                    <div class="second-img">
                        <img src="{{ asset('img-card-2.png') }}" alt="blog-1">
                    </div>
                    <div class="blog-text">
                        <span>BLOG POST</span>
                        <h4 class="blog-title mt-2">
                            <a href="#">What is Innovation <br> Scouting?</a>
                        </h4>
                        <hr class="mt-4">
                        <div class="our-guide">
                            <p style="text-align: start">Change is a constant. New technologies surface regularly and
                                change existing product landscapes and business models. Companies don’t have all knowledge
                                and all technology expertise ready to be used an...</p>
                        </div>
                        <a href="#" class="read mt-4">
                            <i class="fa-solid fa-arrow-right pe-2"></i>
                            Read More

                        </a>
                    </div>
                </div>
                <div class="single-blog">
                    <div class="second-img">
                        <img src="{{ asset('img-card-3.png') }}" alt="blog-1">
                    </div>
                    <div class="blog-text">
                        <span>EBOOK</span>
                        <h4 class="blog-title mt-2">
                            <a href="#">(Re-)Focusing Your <br> Innovation Program in <br>Turbulent Times</a>
                        </h4>
                        <hr class="mt-4">
                        <div class="our-guide">
                            <p style="text-align: start">Innovation is a journey. So, let’s find the best route to get you
                                to your destination!</p>
                        </div>
                        <a href="#" class="read">
                            <i class="fa-solid fa-arrow-right pe-2"></i>
                            Read More

                        </a>
                    </div>
                </div>
                <div class="single-blog">
                    <div class="second-img">
                        <img src="{{ asset('img-card-4.png') }}" alt="blog-1">
                    </div>
                    <div class="blog-text">
                        <span>BLOG POST</span>
                        <h4 class="blog-title mt-2">
                            <a href="#">Maximise your <br>Invention value from <br>Conception to <br>
                                Commercialisation</a>
                        </h4>
                        <hr class="mt-4">
                        <div class="our-guide">
                            <p style="text-align: start">Learn how a comprehensive database and powerful dashboard can
                                accelerate your understanding of prior art related to your invention...</p>
                        </div>
                        <a href="#" class="read ">
                            <i class="fa-solid fa-arrow-right pe-2"></i>
                            Watch Now

                        </a>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
