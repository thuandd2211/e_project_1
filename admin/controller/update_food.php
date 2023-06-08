<?php 
    include('../model/dbhelper.php');
    $data = array();
    $error = array();
    $result_food = select_food();
    $result_food_id = select_food_id($_GET['id']);
    if ($result_food_id -> num_rows > 0){
        while($row_food_id = $result_food_id -> fetch_assoc()){
            $title = $row_food_id['title'];
            $script = $row_food_id['script'];
            $image = $row_food_id['image'];
            $event_id = $row_food_id['event_type_id'];
        }
    }
    if (!empty($_POST['submit'])){
        $data['title'] = !empty($_POST['title']) ? strtoupper($_POST['title']) : $title;
        $data['image'] = !empty($_POST['image']) ? $_POST['image'] : $image;
        $data['event_id'] = !empty($_POST['event_id']) ? $_POST['event_id'] : $event_id;

            if ($result_food -> num_rows > 0){
                while ($row = $result_food -> fetch_assoc()){
                    if ($row['title'] == $data['title'] || $data['title'] != $title){
                        $error['title'] = "Food already existed.";
                    }
                }
            }
            if (!$error){
                update_food($data['title'],$data['image'],$_GET['id']);
            }
    }
?>