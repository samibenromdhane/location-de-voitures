<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Brand;

class BrandController extends Controller
{
    public function addBrand()
    {
    	$data = Input::all();
    	$brand = Brand::create(
    		[
    			'name' => $data['brand']
    		]
    	);
    	return back();
    }
    public function deleteBrand()
    {
    	$data = Input::all();
    	Brand::whereId($data['brand_id'])->delete();
        return back();
    }
}
