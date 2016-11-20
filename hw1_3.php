<?php
$url = "http://www.seoseo.com.tw/sitemap.xml";
// do not use this
$xmlString = file_get_contents($url);

$xmlFormatObject = simplexml_load_string($xmlString);
 foreach ($xmlFormatObject->url as $key => $value) {
   echo "&lt;url&gt;<br>";
   echo "&nbsp;&nbsp;&lt;loc&gt;".$value->loc."&lt;/loc&gt;<br>";
   echo "&nbsp;&nbsp;&lt;changefreq&gt;".$value->changefreq."&lt;/changefreq&gt;<br>";
   echo "&nbsp;&nbsp;&lt;priority&gt;".$value->priority."&lt;/priority&gt;<br>";
   echo "&lt;/url&gt;<br>";
 }
 ?>
