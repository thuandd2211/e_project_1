<?php
    require_once("../model/module_base.php");
    function select_db(){
        $conn = connect_db();
        $sql = "SELECT * FROM home_display_script";
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
    function select_partner($id){
        $conn = connect_db();
        $sql = "SELECT * FROM home_display_script WHERE id_home_display_type_event = ?";
        $stmt = $conn->prepare($sql);
        $stmt -> bind_param("i",$id_partner);
        $id_partner = $id;
        $stmt->execute();
        $result = $stmt -> get_result();
        close_db($stmt,$conn);
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