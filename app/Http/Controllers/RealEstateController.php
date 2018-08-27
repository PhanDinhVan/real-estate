<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealEstateController extends Controller
{
    //
    public function getRealEstate() 
    {
    	return view('pages.real_estate');
    }

    public function getDetailRealEstate() {
    	return view('pages.detail_real_estate');
    }
}
