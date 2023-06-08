<?php 
    include("../model/dbhelper.php");
    $data = array();
    $error = array();
    $result_event_id = select_event();
    $result_gallery = select_gallery();
    if (!empty($_POST['submit'])){
        $data['title'] = isset($_POST['title']) ? strtoupper($_POST['title']) : '';
        $data['script'] = isset($_POST['script']) ? $_POST['script'] : '';
        $data['author'] = isset($_POST['author']) ? $_POST['author'] : '';
        $data['event_id'] = isset($_POST['event_id']) ? $_POST['event_id'] : '';
        $data['image'] = isset($_POST['image']) ? $_POST['image'] : '';
        if (empty($data['title'])){
            $error['title'] = "Please fill title";
        } else {
            if ($result_gallery -> num_rows > 0){
                while ($row_gallery = $result_gallery -> fetch_assoc()){
                    if ($row_gallery['title'] == $data['title']){
                        $error['title'] = "Title already existed";
                    }
                }
            }
        }
        if (empty($data['author'])){
            $error['author'] = "Please fill author";
        }
        if (empty($data['script'])){
            $error['script'] = "Please fill description";
        }
        if (empty($data['image'])){
            $error['image'] = "Please fill image";
        }
        if (!$error){
            add_gallery($data['event_id'],$data['title'],$data['title'],$data['script'],$data['image']);
        }
    }

?>