<?php

	$contents=file_get_contents("http://www.weather-forecast.com/locations/London/forecasts/latest");

	preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)</s', $contents, $matches);
 	
 	echo $matches[1];

?>