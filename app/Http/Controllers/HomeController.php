<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('pricing');
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

}
