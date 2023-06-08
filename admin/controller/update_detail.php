<?php 
    include('../model/dbhelper.php');
    $data = array();
    $error = array();
    $result_detail = select_detail();
    $result_detail_id = select_detail_id($_GET['id']);
    if ($result_detail_id -> num_rows > 0){
        while($row_detail_id = $result_detail_id -> fetch_assoc()){
            $title = $row_detail_id['title'];
            $script = $row_detail_id['script'];
            $image = $row_detail_id['image'];
            $event_id = $row_detail_id['event_type_id'];
        }
    }
    if (!empty($_POST['submit'])){
        $data['title'] = !empty($_POST['title']) ? strtoupper($_POST['title']) : $title;
        $data['image'] = !empty($_POST['image']) ? $_POST['image'] : $image;
        $data['script'] = !empty($_POST['script']) ? $_POST['script'] : $script;
        $data['event_id'] = !empty($_POST['event_id']) ? $_POST['event_id'] : $event_id;

            if ($result_detail -> num_rows > 0){
                while ($row = $result_detail -> fetch_assoc()){
                    if ($row['title'] == $data['title'] || $data['title'] != $title){
                        $error['title'] = "Detail already existed.";
                    }
                }
            }
            if (!$error){
                update_detail($data['title'],$data['image'],$data['script'],$_GET['id']);
            }
    }
?>