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
                <div class="team-member">Social Media Marketing (SMM)</div>
                <div class="team-member">Search Engine Marketing(SEM)</div>
                <div class="team-member">Search Engine Optimization (SEO)</div>
                <div class="team-member">Content Marketing</div>
                <div class="team-member">Email Marketing</div>
                <div class="team-member">Affiliate Marketing</div>
                <div class="team-member">Influencer Marketing</div>
                <div class="team-member">Viral Marketing</div>
                <div class="team-member">Mobile Advertising</div>
                <div class="team-member">Video Marketing</div>
                <div class="team-member">SMS Marketing</div>
                <div class="team-member">App Store Optimization</div>
                <div class="team-member">Display Advertising</div>
                <div class="team-member">E-commerce Marketing</div>
                <div class="team-member">Content Automation</div>
                <div class="team-member">Marketing Automation</div>
                <div class="team-member">Data-driven Marketing</div>
                <div class="team-member">Campaign Marketing</div>
                <div class="team-member">Social Media Optimization</div>
                <div class="team-member">Social Media Management</div>
                <div class="team-member">Social Media Advertising</div>
                <div class="team-member">Pay-per-click Advertising</div>
                <div class="team-member">Google Ads</div>
                <div class="team-member">Facebook Ads</div>
                <div class="team-member">Instagram Ads</div>
                <div class="team-member">LinkedIn Ads</div>
                <div class="team-member">Twitter Ads</div>
                <div class="team-member">Pinterest Ads</div>
                <div class="team-member">Snapchat Ads</div>
                <div class="team-member">TikTok Ads</div>
                <div class="team-member">YouTube Ads</div>
                <div class="team-member">Reddit Ads</div>
                <div class="team-member">Quora Ads</div>
                <div class="team-member">Bing Ads</div>


            </div>
        </div>
    </div>
    {{-- for-experts section --}}
    <section class="section-experts">

        <div class="container">
            <div class="row">

                <div class="col-lg-6 pe-4">
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
                    <div class="speak-btn">
                        <a href="#" class="main-btn">Speak to our expert
                            <i class="fa-solid fa-angle-down"></i>
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
                <h2>Discover our full range of innovation services</h2>
            </div>
            <div class="for-card-1st ">
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
                                Our consulting team will join your innovation project or transformation process to fully
                                embrace your challenges. With unparalleled expertise at the intersection of business
                                intelligence, market analytics, IP, and scientific knowledge, they are the missing link
                                needed to align your innovation processes with your overall strategy and deliver actionable
                                recommendations for a successful future.
                            </p>
                        </div>
                        <div class="speak-btn">
                            <a href="#" class="main-btn">
                                <i class="fa-solid fa-arrow-right pe-2"></i>
                                Find Out More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-card ">
                <div class="flex-content d-flex">
                    <div class="first-content">
                        <div class="title-2">
                            <h2 style="color: var(--primary-color)">Operational Services</h2>
                        </div>
                        <div class="our-guide">
                            <p>In-depth collaboration across company boundaries can be the key to successful innovation and
                                competitive advantage. To efficiently and quickly scale such collaborative efforts, our
                                international team of experts can support your operations in various ways: identifying
                                potential partners, engaging them in collaboration projects, conducting exploratory
                                interviews, evaluating emerging technologies, and more.</p>
                        </div>
                        <div class="speak-btn">
                            <a href="#" class="main-btn">
                                <i class="fa-solid fa-arrow-right pe-2"></i>
                                Find Out More
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
                        <img src="{{ asset('mimi.png') }}" alt="" height="180" width="190">
                    </div>
                    <div class="first-content">
                        <div class="title-2">
                            <h2>Naming</h2>
                        </div>
                        <div class="our-guide">
                            <p>
                                Our naming service provides a single end-to-end solution that ensures cost- and
                                time-efficient delivery of new names for new products and services, based on market research
                                and IP analysis. With decades of experience, we deliver exactly the naming services that
                                clients are seeking in fast-growing markets and industries. </p>
                        </div>
                        <div class="speak-btn">
                            <a href="#" class="main-btn">
                                <i class="fa-solid fa-arrow-right pe-2"></i>
                                Find Out More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-card ">
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
            </div>
        </div>
    </section>
    {{-- end-innovation-services --}}

    {{-- start-innovation-img --}}
    <section class="slide-3">
        <div class="container">
            <div class="full-slide">
                <div class="slide-img">
                    <img src="{{ asset('hand.png') }}" alt="">
                </div>
                <div class="text-black">
                    <div class="title-2">
                        <h2>Innovation Services <span>that Make a Difference</span></h2>
                    </div>
                    <div class="our-guide">
                        <p>With years of experience in innovation consulting, IP services, and innovation management tools,
                            Questel has the know-how to help you innovate. Our innovation services not only individual
                            projects, but can also help you build lasting innovation programs, a corresponding software
                            landscape, and make the critical intersections to IP and patents. Whatever your needs, we will
                            partner with and support you at every step of your innovation journey.</p>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    {{-- end-innovation-img --}}

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
