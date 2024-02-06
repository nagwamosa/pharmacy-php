<?php

if ($_SERVER ['REQUEST_METHOD'] == "POST"){
    $UserName = $_POST['id'];
    
     
   
        if (($UserName == "1" )  ){
            include 'AddMedicines.php';
            
            
        }
        else {
            include 'search.php';
        }
    }
       
   
    

?>