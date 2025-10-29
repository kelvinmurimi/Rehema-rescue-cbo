<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    //
    public function index()
    {
        $title = "Rehema Rescue CBO - Home";
        return view('pages.home', compact('title'));
    }
    //About
    public function about()
    {
        $title = "Rehema Rescue CBO - About Us";
        return view('pages.about', compact('title'));
    }
    public function contact()
    {
        $title = "Rehema Rescue CBO - Contact Us";
        return view('pages.contact', compact('title'));
    }
    //Programs
    public function programs()
    {
        $title = "Rehema Rescue CBO - Our Programs";
        return view('pages.programs', compact('title'));
    }
    //Events
    public function events()
    {
        $title = "Rehema Rescue CBO - Our Events";
        return view('pages.events', compact('title'));
    }
    //Donation
    public function donation()
    {
        $title = "Rehema Rescue CBO - Donation";
        return view('pages.donation', compact('title'));
    }
    //Volunteer
    public function volunteer()
    {
        $title = "Rehema Rescue CBO - Volunteer";
        return view('pages.volunteer', compact('title'));
    }
    //FAQs
    public function faqs()
    {
        $title = "Rehema Rescue CBO - FAQs";
        return view('pages.faqs', compact('title'));
    }
    //privacy
    public function privacy()
    {
        $title = "Rehema Rescue CBO - Privacy Policy";
        return view('privacypolicy', compact('title'));
    }
    //partner

    public function partners()
    {
        $title = "Rehema Rescue CBO - Our Partners";
        return view('pages.partners', compact('title'));
    }
    //partner
    public function partner()
    {
        $title = "Rehema Rescue CBO - Partner With Us";
        return view('pages.partner', compact('title'));
    }
    //beneficiaries
    public function beneficiaries()
    {
        $title = "Rehema Rescue CBO - Beneficiaries";
        return view('pages.beneficiaries', compact('title'));
    }
    //transparency
    public function transparency()
    {
        $title = "Rehema Rescue CBO - Transparency & Management";
        return view('pages.transparency', compact('title'));
    }

    //events and stories
    public function eventsAndStories()
    {
        $title = "Events and Stories";
        return view('pages.events', compact('title'));
    }

}
