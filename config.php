<?php
// get path to this config file
$path_here = "https://www.cs.plu.edu/~" . substr(__DIR__, 14);
// remove "public_html/" from path
$path_here = str_replace("public_html/", "", $path_here); 

define("BASE_PATH", $path_here);
define("CSS", $path_here . "/css");
define("IMAGES", $path_here . "/images");
define("DETAILS", $path_here . "/details");
