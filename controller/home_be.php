<?php
    require_once("../model/module_base.php");
    function select_home($id){
        $conn = connect_db();
        $sql = "SELECT home_title.home_title as title, home_script.home_script_title as sub_title, home_script.home_script as script, home_script.home_image as image FROM home_script JOIN home_title ON home_script.home_title_id = home_title.id WHERE home_script.home_title_id = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$home_id);
        $home_id = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
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