<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
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
		<li>书名</li>
		<?php
$a="http://www.23wx.com/map/4.html";
$b=file_get_contents($a);//获取远程网页内容
$d="/<a\s*href='([^']*)'\s*title='[^']*'[^>]*>(.*?)<\/a>/";//创建一个正则
preg_match_all($d, $b, $sz, PREG_SET_ORDER);//用正则去匹配网页内容
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
