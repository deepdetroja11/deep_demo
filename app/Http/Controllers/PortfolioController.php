<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function getAbout(){
        return view('portfolio.about');
    }

    public function getContact(){
        return view('portfolio.contact');
    }

    public function getPortfolio(){
        return view('portfolio.portfolio');
    }


}
