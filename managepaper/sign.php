<?php

   @mysql_connect("localhost","root",'') or die("mysql����ʧ��");
   mysql_select_db("qiandao") or die("db����ʧ��");
   mysql_set_charset("UTF-8");
   mysql_query('set names utf8');
   
   $omyi=$_POST['omyi'];
   $sql = "select * FROM `members`where `id`='$omyi'";
   $query=mysql_query($sql);
    $rsi=mysql_fetch_array($query);
      
   echo json_encode($rsi);
?>