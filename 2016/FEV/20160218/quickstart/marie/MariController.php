<?php

namespace Marie;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MariController extends Controller
{
   public function getIndex(){
   	return "Hello";
   }
}
