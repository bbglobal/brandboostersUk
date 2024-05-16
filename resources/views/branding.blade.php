@extends('layouts.main')

@push('title')
    <title>Branding and Stationary Services - Brand Boosters UK</title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">Branding</h1>
    </section>

    <section id="services-body">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/services-08.png" alt="image" width="100%">
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <h2> Elevate Your Brand with Expert <strong>Branding Services</strong></h2>
                    <p>We understand that a strong brand identity is the foundation of business success at Brand Boosters UK. Our professional branding services are designed to help your company stand out in today's competitive market. We create brand experiences that resonate with your target audience, not just logos. To create a cohesive brand strategy that communicates your uniqueness, our creative team delves deeply into understanding your values, mission, and goals.
                    </p>
                    <p>We create visual elements that capture the essence of your brand through meticulous market research, creative brainstorming, and thoughtful design. Logo design, color palette selection, typography, and brand guidelines are all part of our branding services.</p>
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
                    <h2 class="pb-5">Making Stationery That Speaks for You</h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>Tactile experiences have a special place in creating meaningful connections in an increasingly digital world. Brand Boosters UK is your partner in creating stationery that elegantly and authentically tells your brand's story. We go above and beyond traditional stationery services by infusing creativity into every piece of paper.
                    </p>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/seo-2.png" alt="image" width="100%" style="margin-top: -50px;">
                </div>
                <div class="col-12 col-md-12 col-lg-6 pt-5">
                    <img src="assets/img/seo-2.png" alt="image" width="100%" style="margin-top: -50px;">
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>We understand the power of tangible brand representation, from business stationery like letterheads and envelopes that exude professionalism to personalized thank-you cards that foster customer loyalty. Our team combines your brand's visual identity with the purpose of each stationery item, resulting in powerful extensions of your communication strategy.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <x-testimonial />
    <x-footer />
@endsection
