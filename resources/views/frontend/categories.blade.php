@extends('frontend.layouts.main')
@section('main-container')
    <!-- ======= Services Section ======= -->
    <section id="services" class="services" style="margin-top: 80px;">
        <div class="container">

            <div class="section-title">
                <h2>Categories We Provide</h2>
                <p>At Fishtail Overseas, we are committed to providing a wide range of services that cater to the needs of
                    our clients. Our company offers diverse categories of services that are designed to assist individuals
                    and businesses in achieving their goals. From education consultancy to immigration services, business
                    development to international trade, our comprehensive list of services covers all aspects of overseas
                    business operations. With a team of experienced professionals and a customer-centric approach, we strive
                    to provide innovative and practical solutions that meet our clients' specific requirements. Our goal is
                    to simplify the complex processes involved in overseas operations and help our clients succeed in their
                    endeavors.</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        {{-- <div class="icon"><i class="fas fa-wrench"></i></div> --}}
                        <img src="{{ asset('assets/img/categories/skilled_unskilled_labor.jpg') }}" class="img-fluid mb-2"
                            style="height: 200px;">
                        <h4><a href="">Skilled and Unskilled Labor</a></h4>
                        <p>We provide skilled and unskilled labor jobs for overseas companies in various fields
                            including laundry and iron, general labor, cleaning, construction, garbage collection,
                            gardening, factory work, agricultural and harvesting, as well as meat processing and
                            packaging. Our team strives to ensure that all workers are highly trained, experienced, and
                            committed to delivering exceptional results for our clients.</p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <img src="{{ asset('assets/img/categories/security.jpg') }}" class="img-fluid mb-2"
                            style="height: 200px;">
                        {{-- <div class="icon"><i class="fas fa-shield"></i></div> --}}
                        <h4><a href="">Security</a></h4>
                        <p>Our company provides top-notch security services through a team of highly skilled
                            professionals, including ex-British Army, ex-Indian Army, ex-Nepal Police, and ex-Nepal Army
                            personnel. We also offer civil security guards, as well as spy and detection services to
                            meet your unique security needs. Trust us to provide the best security solutions for your
                            business or organization.</p>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <img src="{{ asset('assets/img/categories/professional.jpeg') }}" class="img-fluid mb-2"
                            style="height: 200px;">
                        {{-- <div class="icon"><i class="fas fa-briefcase"></i></div> --}}
                        <h4><a href="">Professional</a></h4>
                        <p>Our company provides a wide range of professional jobs for overseas clients, including civil,
                            mechanical, chemical, and electrical engineers. We also offer opportunities for agricultural
                            analysts and other specialists. We are dedicated to connecting talented professionals with
                            reputable companies to achieve success in their careers.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <img src="{{ asset('assets/img/categories/operator.jpg') }}" class="img-fluid mb-2"
                            style="height: 200px;">
                        {{-- <div class="icon"><i class="fas fa-truck"></i></div> --}}
                        <h4><a href="">Operator/Driver</a></h4>
                        <p>We offer a range of operator and driver jobs, including heavy equipment operators, heavy and
                            light duty drivers, time keepers, sweepers, and cleaners for both males and females. Join us
                            to gain valuable experience and build a rewarding career in this field.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <img src="{{ asset('assets/img/categories/mechanical.jpg') }}" class="img-fluid mb-2"
                            style="height: 200px;">
                        {{-- <div class="icon"><i class="fas fa-gears"></i></div> --}}
                        <h4><a href="">Mechanical Work</a></h4>
                        <p>Our company provides a wide range of mechanical work jobs for those seeking employment
                            overseas. These positions include heavy duty and diesel mechanics, light duty and petrol
                            auto mechanics, auto and body painters, body repairers, welders, and tire repairers. We take
                            pride in providing skilled and experienced workers for all of these positions, ensuring our
                            clients receive the highest level of service possible.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <img src="{{ asset('assets/img/categories/hotel.jpg') }}" class="img-fluid mb-2"
                            style="height: 200px;">
                        {{-- <div class="icon"><i class="fas fa-cutlery"></i></div> --}}
                        <h4><a href="">Hotel</a></h4>
                        <p>Our overseas company provides a range of jobs in the hotel industry, including managerial and
                            accounting roles, Indian and Chinese cooks, storekeepers and timekeepers, receptionists,
                            stewards and cashiers, waiters and waitresses, bellboys and cleaners, room boys and
                            gardeners, and male and female housekeeping staff. With our experienced and skilled team, we
                            ensure that your hotel business runs smoothly and efficiently.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
