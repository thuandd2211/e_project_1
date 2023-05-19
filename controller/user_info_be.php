<?php 
    session_start();
    require_once("../model/module_base.php");
    function select_viewer($id){
        $conn = connect_db();
        $sql = "SELECT * FROM viewer WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_user);
        $id_user = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
?>