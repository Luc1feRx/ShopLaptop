<?php
    mysqli_connect("localhost", "root", "", "laptop"); //localhost, db_username, db_pass, db_database
    if(mysqli_connect_error()){
        echo "Loi conect";
    }else{
        echo "connect success!";
    }
?>