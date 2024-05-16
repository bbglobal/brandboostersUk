@extends('layouts.main')

@push('title')
    <title>Brandboosters UK - Top-Notch 2D Video Animation Services</title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">2D Animations</h1>
    </section>

    <section id="portfolio-body">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 py-5" style="margin: auto;">
                    <h2>Unleash Your Creativity with <strong>2D Video Animation</strong> Services</h2>
                    <p style="color:#fff;">We at Brand Boosters UK bring your ideas to life with our exceptional 2D video
                        animation services. Our skilled animators and creative minds work closely with clients to create
                        captivating animations that convey messages with flair and imagination.</p>
                    <p>With our 2D animation services, your brand's story takes center stage. Our process begins with a
                        thorough understanding of your specific vision and goals. We then create visually appealing
                        animations that speak to your target audience. Whether you want to simplify complex concepts or add
                        a whimsical touch to your marketing campaigns, our animations have the power to engage and enchant.
                    </p>
                </div>
                <div class="col-12 col-md-12 col-lg-6 py-5">
                    <lottie-player src="https://lottie.host/0da2022e-c4f6-4cef-8793-2a57eef75291/YP5Y5nMoag.json"
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
                {{-- video --}}
                <div class="img filter web">
                    <video width="320" height="240" poster="assets/img/video/2.png" controls>
                        <source src="asstes/img/vidoe/2.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="img filter web">
                    <video width="320" height="240" poster="assets/img/video/4.png" controls>
                        <source src="assets/img/video/4.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="img filter web">
                    <video width="320" height="240" poster="assets/img/video/5.png" controls>
                        <source src="assets/img/video/5.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="img filter web">
                    <video width="320" height="240" poster="assets/img/video/3.png" controls>
                        <source src="assets/img/video/3.mp4" type="video/mp4">
                    </video>
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
            <div class="card card-price card-video filter web">
                <h4>ABSOLUTE VIDEO
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&pound;499</sapn> <span>Only</span> <strike>&pound; 599</strike>
                </div>
                <br>
                <ul class="list">
                    <li>30s Duration</li>
                    <li>Professional Script</li>
                    <li>Storyboard</li>
                    <li>Custom Graphics & Characters</li>
                    <li>Animation & SFX</li>
                    <li>Background Music</li>
                    <li>Background Image</li>
                    <li>Watermark logo</li>
                    <li>Resolution – HD</li>
                    <li>Voice Over Recording</li>
                    <li>Sync Voice Over</li>
                    <li>Unlimited Revisions</li>
                    <li>Turnaround time 2-3 weeks</li>
                    <li>Value Added:</li>
                    <li>Dedicated Account Manager</li>
                    <li>Unique Design Guarantee</li>
                    <li>24/7 Customer Support</li>
                    <li>100% Satisfaction Guarantee</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-video filter web">
                <h4>OPTIMUM VIDEO
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&pound;999</sapn> <span>Only</span> <strike>&pound; 1,199</strike>
                </div>
                <br>
                <ul class="list">
                    <li>Up-to 60s Duration</li>
                    <li>Professional Script</li>
                    <li>Storyboard</li>
                    <li>Custom Graphics & Characters</li>
                    <li>Animation & SFX</li>
                    <li>Background Music</li>
                    <li>Background Image</li>
                    <li>Watermark logo</li>
                    <li>Resolution – HD</li>
                    <li>Voice Over Recording</li>
                    <li>Sync Voice Over</li>
                    <li>Unlimited Revisions</li>
                    <li>Turnaround time 3-4 weeks</li>
                    <li>Value Added:</li>
                    <li>Dedicated Account Manager</li>
                    <li>Unique Design Guarantee</li>
                    <li>24/7 Customer Support</li>
                    <li>100% Satisfaction Guarantee</li>
                </ul>
                <div class="btn-card">
                    <a href="{{ route('contact') }}">Choose Plan</a>
                </div>
            </div>
            <div class="card card-price card-video filter web">
                <h4>ULTIMATE VIDEO
                    PACKAGE</h4>
                <p>limited time offer</p>
                <div>
                    <sapn class="price">&pound;1,499</sapn> <span>Only</span> <strike>&pound; 1,499</strike>
                </div>
                <br>
                <ul class="list">
                    <li>Up-to 120s Duration</li>
                    <li>Professional Script</li>
                    <li>Storyboard</li>
                    <li>Custom Graphics & Characters</li>
                    <li>Animation & SFX</li>
                    <li>Background Music</li>
                    <li>Background Image</li>
                    <li>Watermark logo</li>
                    <li>Resolution – HD</li>
                    <li>Voice Over Recording</li>
                    <li>Sync Voice Over</li>
                    <li>Unlimited Revisions</li>
                    <li>Turnaround time 4-6 weeks</li>
                    <li>Value Added:</li>
                    <li>Dedicated Account Manager</li>
                    <li>Unique Design Guarantee</li>
                    <li>24/7 Customer Support</li>
                    <li>100% Satisfaction Guarantee</li>
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
                    <h2 class="pb-5">Experience Seamless Creations with Our Online 2D Animation Maker</h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>Every frame reflects our dedication to quality. We pay close attention to the details to ensure fluid
                        motion and a seamless viewing experience. Our animations are customized to match your brand's
                        identity, using colors, fonts, and themes that complement your message. The result? An animation
                        that both communicates and leaves a lasting impression.
                    </p>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/2d-2.jpg" alt="image" width="100%" style="margin-top: -45px;">
                </div>
                <div class="col-12 col-md-12 col-lg-6 pt-5">
                    <img src="assets/img/2d-1.jpg" alt="image" width="100%" style="margin-top: -45px;">
                </div>
                <div class="col-12 col-md-12 col-lg-6" style="margin: auto;">
                    <p>Strategic Storytelling: We go beyond just making animations. Our team focuses on weaving narratives
                        that elicit emotions and connect with your audience on a deeper level.

                        Customization: Your brand is unique, and your animations should reflect that. Every element of the
                        animation is tailored to your brand's personality and message.

                        Expert Team: Our skilled animators and designers are passionate about their work. They ensure that
                        your animation stands out with a keen eye for detail and a commitment to excellence.
                        Engagement Amplification: In an age of short attention spans, our animations are designed to capture
                        and hold your attention while effectively conveying your message.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <x-testimonial />
    <x-footer />
@endsection
