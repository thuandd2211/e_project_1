<?php 
    include('../model/dbhelper.php');
    $data = array();
    $error = array();
    $result_intro = select_intro();
    $result_intro_id = select_intro_id($_GET['id']);
    if ($result_intro_id -> num_rows > 0){
        while($row_intro_id = $result_intro_id -> fetch_assoc()){
            $title = $row_intro_id['title'];
            $script = $row_intro_id['script'];
            $image = $row_intro_id['image'];
            $event_id = $row_intro_id['event_type_id'];
        }
    }
    if (!empty($_POST['submit'])){
        $data['title'] = !empty($_POST['title']) ? strtoupper($_POST['title']) : $title;
        $data['image'] = !empty($_POST['image']) ? $_POST['image'] : $image;
        $data['script'] = !empty($_POST['script']) ? $_POST['script'] : $script;
        $data['event_id'] = !empty($_POST['event_id']) ? $_POST['event_id'] : $event_id;

            if ($result_intro -> num_rows > 0){
                while ($row = $result_intro -> fetch_assoc()){
                    if ($row['title'] == $data['title'] || $data['title'] != $title){
                        $error['title'] = "Intro already existed.";
                    }
                }
            }
            if (!$error){
                update_intro($data['title'],$data['image'],$data['script'],$_GET['id']);
            }
    }
?>