<?php 
    include('../model/dbhelper.php');
    $data = array();
    $error = array();
    $result_partner = select_partner();
    $result_partner_id = select_partner_id($_GET['id']);
    if ($result_partner_id -> num_rows > 0){
        while($row_partner_id = $result_partner_id -> fetch_assoc()){
            $name = $row_partner_id['name'];
            $image = $row_partner_id['logo'];
            $phone = $row_partner_id['phone'];
            $email = $row_partner_id['email'];
        }
    }
    if (!empty($_POST['submit'])){
        $data['name'] = !empty($_POST['name']) ? $_POST['name'] : $name;
        $data['phone'] = !empty($_POST['phone']) ? $_POST['phone'] : $phone;
        $data['email'] = !empty($_POST['email']) ? $_POST['email'] : $image;
        $data['image'] = !empty($_POST['image']) ? $_POST['image'] : $image;
            if ($result_partner -> num_rows > 0){
                while ($row = $result_partner -> fetch_assoc()){
                    if ($row['name'] == $data['name'] || $data['name'] != $name){
                        $error['name'] = "Partner already existed.";
                    }
                }
            }
            if (!$error){
                update_partner($data['name'],$data['phone'],$data['email'],$data['logo'],$_GET['id']);
            }
    }
?>