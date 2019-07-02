
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

    <img width="100%;" src="{{ asset('public/files/service/erp.jpg') }}" alt="">

    <div class="container">
        <div style="">
            <h2 style="text-align: center; margin-top: 45px;">ERP System</h2>

            <div class="row" style="font-size: 20px;margin-top: 30px; margin-bottom: 50px;">
                <div class="col-md-6" style="margin-bottom: 30px;">
                    <p>
                        We build   applications that manages core business process such as sales, purchasing, human resources,
                        customer support, CRM and inventory. The purpose of the solution is to provide the best solution to the customer
                        through increase efficiency, streamline processes and promote a culture of collaboration in the organization.
                        We try to provide an integrated system as opposed to individual software designed specifically to a business process.
                    </p>
                </div>

                <div class="col-md-6">
                    <ul style="list-style-type:disc; margin-left: 60px; list-style-image: url('public/files/tick3.png');">

                        <li>Our end-to-end ERP services and solutions provide assistance in automating, computerizing and speeding up transactions throughout the organization.</li>
                        <li>Our ERP Solutions eliminates most of the business problems like Material shortages, Productivity enhancements, Customer service, Cash Management, Inventory problems, Quality problems, Prompt delivery, Billing etc.</li>
                        <li>Our ERP systems are designed to be flexible, helping meet the need of the companies or businesses that use them.</li>
                        <li>With customized ERP software, you don’t need to change the business flows which means ERP software.</li>

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