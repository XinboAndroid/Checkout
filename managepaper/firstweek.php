<?php
$sql = "select `checkout_date` FROM `sign` where `id`='1'"; //��һ���м���
       $oa=mysql_query($sql);
   $ob=mysql_fetch_array($oa);
	//print_r ($b);
	//echo $b[0];
	$firsttime=strtotime($ob[0]);//��¼ǩ���ĵ�һ��
	/*$firsttime=date("D",strtotime($sfirsttime));*/
	//echo $firsttime;
	$time= date("D",strtotime($ob[0]));
	//echo $time;
	$arrdate=array("Mon","Tue","Wed","Thu","Fri","Sat","Sun");
	  for($temp = 0;$temp < count($arrdate);$temp++){
		if($arrdate[$temp]==$time){
		$i=7-($temp+1);
		break;
		}
     }
?>