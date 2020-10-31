<?php
/* ID:602110191
   Name: Wang Zexue
   Wechat name:Wang */
$fp=fopen($_SERVER['argv'][1],'r');
fscanf($fp,"%d",$n);

for($i=0;$i<$n;$i++){
    $pn[$i]=trim(fgets($fp));
    $letter[$i]=preg_match_all("/[a-zA-Z]/",$pn[$i]);
    $number[$i]=preg_match_all("/\d/",$pn[$i]);
    $symbol[$i]=preg_match_all("/[\$@&]/",$pn[$i]);
    if((preg_match("/(?=.*[a-zA-Z])(?=.*\d)(?=.*[\$@&])/",$pn[$i]))&&($letter[$i]>=2)&&($number[$i]>=2)&&($symbol[$i]>=2)&&(strpos($pn[$i]," ")===false)){
        $m[]=$pn[$i];
    }else{
        $p[]=$pn[$i];
    }
}fclose($fp);
printf("Satisfied:\n");

for($j=0;$j<count($m);$j++){
    echo"   ",$m[$j],"\n";
}printf("Non-satisfied: \n");
for($k=0;$k<count($p);$k++){
    echo"   ",$p[$k],"\n";
}

