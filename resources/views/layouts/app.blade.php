<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CDN -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('front/layout.css') }}" rel="stylesheet">
        <link href="{{ asset('front/home.css') }}" rel="stylesheet">
        <link href="{{ asset('front/contact.css') }}" rel="stylesheet">
        <link href="{{ asset('front/about.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="top-bar">
                <div class="row w-100">
                    <!-- Left side: Contact info (phone, email) -->
                    <div class="col-12 col-md-4 d-flex justify-content-center justify-content-md-start">
                        <div class="contact-info">
                            <span>📞 099999999999</span>
                            <span>📧 Info@ACassociation.com</span>
                        </div>
                    </div>

                    <!-- Center: Logo -->
                    <div class="col-12 col-md-4 text-center">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo" style="height: 60px;">
                    </div>

                    <!-- Right side: Join Now Button -->
                    <div class="col-12 col-md-4 text-center d-flex justify-content-center justify-content-md-end">
                        <button class="btn btn-join">Join Now!</button>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="language-select">
                        <form action="{{ route('lang.switch', ['lang' => 'en']) }}" method="GET" class="d-inline-block">
                            @csrf
                            <div class="d-flex align-items-center">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a4/Flag_of_the_United_States.svg" alt="English Flag" style="width: 20px; height: 15px;">
                                <select name="language" class="form-select" aria-label="Language select" onchange="this.form.submit()">
                                    <option value="en" {{ App::getLocale() == 'en' ? 'selected' : '' }}>English</option>
                                    <option value="ar" {{ App::getLocale() == 'ar' ? 'selected' : '' }}>Arabic</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">News and Updates</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Membership</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Resources</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    </ul>
                    <div class="search-bar">
                        <input type="text" class="form-control" placeholder="Search here">
                        <button class="btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        <div class="main-content">
            @yield('content')
        </div>


        <!-- Footer Section -->
        <footer class="footer" style="background: url('{{ asset('img/footer.jpeg') }}') no-repeat center center/cover;">
            <!-- Overlay Layer -->
            <div class="footer-overlay"></div>

            <div class="container">
                <!-- First Row (Logo & Subscribe) -->
                <div class="first-row">
                    <!-- Logo Section -->
                    <div class="logo">
                        <img src="{{ asset('img/logo.png') }}" alt="Logo"> <!-- Update with your logo -->
                    </div>

                    <!-- Subscribe Section -->
                    <div class="subscribe">
                        <form class="d-flex w-100">
                            <input type="email" placeholder="Enter your email to get the latest news..." class="form-control mb-3" required>
                            <a href="#" class="search-icon-button">
                                <i class="fas fa-search search-icon"></i>
                            </a>
                            <!-- Search icon inside the input field -->
                            <button type="submit" class="btn btn-danger">Subscribe Now!</button>
                        </form>
                    </div>

                </div>

                <!-- Second Row (About Us, Discover, Contact Us, Join Us) -->
                <div class="second-row">
                    <!-- About Us Section -->
                    <div class="footer-section">
                        <h4>About Us</h4>
                        <ul>
                            <li><i class="fas fa-arrow-right"></i><a href="#">Mission & Vision</a></li>
                            <li><i class="fas fa-arrow-right"></i><a href="#">Our Company</a></li>
                            <li><i class="fas fa-arrow-right"></i><a href="#">Our Team</a></li>
                        </ul>
                    </div>

                    <!-- Discover Section -->
                    <div class="footer-section">
                        <h4>Discover</h4>
                        <ul>
                            <li><i class="fas fa-arrow-right"></i><a href="#">Events</a></li>
                            <li><i class="fas fa-arrow-right"></i><a href="#">Resources</a></li>
                            <li><i class="fas fa-arrow-right"></i><a href="#">Membership</a></li>
                            <li><i class="fas fa-arrow-right"></i><a href="#">News And Updates</a></li>
                        </ul>
                    </div>

                    <!-- Contact Us Section -->
                    <div class="footer-section">
                        <h4>Contact Us</h4>
                        <ul>
                            <li><i class="fas fa-phone"></i> 099999999999</li>
                            <li><i class="fas fa-envelope"></i> Info@ACassociation.com</li>
                        </ul>
                    </div>

                    <!-- Join Us Section -->
                    <div class="footer-section">
                        <h4>Join Us</h4>
                        <div class="social-icons">
                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Copyright Section -->
            <div class="copyright container">
                <p>Copyright, All Rights Reserved</p>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        @stack('scripts')
    </body>
</html>
