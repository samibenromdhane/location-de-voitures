<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Customer;
use Input;


class BookingController extends Controller
{
    public function acceptBooking($id)
    {
    	Booking::where('id',$id)->update(
    		[
    			'statut' => 1,
    		]);
    	return back();
    }

    public function refuseBooking($id)
    {
    	Booking::where('id',$id)->delete();
    	return back();
    }

    public function showSignUpAndBooking($car_id, $sortie, $retour)
    {
        return view('bookingForm',['car_id'=>$car_id, 'sortie'=>$sortie, 'retour'=>$retour]);
    }
     public function SignUpAndBooking()
    {
        $data = Input::all();

        $Customer = Customer::create(
            [
                'cin'       => $data['cin'],
                'fullname'  => $data['fullname'],
                'phone'     => $data['phone'],
                'email'     => $data['email'],
            ]
        );

        Booking::create(
            [
                'car_id'      => $data['car_id'],
                'customer_id' => $Customer->id,
                'date_out'    => $data['sortie'],
                'date_in'     => $data['retour'],
                'statut'      => 0,
            ]
        );
        
        return view('welcome');
    }
}
