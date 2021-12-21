<?php 
error_reporting(E_ALL ^ E_WARNING); 
session_start();

include_once("locale/en.php");
include_once("includes/config.php");

$img = '
	<div class="col-md-12 display-flex items-align-center">
                    <img src="./images/logo.png" alt="INTUIT RESEARCH" style="width:20%;">
                    <h5 class="float-right mt-3">NUDGE TEST PILOT</h4>
                </div>
';

function cleanstr($string) {
   //$string = str_replace(' ', '|', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\- ]/', '|', $string); // Removes special chars.
}

?>