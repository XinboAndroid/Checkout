<?php

   @mysql_connect("localhost","root",'') or die("mysql����ʧ��");
   mysql_select_db("qiandao") or die("db����ʧ��");
   mysql_set_charset("UTF-8");
   mysql_query('set names utf8');
   
   $omyadd=$_POST['omyadd'];
   $sql = "INSERT INTO `qiandao`.`members` (`name`, `password`, `Mon`, `Tue`, `Wed`, `Thu`, `Fri`, `id`) VALUES ('$omyadd', '1234', '1', '1', '1', '1', '1', NULL);";
   mysql_query($sql);
  
?>