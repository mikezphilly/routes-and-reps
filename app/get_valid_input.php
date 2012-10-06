<?php

// function to clean/check/validate user input 
// removes whitespace, slashes and html characters
function clean_input($data) {
  
  // this is used to convert lettered routes
  // to their card id's.  this hides the internal
  // id's and also makes the url's more friendly
  $letter_routes = array(
			 "47m" => "471",              
			 "bso" => "701",           
			 "c" => "702",              
			 "g" => "703",              
			 "hxh" => "705",              
			 "j" => "706",              
			 "k" => "707",              
			 "l" => "710",              
			 "mfo" => "711",
			 "market frankford owl" => "711", 
			 "broad street line owl" => "701", 
			 "r" => "712",              
			 "lucy" => "3162",
			  "h" => "801",	
			 "xh" => "802"
			 );
    
  // array which stores a list of valid options...basically each legit route, if the 
  // user input does not explicity match one of these values then an error message 
  // is displayed to the end user.
  $valid_input = array(
		       "1",
		       "2",
		       "3",
			   "4",
		       "5",
		       "6",
		       "7",
		       "8",
		       "9",
		       "12",
		       "14",
			   "16",
		       "17",
		       "18",
		       "19",
		       "20",
		       "21",
		       "22",
		       "23",
		       "24",
		       "25",
		       "26",
		       "27",
		       "28",
		       "29",
		       "30",
		       "31",
		       "32",
		       "33",
		       "35",
		       "37",
		       "38",
		       "39",
		       "40",
		       "42",
		       "43",
		       "44",
		       "46",
		       "47",
		       "48",
		       "50",
		       "52",
		       "53",
		       "54",
		       "55",
		       "56",
		       "57",
		       "58",
		       "59",
		       "60",
		       "61",
		       "62",
		       "64",
		       "65",
		       "66",
		       "67",
		       "68",
		       "70",
		       "71",
		       "73",
		       "75",
		       "77",
		       "78",
		       "79",
		       "80",
		       "84",
		       "88",
		       "89",
		       "90",
		       "91",
		       "92",
		       "93",
		       "94",
		       "95",
		       "96",
		       "97",
		       "98",
		       "99",
		       "103",
		       "104",
		       "105",
		       "106",
		       "107",
		       "108",
		       "109",
		       "110",
		       "111",
		       "112",
		       "113",
		       "114",
		       "115",
		       "116",
		       "117",
		       "118",
		       "119",
		       "120",
		       "123",
		       "124",
		       "125",
			   "126",
		       "127",
		       "128",
		       "129",
		       "130",
		       "131",
		       "132",
			   "133",
		       "134",
		       "139",
		       "150",
		       "201",
		       "204",
		       "205",
		       "206",
		       "304",
		       "306",
		       "310",
		       "314",
		       "10",
		       "11",
		       "13",
		       "15",
		       "34",
		       "36",
		       "101",
		       "102",
		       "47m",
			   "47M",
		       "bso",
			   "market frankford owl",
			 "broad street line owl", 
		       "c",
		       "g",
		       "hxh",
			   "h",
			   "xh",
		       "j",
		       "k",
		       "l",
		       "mfo",
		       "r",
		       "lucy"
		       );
  
  
  // change the input to lower case, just in case
  // any of the lettered route names were written in caps.
  // after that filter, sanitze and strip out 
  // illegal characters that may be in user input
  $data = strtolower($data);
  filter_var($data, FILTER_SANITIZE_NUMBER_INT);
  filter_var($data, FILTER_VALIDATE_INT);
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);  
   
  // validate user input, it must mach a legit route
  // if not the page will just reload with selection dropdown
  if (!in_array($data, $valid_input)){
    $data = null;
  }

  // this routine replaces lettered routes with their internal route id
  if ($letter_routes[$data]){
    $data = $letter_routes[$data];
  }

  return $data;
}
?>
