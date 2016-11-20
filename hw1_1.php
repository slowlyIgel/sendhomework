<?php
$url = "http://www.seoseo.com.tw/sitemap.xml";
// do not use this
$xmlString = file_get_contents($url);

$xmlFormatObject = simplexml_load_string($xmlString);

// 1. 對我們的xml裡面的所有資料 放到陣列裡面
$xmlArray = array();
foreach($xmlFormatObject as $url=>$value) {
	$xmlArray[] = $value;
}
$totalCompareTimes = count($xmlArray)-1;
for($round=1; $round<=$totalCompareTimes; $round+=1) {

	for($round2=1; $round2<=count($xmlArray)-$round; $round2+=1) {
		if(
			strlen($xmlArray[$round2-1]->loc) >
			strlen($xmlArray[$round2]->loc)
		  )
		{
			$temp = $xmlArray[$round2-1];
			$xmlArray[$round2-1] = $xmlArray[$round2];
			$xmlArray[$round2] = $temp;
		}
	}
}
foreach($xmlArray as $index=>$obj) {
	echo $obj->loc;
	echo "<br>";
}




 ?>
