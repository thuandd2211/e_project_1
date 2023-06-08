<?php 
    include("../model/dbhelper.php");
    $data = array();
    $error = array();
    $result_event_id = select_event();
    $result_intro = select_intro();
    if (!empty($_POST['submit'])){
        $data['title'] = isset($_POST['title']) ? strtoupper($_POST['title']) : '';
        $data['event_id'] = isset($_POST['event_id']) ? $_POST['event_id'] : '';
        $data['image'] = isset($_POST['image']) ? $_POST['image'] : '';
        if (empty($data['title'])){
            $error['title'] = "Please fill title";
        } else {
            if ($result_intro -> num_rows > 0){
                while ($row_intro = $result_intro -> fetch_assoc()){
                    if ($row_intro['title'] == $data['title']){
                        $error['title'] = "Title already existed";
                    }
                }
            }
        }
        if (empty($data['image'])){
            $error['image'] = "Please fill image";
        }
        if (!$error){
            add_food($data['event_id'],$data['title'],$data['image']);
        }
    }

?>