<?php
    require_once("../model/module_base.php");
    function select_party($id){
        $conn = connect_db();
        $sql = "SELECT party_title.party_title as title, party_script.party_script_title as sub_title, party_script.party_script as script, party_script.party_image as image FROM party_script JOIN party_title ON party_script.party_title_id = party_title.id WHERE party_script.party_title_id = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$party_id);
        $party_id = $id;
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