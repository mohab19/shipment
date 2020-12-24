<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactUs;
use App\Pricing;
use App\Settings;

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
        $email = Settings::where('name', 'email')->first()->value;
        Mail::to($email)->send(new ContactUs($request));
    }

}
