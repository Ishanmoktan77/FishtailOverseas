@extends('frontend.layouts.main')
@section('main-container')
    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors" style="margin-top: 80px;">
        <div class="container">

            <div class="section-title">
                <h2>Our Team</h2>
                <p>Our team is the backbone of our organization, driving innovation, creativity, and growth. With a diverse
                    group of individuals from different backgrounds and experiences, we bring together unique perspectives
                    and skill sets to collaborate towards a common goal. Our team is passionate about what we do and
                    committed to delivering exceptional results to our clients. We believe in creating a positive and
                    supportive work environment that fosters growth, learning, and development. Meet the talented
                    individuals who make up our team and learn more about their expertise and contributions to our success.
                </p>
            </div>

            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('storage/' . $team->image_url) }}" class="img-fluid"
                                    alt="{{ $team->name }}"></div>
                            <div class="member-info">
                                <h4>{{ $team->name }}</h4>
                                <span>{{ $team->post }}</span>
                                <p>{{ $team->message }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Doctors Section -->
@endsection
