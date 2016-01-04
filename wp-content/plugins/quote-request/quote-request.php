<?php
/*
Plugin Name: DJI - Request a Quote
Description: Custom plugin to generate a quote request for a new illustration that emails both the visitor and the site admin. Also stores a copy to the database.
Author: John Dempsey
Author URI: http://dempseyj-illustrations.com
Version: 1.0
*/

//echo "Plugin Active";

//	Form on page one
//	Reloads page with a query string value
//	Give on Screen and Email Estimate - email goes to requestee and myself
//	Saves to database in a seperate table? 


function email_quote(){
	
	
}



function generate_quote(){
	
	
}


function quote_form(){
	
	$form = '<h3>Quote Form</h3>';
	$form .='<form id="dji-request-quote">';
	$form .='<label>Name: </label></br>';
	$form .='<input id="name" type="text"></br>';
	$form .='<label>Email: </label></br>';
	$form .='<input id="email" type="text"></br>';
	$form .='<h3>Illustration / Commissions Details</h3>';
	$form .='<label>Title: </label></br>';
	$form .='<input id="" type="text"></br>';
	$form .='<label>Brief / Description: </label></br>';
	$form .='<textarea id="brief" ></textarea></br>';
	$form .='<label>Artwork Type: </label></br>';
	$form .='<select form="dji-request-quote">
  <option value="digital">Digital Illustration</option>
  <option value="traditional">Traditional</option>
</select><br/>';
	$form .='<label>Artwork Size: </label></br>';
	$form .='<select form="dji-request-quote">
  <option value="a4">A4</option>
  <option value="a3">A3</option>
</select></br>';
	$form .='<label>Due Date: </label></br>';
	$form .='<input type="date" name="dueDate">';
	$form .='</form>';
	return $form;
}

$shortcode_name = 'request_quote';

add_shortcode( $shortcode_name, "quote_form");









?>