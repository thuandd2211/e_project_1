<?php
    require_once("../model/module_base.php");
    function select_contact(){
        $conn = connect_db();
        $sql = "SELECT * FROM contact";
        $result = $conn->query($sql);
        $conn -> close();
        return $result;
    }
    function select_hall($id){
        $conn = connect_db();
        $sql = "SELECT hall_display_title.hall_display_title as title, hall_display_script.hall_display_script as script, hall_display_script.hall_display_image as image FROM hall_display_script JOIN hall_display_title ON hall_display_title.id = hall_display_script.hall_display_title_id WHERE hall_display_script.hall_display_title_id = ?  ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_title);
        $id_title = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
?>