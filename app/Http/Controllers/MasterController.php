<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*use App\Http\Requests;*/
use App\Http\Controllers\Controller;

class MasterController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }

    public function form(Request $request)
    {
    	$name = $request->input('name');
    	//echo $name;
    	$data['name'] = $name;
    	return view('welcomename', $data);
    }
}
