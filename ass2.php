<?php
/* ID:602110191
   Name: Wang Zexue
   Wechat name:Wang */
   $fp=fopen($_SERVER['argv'][1],'r');
   for($i=0;;$i++){
       $num[$i]=trim(fgets($fp));
       if(feof($fp)) break;
    
   }fclose($fp);
   $nums=implode(" ",$num);
   $numss=str_ireplace(["/",", ",". "]," ",$nums);
   $m=explode(" ",$numss);
   for($j=0;$j<count($m);$j++){
       if(preg_match("/\d/",$m[$j])){
           $ms[]=$m[$j];
       }
   }for($k=0;$k<count($ms);$k++){
       if(preg_match("/^\d+$/",$ms[$k])){
           $mss[]=$ms[$k];
       }elseif(preg_match("/(\d+)\.(\d+)/is",$ms[$k])){
           $mss[]=$ms[$k];
       }elseif(preg_match("/(\d+)\./is",$ms[$k])){
           $mss[]=str_ireplace(".","",$ms[$k]);
       }
   }for($l=0;$l<count($mss);$l++){
       echo$mss[$l],"\n";
   }