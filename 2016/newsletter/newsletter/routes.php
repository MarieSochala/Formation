<?php

Route::group(['middleware' => ['web']], function(){

});

Route::get('{newsletter}.html', function($newsletter){
	return view('newsletter::'.$newsletter);

});