<?php
    require_once("../model/module_base.php");
    function select_outdoor($id){
        $conn = connect_db();
        $sql = "SELECT outdoor_title.outdoor_title as title, outdoor_script.outdoor_script_title as sub_title, outdoor_script.outdoor_script as script, outdoor_script.outdoor_image as image FROM outdoor_script JOIN outdoor_title ON outdoor_script.outdoor_title_id = outdoor_title.id WHERE outdoor_script.outdoor_title_id = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$outdoor_id);
        $outdoor_id = $id;
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