<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(){

		$tasks = [
					"finish project",
					"add to repository",
					"install libraries",
					"<script>alert('test')</script>",
					'<script>window.location.href = "http://www.telegrafi.com/";</script>'

				];
		$project_title = "Timeframe";
	    return view('home',compact("tasks","project_title"));
    }

    function contact(){
    	$countries = [
  			"Albania",
  			"Kosovo",
  			"USA",
  			"Canada",
  			"Australia",
  			"Germany",

    	];
    	sort($countries);
    	return view("contact",compact('countries'));
    }
}
