<?php 
    include('../model/dbhelper.php');
    $name = $_GET['name'];
    $id = $_GET['id'];
    if ($name == 'event'){
        delete_intro($id);
        $conn = connect_db();
        $sql = "SELECT id FROM event_detail WHERE event_type_id = ".$id;
        $detail_id = $conn -> query($sql);
        $conn -> close();
        delete_service($detail_id);
        delete_detail($id);
        delete_food($id);
        delete_event($id);
        header('location: ../view/event_list.php');
    }
    if ($name == 'intro'){
        delete_intro($id);
        header('location: ../view/intro_list.php');
    }
    if ($name == 'detail'){
        delete_detail($id);
        header('location: ../view/detail_list.php');
    }
    if ($name == 'service'){
        delete_service($id);
        header('location: ../view/service_list.php');
    }
    if ($name == 'food'){
        delete_food($id);
        header('location: ../view/food_list.php');
    }
    if ($name == 'partner'){
        delete_partner($id);
        header('location: ../view/partner_list.php');
    }    if ($name == 'gallery'){
        delete_gallery($id);
        header('location: ../view/gallery_list.php');
    }
?>