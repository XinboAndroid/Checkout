<?php

   @mysql_connect("localhost","root",'') or die("mysql����ʧ��");
   mysql_select_db("qiandao") or die("db����ʧ��");
   mysql_set_charset("UTF-8");
   mysql_query('set names utf8');
   
   
   $oi=$_POST['oi'];
   $sqy="select count(`id`) from `information`;";
   $query=mysql_query($sqy);
   $rsy=mysql_fetch_array($query);
   $d=$rsy[0]-$oi;
   $sql="select * from `information`  where `id` ='$d';";
   $query=mysql_query($sql);
   $rs=mysql_fetch_array($query);
      
   echo json_encode($rs);
?>