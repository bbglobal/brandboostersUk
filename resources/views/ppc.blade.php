@extends('layouts.main')

@push('title')
    <title>Pay-per-click (PPC)  |  Brand Boosters UK </title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">Pay Per Click</h1>
    </section>

    <section id="services-body">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/ppc-1.png" alt="image" width="100%">
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <h2>Boost Your Brand with Targeted <strong>PPC Services</strong></h2>
                    <p style="color:#fff;">Brand Boosters UK specializes in propelling your brand to new heights through our unrivaled PPC services. Pay-per-click (PPC) advertising is a dynamic strategy that produces immediate, measurable results. Our skilled experts create tailored campaigns that put your brand in front of the right audience at the right time, maximizing your ROI.
                    </p>
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
            <div class="card card-price card-marketing filter web">
                <h4>STARTUP COLLATERAL
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&pound;99</sapn> <span>Only</span> <strike>&pound; 130</strike>
                </div>
                <br>
                <ul class="list">
                    <li>2 Stationery Design Set</li>
                    <li>FREE Fax Template</li>
                    <li>Print Ready Formats</li>
                    <li>UNLIMITED Revisions</li>
                    <li>Value Added:</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Money Back Guarantee *</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-marketing filter web">
                <h4>COLLATERAL CLASSIC
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&pound;199</sapn> <span>Only</span> <strike>&pound; 249</strike>
                </div>
                <br>
                <ul class="list">
                    <li>2 Stationery Design Set</li>
                    <li>Brochure Design (Bi-fold/Tri-fold)</li>
                    <li>Flyer Design</li>
                    <li>UNLIMITED Revisions</li>
                    <li>Value Added:</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Money Back Guarantee *</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-marketing filter web">
                <h4>PREMIUM COLLATERAL
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&pound;399</sapn> <span>Only</span> <strike>&pound; 499</strike>
                </div>
                <br>
                <ul class="list">
                    <li>Hat Design</li>
                    <li>Invoice Design</li>
                    <li>Email Signature Design</li>
                    <li>2 Stationery Design Set</li>
                    <li>Packaging Design</li>
                    <li>UNLIMITED Revisions</li>
                    <li>T-Shirt Design</li>
                    <li>Value Added:</li>
                    <li>100% Satisfaction Guarantee</li>
                    <li>100% Money Back Guarantee *</li>
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
                    <h2 class="pb-5">Transparent Strategies, Visible Outcomes</h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>We don't believe in guesswork at Brand Boosters UK. Our PPC strategies are painstakingly crafted using data insights and market trends. We ensure that your brand appears in front of potential customers who are actively looking for your products or services by analyzing user behavior and search patterns.
                    </p>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/seo-2.png" alt="image" width="100%" style="margin-top: -50px;">
                </div>
                <div class="col-12 col-md-12 col-lg-6 pt-5">
                    <img src="assets/img/seo-2.png" alt="image" width="100%" style="margin-top: -50px;">
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>We don't believe in guesswork at Brand Boosters UK. Our PPC strategies are painstakingly crafted using data insights and market trends. We ensure that your brand appears in front of potential customers who are actively looking for your products or services by analyzing user behavior and search patterns. 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <x-testimonial />
    <x-footer />
@endsection
