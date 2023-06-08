<?php 
    include('../model/dbhelper.php');
    $data = array();
    $error = array();
    $result_service = select_service();
    $result_service_id = select_service_id($_GET['id']);
    if ($result_service_id -> num_rows > 0){
        while($row_service_id = $result_service_id -> fetch_assoc()){
            $title = $row_service_id['title'];
            $script = $row_service_id['script'];
            $image = $row_service_id['image'];
            $detail_id = $row_service_id['event_detail_id'];
        }
    }
    if (!empty($_POST['submit'])){
        $data['title'] = !empty($_POST['title']) ? strtoupper($_POST['title']) : $title;
        $data['image'] = !empty($_POST['image']) ? $_POST['image'] : $image;
        $data['script'] = !empty($_POST['script']) ? $_POST['script'] : $script;
        $data['detail_id'] = !empty($_POST['detail_id']) ? $_POST['detail_id'] : $detail_id;

            if ($result_service -> num_rows > 0){
                while ($row = $result_service -> fetch_assoc()){
                    if ($row['title'] == $data['title'] || $data['title'] != $title){
                        $error['title'] = "Service already existed.";
                    }
                }
            }
            if (!$error){
                update_service($data['title'],$data['image'],$data['script'],$_GET['id']);
            }
    }
?>