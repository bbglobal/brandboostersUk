@extends('layouts.main')

@push('title')
    <title>Brandboosters - Home</title>
@endpush
@section('main-section')
    <section id="bg-cover">
        <section id="hero-section" class="hero-wrapper">
            <div class="header-text" style="margin: auto;">
                <h1 class="animate__animated animate__zoomInDown">
                    <strong>Brand Boosters UK</strong>, One-Stop Solution for Digital Marketing Services
                </h1>
                <p>We don't just provide services at Brand Boosters UK; we create digital experiences that leave an
                    indelible
                    impression. As a leading digital marketing agency, we are committed to accelerating your brand's growth
                    through innovative strategies and captivating storytelling. Our goal is straightforward: to increase
                    your
                    brand's visibility, engagement, and success in the ever-changing digital landscape.</p>
                <div class="wow mt-5">
                    <a href="https://www.trustpilot.com/review/brandboosters.us" target="_blank"><img
                            src="assets/img/trust-b.png" alt="trustpilot"></a>
                    <img src="assets/img/google-b.png" alt="google partner">
                    <img src="assets/img/bings-logo.webp" alt="bings">
                    <a href="https://www.bark.com/en/gb/company/brand-boosters-global/bMgAP/" target="_blank"><img
                            src="assets/img/barklogo-dark.png" alt="bark" style="filter:brightness(100)"></a>
                    <img src="assets/img/thumbtack.png" alt="thumbtack">
                </div>
                <div class="btn-brandBoosters">
                    <a href="{{ route('packages') }}">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="header-img">
                <lottie-player src="https://lottie.host/2a79cb62-31ec-4eb3-b57f-046240796557/yWBjzYqqoo.json"
                    background="transparent" speed="1" style="width: 100%;" loop autoplay></lottie-player>
            </div>
        </section>
        <section id="about-section" class="pt-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12 text-center about-head">
                        <h2 class="h2"> <strong>About</strong> Us</h2>
                    </div>
                </div>
            </div>
            <div class="about-wrapper container">
                <div class="row">
                    <div class="about-1 col-12 col-md-12 col-lg-6">
                        <figure>
                            <img src="assets/img/about-1.png" alt="about image" width="100%">
                        </figure>
                    </div>
                    <div class="about-2 col-12 col-md-12 col-lg-6">
                        <div class="about-body">
                            <h2>Our Mission</h2>
                            <p>We embark on a journey to discover your brand's true potential with a relentless passion for
                                innovation and a commitment to excellence. Our approach is centered on developing a thorough
                                understanding of your distinct identity, values, and goals. This foundation enables us to
                                create customized solutions that have a profound impact on your audience.</p>
                            <h2>Our Vision</h2>
                            <ul>
                                <li>Our vision at Brand Boosters USA is to take brands to new heights by developing
                                    innovative marketing strategies that connect with consumers .</li>
                                <li>We want to be creative innovators, continually providing cutting-edge campaigns that
                                    engage, inspire, and leave an enduring impression. </li>
                                <li>Our approach is centered on a client-centric strategy, in which we collaborate closely
                                    with our customers to understand their unique goals and objectives, ensuring that each
                                    campaign is personalized to their specific requirements.</li>
                                <li>Our vision continues into the future, where we hope to stay at the forefront of
                                    marketing innovation, capitalizing on emerging trends and technology to keep our clients
                                    ahead of the competition.</li>
                            </ul>
                            <div class="btn-brandBoosters">
                                <a href="{{ route('about') }}">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services-section" class="pt-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="h2">
                            Our <strong>Services</strong>
                        </h2>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6" style="margin: auto">
                        <h2>Why Choose <strong>Brand Boosters UK?</strong></h2>
                        <P>We're not just another agency; we're your progress partners. Understanding is at the heart of our
                            philosophy: understanding your brand, your goals, and your dreams. Our customized strategies are
                            built on this foundation, ensuring that every move we make contributes to your success. When you
                            choose us, you are embarking on a transformative journey, not just a service.</P>
                        <div class="btn-brandBoosters">
                            <a href="{{ route('services') }}">View All</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="hFgBRj" id="services">
                            <div class="extender-section mt-5">
                                <h6>
                                    <span>+</span> Logo Designing
                                </h6>
                                <p>
                                    Our logo design process incorporates both aesthetics and strategy. We collaborate
                                    closely with you to understand your brand's values, target audience, and unique selling
                                    points. This comprehension fuels our creativity as we conceptualize and design logos
                                    that reflect the personality of your brand.
                                </p>
                            </div>
                            <div class="extender-section mt-3">
                                <h6>
                                    <span>+</span> Graphics Designing
                                </h6>
                                <p>
                                    Our graphic design services cover a wide range of topics, from eye-catching logo designs
                                    that serve as the face of your company to visually engaging marketing materials that
                                    leave a lasting impression on your audience. Our experts create designs that are not
                                    only aesthetically pleasing but also strategically aligned with your brand identity.
                                </p>
                            </div>
                            <div class="extender-section mt-3">
                                <h6>
                                    <span>+</span> Digital Margeting
                                </h6>
                                <p>
                                    Through our comprehensive digital marketing services, Brand Boosters UK specializes in
                                    boosting your brand's online visibility to new heights. In today's fast-paced digital
                                    landscape, establishing a compelling online identity is critical, and that's where we
                                    come in. Our experienced staff is committed to developing customized tactics that
                                    provide results and establish lasting connections.
                                </p>
                            </div>
                            <div class="extender-section mt-3">
                                <h6>
                                    <span>+</span> Mobile App Development
                                </h6>
                                <p>
                                    Our skilled development team excels at creating bespoke mobile applications that are
                                    consistent with your brand identity and resonate with your target audience. We don't
                                    just create apps; we create immersive experiences that captivate users and drive
                                    results. Whether it's a utility app, an e-commerce platform, or a cutting-edge solution,
                                    we ensure seamless functionality and stunning design.
                                </p>
                            </div>
                            <div class="extender-section mt-3">
                                <h6>
                                    <span>+</span> Ecommerce
                                </h6>
                                <p>
                                    In the fast-paced world of e-commerce, standing out from the crowd is not an option, but
                                    a requirement. Enter Brand Boosters UK, your ultimate partner in realizing the full
                                    potential of your online business. With a commitment to excellence and a track record of
                                    success, we bring you unparalleled e-commerce services that redefine your brand's
                                    digital journey.
                                </p>
                            </div>
                            <div class="extender-section mt-3">
                                <h6>
                                    <span>+</span>
                                    Website Design and Development
                                </h6>
                                <p>
                                    Brand Boosters UK offers web development services that combine innovation and
                                    functionality to create an unforgettable digital experience. Their creative process
                                    begins with thorough planning and teamwork, understanding your company's goals, target
                                    audience, and unique selling points.
                                </p>
                            </div>
                            <div class="extender-section mt-3">
                                <h6>
                                    <span>+</span>
                                    Video Animation
                                </h6>
                                <p>
                                    With our video animation services, your brand's story takes center stage. Our process
                                    begins with a thorough understanding of your specific vision and goals. We then create
                                    visually appealing animations that speak to your target audience. Whether you want to
                                    simplify complex concepts or add a whimsical touch to your marketing campaigns, our
                                    animations have the power to engage and enchant.
                                </p>
                            </div>
                            <div class="extender-section mt-3">
                                <h6>
                                    <span>+</span>
                                    Branding
                                </h6>
                                <p>
                                    We create visual elements that capture the essence of your brand through meticulous
                                    market research, creative brainstorming, and thoughtful design. Logo design, color
                                    palette selection, typography, and brand guidelines are all part of our branding
                                    services.
                                </p>
                            </div>
                            <div class="extender-section mt-3">
                                <h6>
                                    <span>+</span>
                                    Search Engine Optimization
                                </h6>
                                <p>
                                    Our SEO specialists begin by conducting extensive research to learn about your industry,
                                    competitors, and target audience. This enables us to identify key opportunities and
                                    create a tailored roadmap. We cover every aspect that search engines love, from on-page
                                    optimization to authoritative link-building to captivating content creation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <x-portfolio-uk />
        </section>

        <section class="cta-sndwrp">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="txtwrp">
                            <h2 class="main-heading">Brand Boosters UK: Guiding Your Success Every Step of the Way!</h2>
                            <p class="main-pera">If you have lost track then there is no need to be worried because our
                                experts
                                are always just a call or message away to provide your consultation for your business goals.
                            </p>
                        </div>
                        <div class="btnwrp pt-4">
                            <a class="btn-outline-brandBoosters" onclick="setButtonURL()" href="javascript:void(0)">Chat
                                With
                                Us</a>
                            <span class="btn-brandBoosters">
                                <a href="tel:+44 7459 502229">+44 7459 502229</a>
                            </span>
                            <a class="btn-outline-brandBoosters" href="{{ route('contact') }}">Let's Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-our-packages />
    </section>
    <x-testimonial />

    <x-footer />
@endsection
