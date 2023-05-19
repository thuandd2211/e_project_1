<?php
    require_once("../model/module_base.php");
    function select_oneyear_birthday($id){
        $conn = connect_db();
        $sql = "SELECT oneyear_birthday_title.oneyear_birthday_title as title, oneyear_birthday_script.oneyear_birthday_script_title as sub_title, oneyear_birthday_script.oneyear_birthday_script as script, oneyear_birthday_script.oneyear_birthday_image as image FROM oneyear_birthday_script JOIN oneyear_birthday_title ON oneyear_birthday_script.oneyear_birthday_title_id = oneyear_birthday_title.id WHERE oneyear_birthday_script.oneyear_birthday_title_id = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$oneyear_birthday_id);
        $oneyear_birthday_id = $id;
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