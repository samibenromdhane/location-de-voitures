<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Brand;
use App\Booking;
use App\Customer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showAdmin()
    {
        $brands = Brand::all();
        $cars = Car::all();
        $bookings = Booking::where('statut','==', 0)->with(['customer','car'])->get();
        return view('adminspace',['brands' => $brands, 'cars'=>$cars, 'bookings' =>$bookings]);
    }
}
