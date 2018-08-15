<?php



Route::get('calculator',function(){
  echo "Hello from calculator package. Luke, I'm your father :)";
});

Route::get('add/{a}/{b}', 'eskindir\calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'eskindir\calculator\CalculatorController@subtract');
