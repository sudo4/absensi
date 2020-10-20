<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrscanController extends Controller
{
    public function index() {
    	return view('qrscan.index');
    }
    
}
