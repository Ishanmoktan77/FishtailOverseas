@extends('frontend.layouts.main')
@section('main-container')
    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments" style="margin-top: 80px;">
        <div class="container">

            <div class="section-title">
                <h2>Services</h2>
                <p>We are an overseas company that takes pride in offering a wide range of services to meet the diverse
                    needs of our clients. Our team is dedicated to providing high-quality solutions that are tailored to
                    your specific requirements. With years of experience in the industry, we have developed a deep
                    understanding of the challenges that businesses face, and we strive to deliver services that are both
                    efficient and effective.</p>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Overseas Recruitment</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Training</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Orientation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Consulting</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Overseas Recruitment Services</h3>
                                    <p>Fishtail Overseas Pvt. Ltd. is a leading provider of overseas recruitment services,
                                        dedicated to connecting skilled professionals with top employers around the world.
                                        Our team of experienced recruiters has a deep understanding of the international job
                                        market and works tirelessly to match the right candidate with the right opportunity.
                                        Whether you are an employer looking to fill a critical position or a job seeker
                                        seeking new opportunities, we are committed to providing personalized and reliable
                                        services that exceed your expectations. At Fishtail Overseas Pvt. Ltd., we believe
                                        that talent has no boundaries, and we are passionate about helping companies and
                                        individuals achieve their goals through our recruitment services.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Training Services</h3>
                                    <p>At FishTail Overseas Pvt. Ltd., we provide comprehensive training services to
                                        individuals and businesses looking to enhance their skills and knowledge. Our
                                        training programs are designed to meet the specific needs of our clients and help
                                        them achieve their personal and professional goals. Our team of experienced trainers
                                        is dedicated to providing high-quality training services in various fields such as
                                        IT, management, communication skills, language proficiency, and more. We use modern
                                        teaching techniques and tools to make our training programs interactive and
                                        engaging, ensuring that our clients receive the best possible learning experience.
                                        Whether you are an individual seeking personal development or a business looking to
                                        upskill your workforce, FishTail Overseas Pvt. Ltd. has the right training solution
                                        for you.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Orientation Services</h3>
                                    <p>At FishTail Overseas Pvt. Ltd., we understand that moving to a new country can be a
                                        daunting and overwhelming experience. That's why we provide comprehensive
                                        orientation services to help make your transition as smooth as possible. Our team of
                                        experienced professionals will assist you in getting to know your new home,
                                        including information about the culture, customs, and way of life. We will help you
                                        navigate through the practicalities of settling in, including finding accommodation,
                                        opening bank accounts, and registering for necessary documentation. Our goal is to
                                        ensure that you feel comfortable and confident in your new surroundings, allowing
                                        you to focus on making the most of your overseas experience.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row gy-4">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Consulting Services</h3>
                                    <p>FishTail Overseas Pvt. Ltd. is a leading consulting firm that provides a
                                        comprehensive range of services to clients around the world. We specialize in
                                        providing high-quality consulting services to help businesses grow and achieve their
                                        goals. Our team of experienced consultants works closely with clients to understand
                                        their needs and challenges, and then develop customized solutions to address those
                                        challenges. We offer a wide range of consulting services, including strategic
                                        planning, market research, project management, financial analysis, and business
                                        process improvement. Our services are designed to help clients make informed
                                        decisions and achieve measurable results. At FishTail Overseas Pvt. Ltd., we are
                                        committed to delivering exceptional consulting services that exceed our clients'
                                        expectations.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Departments Section -->
@endsection
