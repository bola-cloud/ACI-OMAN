@extends('layouts.app')

@section('content')
<div class="container-fluid mt-5 mb-5">
    <!-- Hero Section -->
    <section class="hero-section-container mt-0">
        <div class="row">
            <div class="hero-section" style="background: url('{{ asset('img/hero.jpeg') }}') no-repeat center center/cover;">
                <div class="hero-content p-5">
                    <h1 class="mb-5">"Empowering Financial Market Professionals in <span class="span-color">Oman</span> and <span class="span-color">Beyond</span> "</h1>
                    <a href="#" class="btn btn-danger mt-3">Become a Member</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Hero Section -->

    <!-- Discover Section -->
    <section class="discover-section">
        <div class="row mt-5 p-3 mb-5">
            <div class="container d-flex justify-content-center discover-title mb-4">
                <h3>Discover ACI Oman – Where Finance and Investment Professionals Connect and Thrive.</h3>
            </div>

            <div class="col-md-6">
                <div class="discover-content h-100">
                    <ul>
                        <li><img src="{{asset('img/check-mark.png')}}" alt=""><p> Encourage, improve, and develop the profession of trading in local and global financial markets.</p></li>
                        <li><img src="{{asset('img/check-mark.png')}}" alt=""><p> Promote the concept of local, Arab, and international cooperation.</p></li>
                        <li><img src="{{asset('img/check-mark.png')}}" alt=""><p> Pursue anything that would elevate the profession's status, reputation, and standing.</p></li>
                        <li><img src="{{asset('img/check-mark.png')}}" alt=""><p> Develop the skills of those engaged in financial markets through advanced professional courses.</p></li>
                    </ul>
                    <div class="discover-btn d-flex justify-content-center">
                        <a href="#" class="btn btn-primary mb-3 mt-3">View more →</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="discover-image h-100">
                    <img src="{{ asset('img/discover-image.jpg') }}" alt="Discover Image" class="img-fluid h-100">
                </div>
            </div>
        </div>
    </section>
    <!-- End of Discover Section -->

    <!-- Cards Section -->
    <section class="cards-section">
        <div class="container-fluid" style="margin-top: 90px">
            <div class="row">
                <!-- First Card -->
                <div class="col-md-4 mb-4">
                    <div class="custom-card custom-card-1">
                        <div class="custom-icon-container">
                            <img src="{{asset('img/clock.png')}}" alt="">
                        </div>
                        <div class="custom-card-content">
                            <h5>Discuss the challenges and difficulties faced by members</h5>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="col-md-4 mb-4">
                    <div class="custom-card custom-card-2">
                        <div class="custom-icon-container">
                            <img src="{{asset('img/check-yellow.png')}}" alt="">
                        </div>
                        <div class="custom-card-content">
                            <h5>Foster relationships of friendship and cooperation between Chapter members and external</h5>
                        </div>
                    </div>
                </div>

                <!-- Third Card -->
                <div class="col-md-4 mb-4">
                    <div class="custom-card custom-card-3">
                        <div class="custom-icon-container">
                            <img src="{{asset('img/plus-white.png')}}" alt="">
                        </div>
                        <div class="custom-card-content">
                            <h5>Participation in working groups and financial market development</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Cards Section -->

    <!-- Partners Section -->
    <section class="partners-section">
        <div class="container-fluid mt-5">
            <div class="row">
                <!-- Section for bank logos -->
                <div class="col-12">
                    <div class="partners-slider">
                        <div class="partner-logo">
                            <img src="{{ asset('img/nbo.png') }}" alt="NBO Logo" class="img-fluid">
                        </div>
                        <div class="partner-logo">
                            <img src="{{ asset('img/arab-bank.png') }}" alt="Oman Arab Bank Logo" class="img-fluid">
                        </div>
                        <div class="partner-logo">
                            <img src="{{ asset('img/maskat.png') }}" alt="Bank Muscat Logo" class="img-fluid">
                        </div>
                        <div class="partner-logo">
                            <img src="{{ asset('img/nbo.png') }}" alt="NBO Logo" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Partners Section -->

    <!-- Training Section -->
    <section class="training-section">
        <div class="container mt-5 mb-5">
            <h2 class="section-title mt-5 mb-4">Advanced Training, Financial Market Insights, and Unlimited Opportunities – Elevate Your Skills Today!</h2>
            <div class="row">
                <!-- First Card -->
                <div class="col-md-4 mb-4">
                    <div class="unique-card mt-3">
                        <div class="card-img">
                            <img src="{{ asset('training/training1.jpeg') }}" class="card-img-top" alt="ACI FMA">
                            <img src="{{ asset('img/logo.png') }}" alt="" class="training-logo">
                        </div>
                        <h5 class="card-title">ACI Financial Markets Association (ACI FMA)</h5>
                        <div class="body-content">
                            <div class="card-body borded-body">
                                <p class="card-text">
                                    a global leader in the wholesale financial markets, committed to promoting ethical standards and best practices since its inception in 1955. As a non-political, nonprofit organization.
                                </p>
                                <div class="card-footer d-flex justify-content-center mt-3">
                                    <a href="#" class="btn read-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Card -->
                <div class="col-md-4 mb-4">
                    <div class="unique-card mt-3">
                        <div class="card-img">
                            <img src="{{ asset('training/training2.jpeg') }}" class="card-img-top" alt="ACI FMA">
                            <img src="{{ asset('img/logo.png') }}" alt="" class="training-logo">
                        </div>
                        <h5 class="card-title">ACI Financial Markets Association (ACI FMA)</h5>
                        <div class="body-content">
                            <div class="card-body borded-body">
                                <p class="card-text">
                                    a global leader in the wholesale financial markets, committed to promoting ethical standards and best practices since its inception in 1955. As a non-political, nonprofit organization.
                                </p>
                                <div class="card-footer d-flex justify-content-center mt-3">
                                    <a href="#" class="btn read-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Third Card -->
                <div class="col-md-4 mb-4">
                    <div class="unique-card mt-3">
                        <div class="card-img">
                            <img src="{{ asset('training/training1.jpeg') }}" class="card-img-top" alt="ACI FMA">
                            <img src="{{ asset('img/logo.png') }}" alt="" class="training-logo">
                        </div>
                        <h5 class="card-title">ACI Financial Markets Association (ACI FMA)</h5>
                        <div class="body-content">
                            <div class="card-body borded-body">
                                <p class="card-text">
                                    a global leader in the wholesale financial markets, committed to promoting ethical standards and best practices since its inception in 1955. As a non-political, nonprofit organization.
                                </p>
                                <div class="card-footer d-flex justify-content-center mt-3">
                                    <a href="#" class="btn read-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Training Section -->

    <!-- Events Section -->
    <section class="events-section">
        <div class="container mt-5 mb-5">
            <div class="row">
                <!-- Left Section: Event Description -->
                <div class="col-md-7">
                    <div class="event-details">
                        <span class="top-update">Top updates this month</span>
                        <h2 class="event-title">A Look at Our Latest Event – Insights, Discussions, and Networking</h2>
                        <h4 class="event-subtitle">Financial Markets Forum – Oman 2024</h4>
                        <p class="event-description">
                            The event brought together top financial market experts and investors to discuss the latest trends in the global economy, investment opportunities, and the future of financial markets. Attendees engaged in panel discussions on financial innovation, risk management, and digital trading, alongside interactive workshops led by industry leaders.
                        </p>
                        <h5 class="event-highlights-title"> 📌 Event Highlights:</h5>
                        <ul class="event-highlights">
                            <li>Keynote speakers discussed the impact of fintech on financial markets.</li>
                            <li>Panel discussion on asset management and smart investment strategies.</li>
                            <li>Networking opportunities to expand professional connections.</li>
                            <li>Great engagement from attendees and valuable market insights.</li>
                        </ul>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-event">Go to Events</a>
                        </div>
                    </div>
                </div>

                <!-- Right Section: Event Image and Feedback -->
                <div class="col-md-5">
                    <div class="event-image mb-4">
                        <img src="{{ asset('events/event1.png') }}" alt="Event Image" class="img-fluid">
                    </div>
                    <div class="feedback-section">
                        <h5 class="feedback-title">Feedbacks</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="feedback">
                                    <div class="feedback-rating">
                                        <span class="stars">★★★★★</span>
                                        <span class="rating-number">5</span>
                                    </div>
                                    <p class="feedback-text">
                                        An incredible learning experience! The event provided deep insights into market trends and invaluable networking opportunities with industry experts.
                                    </p>
                                    <div class="feedback-author-container row">
                                        <div class="col-md-3">
                                            <img src="{{ asset('events/person1.jpeg') }}" alt="Megan Wilson" class="feedback-author-img">
                                        </div>
                                        <div class="col-md-8 ps-2 pe-2">
                                            <div class="feedback-author-details">
                                                <p class="feedback-author-name">Megan Wilson</p>
                                                <p class="feedback-author-title">Director of Digital Strategy, Harpoon Brewery</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feedback">
                                    <div class="feedback-rating">
                                        <span class="stars">★★★★☆</span>
                                        <span class="rating-number">4</span>
                                    </div>
                                    <p class="feedback-text">
                                        Well-organized and highly engaging! The speakers were top-notch, and the discussions were extremely relevant to today’s financial landscape.
                                    </p>
                                    <div class="feedback-author-container row">
                                        <div class="col-md-3">
                                            <img src="{{ asset('events/person1.jpeg') }}" alt="Megan Wilson" class="feedback-author-img">
                                        </div>
                                        <div class="col-md-8 ps-2 pe-2">
                                            <div class="feedback-author-details">
                                                <p class="feedback-author-name">Megan Wilson</p>
                                                <p class="feedback-author-title">Director of Digital Strategy, Harpoon Brewery</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Events Section -->

    <!-- Elections Section -->
    <section class="elections-section my-5">
        <div class="container text-center">
            <h2 class="election-title mb-3">Elections Are Open – Make Your Choice Count!</h2>
            <p class="election-description mb-5">
                Voting is now live! Choose your leaders and influence the direction of ACI Oman's future governance
            </p>

            <div class="row justify-content-center mb-4">
                <!-- Candidate Card -->
                <div class="col-md-4 mb-4">
                    <div class="candidate-card">
                        <img src="{{ asset('elections/person1.jpeg') }}" class="img-fluid candidate-img" alt="Candidate 1">
                        <p class="candidate-name mt-3">Name and Role</p>
                        <div class="vote-buttons mt-2">
                            <button class="btn vote-btn"><i class="fa fa-thumbs-down"></i></button>
                            <button class="btn vote-btn"><i class="fa fa-thumbs-up"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Candidate Card -->
                <div class="col-md-4 mb-4">
                    <div class="candidate-card">
                        <img src="{{ asset('elections/person2.jpeg') }}" class="img-fluid candidate-img" alt="Candidate 2">
                        <p class="candidate-name mt-3">Name and Role</p>
                        <div class="vote-buttons mt-2">
                            <button class="btn vote-btn"><i class="fa fa-thumbs-down"></i></button>
                            <button class="btn vote-btn"><i class="fa fa-thumbs-up"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Candidate Card -->
                <div class="col-md-4 mb-4">
                    <div class="candidate-card">
                        <img src="{{ asset('elections/person3.jpeg') }}" class="img-fluid candidate-img" alt="Candidate 3">
                        <p class="candidate-name mt-3">Name and Role</p>
                        <div class="vote-buttons mt-2">
                            <button class="btn vote-btn"><i class="fa fa-thumbs-down"></i></button>
                            <button class="btn vote-btn"><i class="fa fa-thumbs-up"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="btn btn-primary bylaws-btn">View the Bylaws</a>
        </div>
    </section>
    <!-- End of Elections Section -->

</div>
@endsection
