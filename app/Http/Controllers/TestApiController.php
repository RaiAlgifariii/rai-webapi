<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestApiController extends Controller
{
    //
    public function test()
    {
   
    	return \App\Student::paginate(2);   
    	 }
}
