<?php

namespace App\Http\Controllers;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request) {
		$contents = Content::all();
		return view('dashboard', compact('contents'));
	}

}
