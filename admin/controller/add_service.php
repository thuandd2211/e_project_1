<?php 
    include("../model/dbhelper.php");
    $data = array();
    $error = array();
    $result_detail = select_detail();
    $result_service = select_service();
    if (!empty($_POST['submit'])){
        $data['title'] = isset($_POST['title']) ? strtoupper($_POST['title']) : '';
        $data['script'] = isset($_POST['script']) ? $_POST['script'] : '';
        $data['event_id'] = isset($_POST['event_id']) ? $_POST['event_id'] : '';
        $data['image'] = isset($_POST['image']) ? $_POST['image'] : '';
        if (empty($data['title'])){
            $error['title'] = "Please fill title";
        } else {
            if ($result_service -> num_rows > 0){
                while ($row_service = $result_service -> fetch_assoc()){
                    if ($row_service['title'] == $data['title']){
                        $error['title'] = "Title already existed";
                    }
                }
            }
        }
        if (empty($data['script'])){
            $error['script'] = "Please fill description";
        }
        if (empty($data['image'])){
            $error['image'] = "Please fill image";
        }
        if (!$error){
            add_service($data['event_id'],$data['title'],$data['script'],$data['image']);
        }
    }

?>