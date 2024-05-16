@extends('layouts.main')

@push('title')
    <title>High-Quality 3D Video Animation Services | Brand Boosters UK</title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">3D Animation</h1>
    </section>

    <section id="portfolio-body">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 py-5" style="margin: auto;">
                    <h2>Enhance Your Brand with Engaging <strong>3D Video Animation</strong> Services</h2>
                    <p style="color:#fff;">We at Brand Boosters UK understand the importance of visual storytelling. Our innovative 3D video animation services are intended to elevate your brand and captivate your audience like never before. We bring your ideas to life in stunning three-dimensional detail with a team of highly skilled animators and creative experts.</p>
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
                    <h2 class="pb-5">  How We Transform Your Vision into 3D Reality</h2>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-2">
                            <img src="assets/img/custom-logo-design.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>From Idea to Storyboard:</h5>
                            <p class="txt-wrap fw-light">Understanding your vision is the first step in our collaboration. To ensure a coherent narrative, we brainstorm and conceptualize ideas while meticulously planning the storyboard. This phase lays the groundwork for the entire animation process.
                            </p>
                        </div>
                        <div class="col-2">
                            <img src="assets/img/animated-logo-design.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>Design and creation:</h5>
                            <p class="txt-wrap fw-light">Once the storyboard is complete, our talented designers and animators get to work. Every detail is meticulously designed and modeled in 3D space, bringing characters, environments, and objects to life. Our meticulous attention to detail ensures a realistic and immersive experience.</p>
                        </div>
                        <div class="col-2">
                            <img src="assets/img/3d-logo-design.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>Integration of Motion and Sound:</h5>
                            <p class="txt-wrap fw-light">Fluid motion is at the heart of any great animation. Our experts incorporate movement to ensure that each sequence flows smoothly. Sound effects and, if necessary, voiceovers are used to enhance the sensory experience and leave a lasting impression on your audience.</p>
                        </div>
                        <div class="col-2">
                            <img src="assets/img/custom-illustration.svg" alt="image" width="100%">
                        </div>
                        <div class="col-10">
                            <h5>Delivery and Evaluation:</h5>
                            <p class="txt-wrap fw-light">We value your feedback. We present the animation for your review before finalization, allowing for feedback and revisions. Once approved, we deliver high-quality 3D animation in the format of your choice, ready for sharing across platforms.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <img src="assets/img/2d-2.png" alt="image" width="100%">
                </div>
            </div>
        </div>
    </section>
    <x-testimonial />
    <x-footer />
@endsection
