@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5 mb-5 p-0">
    <!-- Contact Hero Section -->
    <section class="hero-contact-section mt-0">
        <div class="hero-contact-wrapper" style="background-image: url('{{ asset('img/contact.jpg') }}');">
            <div class="hero-contact-overlay"></div>
            <div class="hero-contact-content">
                <p class="contact-subtitle">We would love to help</p>
                <h1 class="contact-main">contact us Now!</h1>
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Contact Section: Get In Touch -->
    <section class="get-in-touch-section">
        <div class="container-fluid">
            <div class="row">
                <!-- Left Section: Contact Info -->
                <div class="col-md-6 mt-5">
                    <div class="contact-info-card">
                        <h2 class="contact-title">Get In Touch</h2>
                        <div class="contact-getintouch">
                            <p class="contact-text">We’re here to help! Whether you have a question about membership, events, or anything else, don’t hesitate to reach out. Our team is ready to assist you.</p>
                            <ul class="contact-details">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div>
                                        <span>Location:</span>
                                        <p class="details">cl.kgy, dc, flywt rxmynf</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <div>
                                        <span>Email us:</span>
                                        <p class="details">Info@ACassociation.com</p>
                                    </div>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <div>
                                        <span>Phone us:</span>
                                        <p class="details">099999999999</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="follow-us-section">
                                <h3 class="follow-us-title">Follow us</h3>
                                <div class="social-media">
                                    <a href="#" class="social-icon">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#" class="social-icon">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                    <a href="#" class="social-icon">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Section: Contact Form -->
                <div class="col-md-6 mt-5">
                    <div class="contact-form-card">
                        <h3 class="form-title">Send a message !</h3>
                        <p class="form-description">Please fill out the form below, and we’ll get back to you soon. We aim to respond to all inquiries within 24-48 hours.</p>
                        <form class="contact-form">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                            </div>
                            <div class="form-group">
                                <label for="message">Leave your message here</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="form-btn d-flex justify-content-center mt-5">
                                <button type="submit" class="btn btn-danger contact-btn">Send a message!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section: Membership Info -->
    <section class="membership-footer mt-5 mb-5 text-center">
        <div class="contact-membership">
            <p>For membership-related inquiries, please visit our Membership Page</p>
            <a href="#" class="btn btn-primary">GO TO MEMBERSHIP</a>
        </div>
    </section>

    <section class="location">
        <!-- Google Map -->
        <div class="map-container mt-5">
            <h3 class="map-title">Find us in Muscat, Oman</h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d210215.06599212428!2d58.23474471602663!3d23.5880!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f2276b5f75b7d%3A0x4b998f1d1ff63f9!2sMuscat%2C%20Oman!5e0!3m2!1sen!2s!4v1611496256574"
                width="100%"
                height="400"
                frameborder="0"
                style="border:0;"
                allowfullscreen>
          </iframe>
        </div>
    </section>
</div>
@endsection
