@extends('layouts.main')

@push('title')
    <title>Brandboosters UK - Professional Web Design and Development Services </title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">Website Design & Development</h1>
    </section>
    <section id="portfolio-body">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 py-5" style="margin: auto;">
                    <h2><strong>Utilize Brand Boosters UK’s</strong> Website Design and Development Services</h2>
                    <p style="color:#fff;">Brand Boosters UK offers web development services that combine innovation and
                        functionality to create an unforgettable digital experience. Their creative process begins with
                        thorough planning and teamwork, understanding your company's goals, target audience, and unique
                        selling points.
                    </p>
                    <p>They bring creativity and functionality together in the website, resulting in visually appealing,
                        easy-to-navigate, and responsive websites. They believe in user experience (UX) design, providing an
                        immersive experience that keeps visitors engaged. Brand Boosters UK is the best web development
                        agency, dedicated to improving your online experience, offering ongoing support, upgrades, and
                        optimization.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 py-5">
                    <lottie-player src="https://lottie.host/d2257298-8da5-4d20-9588-60ee1a6b6c50/FTdZTnNYqE.json"
                        background="transparent" speed="1" style="width: 100%;" loop autoplay></lottie-player>
                </div>
                <div class="col-12 text-center pt-5">
                    <h2>Turning Concepts into Compelling Visuals</h2>
                    <p style="color:#fff;">Above, we have enlightened you with our capabilities. Below you can see our
                        extraordinary & modern
                        portfolio.</p>
                </div>
            </div>
            <div class="portfolio-img-warpper d-flex flex-wrap align-items-center justify-content-center mt-5">
                {{-- web --}}
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/leeFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/fitnessFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/hopFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/steiraFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/fitFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/deathFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/cleaningFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/careFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/rostovFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/kylieFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/ercFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/ecombFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/accFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/ecomFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web" data-aos="zoom-out" data-aos-duration="1500">
                    <a href="#" class="image-container">
                        <img src="assets/img/development/gymFull.png" alt="image">
                    </a>
                </div>
            </div>

            <div class="row my-grid my-5">
                <div class="col-12 col-md-12 col-lg-6">
                    <p>We are here for you</p>
                    <h4>We recognize the importance of cost-effectiveness, especially for startups and small businesses.
                    </h4>
                    <div class="py-4">
                        <span class="btn-brandBoosters">
                            <a href="{{ route('contact') }}">Get Started</a>
                        </span>
                        <span class="btn-brandBoosters">
                            <a href="tel:+44 7459 502229">+44 7459 502229</a>
                        </span>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img class="cta" src="assets/img/lp-cta.png" alt="image">
                </div>
            </div>

        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="h2">Our <strong>Packages</strong></h2>
                    <p style="color:#fff;">Discover the art of affordability, where exclusive digital art <br />
                        and design facilities are meticulously tailored to your unique business needs.
                    </p>
                </div>
            </div>
        </div>

        <div class="prices-wrapper">
            <div class="card card-price card-web-price filter web">
                <h4>STARTUP WEBSITE
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&pound;799</sapn> <span>Only</span> <strike>&pound; 999</strike>
                </div>
                <br>
                <ul class="list">
                    <li>6 Pages 100% Custom Website Design</li>
                    <li>Complete Website Development</li>
                    <li>Unlimited Revisions</li>
                    <li>6 Royalty-Free Stock Images</li>
                    <li>3 jQuery slider banner</li>
                    <li>Lead Capturing Form</li>
                    <li>Complete W3C Certified HTML</li>
                    <li>FREE Icon Design</li>
                    <li>FREE Google Friendly Sitemap</li>
                    <li>Complete Deployment</li>
                    <li>Mobile Responsive (Additional Charges)</li>
                    <li>CMS (Additional charges)</li>
                    <li>Value Added:</li>
                    <li>100% Ownership Rights</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>Money-Back Guarantee</li>
                    <li>Combo Add on: $299</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-web-price filter web">
                <h4>PROFESSIONAL WEBSITE
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&pound;1,399</sapn> <span>Only</span> <strike>&pound; 1,599</strike>
                </div>
                <br>
                <ul class="list">
                    <li>20 Pages Custom Website Design</li>
                    <li>Conceptual and Dynamic Website</li>
                    <li>Mobile Responsive</li>
                    <li>CMS - Content Management System</li>
                    <li>Online Reservation/Appointment Tool</li>
                    <li>Online Payment Integration</li>
                    <li>Custom Dynamic Forms</li>
                    <li>Lead Capturing Form</li>
                    <li>Striking Hover Effect</li>
                    <li>Newsletter Subscription (optional)</li>
                    <li>Newsfeed Integration</li>
                    <li>Social Media Integration</li>
                    <li>Stock Photos</li>
                    <li>Unique Banner Design</li>
                    <li>jQuery Slider Banner</li>
                    <li>Free Google Friendly Sitemap</li>
                    <li>48 to 72 hours TAT</li>
                    <li>Complete Deployment</li>
                    <li>Value Added:</li>
                    <li>100% Ownership Rights</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>Money-Back Guarantee</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-web-price filter web">
                <h4>BUSINESS WEBSITE
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&pound;1,899</sapn> <span>Only</span> <strike>&pound; 2,799</strike>
                </div>
                <br>
                <ul class="list">
                    <li>10 Pages 100% Custom Website Design</li>
                    <li>Complete Development & Deployment</li>
                    <li>Unlimited Revisions</li>
                    <li>8 Royalty-Free Stock Images</li>
                    <li>5 jQuery slider banner</li>
                    <li>Lead Capturing Form</li>
                    <li>Complete W3C Certified HTML</li>
                    <li>Free Icon Design</li>
                    <li>FREE Google Friendly Sitemap</li>
                    <li>3 Website Banner Design</li>
                    <li>Mobile Responsive</li>
                    <li>CMS - Content Management System</li>
                    <li>Complete Deployment</li>
                    <li>Value Added:</li>
                    <li>100% Ownership Rights</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>Money-Back Guarantee</li>
                    <li>24-48 Hrs TAT</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-web-price filter web">
                <h4>CORPORATE WEBSITE
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&pound;3,999</sapn> <span>Only</span> <strike>&pound; 5,999</strike>
                </div>
                <br>
                <ul class="list">
                    <li>Complete Custom Design & Development</li>
                    <li>Dating Portal, Job Portal, Professional Network Portal, Social Network Portal, Restaurant Portal,
                    </li>
                    <li>Medical Portal, Enterprise Portal (Any One)</li>
                    <li>Unique, User Friendly, Interactive, Dynamic, High-End UI Design</li>
                    <li>Unlimited Banner Designs</li>
                    <li>Interactive Sliding Banners</li>
                    <li>Special Hover Effects</li>
                    <li>Unlimited Stock Images</li>
                    <li>User Signup Area</li>
                    <li>Client/User Dashboard Area</li>
                    <li>Custom Coding and Development</li>
                    <li>Content Management System (Custom)</li>
                    <li>Online Appointment/Scheduling/Online Ordering Integration</li>
                    <li>Online Payment Integration</li>
                    <li>Multi-Lingual</li>
                    <li>Custom Dynamic Forms</li>
                    <li>Shopping Cart Integration</li>
                    <li>Complete Database Creation</li>
                    <li>Signup Automated Email Authentication</li>
                    <li>Web Traffic Analytics Integration</li>
                    <li>3rd Party API Integrations</li>
                    <li>Signup Area (For Newsletters, Offers, etc.)</li>
                    <li>Search Bar for Easy Search</li>
                    <li>Live Feeds of Social Networks integration</li>
                    <li>Search Engine Submission</li>
                    <li>Module-wise Architecture</li>
                    <li>Extensive Admin Panel</li>
                    <li>Award-Winning Team of Expert Designers and Developers</li>
                    <li>Complete Deployment</li>
                    <li>Value Added:</li>
                    <li>Complete Source Files</li>
                    <li>Dedicated project Manager</li>
                    <li>100% Ownership Rights</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Unique Design Guarantee</li>
                    <li>Money-Back Guarantee</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-web-price filter web">
                <br><br><br>
                <br><br><br>
                <div class="text-center">
                    <span>Get Custom</span>
                    <sapn class="price">Quotes</sapn>
                </div>
                <br>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Let's Talk</a>
                </div>
            </div>
        </div>

        <div class="btn-brandBoosters pb-5 text-center">
            <a href="{{ route('packages') }}">View all</a>
        </div>
    </section>
    <section id="foster">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center flexiblefeatures">
                    <h5>Affordability Meets Excellence</h5>
                    <h2 class="pb-5">Why Choose Brand Boosters UK? </h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>Brand Boosters UK brings creative brilliance, technical expertise, a collaborative approach,
                        strategic solutions, and a customer-centered approach. They redefine web development services,
                        providing unique solutions that produce measurable outcomes.
                    </p>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/web-1.jpg" alt="image" width="100%">
                </div>
                <div class="col-12 col-md-12 col-lg-6 pt-5">
                    <img src="assets/img/web-2.png" alt="image" width="100%">
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>Their extensive web development services are tailored to businesses of all sizes and industries,
                        delivering custom solutions that meet your requirements. They are a beacon of originality,
                        innovation, and brilliance, ready to turn your idea into a captivating digital reality.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <x-testimonial />
    <x-footer />
@endsection
