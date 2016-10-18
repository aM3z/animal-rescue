<?php
// if this is on haven or river
if($_SERVER['SERVER_NAME'] == 'www.cs.plu.edu' || $_SERVER['SERVER_NAME'] == 'cs.plu.edu') {
	// get path to this config file
	$path_here = "https://www.cs.plu.edu/~" . substr(__DIR__, 14);
	// remove "public_html/" from path
	$path_here = str_replace("public_html/", "", $path_here); 
} else {
	//$path_here = __DIR__;
	$path_here = "http://localhost/animal-rescue/";
}

define("BASE_PATH", $path_here);
define("CSS", $path_here . "/css");
define("IMAGES", $path_here . "/images");
define("DETAILS", $path_here . "/details");
