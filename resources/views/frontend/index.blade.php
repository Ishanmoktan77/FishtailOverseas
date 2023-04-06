@extends('frontend.layouts.main')
@section('main-container')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            {{-- <h1>Fishtail Overseas</h1>
            <h2>Connecting global talent, empowering businesses.</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a> --}}
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Why Choose Fishtail Overseas?</h3>
                            <p>
                                Choose our overseas company for quality staffing solutions with competitive pricing,
                                extensive candidate pool, and excellent customer service.
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-check-shield"></i>
                                        <h4>Reliability</h4>
                                        <p>Our company has a vast network of skilled and unskilled labor, providing clients
                                            with a diverse range of job opportunities.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-line-chart"></i>
                                        <h4>Efficiency</h4>
                                        <p>We offer competitive compensation packages and excellent benefits to ensure our
                                            employees are well taken care of.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-star"></i>
                                        <h4>Expertise</h4>
                                        <p>Our team is dedicated to providing exceptional customer service and support,
                                            ensuring a smooth and hassle-free hiring process for our clients.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->



        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="fa fa-users"></i>
                            <span>8000+</span>
                            <p>Customer Served</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="fas fa-user-check"></i>
                            <span>6000+</span>
                            <p>Visa approved</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fa fa-thumbs-up"></i>
                            <span>5000+</span>
                            <p>Success Stories</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="fa-solid fa-face-smile"></i>
                            <span>6000+</span>
                            <p>Happy Customer</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->




        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    {{-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt=""> --}}
                                    <h3>Ahmed Ali</h3>
                                    <h4>HR Manager</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        We have been working with Fishtail Overseas Pvt. Ltd. for the past few years and they have always provided us with high-quality workers from Nepal. Their team is efficient, professional and always ready to assist us with any queries we have. We highly recommend their services.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    {{-- <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt=""> --}}
                                    <h3>Fatima Al-Sabah</h3>
                                    <h4>HR Director</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                       Fishtail Overseas Pvt. Ltd. has been our trusted partner for the past 2 years. They have a great selection of skilled and experienced workers from Nepal, which has helped us in improving our operations. Their staff is very cooperative and always ensure that our recruitment needs are met in a timely manner.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    {{-- <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt=""> --}}
                                    <h3>Omar Al-Habib</h3>
                                    <h4>HR Manager</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        We have been associated with Fishtail Overseas Pvt. Ltd. for over a decade now and have always received excellent service from their team. They have been providing us with hardworking and dedicated workers from Nepal, who have contributed significantly to the growth of our company. We appreciate their efforts and look forward to continuing our partnership with them.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    {{-- <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt=""> --}}
                                    <h3>Ali Al-Sadiq</h3>
                                    <h4>HR Manager</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Fishtail Overseas Pvt. Ltd. has been instrumental in providing us with a reliable and skilled workforce from Nepal. Their team is very professional, responsive and has always gone above and beyond to meet our recruitment needs. We are happy to recommend their services to any company looking for top-quality workers.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    {{-- <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt=""> --}}
                                    <h3>Lim Wei-Jie</h3>
                                    <h4>HR Manager</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        We have been working with Fishtail Overseas Pvt. Ltd. for the past couple of years and are very satisfied with their services. They have provided us with competent and skilled workers from Nepal, who have helped us in improving our operations. We appreciate their professionalism, expertise and look forward to a long-term association with them.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->
        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                <h2>Our Clients</h2>
            </div>
                <div class="carousel-wrapper ">
                    <div class="owl-carousel owl-theme">
                        <div class="item" style="width:100%;height:200px">
                            <img src="assets/img/clients/go.jpg"  alt="" style="width:100%;height:100%">
                        </div>
                        <div class="item" style="width:100%;height:200px">
                            <img src="assets/img/clients/plaza.jpg"  alt=""  style="width:100%;height:100%">
                        </div>
                        <div class="item" style="width:100%;height:200px">
                            <img src="assets/img/clients/zia.jpg"  alt="" style="width:100%;height:100%">
                        </div>
                        <div class="item" style="width:100%;height:200px">
                            <img src="assets/img/clients/jp1.jpg"   alt="" style="width:100%;height:100%">
                        </div>
                        <div class="item" style="width:100%;height:200px">
                            <img src="assets/img/clients/at.jpg"  alt="" style="width:100%;height:100%">
                        </div>
                        <div class="item" style="width:100%;height:200px">
                            <img src="assets/img/clients/queens.jpg"  alt="" style="width:100%;height:100%">
                        </div>
                        <div class="item" style="width:100%;height:200px">
                            <img src="assets/img/clients/master.jpg"  alt="" style="width:100%;height:100%">
                        </div>
                        <div class="item" style="width:100%;height:200px">
                            <img src="assets/img/clients/as.jpg"  alt="" style="width:100%;height:100%">
                        </div>
                        <div class="item" style="width:100%;height:200px">
                            <img src="assets/img/clients/emrat.jpg"  alt="" style="width:100%;height:100%">
                        </div>
                        <div class="item" style="width:100%;height:200px">
                            <img src="assets/img/clients/hawak.jpg" alt="" style="width:100%;height:100%">
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Gallery Section -->
    </main><!-- End #main -->
@endsection
