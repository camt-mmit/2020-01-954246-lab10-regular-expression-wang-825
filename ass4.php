<?php
/* ID:602110191
   Name: Wang Zexue
   Wechat name:Wang */
   $fp=fopen($_SERVER['argv'][1],'r');
   for($i=0;;$i++){
       $p[$i]=trim(fgets($fp));
       if(feof($fp))  break;
       
   }fclose($fp);
   $ps=implode(" ",$p);
   $pa=explode(" ",$ps);
   for($j=0;$j<=count($pa);$j++){
       if(($pa[$j]===ucfirst($pa[$j]))&&($pa[$j]!="My")&&($pa[$j]!="The")&&(preg_match("/[a-z]/",$pa[$j]))){
           echo str_ireplace([".",","],"",$pa[$j])," ";
           $k="E";
       }else{
           if($k=="E"){
               echo"\n";
           }$k="NE";
       }continue;
   }