<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Photo;
use App\Booking;
use Input;
use Image;
use File;
use \Carbon;

class CarController extends Controller
{
    public function addCar()
    {
    	$data = Input::all();

       // dd($data['photo']);
        $car = Car::create(
            [
                'brand_id'    => $data['brand_id'],
                'name'        => $data['name'],
                'color'       => $data['color'],
                'fuel'        => $data['fuel'],
                'places'      => $data['places'],
                'kilometrage' => $data['kilometrage'],
                'power'       => $data['power'],
                'price'       => $data['price'],
                'matricule'   => $data['matricule'],
                'statut'      => $data['statut'],
                'comments'    => $data['comments']
            ]
        );


        if($data['photo'])
         {

            foreach($data['photo'] as $image)
            {
                $photo = 'photo-' . str_random(5) . time() . '.' . $image->getClientOriginalExtension();
                $fullImagePath = public_path('storage/' . $photo);
                Image::make($image->getRealPath())->save($fullImagePath);
                $photoPath = 'storage/' . $photo;  

                Photo::create(
                [
                    'name'  => $photoPath,
                    'car_id'=> $car->id
                ]
                );
            }
         }	        

          return back();

    }
    public function deleteCar()
    {
    	$data = Input::all();
    	Car::whereId($data['car_id'])->delete();
        return back();
    }
    public function editCar()
    {
    	$data = Input::all();
    	Car::whereId($data['id'])->update(
    	   [
    	   		'brand_id' => $data['brand_id'],
    			'name'      => $data['name'],
    			'color'      => $data['color'],
    		    'fuel'    => $data['fuel'],
    			'places'   => $data['places'],
                'kilometrage'   => $data['kilometrage'],
    			'power'         => $data['power'],
    			'price'   => $data['price'],
    			'matricule' => $data['matricule'],
    			'statut' => $data['statut'],
    			'comments' => $data['comments']
    		]
    	);
        return back();
    }

    public function searchCars()
    {
        $data = Input::all();

        //dd($data['date_sortie']);
        $date_sortie = Carbon\Carbon::createFromFormat('d.m.Y', $data['date_sortie'])->format('Y-m-d');


        $date_retour = Carbon\Carbon::createFromFormat('d.m.Y', $data['date_retour'])->format('Y-m-d');


        $cars = Car::with('brand')->with('photos')->whereHas('bookings', function($query) use ($date_sortie, $date_retour)
            {
                $query->where('date_out','>',$date_sortie)->where('date_out','>',$date_retour);
                $query->where('date_in','<',$date_sortie)->where('date_in','<',$date_retour);
            }
        )->orwhereDoesntHave('bookings')->get();

        return view('showCars',['cars'=>$cars, 'date_sortie'=>$date_sortie, 'date_retour'=>$date_retour]);
    }
}
