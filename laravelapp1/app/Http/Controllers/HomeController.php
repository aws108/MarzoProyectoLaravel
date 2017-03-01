<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHome(){
		//return ("You're at home man!");
		return redirect()->action('CatalogController@index');
	}
	
	
	
}
