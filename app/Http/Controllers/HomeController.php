<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactUs;
use App\Pricing;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the application pricing.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pricing()
    {
        $pricings = Pricing::all();
        return view('pricing', compact('pricings'));
    }

    /**
     * Show the application contacts.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact_us()
    {
        return view('contact_us');
    }

    public function send_message(Request $request)
    {
        Mail::to("")->send(new ContactUs($request));
    }

}
