<?php
 
  Route::get('/',function() { return view('Index1');});
  Route::get('book', 'booksController@index');
  Route::get('book/(:number)', 'booksController@show');
  Route::get('author','authorController@index');
  Route::get('author/(:number)', 'authorController@show');
  Route::get('publisher', 'publisherController@index');
  Route::get('publisher/(:number)', 'publisherController@show');
  Route::dispatch();
?>
