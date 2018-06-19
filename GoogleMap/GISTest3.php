<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<!--指定css，否則#map_canvas在有的瀏覽器可能看不到-->
<style type="text/css">
  html { height: 100% }
  body { height: 100%; margin: 0px; padding: 0px }
  #map_canvas { height: 100% }
</style>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<?php
	$file = fopen("qqq.csv", "r"); // Use fopen function to open a file
?>
<script type="text/javascript">
	function initMap() {
	  var map = new google.maps.Map(document.getElementById('map'), { zoom: 2, center: {lat: 13.7500, lng: 100.5167} });
	  setMarkers(map);
	}

	var locations = [
<?php
	$i = 0;
	while (!feof($file)) {
		$value = fgets($file);
		$array = explode(";", $value);
		$gis = explode(",", $array[4]);
		if (sizeof($array)>3 && sizeof($gis)>1)
		print "['" . $array[0] . "', " . str_replace("\n","",$array[4]) . "," . $i ."],\n";
		$i++;
	}
?>
	];

	function setMarkers(map) {
	  for (var i = 0; i < locations.length; i++) {
		var location = locations[i];
		var marker = new google.maps.Marker({
		  position: {lat: location[1], lng: location[2]},
		  map: map,
		  title: location[0],
		  zIndex: location[3]
		});
	  }
	}
</script>
<?php
	fclose($file);// Close the file that no longer in use
?>
</head>
<body onload="initMap();">
	<div id="map" style="width:100%; height:100%"></div>
</body>
</html>
