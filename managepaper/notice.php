<?php
   @mysql_connect("localhost","root",'') or die("mysql����ʧ��");
   mysql_select_db("qiandao") or die("db����ʧ��");
   mysql_set_charset("UTF-8");
   mysql_query('set names utf8');
   
   
   $not=$_POST['not'];
   $sql = "UPDATE `qiandao`.`notice` SET `neirong` = '$not' ;";
   $query=mysql_query($sql);
?>