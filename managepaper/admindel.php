<?php

@mysql_connect("localhost","root","") or die("���ݿ�����ʧ��");
mysql_select_db("qiandao") or die("db����ʧ��"); 
$id=$_POST['id'];

$sql= "select `password` from `Members` where `name`='$id'";
$query=mysql_query($sql);

if($rs=mysql_fetch_array($query)){

 $sql="delete from `table1` where `name`='$id'";
 mysql_query($sql);

}else
{
 echo 2;
}
?>