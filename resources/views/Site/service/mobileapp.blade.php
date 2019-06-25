
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

    <img width="100%;" src="{{ asset('public/files/service/moble_app_dev.jpg') }}" alt="">

    <div class="container">
        <div style="">
            <h2 style="text-align: center; margin-top: 45px;">Mobile App Development</h2>

            <div class="row" style="font-size: 20px;margin-top: 30px; margin-bottom: 50px;">
                <div class="col-md-6" style="margin-bottom: 30px;">
                    <p>
                        Android is a fastest growing operating system of smart phone devices has been popular with its each update.
                        Its versatile, user friendly applications & flexibility has made it more favorite.
                        Our expert team having updated knowledge of latest android release invents profitable android apps.
                        Our Professional team of android app Developers perform deep research and analysis to meet your requirements and
                        expectations. Accessing wide range of tools and technologies we create customized applications which are powerful
                        and scalable for any android devices
                    </p>
                </div>

                <div class="col-md-6">
                    <ul style="list-style-type:disc; margin-left: 60px; list-style-image: url('public/files/tick3.png');">
                        <li >Easy access to your inventory</li>
                        <li >Get notifications of special events, launches, etc.</li>
                        <li >Have one-touch access to your important information</li>
                        <li >User friendly UI and UX</li>
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