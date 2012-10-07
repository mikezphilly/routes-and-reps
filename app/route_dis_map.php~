<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Routes and Reps Map</title>
    <meta name="description" content="">
    <meta name="author" content="">
<!--    <link rel="shortcut icon" href="img/favicon.ico" /> -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">  
    <link href="./css/ny_licenses.css" rel="stylesheet">
    <style>body,html {width:100%; height:100%; margin:0; padding:0; overflow:hidden;} #map_canvas {position:absolute; top:40px; left:0; right:0; bottom:0;}</style>
    <link rel="stylesheet" href="./css/leaflet.css" />
    <!--[if IE]><link rel="stylesheet" href="./css/leaflet.ie.css" /><![endif]-->
    <link  href="./css/cartodb-leaflet.css" rel="stylesheet" type="text/css">

<?php 

// get vars from query string, meant to be called like this
// http://septa-n-reps.phpfogapp.com/route_dis_map.php?
// route=118&tbl=pahouse2011_01&dis='165','168','159','161'

$route = $_GET["route"];
$dis = $_GET["dis"];
$tbl = $_GET["tbl"];
$title = $_GET["title"];

/*
// In case you need to hard code
$route = "118";
$dis = "'165','168','159','161'";
$tbl = "pahouse2011_01";
*/

if ($tbl=="philadelphiacouncild"){
	$field_name="dist_num as leg_distri ";
	$field = "dist_num";
	//$party = "O as party ";
}

else {
	$field_name="leg_distri";
	$field = "leg_distri";
	//$party = "party";
}
?>

  </head>
  <body onload="initialize()">
    <div id="map_canvas"></div>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <h1 class="brand" href="#">Route:  <?php echo $route; ?>  |  <?php echo $title; ?></h1>
        </div>
      </div>
    </div>

    <div class="alert alert-info" id="tooltip">
      <p>Tooltip</p>
    </div>    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <script src="./js/leaflet.js"></script>
    <script type="text/javascript" src="./js/wax.leaf.min.js"></script>
    <script type="text/javascript" src="./dist/cartodb-leaflet-min.js"></script>
    <script type="text/javascript" src="./dist/cartodb-popup-min.js"></script> 



    <script type="text/javascript">

	// global vars:  Route, Districts, the map
	var route_layer, distric_layer, map;

	function initialize() {

		// new map called map_canvas
		map = new L.Map('map_canvas').setView(new L.LatLng(39.99791,-75.15398), 12);

		// the the background tiles
		var mapboxUrl = 'http://{s}.tiles.mapbox.com/v3/cartodb.map-1nh578vv/{z}/{x}/{y}.png', mapbox = new L.TileLayer(mapboxUrl, {maxZoom: 18, attribution: "OpenStreetMaps"});
   	map.addLayer(mapbox,true);

		// query & style to send to API
		var query="SELECT cartodb_id, the_geom_webmercator, the_geom as geometry,  party , <?php echo $field_name; ?> FROM <?php echo $tbl; ?> where <?php echo $field; ?> in (<?php echo $dis; ?>)";
		var style = "#<?php echo $tbl; ?>{line-color:#cccccc;line-width:0.7;line-opacity:1;}[party='R']{polygon-fill:#c72535;polygon-opacity: 0.7;}[party='D']{polygon-fill:#0073a2;polygon-opacity: 0.7;}[party='O']{polygon-fill:#719700}";     

		// popup and polygons for districts
	      var popup = new L.CartoDBPopup();
      var polygon = new L.GeoJSON(null);
      
		// Hover polygon style
   	var polygon_style = {color: "#FFCC00", weight: 3, opacity:1, fillOpacity: 0, fillColor:"#FFCC00", clickable:false};

		//-------------   Display Districts ---------------          
		// First define the District Map Layer geometries, popups, styles, etc.          
        distric_layer = new L.CartoDBLayer({
          map: map,
          user_name:'mikezphilly',
          table_name: '<?php echo $tbl; ?>',
          query: query,
          tile_style: style,
          interactivity: "cartodb_id,party,leg_distri,geometry",
          
          featureOver: function(ev,latlng,pos,data) {
            document.body.style.cursor = "pointer";
            showTooltip(data,pos);
            
            // Show the hover polygon if it is a different feature
            if (data.cartodb_id != polygon.cartodb_id) {
              map.removeLayer(polygon);            
              polygon = new L.GeoJSON(JSON.parse(data.geometry), {
                style: function (feature) {
                  return polygon_style;
                }
              }).addTo(map);
              polygon.cartodb_id = data.cartodb_id;
            }
          },
          featureOut: function() {
            document.body.style.cursor = "default";
            hideTooltip();
            
            // Hide and remove in any case the hover polygon
            polygon.cartodb_id = null;
            polygon.off("featureparse");
            map.removeLayer(polygon)
            
          }
        });

		  // add the district layer to the map
        map.addLayer(distric_layer)


		//-------------   Display Route ---------------
		// define route layer
		route_layer = new L.CartoDBLayer({
			map: map,
			user_name:'mikezphilly',
			table_name: 'septaroutesfall2012',
			query: "SELECT * FROM septaroutesfall2012 where route ='<?php echo $route ?>'",
			// tile_style: "#septaroutesfall2012{marker-fill:red}",
			interactivity: "cartodb_id, route",
			featureClick: function(ev, latlng, pos, data) {alert(data)},
			featureOut: function() {},
			featureOver: function(ev, latlng, pos, data) {},
			auto_bound: true
		});
		// add route layer to map
		map.addLayer(route_layer);
  }




//------------------- Show/Hide Tooltips  -----------------------

      function showTooltip(data,point) {

		// format party name for info bubble
/*
		var party_name = "";
		if (data["party"]=='R'){
			party_name = "Republican";
		}
		else if (data["party"]=='D'){
			party_name = "Democrat";
		}
		else{
			party_name = "Other";
		}
*/
        var html = "";
        
       // html += "<label>District:  " + data["leg_distri"] +" - "+ party_name + "</label>";
         html += "<label>Dist:  " + data["leg_distri"] +"</label>";

        $("#tooltip").html(html);
        $("#tooltip").css({left: (point.x + 15) + 'px', top: point.y - ($("#tooltip").height()) + 10 + 'px'})
        $("#tooltip").show();
      }

      function hideTooltip() {
        $("#tooltip").hide();
      }


    </script>

<!--  
  <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
-->
  </body>
</html>

