<?php
	Route::any(Config::get('ucenter::url'), function(){
		return \Wehnhew\Ucenter\UcenterApi::execute();
	});
?>