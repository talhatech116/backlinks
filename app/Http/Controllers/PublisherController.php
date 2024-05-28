<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index(){
        return view('publisher.home');
    }

    public function web(){
        return view('publisher.website');
    }

    public function postweb(){
        return view('publisher.postweb');
    }
}
