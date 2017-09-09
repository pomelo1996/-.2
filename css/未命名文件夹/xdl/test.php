<?php 
$mc=$_POST["mc"];
$ms=$_POST["ms"];
$dz=$_POST["dz"];
$jd=$_POST["jd"];
$wd=$_POST["wd"];
$fm=$_FILES["fm"]["name"];//得到上传的文件的原始名字
//下面的代码就是复制临时文件到upload文件夹里去
move_uploaded_file($_FILES["fm"]["tmp_name"],"upload/".$fm);

$sql="insert into sjb(mc,ms,dz,jd,wd,fmtp) values('$mc','$ms','$dz',$jd,$wd,'$fm')";
echo $sql;
//创建数据库的连接
$conn=mysql_connect("localhost","root","sql");
					//主机名      用户    密码
//选择库
mysql_select_db("ss");
//编码格式
mysql_set_charset("utf8");
mysql_query($sql);


mysql_close($conn);
?>