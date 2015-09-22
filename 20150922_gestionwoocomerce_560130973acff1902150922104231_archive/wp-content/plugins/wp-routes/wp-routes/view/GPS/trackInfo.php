<div class="gpsies-wrapper">
<?php
define('GPS_SHOW_MAPONLY',		'maponly');
define('GPS_SHOW_FULL',			'full');
define('GPS_SHOW_SUMMARY',		'summary');
define('GPS_SHOW_DETAILS',		'details');
$xmlgpsies = new SimpleXMLElement($gpsies); 
$tracksrev = array_reverse($xmlgpsies->tracks->xpath("track")); 
foreach ($tracksrev as $track) {
	if($showmode!=GPS_SHOW_MAPONLY){
		?><pre><?php	
		echo '<h2>'.__('','GPS').''.$track->title.'</h2>';
		echo '<strong>'.__('Track Length','GPS').':</strong> '.round((real)$track->trackLengthM/1000,1).'km <br />';
		echo '<strong>'.__('Track Types','GPS').':</strong> '.$track->trackTypes.'<br />';
		echo '<strong>'.__('Altitude Range','GPS').':</strong> '.$track->altitudeDifferenceM.'m ('.
			'<strong>'.__('Min Height','GPS').':</strong> '.$track->altitudeMinHeightM.'m ~ '.
			'<strong>'.__('Max Height','GPS').':</strong> '.$track->altitudeMaxHeightM.'m)<br />';
		echo '<strong>'.__('Total Climb','GPS').':</strong> '.$track->totalAscentM.'m | '.
		      '<strong>'.__('Total Descent','GPS').':</strong> '.$track->totalDescentM.'m <br />';
		echo '<strong>'.__('Address','GPS').':</strong> '.$track->startPointAddress.'<br />';
		echo '<strong>'.__('Latitude','GPS').':</strong> '.$track->startPointLat.'<br />';
		echo '<strong>'.__('Longitude','GPS').':</strong> '.$track->startPointLon.'<br />';
		echo '<strong>'.__('Track Listed','GPS').':</strong> '.$track->createdDate.'<br />';
		if($showmode!=GPS_SHOW_FULL){
			echo '<a rel="lightbox" href="http://www.gpsies.com/mapOnly.do?fileId='.$track->fileId.'" title="GPS Tracks">' .
				'<img src="http://www.gpsies.com/images/linkus.png" border="0" alt="Show Track" /> </a><br/>';
		}
		if($showmode!=GPS_SHOW_SUMMARY){
			echo '<strong>'.__('Description','GPS').':</strong> '.$track->trackType.'<br />';
		}
		?>
		</pre><br />
		<?php
		if($showmode==GPS_SHOW_FULL){		
		?>		
			<div class="iframe-wrapper">
			<iframe src="http://www.gpsies.com/mapOnly.do?fileId=<?php echo $track->fileId ?>" frameborder="0" style="height:365px;width:550px;">Please upgrade your browser</iframe>
			</div>
		<?php
		}
	}
	else {
		 ?>		
			<div class="iframe-wrapper">
			<iframe src="http://www.gpsies.com/mapOnly.do?fileId=<?php echo $track->fileId ?>" frameborder="0" style="height:365px;width:550px;">Please upgrade your browser</iframe>
			</div>
		<?php	
	}
}
?>

Powered by GPSies.com &middot; Developed by <a href="http://www.bikes.org.uk/">bikes.org.uk</a>

</div>
