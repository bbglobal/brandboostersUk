@extends('layouts.main')

@push('title')
    <title>Mobile App Development | Brand Boosters UK</title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">Mobile App Development</h1>
    </section>
    <section id="portfolio-body">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 py-5" style="margin: auto;">
                    <h2>Enhance Your Brand’s Potential with Professional <strong>Custom Logo Design</strong></h2>
                    <p style="color:#fff;">At Brand Boosters UK, we recognize the importance of a logo in defining a brand's identity. Our best custom logo design services are painstakingly crafted to help your company stand out in today's competitive industry. We embark on a journey to visually convert your brand's essence into an iconic brand with a team of outstanding designers and a passion for creativity.</p>
                    <p>Our logo design process incorporates both aesthetics and strategy. We collaborate closely with you to understand your brand's values, target audience, and unique selling points. This comprehension fuels our creativity as we conceptualize and design logos that reflect the personality of your brand.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 py-5">
                    <img src="assets/img/app-1.png" alt="image" width="100%">
                </div>
                <div class="col-12 text-center pt-5">
                    <h2>Turning Concepts into Compelling Visuals</h2>
                    <p style="color:#fff;">Above, we have enlightened you with our capabilities. Below you can see our
                        extraordinary & modern
                        portfolio.</p>
                </div>
            </div>
            <div class="portfolio-img-warpper d-flex flex-wrap align-items-center justify-content-center mt-5">
                {{-- app --}}
                <div class="img filter web">
                    <a href="assets/img/app/obj1.png" data-fancybox="gallery">
                        <img src="assets/img/app/obj1.png" alt="image">
                    </a>
                </div>
                <div class="img filter web">
                    <a href="assets/img/app/obj2.png" data-fancybox="gallery">
                        <img src="assets/img/app/obj2.png" alt="image">
                    </a>
                </div>
                <div class="img filter web">
                    <a href="assets/img/app/obj3.png" data-fancybox="gallery">
                        <img src="assets/img/app/obj3.png" alt="image">
                    </a>
                </div>
                <div class="img filter web">
                    <a href="assets/img/app/obj4.png" data-fancybox="gallery">
                        <img src="assets/img/app/obj4.png" alt="image">
                    </a>
                </div>
                <div class="img filter web">
                    <a href="assets/img/app/obj5.png" data-fancybox="gallery">
                        <img src="assets/img/app/obj5.png" alt="image">
                    </a>
                </div>
                <div class="img filter web">
                    <a href="assets/img/app/obj6.png" data-fancybox="gallery">
                        <img src="assets/img/app/obj6.png" alt="image">
                    </a>
                </div>
                <div class="img filter web">
                    <a href="assets/img/app/obj7.png" data-fancybox="gallery">
                        <img src="assets/img/app/obj7.png" alt="image">
                    </a>
                </div>
                <div class="img filter web">
                    <a href="assets/img/app/obj8.png" data-fancybox="gallery">
                        <img src="assets/img/app/obj8.png" alt="image">
                    </a>
                </div>
                <div class="img filter web">
                    <a href="assets/img/app/obj10.png" data-fancybox="gallery">
                        <img src="assets/img/app/obj10.png" alt="image">
                    </a>
                </div>
            </div>

            <div class="row my-grid my-5">
                <div class="col-12 col-md-12 col-lg-6">
                    <p>We are here for you</p>
                    <h4>We recognize the importance of cost-effectiveness, especially for startups and small businesses.</h4>
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
        {{-- <div class="container py-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Our Packages</h2>
                    <p style="color:#fff;">Discover the art of affordability, where exclusive digital art <br />
                        and design facilities are meticulously tailored to your unique business needs.
                    </p>
                </div>
            </div>
        </div> --}}

        {{-- <div class="prices-wrapper">
            <div class="card card-price card-commerce filter web">
                <h4>PROFESSIONAL E-COMMERCE
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&pound;1,499</sapn> <span>Only</span> <strike>&pound; 2,599</strike>
                </div>
                <br>
                <ul class="list">
                    <li>10 Pages 100% Custom Website Design</li>
                    <li>Complete Development & Deployment</li>
                    <li>10 Award-Winning Designers & Developers</li>
                    <li>Up-to 100 Products</li>
                    <li>Mini Shopping Cart Integration</li>
                    <li>Online Ordering Integration</li>
                    <li>Online Payment Integration</li>
                    <li>Product Reviews</li>
                    <li>Content Management System</li>
                    <li>Interactive Sliding Banners</li>
                    <li>10 Stock Images</li>
                    <li>Special Hover Effects</li>
                    <li>03 Banner Designs</li>
                    <li>Unlimited Revisions</li>
                    <li>Custom, Interactive & Dynamic Design</li>
                    <li>Google Friendly Sitemap</li>
                    <li>Complete W3C Certified HTML</li>
                    <li>Search Engine Submission</li>
                    <li>Value Added:</li>
                    <li>100% Unique Design Guarantee</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Ownership Rights</li>
                    <li>Money-Back Guarantee</li>
                    <li>100% Unique Design Guarantee</li>
                    <li>Combo Ad on: $299</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-commerce filter web">
                <h4>DYNAMIC E-COMMERCE
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&pound;1,899</sapn> <span>Only</span> <strike>&pound; 3,599</strike>
                </div>
                <br>
                <ul class="list">
                    <li>Unlimited Pages 100% Custom Design</li>
                    <li>Unlimited Revisions</li>
                    <li>Custom Made, Interactive, Dynamic & High-End-Design</li>
                    <li>Up-to 1000 Products</li>
                    <li>Full Shopping Cart Integration</li>
                    <li>Online Ordering Integration</li>
                    <li>Online Payment Integration</li>
                    <li>Multi-User Login</li>
                    <li>2-way Login Website</li>
                    <li>Easy Product Search</li>
                    <li>Product Reviews</li>
                    <li>Multi-Lingual</li>
                    <li>Custom Dynamic Forms</li>
                    <li>Signup Area (For Newsletters, Offers, etc.)</li>
                    <li>Search Bar</li>
                    <li>Content Management System (CMS)</li>
                    <li>Interactive Sliding Banners</li>
                    <li>Mobile Responsive</li>
                    <li>10 Custom Made Banner Designs</li>
                    <li>10 Stock Images</li>
                    <li>Special Hover Effects</li>
                    <li>jQuery Slider Banner</li>
                    <li>Complete W3C Certified HTML</li>
                    <li>Industry Specified Team of Expert Designers and Developers</li>
                    <li>Complete Deployment</li>
                    <li>Dedicated Accounts Manager</li>
                    <li>Value Added:</li>
                    <li>100% Unique Design Guarantee</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Ownership Rights</li>
                    <li>Money-Back Guarantee</li>
                    <li>100% Unique Design Guarantee</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-commerce filter web">
                <h4>BUSINESS E-COMMERCE
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&pound;2,999</sapn> <span>Only</span> <strike>&pound; 4,999</strike>
                </div>
                <br>
                <ul class="list">
                    <li>Unlimited Pages 100% Custom Design</li>
                    <li>Complete Development & Deployment</li>
                    <li>Award-Winning Designers & Developers</li>
                    <li>Up-to 2000 Products</li>
                    <li>Full Shopping Cart Integration</li>
                    <li>Online Ordering Integration</li>
                    <li>Online Payment Integration</li>
                    <li>Online Payment Integration</li>
                    <li>2-way Login Website</li>
                    <li>Easy Product Search</li>
                    <li>Product Reviews</li>
                    <li>Multi-Lingual</li>
                    <li>Custom Dynamic Forms</li>
                    <li>Signup Area (For Newsletters, Offers, etc.)</li>
                    <li>Search Bar</li>
                    <li>Content Management System (CMS)</li>
                    <li>Interactive Sliding Banners</li>
                    <li>Online Payment Integration</li>
                    <li>15 Stock Images</li>
                    <li>Special Hover Effects</li>
                    <li>Up to 05 Banner Designs</li>
                    <li>Unlimited Revisions</li>
                    <li>FREE Icon Design</li>
                    <li>Google Friendly Sitemap</li>
                    <li>Custom, Interactive & Dynamic Design</li>
                    <li>Customized WordPress & PHP Development</li>
                    <li>Online Ordering Integration</li>
                    <li>Multi-Lingual (Optional)</li>
                    <li>Custom Dynamic Forms (Optional)</li>
                    <li>Signup Area (For Newsletters, Offers etc.)</li>
                    <li>Search Bar</li>
                    <li>Live Feeds of Social Networks integration</li>
                    <li>Search Engine Submission</li>
                    <li>Complete W3C Certified HTML</li>
                    <li>Industry Specified Team of Expert Designers and Developers</li>
                    <li>Complete Deployment</li>
                    <li>Dedicated Accounts Manager</li>
                    <li>Value Added:</li>
                    <li>100% Unique Design Guarantee</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Ownership Rights</li>
                    <li>Money-Back Guarantee</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-commerce filter web">
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
        </div> --}}

        {{-- <div class="btn-brandBoosters pb-5 text-center">
            <a href="{{ route('packages') }}">View all</a>
        </div> --}}
    </section>
    <section id="foster">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center flexiblefeatures">
                    <h5>Affordability Meets Excellence</h5>
                    <h2 class="pb-5">Tailored Excellence, Every Time</h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>With each logo we design, we take pride in delivering personalized perfection. Because of our team's varied skill set, we can cater to organizations in a variety of industries, from sleek and minimalist designs to vivid and detailed ones. We recognize that your logo is the foundation of your brand's visual identity.
                    </p>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/app-1.png" alt="image" width="100%">
                </div>
                <div class="col-12 col-md-12 col-lg-6 pt-5">
                    <img src="assets/img/app-2.png" alt="image" width="100%">
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>Brand Boosters UK can help you elevate your brand with a bespoke logo. Allow us to translate your brand's values and goals into a visual masterpiece that conveys your story better than words can. Join us on this creative adventure and leave your imprint in business. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <x-testimonial />
    <x-footer />
@endsection
