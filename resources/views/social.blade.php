@extends('layouts.main')

@push('title')
    <title>Brandboosters - Social Media Services</title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">Social Media Services</h1>
    </section>

    <section id="services-body">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <lottie-player src="https://lottie.host/ba28f79b-092b-4b9e-ada8-04cfcb657f5e/i0BF9xXUnI.json"
                        background="transparent" speed="1" style="width: 100%;" loop autoplay></lottie-player>
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <h2>Improve Your Online Presence with Efficient Search Engine <strong>Marketing Agency</strong>
                    </h2>
                    <p style="color:#fff;">In today's digital age, distinguishing oneself from the sea of online competition
                        is critical. Enter Brand Boosters UK, your one-stop shop for unrivaled Search Engine Marketing (SEM)
                        success. Our SEM services are meticulously designed to increase your brand's visibility and reach
                        while driving targeted traffic to your digital door.
                    </p>
                    <p>At Brand Boosters UK, we understand that search engine marketing (SEM) is more than just bidding on
                        keywords; it's an art of strategic precision. Our experienced SEM specialists specialize in
                        optimizing your campaigns for maximum impact. </p>
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
                    <h2>Our Packages</h2>
                    <p style="color:#fff;">Discover the art of affordability, where exclusive digital art <br />
                        and design facilities are meticulously tailored to your unique business needs.
                    </p>
                </div>
            </div>
        </div>

        <div class="prices-wrapper">
            <div class="card card-price card-marketing filter web">
                <h4>SMM ECONOMY
                    PACKAGE</h4>
                <div>
                    <sapn class="price">&pound;299 </sapn>
                </div>
                <br>
                <ul class="list">
                    <li>Platforms (Facebook & Instagram)</li>
                    <li>12 Design Posts + Copywriting</li>
                    <li>Contact Us Page (with Google Map Integration)</li>
                    <li>Competitor Analysis</li>
                    <li>Audit + Recommendation</li>
                    <li>Content Calendar</li>
                    <li>Industry & Keyword Research</li>
                    <li>Social Media Copywriting</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-marketing filter web">
                <h4>PRO VIDEO
                    MARKETING</h4>
                <div>
                    <sapn class="price">&pound;499 </sapn>
                </div>
                <br>
                <ul class="list">
                    <li>Platforms (Facebook & Instagram)</li>
                    <li>15 Design Posts + Copywriting</li>
                    <li>Social Media Marketing Strategy</li>
                    <li>Competitor Analysis</li>
                    <li>Competitive Analysis</li>
                    <li>Brand Reputation Analysis</li>
                    <li>Audit + Recommendation</li>
                    <li>Monthly Reporting and Analytics</li>
                    <li>1 GIF creatives</li>
                    <li>Content Calendar</li>
                    <li>Industry and Keyword Research</li>
                    <li>Social Media Copywriting</li>
                    <li>1 Ads Campaign Setup (Free)</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-marketing filter web">
                <h4>SMM
                    ELITE</h4>
                <div>
                    <sapn class="price">&pound;1399</sapn>
                </div>
                <br>
                <ul class="list">
                    <li>3 Channel Setup</li>
                    <li>Platforms (Facebook, Instagram, Twitter)</li>
                    <li>18 Post Designs + Copywriting</li>
                    <li>Social Media Marketing Strategy</li>
                    <li>Competitive Analysis</li>
                    <li>Brand Reputation Analysis</li>
                    <li>Audit + Recommendation</li>
                    <li>Community Management</li>
                    <li>Monthly Reporting and Analytics</li>
                    <li>3 GIF Creatives</li>
                    <li>Content Calendar</li>
                    <li>Industry & Keyword Research</li>
                    <li>Social Media Copywriting</li>
                    <li>Business Manager Setup</li>
                    <li>3 Ads Campaign Setup</li>
                    <li>A/B Testing</li>
                    <li>Winning Adset Replication</li>
                    <li>Monthly Ad Spend Management Fee Included</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
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
                    <h2 class="pb-5">Our Approach to ROI-Driven SEM Campaigns</h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>SEM is about more than just driving traffic; it is about driving the right traffic. Brand Boosters UK goes above and beyond traditional SEM practices. We take pride in creating ROI-driven campaigns that not only increase your visibility but also foster tangible business growth.
                    </p>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/social-1.png" alt="image" width="100%" style="margin-top: -50px;">
                </div>
                <div class="col-12 col-md-12 col-lg-6 pt-5">
                    <img src="assets/img/social-2.png" alt="image" width="100%" style="margin-top: -50px;">
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>Our comprehensive approach includes extensive market research, competitor analysis, and audience segmentation, allowing us to tailor your SEM strategy to your specific business requirements.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <x-testimonial />
    <x-footer />
@endsection
