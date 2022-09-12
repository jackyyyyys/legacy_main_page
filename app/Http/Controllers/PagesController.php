<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //public function index()
	public function index() {
		return view('pages.home');
	}

	public function basic() {
		return view('pages.basic');
	}

	public function page1() {
		return view('pages.page1');
	}

	public function page2() {
		return view('pages.page2');
	}

	public function page3() {
		return view('pages.page3');
	}

	public function page4() {
		return view('pages.page4');
	}
}
