<?php

function domain_available(){
	$urls='https://www.godaddy.com/domains/searchresults.aspx?ci=google.com'
//	$url = "http://whois.net/whois/adfafafas.com";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$data = curl_exec($ch);
	$info = curl_getinfo($ch);
	// var_dump($info);

	// echo "<h1>Data</h1>";
	// echo "<pre>".htmlentities($data)."</pre>";

	// echo "<h1>Info</h1>";
	// echo "<pre>";

	// echo "</pre>";
	return empty(strpos($data, 'already registered'));

}

if(domain_available()){
	echo "domain available!";
}
else{
	echo 'domain not available';
}

// curl_close($ch);


?>