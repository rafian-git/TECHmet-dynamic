
@extends('Site.service.master')

@section('css')
    <style>
        li{
            font-weight: lighter;
            margin-bottom: 10px;
        }
        @media only screen and (max-width: 560px){
            .text-area a {
                font-size: 20px !important;
            }
        }
    </style>
@endsection

@section('content')

    <img width="100%;" src="{{ asset('public/files/service/sms.jpg') }}" alt="">

    <div class="container">
        <div style="">
            <h2 style="text-align: center; margin-top: 45px;">Bulk SMS Marketing</h2>

            <div class="row" style="font-size: 20px;margin-top: 50px; margin-bottom: 30px;">
                <div class="col-md-6" style="margin-bottom: 30px;">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="packages" style="margin-top: 0px;">
                                <!-- First Package -->
                                <div class="package first animated" data-animation="flipInY" data-animation-delay="100" style="width: 100%;">
                                    <!-- Package Header -->
                                    <h1>Masking</h1>
                                    <!-- Package Price -->
                                    <div class="circle">
                                        <h3>৳0.40</h3>
                                        <p>Per SMS</p>
                                    </div>
                                    <!-- Package Properties -->
                                    <ol>
                                        <li>sent from <b> company name </b></li>
                                        {{--<li><span>masking </span>sms</li>--}}
                                        <li>* Specially for GP 0.46 ৳</li>

                                    </ol>
                                    <!-- Package Button -->
                                    <a class="p-btn" href="{{ route('contact') }}">Contact Now</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="packages" style="margin-top: 0px;">
                                <!-- First Package -->
                                <div class="package first animated" data-animation="flipInY" data-animation-delay="100" style="width: 100%;">
                                    <!-- Package Header -->
                                    <h1>Non-Masking</h1>
                                    <!-- Package Price -->
                                    <div class="circle">
                                        <h3>৳0.30</h3>
                                        <p>Per SMS</p>
                                    </div>
                                    <!-- Package Properties -->
                                    <ol>
                                        <li>sent from <b> random number</b></li>
                                        <li>All Operators</li>
                                    </ol>
                                    <!-- Package Button -->
                                    <a class="p-btn" href="{{ route('contact') }}">Contact Now</a>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="col-md-6">
                    <h3 style="margin-top: 0px; text-align: center; margin-bottom: 30px;">Benefits of SMS Marketing</h3>
                    <ul style="list-style-type:disc; margin-left: 60px; list-style-image: url('public/files/tick3.png');">
                        <li>SMS marketing will generate more new clients</li>
                        <li>GMore Business will be originated from existing clients</li>
                        <li>Gross profit margin must be Improved</li>
                        <li>Extremely cost effective</li>
                        <li>Immediate delivery</li>
                        <li>21st century marketing</li>
                    </ul>
                </div>
            </div>

            <section id="text-area" style="margin-bottom: 40px;border-radius: 6px;">
                <div class="inner text-area" style="padding-top: 21px;">
                    <span><h3 style="display: inline-flex">Call us today</h3></span> <span> <a style="" href="tel:+8801624666124">@ (+88) 01624666124</a> </span> or
                    <span><h3 style="display: inline-flex">Email us</h3></span> <span> <a style="" href="mailto:index@techmetbd.com">index@techmetbd.com</a> </span>
                </div>
            </section>

        </div>
    </div>

@endsection