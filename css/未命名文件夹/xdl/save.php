<!DOCTYPE html>
<html>
<head>
	<title>add</title>
	<meta charset="utf-8">
	<style type="text/css">
		ul li{
			list-style: none;
		}
	</style>
</head>
<body>
	<form action="test.php" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<h4>名称</h4>
				<input type="text" name="mc">
			</li>
			<li>
				<h4>描述</h4>
				<input type="text" name="ms">
			</li>
			<li>
				<h4>封面图片</h4>
				<input type="file" name="fm">
			</li>
			<li>
				<h4>地址</h4>
				<input type="text" name="dz">
			</li>
			<li>
				<h4>经度</h4>
				<input type="text" name="jd">
			</li>
			<li>
				<h4>纬度</h4>
				<input type="text" name="wd">
			</li>
			<li>
				<button type="submit">传送数据</button>
			</li>
		</ul>
	</form>
</body>
</html>