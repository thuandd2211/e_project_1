<?php 
    include('../model/dbhelper.php');
    $name = $_GET['name'];
    $id = $_GET['id'];
    if ($name == 'event'){
        restore_event($id);
        restore_intro($id);
        restore_detail($id);
        restore_food($id);
        restore_gallery($id);
        header('location: ../view/event_list.php');
    }
    if ($name == 'intro'){
        $result_event_id = select_event_id($id);
        restore_intro($id);
        if (($result_event_id -> fetch_assoc())['status'] == 1){
            restore_event($id);
        }
        header('location: ../view/intro_list.php');
    }
    if ($name == 'detail'){
        $result_event_id = select_event_id($id);
        restore_detail($id);
        restore_service($id);
        if (($result_event_id -> fetch_assoc())['status'] == 1){
            restore_event($id);
        }
        header('location: ../view/detail_list.php');
    }
    if ($name == 'service'){
        $conn = connect_db();
        $sql = "SELECT event_type_id , status FROM event_detail WHERE id = ".$id;
        $result= $conn -> query($sql);
        $conn -> close();
        restore_service($id);
        if (($result -> fetch_assoc())['status'] == 1){
            restore_detail(($result -> fetch_assoc())['event_type_id']);
            $result_event_id = select_event_id(($result -> fetch_assoc())['event_type_id']);
            if (($result_event_id -> fetch_assoc())['status'] == 1){
                restore_event(($result -> fetch_assoc())['event_type_id']);
            }
        }
        header('location: ../view/service_list.php');
    }
    if ($name == 'food'){
        $result_event_id = select_event_id($id);
        restore_food($id);
        if (($result_event_id -> fetch_assoc())['status'] == 1){
            restore_event($id);
        }
        header('location: ../view/food_list.php');
    }
    if ($name == 'gallery'){
        $result_event_id = select_event_id($id);
        restore_gallery($id);
        if (($result_event_id -> fetch_assoc())['status'] == 1){
            restore_event($id);
        }
        header('location: ../view/gallery_list.php');
    }    
    if ($name == 'partner'){
        restore_partner($id);
        header('location: ../view/partner_list.php');
    }
?>