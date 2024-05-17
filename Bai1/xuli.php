<?php 
            if(isset($_GET['Submit'])&&($_GET['Submit']=="Tính")) 
           { 
               $dai= $_GET['chieudai']; 
               $rong= $_GET['chieurong']; 
               $dientich= (float)$dai * (float)$rong; 
               $chuvi = ((float)$dai+(float)$rong)*2; 
               echo "Diện tích: ".$dientich."<br>"; 
               echo "Chu vi: ".$chuvi; 
           } 
?> 