<?php

Route::namespace('Api')->group(function () {
	Route::get('/topics/top', 'TopicsController@top');
	Route::get('/topics/new', 'TopicsController@new');
	Route::get('/topics/topic/{slug}', 'TopicsController@show');
});
