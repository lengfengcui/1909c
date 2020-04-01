<?php
$unames=$_GET['unames'];
$link=mysqli_connect("127.0.0.1","root","","month4");
$sql="select * from user where uname='$unames'";
$rel=mysqli_query($link,$sql);
$res=mysqli_fetch_assoc($rel);
if($res){
	echo "no";
}else{
	echo "ok";
}
?>