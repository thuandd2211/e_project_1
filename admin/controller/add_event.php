<?php 
    include("../model/dbhelper.php");
    $data = array();
    $error = array();
    if (!empty($_POST['submit'])){
        $data['name'] = isset($_POST['name_event']) ? strtoupper($_POST['name_event']) : '';
        $data['img'] = isset($_POST['img_event']) ? $_POST['img_event'] : '';
        $result = select_event();
        if ($result -> num_rows > 0){
            while($row = $result -> fetch_assoc()){
                if (empty($data['name'])){
                    $error['name'] = "Please fill name";
                } else 
                if ($row['name'] == $data['name']){
                    $error['name'] = "Event already existed!";
                } 
    
            }
        }            
        if (!$error){
            add_event($data['name'],$data['img']);
        }
    }
?>