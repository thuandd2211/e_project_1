<?php 
    include('../model/dbhelper.php');
    $data = array();
    $error = array();
    $result_gallery = select_gallery();
    $result_gallery_id = select_gallery_id($_GET['id']);
    if ($result_gallery_id -> num_rows > 0){
        while($row_gallery_id = $result_gallery_id -> fetch_assoc()){
            $title = $row_gallery_id['title'];
            $author = $row_gallery_id['author'];
            $script = $row_gallery_id['script'];
            $image = $row_gallery_id['image'];
            $event_id = $row_gallery_id['event_type_id'];
        }
    }
    if (!empty($_POST['submit'])){
        $data['title'] = !empty($_POST['title']) ? strtoupper($_POST['title']) : $title;
        $data['image'] = !empty($_POST['image']) ? $_POST['image'] : $image;
        $data['script'] = !empty($_POST['script']) ? $_POST['script'] : $script;
        $data['author'] = !empty($_POST['author']) ? $_POST['author'] : $author;
        $data['event_id'] = !empty($_POST['event_id']) ? $_POST['event_id'] : $event_id;

            if ($result_gallery -> num_rows > 0){
                while ($row = $result_gallery -> fetch_assoc()){
                    if ($row['title'] == $data['title'] || $data['title'] != $title){
                        $error['title'] = "Gallery already existed.";
                    }
                }
            }
            if (!$error){
                update_gallery($data['title'],$data['author'],$data['image'],$data['script'],$_GET['id']);
            }
    }
?>