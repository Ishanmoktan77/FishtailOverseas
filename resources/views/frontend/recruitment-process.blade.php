@extends('frontend.layouts.main')
@section('main-container')
    <section id="faq" class="faq section-bg" style="margin-top: 80px;">
        <div class="container">
            <div class="section-title">
                <h2>Recruitment Process</h2>
                <p>The recruitment process is a critical component of any overseas company's success. At Fishtail Overseas
                    Pvt. Ltd., we understand the importance of hiring the right talent for our clients. Our recruitment
                    process is designed to ensure that we find the best fit for the job, from receiving the demand letter to
                    deployment and PDO. We take pride in our comprehensive recruitment process, which includes pre-approval
                    from the Department of Labor, Nepal Government, job advertisements, application collection, interviews,
                    medical screenings, and visa processing.</p>
            </div>
            <div class="faq-list">
                <ul>
                    @foreach ($processes as $process)
                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-hash icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-{{$process["id"]}}" class="collapsed">{{ $process['title'] }}<i
                                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-{{$process["id"]}}" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    {{ $process['description'] }}
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section><!-- End Frequently Asked Questions Section -->
@endsection
