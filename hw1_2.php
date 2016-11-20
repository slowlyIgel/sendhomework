<?php
$url = "http://www.lifetour.com.tw/sitemap.xml";
// do not use this
$xmlString = file_get_contents($url);

$xmlFormatObject = simplexml_load_string($xmlString);

$data = array();
foreach ($xmlFormatObject->url as $key => $value) {
	$withoutAddress = str_replace("http://www.lifetour.com.tw","",$value->loc);
	$data[] = dirname($withoutAddress);
}
print_r($data);



 ?>
