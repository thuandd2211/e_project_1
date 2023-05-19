<?php
    require_once("../model/module_base.php");
    function select_wedding($id){
        $conn = connect_db();
        $sql = "SELECT wedding_title.wedding_title as title, wedding_script.wedding_script_title as sub_title, wedding_script.wedding_script as script, wedding_script.wedding_image as image FROM wedding_script JOIN wedding_title ON wedding_script.wedding_title_id = wedding_title.id WHERE wedding_script.wedding_title_id = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$wedding_id);
        $wedding_id = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
    function select_contact(){
        $conn = connect_db();
        $sql = "SELECT * FROM contact";
        $result = $conn->query($sql);
        $conn -> close();
        return $result;
    }
?>