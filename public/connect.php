<?php

    try{
        $con = mysqli_connect(  "localhost", 
                                "root", 
                                "HSMQTQwpj247!", 
                                "isikhalisezwe");
    }catch(mysqli_sql_exception){
        echo"Could not connect!";
    }

?>