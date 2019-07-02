@extends('Site.service.master')

@section('css')
    <style>
        li{
            font-weight: lighter;
            margin-bottom: 10px;
        }
    </style>
@endsection

@section('content')


    <img width="100%;" src="{{ asset('public/files/service/web.jpg') }}" alt="">

    <div class="container">
        <div style="">
            <h2 style="text-align: center; margin-top: 45px;">Web Applications</h2>

            <div class="row" style="font-size: 20px;margin-top: 30px; margin-bottom: 50px;">
                <div class="col-md-6" style="margin-bottom: 30px;">
                    <p>
                        We create web application  that can perfectly fit your organisation's unique challenges, creating value & efficiency.
                        Using the collaborative and iterative Agile Methodology we will LEAD you on your DIGITAL JOURNEY whilst remaining delivery
                        focused at all times, to deliver software on time, on budget and on specification.
                    </p>
                </div>

                <div class="col-md-6">
                    <ul style="list-style-type:disc; margin-left: 60px; list-style-image: url('public/files/tick3.png');">
                        <li>Our web development includes mobile-responsive website.</li>
                        <li>Our ability to build dynamic, personalized user-centric experiences enables your brand to explore innovative opportunities to reach audience.</li>
                        <li>Core and continuous activity of Designing and Developing Applications and Software Solutions since its commencement.</li>
                        <li>Follow well-proven and professional working methodologies for the implementation of a software solution.</li>
                        <li>Project-specific metrics are defined and applied to ensure consistent results of high standard.</li>
                    </ul>
                </div>
            </div>

        </div>

        <section id="text-area" style="margin-bottom: 40px; border-radius: 6px;">
            <div class="inner text-area" style="padding-top: 21px;">
                <span><h3 style="display: inline-flex">Call us today</h3></span> <span> <a style="" href="tel:+8801624666124">@ (+88) 01624666124</a> </span> or
                <span><h3 style="display: inline-flex">Email us</h3></span> <span> <a style="" href="mailto:index@techmetbd.com">index@techmetbd.com</a> </span>
            </div>
        </section>

    </div>

@endsection