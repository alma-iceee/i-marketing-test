<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\PortfolioFilter;
use App\Teammate;
use App\Testimonial;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $teammates = Teammate::all();
        $testimonials = Testimonial::all();
        $portfolios = Portfolio::all();
        $portfolio_filters = PortfolioFilter::all();
        return view('index', compact('teammates', 'testimonials', 'portfolios', 'portfolio_filters'));
    }

    public function getJson()
    {
        return array(
            'email' => $_POST["email"],
        );
    }
}
