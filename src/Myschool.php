<?php 
namespace Wonderapp\Yellowapp;

use Carbon\Carbon;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;

class Myschool {


  public function __construct($tags = false)
    {
       
    }



public  function render(){
		$timezone = 'UTC';
	$current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
            return  $current_time ;
}





}







?>