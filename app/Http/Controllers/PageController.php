<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    public function intro() {
    	return view('pages.intro');
    }
	public function contact() {
		return view('pages.contact');
	}
	public function partners() {
		return view('pages.partners');
	}
}
