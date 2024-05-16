@php
    require base_path('vendor/autoload.php');
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    if (isset($_GET['contact'])) {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    
        try {
            //Server settings
            $mail->SMTPDebug = 0; //Enable verbose debug output
            $mail->isSMTP(); //Send using SMTP
            $mail->Host = 'brandboostersglobal.com'; //Set the SMTP server to send through
            $mail->SMTPAuth = true; //Enable SMTP authentication
            $mail->Username = 'info@brandboostersglobal.com'; //SMTP username
            $mail->Password = 'Q~+,MS@~w&jB'; //SMTP password
            $mail->SMTPSecure = 'ssl'; //Enable implicit TLS encryption
            $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
            //Recipients
            $mail->setFrom('info@brandboostersglobal.com', 'Brnad Boosters Global');
            $mail->addAddress('info@brandboostersglobal.com', 'Brnad Boosters Global');
    
            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = "{$_GET['name']}, {$_GET['email']}";
            $mail->Body = "{$_GET['name']}, <br/> <a href='mailto:{$_GET['email']}'>{$_GET['email']}</a>, <br/> <a href='mailto:{$_GET['number']}'>{$_GET['number']}</a>, <br/><br/> {$_GET['message']}";
    
            $mail->AltBody = "{$_GET['name']}, <br/> <a href='mailto:{$_GET['email']}'>{$_GET['email']}</a>, <br/> <a href='mailto:{$_GET['number']}'>{$_GET['number']}</a>, <br/><br/> {$_GET['message']}";
    
            $mail->send();
            $sent = 'Success';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
@endphp
@extends('layouts.main')

@push('title')
    <title> Portfolio | Contact Us </title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">Contact Us</h1>
    </section>
    <section id="projects-section" class="pt-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 mb-5 text-center">
                    <h2 class="h2">Get in <strong>Touch</strong></h2>
                </div>
                <form method="get" class="col-12 col-md-12 col-lg-6">
                    <div class="mb-3 mt-3 col-12">
                        <label for="name" class="form-label">Name:</label>
                        <input type="name" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3 mt-3 col-12">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3 mt-3 col-12">
                        <label for="number" class="form-label">Phone Number:</label>
                        <input type="number" class="form-control" id="number" name="number">
                    </div>
                    <div class="mb-3 mt-3 col-12">
                        <label for="whatServices" class="form-label">Services:</label>
                        <select class="form-control" id="whatServices" name="service">
                            <option>--Select--</option>
                            <option value="Logo Design">Logo Design</option>
                            <option value="Graphic Design">Graphic Design</option>
                            <option value="Video Animation">Video Animation</option>
                            <option value="SEO">SEO</option>
                            <option value="Mobile App Development">Mobile App Development</option>
                            <option value="Wordpress Desing and Development">Wordpress Desing and Development</option>
                            <option value="Website Desing and Development">Website Desing and Development</option>
                            <option value="Branding">Branding</option>
                        </select>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="services" class="form-label">Message:</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="text-center">
                        <button name="send" class="btn-outline-brandBoosters">
                            Send
                        </button>
                    </div>
                </form>
                <div class="col-12 col-md-12 col-lg-6 pt-5">
                    <img src="assets/img/form-img.png" alt="image" width="100%">
                </div>
                <div class="col-12 pt-5">
                    <iframe style="border-radius: 20px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9924.489783864916!2d-0.2353805!3d51.5476537!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487611bd45798769%3A0x86078233e4c337be!2sBrand%20Boosters%20Global%20(UK)!5e0!3m2!1sen!2s!4v1694434783294!5m2!1sen!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection
