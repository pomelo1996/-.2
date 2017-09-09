<!DOCTYPE HEML>
<html lang="en-US">
<head>
	<meta charset="gbk">
	<title></title>
	<style type="text/css">
	ul{
		list-style:none;
		padding:0px;
		margin:0px;
		}
	li{
		width:200px;
		height:40px;
		line-height:40px;
		text-align:center;
		background-color:red;
		box-shadow:5px 5px 5px #c0c0c0;
		margin-bottom:10px;
		}
		</style>
</head>
<body>
	<ul>
		<li>书名</li>
		<?php
		$a="http://www.23wx.com/map/4.html";
        $b=file_get_contents($a);
        $d="/<a\s*href='([^']*)'\s*title='[^']*'[^>]*>(.*?)<\/a>/";
        preg_match_all($d, $b, $sz, PREG_SET_ORDER);
	foreach($sz as $e){
	    echo "<li>";
	    echo '<a href="'.$e[1].'">';
	    echo $e[2];
	    echo "</a>";
	    echo "</li>";
    }
	   ?>
	 </ul>
</body>
</html>
