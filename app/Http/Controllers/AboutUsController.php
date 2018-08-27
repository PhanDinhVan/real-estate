<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function getAbout() 
    {
    	return view('pages.about_us');
    }
}
