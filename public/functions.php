<?php

    include("connect.php");

    function display_data(){
        global $con;
        $query = "select * from registration";
        $result = mysqli_query($con, $query);
        return $result;    
    }

?>