<?php
    require_once("../model/module_base.php");
    function select_company($id){
        $conn = connect_db();
        $sql = "SELECT company_title.company_title as title, company_script.company_script_title as sub_title, company_script.company_script as script, company_script.company_image as image FROM company_script JOIN company_title ON company_script.company_title_id = company_title.id WHERE company_script.company_title_id = ? ";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$company_id);
        $company_id = $id;
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
    function select_partner(){
        $conn = connect_db();
        $sql = "SELECT * FROM partner";
        $result = $conn -> query($sql);
        $conn -> close();
        return $result;
    }
?>