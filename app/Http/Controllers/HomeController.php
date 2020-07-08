<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Content;
use App\Count;
use App\Map;
use App\Portfolio;
use App\PortfolioFilter;
use App\Service;
use App\Teammate;
use App\Testimonial;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $contents = Content::all();
        $abouts = About::all();
        $services = Service::all();
        $portfolio_filters = PortfolioFilter::all();
        $portfolios = Portfolio::all();
        $testimonials = Testimonial::all();
        $teammates = Teammate::all();
        $contacts = Contact::all();
        $maps = Map::all();
        $counts = Count::all();

        return view('index', compact(
            'abouts',
            'services',
            'portfolio_filters',
            'portfolios',
            'testimonials',
            'teammates',
            'contacts',
            'maps',
            'contents',
            'counts'
        ));
    }

    public function getJsonSendMessage()
    {
        return array(
            'name' => $_POST["name"],
            'email' => $_POST["email"],
            'subject' => $_POST["subject"],
            'message' => $_POST["message"],
        );
    }

    public function getJsonSubscribe()
    {
        return array(
            'email' => $_POST["email"],
        );
    }
}
