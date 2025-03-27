@extends('layouts.app')

@section('content')

<div class="container-fluid mt-5 mb-5">
    <!-- About Section -->
    <section class="about-section mt-0">
        <div class="row">
            <div class="about-nav">
                <a href="#" class="btn-nav active">ACI FMA</a>
                <a href="#" class="btn-nav">Governance & Leadership</a>
            </div>
        </div>
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
</div>

@endsection
