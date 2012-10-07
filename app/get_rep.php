<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SEPTA | Routes and Reps</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./inc/bootstrap.css" rel="stylesheet">
    <link href="./inc/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="./">Routes and Reps</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
<!--              <li class="active"><a href="./index.html">Home</a></li>  -->
              <li><a href="./about">About</a></li>
 <!--             <li><a href="#contact">Contact</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
-->
            </ul>
<!--
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
-->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit" align="center">
        <h2>SEPTA | Routes and Reps</h2>
        <p>
			<img src="./logo.png" align="center"><br />
			Find elected officials for any <a href="http://www.septa.org">SEPTA</a> route.
		</p>
        <div class="clearfix">

<form action="./get_rep.php" method="get">
 <div class="input">
<select name="route" onchange="loadmap(this.value);" class="input-xxlarge">

<option value="">Select Route</option>

<optgroup label="Trolleys">
<option value="10">10 - 13th-Market to 63rd-Malvern</option>
<option value="11">11 - 13th-Market to Darby Transportation Center</option>
<option value="13">13 - 13th-Market to Yeadon and Darby Transportation Center</option>
<option value="15">15 - 63rd-Girard to Richmond-Westmoreland</option>
<option value="34">34 - 13th-Market to 61st-Baltimore</option>
<option value="36">36 - 13th-Market to 80th-Eastwick</option>
<option value="101">101 - Media to 69th Street Transportation Center</option>
<option value="102">102 - Sharon Hill to 69th Street Transportation Center</option>
</optgroup>


<optgroup label="Buses">
<option value="1">1 - Parx Casino to 54th City Line</option>
<option value="2">2 - Pulaski/Hunting Park to 20th/Johnston</option>
<option value="3">3 - 33rd/C.B.Moore to FTC</option>
<option value="5">5 - Front Market to FTC</option>
<option value="6">6 - Cheltenham/Ogontz Loop to Broad Olney</option>
<option value="7">7 - 33rd/Dauphin to Pier 70</option>
<option value="8">8 - Broad Olney to FTC</option>
<option value="9">9 - Ridge/Cathedral to Independence Mall</option>
<option value="12">12 - 50th/Woodland to 3rd/Pine</option>
<option value="14">14 - Oxford Valley & Neshaminy Malls to FTC</option>
<option value="17">17 - Front Market to 20th/Johnston</option>
<option value="18">18 - Cedarbrook {Plaza to Fox Chase Loop</option>
<option value="19">19 - Torresdale Station to FTC</option>
<option value="20">20 - Franklin Mills Mall to FTC </option>
<option value="21">21 - 69th St to Penns Landing</option>
<option value="22">22 - Warminster to Broad Olney</option>
<option value="23">23 - Bethlehem Pike to Broad Oregon</option>
<option value="24">24 - Fox Chase to FTC</option>
<option value="25">25 - Pier 70 to FTC</option>
<option value="26">26 - Chelten/Morris to FTC</option>
<option value="27">27 - Plymouth Meeting Mall to Broad/Washington</option>
<option value="28">28 - 10th/Nedro to Cottman Loop</option>
<option value="29">29 - 33rd/Dickinson to Pier 70</option>
<option value="30">30 - 69th St to 30th St</option>
<option value="31">31 - 76th/City to City Hall</option>
<option value="32">32 - Ridge/Lyceum to Broad/Washington</option>
<option value="33">33 - 23rd/Venango to Penns Landing</option>
<option value="35">35 - Wissahickon Loop to Ridge/Fountain</option>
<option value="37">37 - Broad/Passyunk to CTC</option>
<option value="38">38 - Wissahickon Loop to 5th/Market</option>
<option value="39">39 - 33rd/Dauphin to Richmond/Cumberland</option>
<option value="40">40 - 49th/Parkside to 2nd/Lombard</option>
<option value="42">42 - Wycombe to Penns Landing</option>
<option value="43">43 - 49th/Parkside to Richmond/Cumberland</option>
<option value="44">44 - Ardmore Station to 5th/Market</option>
<option value="46">46 - 63rd/Malvern to 58th/Baltimore</option>
<option value="47">47 - Godfrey Loop to Whitman Plaza</option>
<option value="48">48 - 27th/Allegheny to Front/Market</option>
<option value="50">50 - Parx Casino to FTC</option>
<option value="52">52 - 49th/Woodland to 54th/City</option>
<option value="53">53 - Broad/Hunting Park to Wayne/Carpenter</option>
<option value="54">54 - 33rd/Dauphin to Richmond/Cambria</option>
<option value="55">55 - Doylestown to Broad/Olney</option>
<option value="56">56 - 23rd/Venango to Cottman Loop</option>
<option value="57">57 - Fern Rock to Whitman Plaza</option>
<option value="58">58 - Neshaminy Mall to FTC</option>
<option value="59">59 - Bells Corner to Arrott St</option>
<option value="60">60 - Richmond/Westmoreland to 35th/Allegheny</option>
<option value="61">61 - Roxborough & Manayunk to 9th and Market</option>
<option value="62">62 - Andorra Rox & Manayunk to 9th and Market</option>
<option value="64">64 - 49th/Parkside to Pier 70</option>
<option value="65">65 - 69th St to Germantown/Chelten</option>
<option value="66">66 - Frankford City Line Loop to FTC</option>
<option value="67">67 - Franklin Mills to FTC</option>
<option value="68">68 - Broad/Oregon to UPS</option>
<option value="70">70 - 10th/Nedro to Cottman Loop</option>
<option value="71">71 - Broad/Pattison to Navy Base</option>
<option value="73">73 - Richmond/Westmoreland to FTC</option>
<option value="75">75 - Wayne/Roberts to Arrott St</option>
<option value="77">77 - Bethlehem Pike to St. Vincent</option>
<option value="79">79 - 29th/Snyder to Columbus/Snyder</option>
<option value="80">80 - Broad Olney to Blair Mill Rd.</option>
<option value="84">84 - Franklin Mills to FTC</option>
<option value="88">88 - Holy Redeemer Hospital to FTC</option>
<option value="89">89 - Front/Dauphin to Arrott St</option>
<option value="90">90 - NTC to Plymouth Meeting Mall</option>
<option value="91">91 - NTC to Graterford</option>
<option value="92">92 - Plaza at KOP to Parkway Shopping Center</option>
<option value="93">93 - NTC to Montgomery County Comm. College</option>
<option value="94">94 - Bethlehem Pike to Montgomery Mall</option>
<option value="95">95 - Plymouth Meeting Mall to Gulph Mills</option>
<option value="96">96 - NTC to Lansdale Train Station</option>
<option value="97">97 - NTC to Barren Hill</option>
<option value="98">98 - NTC to Willow Grove Mall</option>
<option value="99">99 - NTC to Phoenixville</option>
<option value="124">124 - 13th/Market to Chesterbrook</option>
<option value="127">127 - Neshaminy Mall to Trenton TC </option>
<option value="128">128 - Oxford Valley Mall to Neshaminy Mall</option>
<option value="129">129 - Oxford Valley Mall to Morrell Park</option>
<option value="130">130 - Franklin Mills Mall to Bucks County Comm. College</option>
<option value="131">131 - NTC to Audubon</option>
<option value="132">132 - Montgomery Mall to Landis Market</option>
<option value="134">134 - Chestnut Hill Loop to Montgomery Mall</option>
<option value="139">139 - Plaza at KOP to Premimum Outlets</option>
<option value="150">150 - Plymouth Meeting Mall to Parx Casino</option>
<option value="201">201 - Ft Wash Sta to Ft Wash Office </option>
<option value="206">206 - Paoli Station to Great Valley </option>
<option value="304">304 - Frankford City Line to Bristol Train Station</option>
<option value="310">310 - Horsham Breeze</option>
<option value="103">103 - 69th St Term to Ardmore </option>
<option value="104">104 - 69th St Term to W Chester Univ</option>
<option value="105">105 - 69th St to Paoli Memorial Hospital</option>
<option value="106">106 - 69th St Term to Ardmore </option>
<option value="107">107 - 69th St Term to Lawrence Pk </option>
<option value="108">108 - 69th St-Elmwood-Airport-UPS </option>
<option value="109">109 - 69th St to CTC</option>
<option value="110">110 - 69th St Term to Penn State </option>
<option value="111">111 - 69th St Term to Chadds Ford </option>
<option value="112">112 - 69th St to Delaware County Comm. College</option>
<option value="113">113 - 69th St Term to Tri State Mall</option>
<option value="114">114 - Darby to I - 95 Industrial Park</option>
<option value="115">115 - Airport to Ardmore </option>
<option value="116">116 - 69th St Term to USPS </option>
<option value="117">117 - I - 95 Industrial Park to Penn State</option>
<option value="118">118 - CTC to Newtown Square</option>
<option value="119">119 - Harrah s to Cheyney University</option>
<option value="120">120 - 69th St Term to Cheyney Univer</option>
<option value="123">123 - 69th St Term-King of Prussia </option>
<option value="125">125 - 13th/Market to Valley Forge</option>
</optgroup>


<optgroup label="COMING SOON...More Routes">
<option value="316">316 - LUCY Loops</option>
<option value="471">47M - 9th/Oregon to 7th Spring Garden</option>
<option value="701">BSO - Fern Rock to Broad/Pattison</option>
<option value="702">C - Ogontz Loop & Fern Rock to Brd/Pattison</option>
<option value="703">G - Food Center to Lankenau Hospital</option>
<option value="705">HXH - Broad/Erie to Cheltenham Ogontz Loop</option>
<option value="706">J - Richmond/Orthodox to Chelten/Wissahickon</option>
<option value="707">K - Ridge/Midvale to Arrott St</option>
<option value="710">L - Plymouth Meeting & Erdenhiem to Broad Olney</option>
<option value="711">MFO - 69th St to FTC</option>
<option value="712">R - WTC to FTC</option>
<option value="1420">14-20 - FRANKFORD-NESH-OX VAL </option>
<option value="1967">19-67 - Frankford & Bust to Franklin M</option>
<option value="2050">20-50 - FKD-ACD-FRKMILLS-PHILLY PARK C</option>
<option value="2142">21-42 - 69th St Terminal To Penn s Lan</option>
<option value="612">61-62 - Andorra/Roxborough Manayunk to 9th and Market</option>
<option value="3161">LUCYGO - LUCY Gold Loop </option>
<option value="3162">LUCYGR - LUCY Green Loop</option>
</optgroup>


<optgroup label="COMING SOON....High Speed">
<option value="BSS">Broad Street Line</option>
<option value="BSO">Broad Street Line | Nite Owl</option> 
<option value="MFL">Market-Frankford Line</option>
<option value="MFO">Market-Frankford Line | Nite Owl</option>
<option value="NHSL">Norristown High-Speed Line</option>
</optgroup>

<optgroup label="COMING SOON....Regional Rail">
<option value="R4S:Airport">Airport</option>
<option value="R7N:Chestnut Hill East">Chestnut Hill East</option>
<option value="R8S:Chestnut Hill West">Chestnut Hill West</option>
<option value="R0S:Cynwyd">Cynwyd</option>
<option value="R8N:Fox Chase">Fox Chase</option>
<option value="R5N:Lansdale/Doylestown">Lansdale/Doylestown</option>
<option value="R6N:Manayunk/Norristown">Manayunk/Norristown</option>
<option value="R3S:Media/Elwyn">Media/Elwyn</option>
<option value="R5S:Paoli/Thorndale">Paoli/Thorndale</option>
<option value="R7S:Trenton">Trenton</option>
<option value="R4N:Warminster">Warminster</option>
<option value="R3N:West Trenton">West Trenton</option>
<option value="R2S:Wilmington/Newark">Wilmington/Newark</option>
<optgroup>
</select>

</form>

</div>
</div>
</div>

<?php 
/*
hack that gets routes, gets corresponding districts from the db
and gets rep data.  Currently only does congressional districts from
http://services.sunlightlabs.com/docs/congressapi/legislators.get(List)/
Additional api's to include: http://www.azavea.com/products/cicero/
*/

// include and input validation
include("/var/www/reps/authentication.php");
include("/var/www/reps/get_valid_input.php");
if (isset($_GET['route'])){
  $route = clean_input($_GET['route']);
}

//=======================
if ($route){

  $showfooter=1;

// Obtain a cicero token:
$response = get_response('http://cicero.azavea.com/v3.1/token/new.json', "username=$username&password=$password");

// Check to see if the token was obtained okay:
if($response->success != True):
    exit('Could not obtain token.');
endif;

// The token and user obtained are used for other API calls:
$token = $response->token;
$user = $response->user;

// route/district loop up table, would be nice to have cartodb do it on the fly				    
$result = mysql_query("SELECT * FROM routes where rt_name = '". $route."'");
while($row = mysql_fetch_array($result)) {
	$dis_cong = $row['dis_pa_congress'];
	$dis_senate = $row['dis_pa_senate'];
	$dis_house = $row['dis_pa_house'];
	$dis_city = $row['dis_city_council'];
}

mysql_close($con);

// who's storing comma seperated values in the db? 
$dis_cong = explode(',',$dis_cong);
$dis_senate = explode(',',$dis_senate);
$dis_house = explode(',',$dis_house);
$dis_city = explode(',',$dis_city);

  // count the number of popovers
  $popcount=1;
?>

		<!-- Route Name Header -->
      <div class="row" align="center">
        <div class="span12"align="center">
          <h2>Route: <?php echo $route; ?> </h2>
        </div>
		</div>

		<!-- --------------------- CONGRESSIONAL DISTRICTS --------------------- -->
      <!-- DISTRICT MAP AND REP DATA TABLE -->
      <div class="row">
        <div class="span6">
          <h2>Congressional Map</h2>
			<?php print_dist_map($dis_cong,'pacongressional2011_', $route, 'Congressional Districts'); ?>
        </div>

        <div class="span6">
        <h2>Congressional Members</h2>
			
			<table class="table table-striped">				
				<thead><tr><th>District</th><th>Party</th><th>Representative</th><th>Rep Info</th></tr></thead>
				<tbody>
			<?php
				sort($dis_cong); 
				foreach ($dis_cong as $dis){
				  get_cong_rep($dis,$popcount);
					$popcount++;
				}
			?>
				</tbody>
				</table>

       </div>
      </div>

      <hr>

      <!-- --------------------- PA SENATE --------------------- -->	
      <!-- DISTRICT MAP AND REP DATA TABLE -->
      <div class="row">
        <div class="span6">
          <h2>PA Senate Map</h2>
			<?php print_dist_map($dis_senate,'pasenatorial2011_01', $route, 'PA Senate Districts'); ?>
        </div>

        <div class="span6">
        <h2>PA Senate Members</h2>
			
			<table class="table table-striped">				
				<thead><tr><th>District</th><th>Party</th><th>Representative</th><th>Rep Info</th></tr></thead>
				<tbody>
			<?php
				sort($dis_senate); 
				foreach ($dis_senate as $dis){
				  get_cicero($dis, $token, $user, 'STATE_UPPER', 'pasenatorial2011_01',$popcount);
				  $popcount++;
				}
			?>
				</tbody>
				</table>
       </div>
      </div>
      <hr>

      <!-- --------------------- PA HOUSE  --------------------- -->	
      <!-- DISTRICT MAP AND REP DATA TABLE -->
      <div class="row">
        <div class="span6">
          <h2>PA House Map</h2>
			<?php print_dist_map($dis_house,'pahouse2011_01', $route, 'PA House Districts'); ?>
        </div>

        <div class="span6">
        <h2>PA House Members</h2>
			
			<table class="table table-striped">				
				<thead><tr><th>District</th><th>Party</th><th>Representative</th><th>Rep Info</th></tr></thead>
				<tbody>
			<?php
				sort($dis_house); 
				foreach ($dis_house as $dis){
				  get_cicero($dis, $token, $user, 'STATE_LOWER', 'pahouse2011_01', $popcount);
				  $popcount++;
				}
			?>
				</tbody>
				</table>
       </div>
      </div>
      <hr>

      <!-- ---------------------  CITY COUNCIL  --------------------- -->	
      <!-- DISTRICT MAP AND REP DATA TABLE -->
      <div class="row">
        <div class="span6">
          <h2>City Council Map</h2>
			<?php print_dist_map($dis_city,'philadelphiacouncild', $route, 'Philadelphia City Council Districts'); ?>
        </div>

        <div class="span6">
        <h2>City Council Members</h2>
			
			<table class="table table-striped">				
				<thead><tr><th>District</th><th>Party</th><th>Representative</th><th>Rep Info</th></tr></thead>
				<tbody>
			<?php
				sort($dis_city); 
				foreach ($dis_city as $dis){
				  get_cicero($dis, $token, $user, 'LOCAL', 'philadelphiacouncild',$popcount);
				  $popcount++;
				}
			?>
				</tbody>
				</table>
       </div>
      </div>
      <hr>

<?php

				    } // if ($route)
				    else {
				      //do nothing
				    }

//---------------------------- functions ------------------------------------

// routines to print district map
function print_dist_map($dis_cong, $which_dis, $route, $title){
	if ($which_dis=="philadelphiacouncild"){
		$tbl_name="dist_num";
	}
	else {
		$tbl_name="leg_distri";
	}

	// format query for "in ()" - dont place comma at the end
	$dcount = count($dis_cong);
	for ($i=1;$i<=$dcount;$i++){
		if ($i==$dcount){
			$cong_map_q .= "'".$dis_cong[$i-1]."'";
		}
		else {
			$cong_map_q .= "'".$dis_cong[$i-1]."',";
		}
	}

	echo "<p><iframe height='350' width=100%' src=\"./route_dis_map.php?route=".$route."&tbl=".$which_dis."&title=".$title."&dis=".$cong_map_q."\">
	</iframe>
	</p>
	<p>
	<a target =\"newin\" class=\"btn\" href=\"./route_dis_map.php?
	route=".$route."&tbl=".$which_dis."&title=".$title."&dis=".$cong_map_q."\">
	full screen</a></p>";
}


//----------------------------------------------------------------
// Function to do our API calls (returns object made from JSON)
function get_response($url, $postfields=''){
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, True);
    if($postfields !== ''):
        curl_setopt ($ch, CURLOPT_POST, True);
        curl_setopt ($ch, CURLOPT_POSTFIELDS, $postfields);
    endif;
    $json = curl_exec($ch);
    curl_close($ch);
    return json_decode($json);
}


// cicero api to get all reps EXCEPT Congressional District Reps
				    function get_cicero($dis, $token, $user, $type, $dbtable,$popcount){

	// fields names are different for city council district numbers
	if ($dbtable=="philadelphiacouncild"){
		$field="dist_num";
	}
	else {
		$field="leg_distri";
	}

	// cicero needs a location, so we get a lat/long that we know is inside the districts shape from CartoDB
	$url = "http://mikezphilly.cartodb.com/api/v2/sql?q=SELECT%20ST_AsText(ST_PointOnSurface(the_geom::geometry))%20from%20".$dbtable."%20where%20".$field."='".$dis."'";

	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,$url);
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
	curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
	$string = curl_exec($curl_handle);
	curl_close($curl_handle);

	$json_a=json_decode($string,true);

	// get the point returned from cartodb and clean it up
	$cord = $json_a["rows"][0]["st_astext"];
	$cord = str_replace("POINT", "", $cord);
	$cord = str_replace("(", "", $cord);
	$cord = str_replace(")", "", $cord);
	$cord = explode(" ", $cord);
	$lng = $cord[0]; 
	$lat = $cord[1];

	// format query string for cicero and send it to the api
	$query_string = "lat=".$lat."&lon=".$lng."&district_type=".$type."&district_id=".$dis."&state=PA&token=$token&user=$user&format=json";
	$official_response = get_response("http://cicero.azavea.com/v3.1/official?$query_string");

	echo "<tr><td>". $dis ."</td><td>";

	// Print information for each official:
	foreach($official_response->response->results->officials as $o):
		switch ($o->party) {
			case "Democrat":
				echo " D ";
			break;

			case "Republican":
				echo " R ";
			break;

	   		case "Independent":
				echo "I";
			break;
		}
	
	echo "<!-- ";  print_r($o);  echo "-->";

		echo "</td><td>".$o->first_name ." ".$o->last_name."</td>
	        <td> 
                <a href=\"#\" 
                class=\"btn btn-info btn-small\"  
                id=\"repdet".$popcount."\"
	        title=\"District ".$dis.":  ".$o->first_name ." ".$o->last_name."\"
	    
	data-content=\"";
	echo htmlspecialchars("<strong>Office:  </strong>".
	$o->addresses[0]->address_1 .", ".$o->addresses[0]->address_2.",".$o->addresses[0]->city.", ".$o->addresses[0]->state.", ".$o->addresses[0]->postal_code ."<br />
	<strong>Phone:  </strong>  ". $o->addresses[0]->phone_1 ."<br />
	<strong>FAX:  </strong>  ". $o->addresses[0]->fax_1."<br />
	<strong>Website:  </strong><a href=\"".$o->urls[1]."\">".$o->urls[1]."</a><br />
	<strong>Contact:  </strong><a href=\"". $o->urls[0]."\">". $o->urls[0]."</a><br />");
			      

echo "\">
	More &raquo;</a></td>
	</tr>";


 	endforeach;
}


//--------------------------------------------------------------------


// SUNLIGHTLABS Legislator API
// prints the Congressional District Reps
function get_cong_rep($dis, $popcount){
  
	$curl_handle=curl_init();
	curl_setopt($curl_handle,CURLOPT_URL,"http://services.sunlightlabs.com/api/legislators.get?apikey=011ae27269214b9b8f74f7c9c9d04380&state=PA&district=".$dis);
	curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
	curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
	$string = curl_exec($curl_handle);
	curl_close($curl_handle);

	$json_a=json_decode($string,true);

	echo "<tr><td>". $json_a["response"]["legislator"]["district"] ."</td>
	<td>".$json_a["response"]["legislator"]["party"]."</td>
	<td>".$json_a["response"]["legislator"]["firstname"] ." ".
	$json_a["response"]["legislator"]["middlename"]." ".
	$json_a["response"]["legislator"]["lastname"] ." ".
	$json_a["response"]["legislator"]["name_suffix"]."</td>
	<td> 

	<a href=\"#\" class=\"btn btn-info btn-small\" id=\"repdet".$popcount."\"

	title=\"District ".$dis.":  "
	.$json_a["response"]["legislator"]["firstname"] ." ".
	$json_a["response"]["legislator"]["middlename"]." ".
	$json_a["response"]["legislator"]["lastname"] ." ".
	$json_a["response"]["legislator"]["name_suffix"]."\"

	data-content=\"";
	echo htmlspecialchars("<strong>Office:  </strong>".
	$json_a["response"]["legislator"]["congress_office"]."<br />
	<strong>Phone:  </strong>  ".$json_a["response"]["legislator"]["phone"]."<br />
	<strong>FAX:  </strong>  ".$json_a["response"]["legislator"]["fax"]."<br />

	<strong>Website:  </strong><a href=\"".$json_a["response"]["legislator"]["website"]."\">".$json_a["response"]["legislator"]["website"]."</a><br />
	<strong>Contact:  </strong><a href=\"".$json_a["response"]["legislator"]["webform"]."\">".$json_a["response"]["legislator"]["webform"]."</a><br />
	<strong>Youtube:  </strong><a href=\"".$json_a["response"]["legislator"]["youtube_url"]."\">".$json_a["response"]["legislator"]["youtube_url"]."</a><br />
	<strong>Congresspedia:  </strong><a href=\"".$json_a["response"]["legislator"]["congresspedia_url"]."\">".$json_a["response"]["legislator"]["congresspedia_url"]."</a><br />
	<strong>Twitter:  </strong><a href=\"http://www.twitter.com/".$json_a["response"]["legislator"]["website"]."\">http://www.twitter.com/".$json_a["response"]["legislator"]["website"]."</a><br />");
			      

echo "\">
	More &raquo;</a></td>
	</tr>";
}

?>


<?php  if ($showfooter){ ?>
<div class="hero-unit" align="center">
        <div class="span12">

<form action="./get_rep.php" method="get">
 <div class="input">
<select name="route" onchange="loadmap(this.value);" class="input-xxlarge">

<option value="">Select Route</option>

<optgroup label="Trolleys">
<option value="10">10 - 13th-Market to 63rd-Malvern</option>
<option value="11">11 - 13th-Market to Darby Transportation Center</option>
<option value="13">13 - 13th-Market to Yeadon and Darby Transportation Center</option>
<option value="15">15 - 63rd-Girard to Richmond-Westmoreland</option>
<option value="34">34 - 13th-Market to 61st-Baltimore</option>
<option value="36">36 - 13th-Market to 80th-Eastwick</option>
<option value="101">101 - Media to 69th Street Transportation Center</option>
<option value="102">102 - Sharon Hill to 69th Street Transportation Center</option>
</optgroup>


<optgroup label="Buses">
<option value="1">1 - Parx Casino to 54th City Line</option>
<option value="2">2 - Pulaski/Hunting Park to 20th/Johnston</option>
<option value="3">3 - 33rd/C.B.Moore to FTC</option>
<option value="5">5 - Front Market to FTC</option>
<option value="6">6 - Cheltenham/Ogontz Loop to Broad Olney</option>
<option value="7">7 - 33rd/Dauphin to Pier 70</option>
<option value="8">8 - Broad Olney to FTC</option>
<option value="9">9 - Ridge/Cathedral to Independence Mall</option>
<option value="12">12 - 50th/Woodland to 3rd/Pine</option>
<option value="14">14 - Oxford Valley & Neshaminy Malls to FTC</option>
<option value="17">17 - Front Market to 20th/Johnston</option>
<option value="18">18 - Cedarbrook {Plaza to Fox Chase Loop</option>
<option value="19">19 - Torresdale Station to FTC</option>
<option value="20">20 - Franklin Mills Mall to FTC </option>
<option value="21">21 - 69th St to Penns Landing</option>
<option value="22">22 - Warminster to Broad Olney</option>
<option value="23">23 - Bethlehem Pike to Broad Oregon</option>
<option value="24">24 - Fox Chase to FTC</option>
<option value="25">25 - Pier 70 to FTC</option>
<option value="26">26 - Chelten/Morris to FTC</option>
<option value="27">27 - Plymouth Meeting Mall to Broad/Washington</option>
<option value="28">28 - 10th/Nedro to Cottman Loop</option>
<option value="29">29 - 33rd/Dickinson to Pier 70</option>
<option value="30">30 - 69th St to 30th St</option>
<option value="31">31 - 76th/City to City Hall</option>
<option value="32">32 - Ridge/Lyceum to Broad/Washington</option>
<option value="33">33 - 23rd/Venango to Penns Landing</option>
<option value="35">35 - Wissahickon Loop to Ridge/Fountain</option>
<option value="37">37 - Broad/Passyunk to CTC</option>
<option value="38">38 - Wissahickon Loop to 5th/Market</option>
<option value="39">39 - 33rd/Dauphin to Richmond/Cumberland</option>
<option value="40">40 - 49th/Parkside to 2nd/Lombard</option>
<option value="42">42 - Wycombe to Penns Landing</option>
<option value="43">43 - 49th/Parkside to Richmond/Cumberland</option>
<option value="44">44 - Ardmore Station to 5th/Market</option>
<option value="46">46 - 63rd/Malvern to 58th/Baltimore</option>
<option value="47">47 - Godfrey Loop to Whitman Plaza</option>
<option value="48">48 - 27th/Allegheny to Front/Market</option>
<option value="50">50 - Parx Casino to FTC</option>
<option value="52">52 - 49th/Woodland to 54th/City</option>
<option value="53">53 - Broad/Hunting Park to Wayne/Carpenter</option>
<option value="54">54 - 33rd/Dauphin to Richmond/Cambria</option>
<option value="55">55 - Doylestown to Broad/Olney</option>
<option value="56">56 - 23rd/Venango to Cottman Loop</option>
<option value="57">57 - Fern Rock to Whitman Plaza</option>
<option value="58">58 - Neshaminy Mall to FTC</option>
<option value="59">59 - Bells Corner to Arrott St</option>
<option value="60">60 - Richmond/Westmoreland to 35th/Allegheny</option>
<option value="61">61 - Roxborough & Manayunk to 9th and Market</option>
<option value="62">62 - Andorra Rox & Manayunk to 9th and Market</option>
<option value="64">64 - 49th/Parkside to Pier 70</option>
<option value="65">65 - 69th St to Germantown/Chelten</option>
<option value="66">66 - Frankford City Line Loop to FTC</option>
<option value="67">67 - Franklin Mills to FTC</option>
<option value="68">68 - Broad/Oregon to UPS</option>
<option value="70">70 - 10th/Nedro to Cottman Loop</option>
<option value="71">71 - Broad/Pattison to Navy Base</option>
<option value="73">73 - Richmond/Westmoreland to FTC</option>
<option value="75">75 - Wayne/Roberts to Arrott St</option>
<option value="77">77 - Bethlehem Pike to St. Vincent</option>
<option value="79">79 - 29th/Snyder to Columbus/Snyder</option>
<option value="80">80 - Broad Olney to Blair Mill Rd.</option>
<option value="84">84 - Franklin Mills to FTC</option>
<option value="88">88 - Holy Redeemer Hospital to FTC</option>
<option value="89">89 - Front/Dauphin to Arrott St</option>
<option value="90">90 - NTC to Plymouth Meeting Mall</option>
<option value="91">91 - NTC to Graterford</option>
<option value="92">92 - Plaza at KOP to Parkway Shopping Center</option>
<option value="93">93 - NTC to Montgomery County Comm. College</option>
<option value="94">94 - Bethlehem Pike to Montgomery Mall</option>
<option value="95">95 - Plymouth Meeting Mall to Gulph Mills</option>
<option value="96">96 - NTC to Lansdale Train Station</option>
<option value="97">97 - NTC to Barren Hill</option>
<option value="98">98 - NTC to Willow Grove Mall</option>
<option value="99">99 - NTC to Phoenixville</option>
<option value="124">124 - 13th/Market to Chesterbrook</option>
<option value="127">127 - Neshaminy Mall to Trenton TC </option>
<option value="128">128 - Oxford Valley Mall to Neshaminy Mall</option>
<option value="129">129 - Oxford Valley Mall to Morrell Park</option>
<option value="130">130 - Franklin Mills Mall to Bucks County Comm. College</option>
<option value="131">131 - NTC to Audubon</option>
<option value="132">132 - Montgomery Mall to Landis Market</option>
<option value="134">134 - Chestnut Hill Loop to Montgomery Mall</option>
<option value="139">139 - Plaza at KOP to Premimum Outlets</option>
<option value="150">150 - Plymouth Meeting Mall to Parx Casino</option>
<option value="201">201 - Ft Wash Sta to Ft Wash Office </option>
<option value="206">206 - Paoli Station to Great Valley </option>
<option value="304">304 - Frankford City Line to Bristol Train Station</option>
<option value="310">310 - Horsham Breeze</option>
<option value="103">103 - 69th St Term to Ardmore </option>
<option value="104">104 - 69th St Term to W Chester Univ</option>
<option value="105">105 - 69th St to Paoli Memorial Hospital</option>
<option value="106">106 - 69th St Term to Ardmore </option>
<option value="107">107 - 69th St Term to Lawrence Pk </option>
<option value="108">108 - 69th St-Elmwood-Airport-UPS </option>
<option value="109">109 - 69th St to CTC</option>
<option value="110">110 - 69th St Term to Penn State </option>
<option value="111">111 - 69th St Term to Chadds Ford </option>
<option value="112">112 - 69th St to Delaware County Comm. College</option>
<option value="113">113 - 69th St Term to Tri State Mall</option>
<option value="114">114 - Darby to I - 95 Industrial Park</option>
<option value="115">115 - Airport to Ardmore </option>
<option value="116">116 - 69th St Term to USPS </option>
<option value="117">117 - I - 95 Industrial Park to Penn State</option>
<option value="118">118 - CTC to Newtown Square</option>
<option value="119">119 - Harrah s to Cheyney University</option>
<option value="120">120 - 69th St Term to Cheyney Univer</option>
<option value="123">123 - 69th St Term-King of Prussia </option>
<option value="125">125 - 13th/Market to Valley Forge</option>
</optgroup>


<optgroup label="COMING SOON...More Routes">
<option value="316">316 - LUCY Loops</option>
<option value="471">47M - 9th/Oregon to 7th Spring Garden</option>
<option value="701">BSO - Fern Rock to Broad/Pattison</option>
<option value="702">C - Ogontz Loop & Fern Rock to Brd/Pattison</option>
<option value="703">G - Food Center to Lankenau Hospital</option>
<option value="705">HXH - Broad/Erie to Cheltenham Ogontz Loop</option>
<option value="706">J - Richmond/Orthodox to Chelten/Wissahickon</option>
<option value="707">K - Ridge/Midvale to Arrott St</option>
<option value="710">L - Plymouth Meeting & Erdenhiem to Broad Olney</option>
<option value="711">MFO - 69th St to FTC</option>
<option value="712">R - WTC to FTC</option>
<option value="1420">14-20 - FRANKFORD-NESH-OX VAL </option>
<option value="1967">19-67 - Frankford & Bust to Franklin M</option>
<option value="2050">20-50 - FKD-ACD-FRKMILLS-PHILLY PARK C</option>
<option value="2142">21-42 - 69th St Terminal To Penn s Lan</option>
<option value="612">61-62 - Andorra/Roxborough Manayunk to 9th and Market</option>
<option value="3161">LUCYGO - LUCY Gold Loop </option>
<option value="3162">LUCYGR - LUCY Green Loop</option>
</optgroup>


<optgroup label="COMING SOON....High Speed">
<option value="BSS">Broad Street Line</option>
<option value="BSO">Broad Street Line | Nite Owl</option> 
<option value="MFL">Market-Frankford Line</option>
<option value="MFO">Market-Frankford Line | Nite Owl</option>
<option value="NHSL">Norristown High-Speed Line</option>
</optgroup>

<optgroup label="COMING SOON....Regional Rail">
<option value="R4S:Airport">Airport</option>
<option value="R7N:Chestnut Hill East">Chestnut Hill East</option>
<option value="R8S:Chestnut Hill West">Chestnut Hill West</option>
<option value="R0S:Cynwyd">Cynwyd</option>
<option value="R8N:Fox Chase">Fox Chase</option>
<option value="R5N:Lansdale/Doylestown">Lansdale/Doylestown</option>
<option value="R6N:Manayunk/Norristown">Manayunk/Norristown</option>
<option value="R3S:Media/Elwyn">Media/Elwyn</option>
<option value="R5S:Paoli/Thorndale">Paoli/Thorndale</option>
<option value="R7S:Trenton">Trenton</option>
<option value="R4N:Warminster">Warminster</option>
<option value="R3N:West Trenton">West Trenton</option>
<option value="R2S:Wilmington/Newark">Wilmington/Newark</option>
<optgroup>
</select>
</form>

</div>
</div>
</div>
	

   <?php } ?>

      <footer>
      <p>
      This app is in development.  <a href="http://groups.google.com/group/septadev/">SEPTAdev</a>
      </p>

      </footer>

    </div> <!-- /container -->

<!-- JS placed at the end of the document so the pages load faster -->

<script type="text/javascript">
  function loadmap(route) {
    window.location = "http://www3.septa.org/reps/" + escape(route);
  }
</script>

<script src="./inc/jquery.min.js"></script>
<script type="text/javascript" src="./inc/bootstrap.js"></script>
<script type="text/javascript" src="./inc/bootstrapx-clickover.js"></script>

<script type="text/javascript">
  $(function() { 
    $('[rel="clickover"]').clickover(); 
	<?php
	for ($i=1;$i<=$popcount;$i++){
	   echo "$('#repdet".$i."').clickover({placement: 'left', width: 600 });\n";
	}
	?>
  })
</script>

  </body>
</html>
