<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    //
    public function index()
    {
        $title = "RehemarescueCBO - Home";
        return view('pages.home', compact('title'));
    }
    //About
    public function about()
    {
        $title = "RehemarescueCBO - About Us";
        return view('pages.about', compact('title'));
    }
    public function contact()
    {
        $title = "RehemarescueCBO - Contact Us";
        return view('pages.contact', compact('title'));
    }
    //Programs
    public function programs()
    {
        $title = "RehemarescueCBO - Our Programs";
        return view('pages.programs', compact('title'));
    }
    //Events
    public function events()
    {
        $title = "RehemarescueCBO - Our Events";
        return view('pages.events', compact('title'));
    }
    //Donation
    public function donation()
    {
        $title = "RehemarescueCBO - Donation";
        return view('pages.donation', compact('title'));
    }
    //Volunteer
    public function volunteer()
    {
        $title = "RehemarescueCBO - Volunteer";
        return view('pages.volunteer', compact('title'));
    }
    //FAQs
    public function faqs()
    {
        $title = "RehemarescueCBO - FAQs";
        return view('pages.faqs', compact('title'));
    }
    //privacy
    public function privacy()
    {
        $title = "RehemarescueCBO - Privacy Policy";
        return view('pages.privacy', compact('title'));
    }








    
}
