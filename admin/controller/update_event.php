<?php 
    include('../model/dbhelper.php');
    $data = array();
    $error = array();
    $result_event = select_event();
    $result_event_id = select_event_id($_GET['id']);
    if ($result_event_id -> num_rows > 0){
        while($row_event_id = $result_event_id -> fetch_assoc()){
            $name = $row_event_id['name'];
            $image = $row_event_id['image'];
        }
    }
    if (!empty($_POST['submit'])){
        $data['name'] = !empty($_POST['name']) ? strtoupper($_POST['name']) : $name;
        $data['image'] = !empty($_POST['image']) ? $_POST['image'] : $image;
            if ($result_event -> num_rows > 0){
                while ($row = $result_event -> fetch_assoc()){
                    if ($row['name'] == $data['name'] || $data['name'] != $name){
                        $error['name'] = "Event already existed.";
                    }
                }
            }
            if (!$error){
                update_event($data['name'],$data['image'],$data['script'],$_GET['id']);
            }
    }
?>