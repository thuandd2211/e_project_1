<?php
    function connect_db(){
        $conn = new mysqli('localhost','root','12345678','event_management');
        if ($conn->connect_error){
            die ("Ket noi that bai".$conn->connect_error);
        }
        return $conn;
    }
    function close_db($stmt,$conn){
        $stmt->close();
        $conn->close();
    }
?>