@extends('layouts.main')

@push('title')
    <title> Brand Boosters UK | Elevate Your E-Commerce Business With Us</title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">Ecommerce</h1>
    </section>

    <section id="portfolio-body">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 py-5" style="margin: auto;">
                    <h2> Enhance Your E-Commerce Presence with <strong> Brand Boosters UK</strong>
                    </h2>
                    <p style="color:#fff;">In the fast-paced world of e-commerce, standing out from the crowd is not an option, but a requirement. Enter Brand Boosters UK, your ultimate partner in realizing the full potential of your online business. With a commitment to excellence and a track record of success, we bring you unparalleled e-commerce services that redefine your brand's digital journey.
                    </p>
                    <p>At Brand Boosters UK, we understand that each e-commerce venture is unique and requires a customized approach. Our e-commerce development solutions are tailored to your specific requirements, whether you're a new startup or an established online business.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 py-5">
                    <lottie-player src="https://lottie.host/7e4ca8af-2042-4093-b1ed-286d67c9681a/5u9JXiJyGf.json"
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
                {{-- Ecommerce --}}
                <div class="img filter web">
                    <a href="javascript:void(0)" class="image-container">
                        <img src="assets/img/development/hopFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web">
                    <a href="javascript:void(0)" class="image-container">
                        <img src="assets/img/development/steiraFull.png" alt="image">
                    </a>
                </div>
                <div class="img filter web">
                    <a href="javascript:void(0)" class="image-container">
                        <img src="assets/img/development/zCrop.png" alt="image">
                    </a>
                </div>
                <div class="img filter web">
                    <a href="javascript:void(0)" class="image-container">
                        <img src="assets/img/development/kingdomFull.png" alt="image">
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

        {{-- <section class="conbowrp">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="pkgehead">
                            <h2 class="main-heading text-center">All In One Combo Package</h2>
                            <p class="main-pera text-center" style="color: #fff">One stop solution for Start-ups and
                                Businesses</p>
                        </div>
                        <div class="mainpkge">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="navwrp">
                                        <h3 style="color:#f80404;font-weight:700;font-size:40px">CORPORATE<br> E-COMMERCE
                                            <span style="font-size:70px;color:#f80404">50% OFF</span> <br> $4,499 /
                                            <s>$8,999</s></h3>
                                        <h4>LOGO</h4>
                                        <ul>
                                            <li>Unlimited Logo Design Idea(s)</li>
                                            <li>By 6 Award Winning Designer(s)</li>
                                            <li>Free Icon Design</li>
                                            <li>Unlimited Revisions</li>
                                            <li>2 to 3 Business Days TAT</li>
                                        </ul>
                                    </div>
                                    <div class="navwrp ">
                                        <h4>Social Media Page Design</h4>
                                        <ul>
                                            <li>Facebook Icon Image & Banner Design</li>
                                            <li>Twitter Icon Image & Banner Design</li>
                                            <li>Google+ Icon Image & Banner Design</li>
                                            <li>YouTube Icon Image & Banner Design</li>
                                            <li>LinkedIn Icon Image & Banner Design</li>
                                        </ul>
                                    </div>
                                    <div class="navwrp ">
                                        <h4>Stationary Design</h4>
                                        <ul>
                                            <li>Letterhead Design</li>
                                            <li> Business Card Design </li>
                                            <li>Envelope Design </li>
                                            <li>Email Signature Design</li>
                                            <li>Electronic Letterhead</li>
                                            <li>Invoice Design</li>
                                            <li>2 Sided Flyer Design OR Bi-Fold Brochure Design </li>
                                            <li>Company Profile Design</li>
                                            <li>T-Shirt Design</li>
                                            <li>Signage Design</li>
                                        </ul>
                                    </div>
                                    <div class="navwrp ">
                                        <h4>Video Animation</h4>
                                        <ul>
                                            <li>60 Seconds 2D Video Animation</li>
                                            <li>Script Writing</li>
                                            <li> Story Board</li>
                                            <li>Voice Over</li>
                                            <li>Animation with Sound Effect</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="navwrp ">
                                        <h4>WEBSITE</h4>
                                        <ul>
                                            <li>Custom Content Management System (CMS)</li>
                                            <li>Complete Custom Development</li>
                                            <li>Process Automation Tools</li>
                                            <li>Up-to 10000 Products</li>
                                            <li>Full Shopping Cart Integration</li>
                                            <li>Online Ordering Integration</li>
                                            <li>Online Payment Integration</li>
                                            <li>Easy Product Search</li>
                                            <li>Product Reviews</li>
                                            <li>Multi-Lingual</li>
                                            <li>Suppliers Integration (API NEEDED)</li>
                                            <li>Shipper Integration (API NEEDED)</li>
                                            <li>Order management</li>
                                            <li>Stock Management</li>
                                            <li> Real-Time Visibility</li>
                                            <li>Inventory Management System</li>
                                            <li>Custom Dynamic Forms</li>
                                            <li>Receiving/filing/documentation of invoices and payments/order requests</li>
                                            <li>Complete Automated Invoice System</li>
                                            <li>Automated Split invoicing</li>
                                            <li>Automated Combine invoices</li>
                                            <li>Place purchasing requests.</li>
                                            <li>Performance and analytics</li>
                                            <li>Customization of Personal Details</li>
                                            <li>Process management</li>
                                            <li>Marketing Automation</li>
                                            <li>Sales Reports</li>
                                            <li>Trend Analytics</li>
                                            <li>Event Integration</li>
                                            <li>Re-ordering Feature</li>
                                            <li>Newsfeed Integration</li>
                                            <li>Social Media Plugins Integration</li>
                                            <li>Up to 40 Stock images</li>
                                            <li>10 Unique Banner Designs</li>
                                            <li>JQuery Slider</li>
                                            <li>Search Engine Submission</li>
                                            <li>Social Media Page Designs (Facebook, Twitter, Instagram)</li>
                                            <li>Complete Deployment</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="imgwrp">
                                        <div class="navwrp">
                                            <h4>Search Engine Optimization (Complimentary) (3 Month’s Plan)</h4>
                                            <ul>
                                                <li>10 Keywords</li>
                                                <li>Guaranteed Ranking on Google</li>
                                                <li>EOff-site Optimization</li>
                                                <li>Link Building</li>
                                                <li>Social Bookmarking</li>
                                                <li>Basic Analytical Report</li>
                                                <li>In-depth Site Analysis</li>
                                                <li>Content Duplicity Check</li>
                                                <li> Initial Backlinks analysis</li>
                                                <li>Google Penalty Check</li>
                                                <li>Mobile Usability Check</li>
                                                <li>Competition Analysis</li>
                                                <li>Keyword Research</li>
                                            </ul>
                                        </div>
                                        <div class="navwrp ">
                                            <h4>VALUE ADDED SERVICES</h4>
                                            <ul>
                                                <li> Logo Design Final Files (.AI, .PSD, .EPS, .PNG, .JPG, .PDF, .TIFF)</li>
                                                <li>Website Design Complete Source Files</li>
                                                <li>Dedicated Project Manager</li>
                                                <li>100% Ownership Rights</li>
                                                <li>100% Satisfaction Guarantee </li>
                                                <li>100% Money Back Guarantee</li>
                                                <li>*NO MONTHLY OR ANY HIDDEN FEE*</li>
                                                <li>Professional Content/Copywriting</li>
                                                <li>Shopping Cart Integration</li>
                                                <li> Additional Professional Email ID</li>
                                            </ul>
                                        </div>
                                        <div class="btnwrp">
                                            <div class="btn-brandBoosters text-center">
                                                <a href="Javascript:">Get A Free Consultation</a>
                                            </div>
                                            <div class="text-center">
                                                <a class="btn-outline-brandBoosters" href="Javascript:">Chat With Us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <div class="prices-wrapper">
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
                    <h2 class="pb-5">Brand Boosters: Bespoke E-commerce Solution Provider </h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>Our expert team of strategists, designers, and marketing experts collaborate to create a comprehensive E-commerce strategy that addresses every aspect of your online store. We're here to make your brand shine, from visually appealing websites optimized for conversions to implementing seamless user experiences that increase customer engagement.
                    </p>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/ecommerce-1.png" alt="image" width="100%">
                </div>
                <div class="col-12 col-md-12 col-lg-6 pt-5">
                    <img src="assets/img/ecommerce-2.jpg" alt="image" width="100%">
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>We specialize in leveraging the power of data-driven insights to improve the performance of your online store. Our analytics team digs deep into consumer behavior, trends, and market dynamics to constantly fine-tune your E-commerce strategy. Elevate your E-commerce game with us today. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <x-testimonial />
    <x-footer />
@endsection
