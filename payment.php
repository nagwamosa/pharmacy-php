<?php
    if(isset($_GET['Submit'])){
    if(!empty($_GET['radio'])) {
        $UserName = $_GET['radio'];
    
        if (($UserName == "Cash" )  ){
            include 'AddMedicines.php';
          
        }
        else {
            include 'search.php';
        }
    }
       
    } else {
        echo 'Please select the value.';
    }
    
?>