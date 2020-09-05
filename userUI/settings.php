
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_URL => "http://localhost/api/view/get_resource.php?search=Hatchet",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => array(
		"book-host: http://localhost/api/",
		"apikey: 3a05a3775128b2d7c03bf98b312fac24fbaefb1435663533383261643362663665",
	),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err . "\r\n\n CHECK API and other settings.";
} else {
	echo $response;
}
?>
