@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5 mb-5">
    <!--About navigation bar -->
    <div class="row">
        <div class="about-nav text-center mb-4">
            <a href="#" class="btn-nav " data-target="#aci-fma">ACI FMA</a>
            <a href="#" class="btn-nav active" data-target="#governance-leadership">Governance & Leadership</a>
        </div>
    </div>
    <div id="aci-fma" class="toggle-section ">
        <!-- About Section -->
        <section class="about-section mt-0">
            <div class="mission-vision">
                <!-- Mission Section -->
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset('img/vision.jpg') }}" alt="" class="img-fluid mission-img">
                    </div>
                    <div class="col-md-6">
                        <h2 class="vision-title mt-5">Our <span class="yellow-span"> Vision </span> </h2>
                        <p class="vision-text">To be the leading global association of wholesale financial market professionals, providing a unique and truly global network for the exchange of ideas, information and best practice, and representing the interests of members in their markets.</p>
                    </div>
                </div>
                <!-- Vision Section -->
                <div class="row mt-5">
                    <div class="col-md-6">
                        <h2 class="mission-title mt-5">Our <span class="yellow-span"> Mission </span> </h2>
                        <p class="mission-text">To promote best market practice and to represent and support the professional interests of financial markets’ participants both in their home countries and internationally, and to provide opportunities for networking and professional development.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('img/mission.jpg') }}" alt="" class="img-fluid mission-img">
                    </div>
                </div>
            </div>
            <div class="row" style="margin:13vh 0;">
                <div class="container d-flex justify-content-center discover-title mb-4">
                    <h3>Supporting Financial Professionals Through Knowledge, Networking & Leadership</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('img/knowledge.jpg') }}" alt="" class="knowledge-img img-fluid w-100">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="knowledge-content h-100">
                            <ul>
                                <li>
                                    <img src="{{asset('img/check-mark.png')}}" alt="">
                                    <p class="aci-points">
                                        ACI Financial Markets Association (ACI FMA) is a global leader in the wholesale financial markets,
                                        committed to promoting ethical standards and best practices since its inception in 1955. As a non-political, nonprofit organization
                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('img/check-mark.png')}}" alt="">
                                    <p class="aci-points">Ethical Conduct: ACI FMA’s primary focus is on ensuring that market participants adhere to the highest standards of ethical behavior, safeguarding the integrity of financial markets.</p>
                                </li>
                                <li>
                                    <img src="{{asset('img/check-mark.png')}}" alt="">
                                    <p class="aci-points"> Industry Leadership: Its committees and industry working groups offer thought leadership and practical insights to address contemporary challenges in financial markets.</p>
                                </li>
                                <li>
                                    <img src="{{asset('img/check-mark.png')}}" alt="">
                                    <p class="aci-points">Global Reach: ACI FMA has an extensive network of National Associations around the world, providing a strong support system for financial professionals across different markets.</p>
                                </li>
                                <li>
                                    <img src="{{asset('img/check-mark.png')}}" alt="">
                                    <p class="aci-points">Professional Development: Through its education, certification, and attestation programs, ACI FMA equips individuals and organizations with the tools to excel in today’s dynamic financial landscape</p>
                                </li>
                                <li>
                                    <img src="{{asset('img/check-mark.png')}}" alt="">
                                    <p class="aci-points">With a mission to empower professionals and foster market integrity, ACI FMA is instrumental in shaping the future of wholesale financial markets.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Footer Section: Membership Info -->
                <section class="membership-footer mt-5 mb-5 text-center">
                    <div class="contact-membership">
                        <p>Join a community of financial professionals dedicated to growth, knowledge, and excellence. </p>
                        <a href="#" class="btn btn-primary">Become a Member</a>
                    </div>
                </section>
            </div>
        </section>
        <!-- End of About Section -->
        <section class="leadership-section py-5">
            <div class="text-center mb-4">
                <h2 class="leadership-title">Strong Leadership, Transparent Governance</h2>
                <p class="leadership-subtitle">Meet the experts guiding ACI Oman towards <br> financial excellence</p>
            </div>

            <div class="container">
                <div class="row justify-content-center g-4">
                    @php
                        $leaders = [
                            ['name' => 'Suad Al-Balushi', 'role' => 'President', 'image' => 'suad.png'],
                            ['name' => 'Saeed Al-Hinai', 'role' => 'Deputy President', 'image' => 'saeed.png'],
                            ['name' => 'Mohammed Al-Balushi', 'role' => 'Secretary', 'image' => 'mohammed.png'],
                            ['name' => 'Osman Al-Zadjali', 'role' => 'Treasurer', 'image' => 'osman.png'],
                            ['name' => 'Juma Al-Jabri', 'role' => 'Member', 'image' => 'juma.png'],
                        ];
                    @endphp

                    @foreach($leaders as $index => $leader)
                        <div class="col-md-6 d-flex align-items-center gap-3 leader-wrapper">
                            <div class="leader-img-wrapper">
                                <img src="{{ asset('img/leaders/' . $leader['image']) }}" alt="{{ $leader['name'] }}" class="leader-img">
                            </div>
                            <div class="leader-card">
                                <div class="leader-name fw-bold">{{ $leader['name'] }}</div>
                                <div class="leader-role">{{ $leader['role'] }}</div>
                                <div class="leader-arrow">
                                    <i class="fas fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="membership-footer mt-5 mb-5 text-center">
            <div class="contact-membership" style="border:1px solid #FCC200;">
                <p>
                    "Our leadership team ensures the highest standards of integrity
                    and professionalism in the financial sector. Through strategic governance,
                    we empower members and shape the future of financial markets in Oman."
                </p>
                <a href="#" class="btn btn-member-team mt-5">View Full Leadership Team</a>
            </div>
        </section>
    </div>

    <div id="governance-leadership" class="toggle-section active-section">
        <div class="container-fluid mb-5 p-0">
            <!-- Contact Hero Section -->
            <section class="hero-contact-section mt-0">
                <div class="hero-contact-wrapper" style="background-image: url('{{ asset('img/gradient.jpeg') }}');">
                    <div class="hero-contact-content">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="contact-subtitle">Strong Leadership, Clear Governance, and Financial Integrity</p>
                                <p class="mt-5" style="font-size: 20px">
                                    "Our leadership team is dedicated to maintaining transparency,
                                    accountability, and excellence in Oman’s financial markets.
                                    Meet the experts guiding ACI Oman towards a stronger future."
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('img/leadership.webp') }}" style="border-radius:20px;" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- End of Hero Section -->
            <div class="container">
                <div class="row g-4 justify-content-center mt-5 cards-padding">
                    @php
                        $leaders = [
                            [
                                'name' => 'Mohammed Al-Balushi',
                                'role' => 'Secretary',
                                'image' => 'mohammed.png',
                                'description' => 'AGM & Head of Treasury & Investment at Ahli Bank S.A.O.G. with over 17 years of experience in treasury, investment, and banking. He holds a Bachelor of Business Administration from the University of Wisconsin.'
                            ],
                            [
                                'name' => 'Osman Al-Zadjali',
                                'role' => 'Treasurer',
                                'image' => 'osman.png',
                                'description' => 'Head of Islamic Treasury at Muzn – National Bank of Oman, with solid experience in debt management, liquidity management.'
                            ],
                            [
                                'name' => 'Suad Al-Balushi',
                                'role' => 'President',
                                'image' => 'suad.png',
                                'description' => 'AGM – Head of Treasury & Financial Institutions at Oman Housing Bank, with over 2 decades of experience in the banking sector specializing in strategic & operational leadership in treasury. She is the first Omani to achieve the ACI Diploma & holds the FRM certification.'
                            ],
                            [
                                'name' => 'Saeed Al-Hinai',
                                'role' => 'Deputy President',
                                'image' => 'saeed.png',
                                'description' => 'Senior Executive Vice President and Head of Global Markets at Sohar International, with strong experience in business analysis, system automation, and financial markets. He has completed executive education from Harvard Business School.'
                            ],
                            [
                                'name' => 'Juma Al-Jabri',
                                'role' => 'Member',
                                'image' => 'juma.png',
                                'description' => 'Head of Global Markets & Financial Institutions at Bank Dhofar, with 19 years of experience in the banking sector, specializing in treasury operations and financial strategy.'
                            ],
                        ];
                    @endphp


                    @foreach($leaders as $leader)
                    <div class="col-md-6 d-flex">
                        <div class="leader-card-box d-flex flex-column w-100">
                            <div class="leader-img-container">
                                <img src="{{ asset('img/leaders/' . $leader['image']) }}" class="leader-img-top" alt="{{ $leader['name'] }}">
                                <img src="{{ asset('img/logo.png') }}" class="leader-logo" alt="Logo">
                            </div>
                            <div class="leader-name-tag text-center">
                                <strong>{{ $leader['name'] }}</strong>
                            </div>
                            <div class="leader-card-body d-flex flex-column flex-grow-1 ">
                                <div class="body-padding d-flex flex-column flex-grow-1">
                                    <div>
                                        <p class="leader-role-title mt-4">{{ $leader['role'] }}</p>
                                        <p class="leader-description">{{ $leader['description'] }}</p>
                                    </div>
                                    <div class="mt-auto text-center mb-5">
                                        <a href="#" class="btn read-more-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <section class="election-calendar-section py-5">
                <div class="text-center" style="margin-bottom: 10vh;">
                    <h2 class="election-title">
                        <em>Upcoming Leadership Elections – Be Part of the Decision!</em>
                    </h2>
                </div>

                <div class="container">
                    <div class="row align-items-start">
                        <!-- Left: Checklist -->
                        <div class="col-md-5">
                            <div class="elections-content h-100">
                                <ul>
                                    <li><img src="{{asset('img/check-mark.png')}}" alt=""><p> Only active ACI Oman members are eligible to vote and nominate candidates.
                                        Ensure your membership is up to date to participate in shaping the future of our leadership.</p></li>
                                    <li><img src="{{asset('img/check-mark.png')}}" alt=""><p> Only active ACI Oman members are eligible to vote and nominate candidates.
                                    </p></li>
                                </ul>
                                <p class="fw-bold mt-5 d-flex justify-content-center">
                                    Not a member yet?  &nbsp;
                                    <a href="#" class="btn-member">Be a Member Now! <i class="fas fa-arrow-right"></i></a>
                                </p>
                            </div>
                        </div>

                        <!-- Right: Calendar -->
                        <div class="col-md-7">
                            <div id="calendar"></div>

                            <!-- Legend -->
                            <div class="d-flex justify-content-end gap-5 mt-3 calendar-legend">
                                <div class="d-flex flex-column align-items-center">
                                    <div class="legend-dot bg-success"></div>
                                    <span class="legend-label">Done</span>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <div class="legend-dot bg-danger"></div>
                                    <span class="legend-label">Soon</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="text-center" style="margin: 10vh 0;">
                <h2 class="election-title">
                    <em>Leadership Elections & Contacting the Board</em>
                </h2>
            </div>

            <section class="membership-footer mt-5 mb-5 text-center">
                <div class="contact-membership" style="">
                    <p class="text-start" style="color: #101255; font-family: 'Poppins', sans-serif;">
                        Leadership Selection & Member Participation
                    </p>
                    <p class="text-start" style="color: #455A64;">
                        Election Process:
                    </p>
                    <p class="text-start" style="color: #26264F;">
                        Election Frequency: Annual elections held every June.
                        Voting Process: Only registered members are eligible to vote.
                        Leadership Terms: Executive board members serve for 3 years.
                    </p>
                    <a href="#" class="btn btn-member-team mt-5">View Full Bylaws</a>
                </div>
            </section>
            <!-- Contact Prompt Section -->
            <div class="text-center mt-5">
                <p class="contact-prompt">
                    Do you have any problem ?
                    <span class="contact-bold">Contact Us</span>
                    <span class="contact-arrow">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </p>
            </div>

        </div>
    </div>
</div>

@endsection
@push('scripts')
<!-- FullCalendar CSS -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.css" rel="stylesheet">

<!-- FullCalendar JS -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navButtons = document.querySelectorAll('.btn-nav');
        const sections = document.querySelectorAll('.toggle-section');

        navButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();

                // Remove active from all buttons and sections
                navButtons.forEach(btn => btn.classList.remove('active'));
                sections.forEach(sec => sec.classList.remove('active-section'));

                // Activate clicked button and target section
                this.classList.add('active');
                const targetId = this.getAttribute('data-target');
                document.querySelector(targetId).classList.add('active-section');
            });
        });
    });

</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const calendarEl = document.getElementById('calendar');

        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            initialDate: '2024-12-01',
            height: 'auto',
            headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: ''
            },
            events: [
                {
                    title: 'Annual Elections',
                    start: '2024-12-03',
                    color: '#D32F2F',
                    textColor: '#fff'
                },
                {
                    title: 'Voting Opens',
                    start: '2024-12-01',
                    color: '#2ECC40',
                    textColor: '#fff'
                },
                {
                    title: 'Voting Closes',
                    start: '2024-12-05',
                    color: '#D32F2F',
                    textColor: '#fff'
                }
            ]
        });

        calendar.render();
    });
</script>
@endpush
