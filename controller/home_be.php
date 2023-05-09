<?php
    require_once("../model/module_base.php");
    function select_db(){
        $conn = connect_db();
        $sql = "SELECT * FROM home_display_script";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
    function select_partner(){
        $conn = connect_db();
        $sql = "SELECT * FROM partner";
        $result = $conn -> query($sql);
        $conn -> close();
        return $result;
    }
    function select_contact(){
        $conn = connect_db();
        $sql = "SELECT * FROM contact";
        $result = $conn->query($sql);
        $conn -> close();
        return $result;
    }
?>