
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

    <img width="100%;" src="{{ asset('public/files/service/digital_marketing.jpg') }}" alt="">

    <div class="container">
        <div style="">
            <h2 style="text-align: center; margin-top: 45px;">Digital Marketing</h2>

            <div class="row" style="font-size: 20px;margin-top: 30px; margin-bottom: 50px;">
                <div class="col-md-6" style="margin-bottom: 30px;">
                    <p>
                        We develop the strategy that increase your visibility, targeted customers and brand reputation.
                        We execute such strategy, simple to understand for your consumers and save your time and money.
                        We have expert and dedicative team to provide you a supreme digital marketing service within a short time
                    </p>
                </div>

                <div class="col-md-6">
                    <ul style="list-style-type:disc; margin-left: 60px; list-style-image: url('public/files/tick3.png');">
                        <li>Strategy</li>
                        <li>Content Develop</li>
                        <li>Design & Develop</li>
                        <li>Campaign</li>
                        <li>Social Marketing</li>
                        <li>Email marketing</li>
                    </ul>
                </div>
            </div>

        </div>

        <section id="text-area" style="margin-bottom: 40px;border-radius: 6px;">
            <div class="inner text-area" style="padding-top: 21px;">
                <span><h3 style="display: inline-flex">Call us today</h3></span> <span> <a style="" href="tel:+8801624666124">@ (+88) 01624666124</a> </span> or
                <span><h3 style="display: inline-flex">Email us</h3></span> <span> <a style="" href="mailto:index@techmetbd.com">index@techmetbd.com</a> </span>
            </div>
        </section>

    </div>

@endsection