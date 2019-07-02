
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

    <img width="100%;" src="{{ asset('public/files/service/eCommerce.jpg') }}" alt="">

    <div class="container">
        <div style="">
            <h2 style="text-align: center; margin-top: 45px;">E-Commerce Solutions</h2>

            <div class="row" style="font-size: 20px;margin-top: 30px; margin-bottom: 50px;">
                <div class="col-md-6" style="margin-bottom: 30px;">
                    <p>
                        You don't need to have any technical and design experience to run a eCommerce or online store.
                        We are here to help you. Simply asked your requirement & we are here to grow your business.
                        Designed a stylish eCommerce website, easily customize your online store, add products, and you're pretty much
                        ready to accept payments.Your ecommerce business relies on a user friendly website. Our ecommerce solution has all
                        basic features required to run a successful online selling business.
                    </p>
                </div>

                <div class="col-md-6">
                    <ul style="list-style-type:disc; margin-left: 60px; list-style-image: url('public/files/tick3.png');">

                        <li>Dynamic website management panel</li>
                        <li>Categories management</li>
                        <li>As easy-to-use checkout</li>
                        <li>Clear, user friendly navigation</li>
                        <li>Product management</li>
                        <li>Inventory management</li>
                        <li>Reporting tools</li>
                        <li>eCommerce hosting</li>

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

