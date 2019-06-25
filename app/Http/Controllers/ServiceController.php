<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function web_app(){
        return view('Site.service.web_application');
    }

    public function erp(){
        return view('Site.service.erp');
    }

    public function e_commerce(){
        return view('Site.service.eCommerce');
    }

    public function mobile_app(){
        return view('Site.service.mobileapp');
    }

    public function digital_marketing(){
        return view('Site.service.digitalMarketing');
    }

    public function sms(){
        return view('Site.service.sms');
    }

    public function graphics(){
        return view('Site.service.graphics');
    }

    public function hosting_domain(){
        return view('Site.hosting');
    }
}
