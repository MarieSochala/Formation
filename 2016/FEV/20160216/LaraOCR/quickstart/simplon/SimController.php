<?php

namespace Simplon;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SimController extends Controller
{
    public function getIndex(){
    	return "coucou";
    }
}
