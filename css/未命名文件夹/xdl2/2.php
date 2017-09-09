<!DOCTYPE HTML>
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
		background-color:#ff0;
		box-shadow:5px 5px 5px #c0c0c0;
		margin-bottom:10px;
	}
	</style>
</head>
<body>
	<ul>
		<li>ÊéÃû</li>
		<?php
$a="http://www.23wx.com/map/4.html";
$b=file_get_contents($a);//»ñÈ¡Ô¶³ÌÍøÒ³ÄÚÈÝ
$d="/<a\s*href='([^']*)'\s*title='[^']*'[^>]*>(.*?)<\/a>/";//´´½¨Ò»¸öÕýÔò
preg_match_all($d, $b, $sz, PREG_SET_ORDER);//ÓÃÕýÔòÈ¥Æ¥ÅäÍøÒ³ÄÚÈÝ
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
