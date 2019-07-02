
@extends('Site.service.master')

@section('css')
    <style>
        .panel p{
            font-weight: lighter;
        }
        /*#div1{*/
            /*background-image: url('public/files/graphics/gd1.jpeg');*/
            /*background-repeat: no-repeat, repeat;*/
            /*background-position: center;*/
        /*}*/

        /*#div2{*/
            /*background-image: url('public/files/graphics/gd3.jpeg');*/
            /*background-repeat: no-repeat, repeat;*/
            /*background-position: center;*/
        /*}*/

        /*#div3{*/
            /*background-image: url('public/files/graphics/gd2.jpeg');*/
            /*background-repeat: no-repeat, repeat;*/
            /*background-position: center;*/
        /*}*/

        /*#div4{*/
            /*background-image: url('public/files/graphics/gd4.jpg');*/
            /*background-repeat: no-repeat, repeat;*/
            /*background-position: center;*/
        /*}*/
    </style>
@endsection

@section('content')

    <img width="100%;" src="{{ asset('public/files/service/graphics.jpg') }}" alt="">

    <div class="container">
        <div style="">
            <h2 style="text-align: center; margin-top: 45px;">Graphic Design</h2>

            <div class="row" style="font-size: 20px;margin-top: 30px; margin-bottom: 50px;">

                <div class="panel panel-default" id="div1">
                    <div class="panel-body" style="margin-bottom: 20px;" >
                        <h3 style="">Corporate Graphics Design</h3>
                        <p style="">
                            Corporate identity collateral, corporate stationery including letterhead,
                            business cards and compliment slips, corporate and product branding, brochures,
                            catalogues, folders and packaging
                        </p>
                    </div>
                </div>

                <div class="panel panel-default" id="div2">
                    <div class="panel-body" style="margin-bottom: 20px;" >
                        <h3 style="">Logo design</h3>
                        <p style="">
                            Corporate and contemporary logo designs, web graphics, icons, T-Shirt graphics
                        </p>
                    </div>
                </div>

                <div class="panel panel-default" id="div3">
                    <div class="panel-body" style="margin-bottom: 20px;" >
                        <h3 style="">Illustration</h3>
                        <p style="">
                            Conventional media or computer graphics including image manipulation
                        </p>
                    </div>
                </div>

                <div class="panel panel-default" id="div4">
                    <div class="panel-body" style="margin-bottom: 20px;" >
                        <h3 style="">Print production</h3>
                        <p style="">
                            Art working of catalogues, brochures, flyers, mailers and print advertising
                        </p>
                    </div>
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