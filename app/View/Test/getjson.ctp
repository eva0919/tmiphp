<?php
	phpQuery::newDocumentFile('http://finance.google.com/finance/info?client=ig&q=TPE:1101');  
	$companies = pq("")->text();  
	$itemList = explode('"', $companies);
	echo $itemList[15];
	//echo $test;
?>