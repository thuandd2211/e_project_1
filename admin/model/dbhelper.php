<?php
    //connect database
    function connect_db(){
        $conn = new mysqli('localhost', 'root', '12345678', 'event_management_1');
        if($conn->connect_error){
            die ("Can not connect your database". $conn->connect_error);
        }
        return $conn;
    }

    //close connect database
    function close_db($stmt, $conn){
        $stmt->close();
        $conn->close();
    }

    // check admin
    function check_admin($str){     
        $conn = connect_db();
        $sql = "SELECT * FROM admin WHERE username = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("s",$user);
        $user = $str;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }

    // add event
    function add_event($name_event,$img){
        $conn = connect_db();
        $sql = "INSERT INTO event_type (name,image) VALUES (?,?)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("ss",$name,$image);
        $name = $name_event;
        $image = $img;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    
    // add_intro
    function add_intro($id,$title,$script,$image){
        $conn = connect_db();
        $sql = "INSERT INTO event_intro (event_type_id,title,script,image) VALUES (?,?,?,?)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('isss',$id_type,$title_intro,$script_intro,$img_intro);
        $id_type = $id;
        $title_intro = $title;
        $script_intro = $script;
        $img_intro = $img;
        $stmt -> execute();
        close_db($stmt,$conn);
    }

    // add detail
    function add_detail($id,$title,$script,$image){
        $conn = connect_db();
        $sql = "INSERT INTO event_detail (event_type_id,title,script,image) VALUES (?,?,?,?)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('isss',$id_type,$title_detail,$script_detail,$img_detail);
        $id_type = $id;
        $title_detail = $title;
        $script_detail = $script;
        $img_detail = $img;
        $stmt -> execute();
        close_db($stmt,$conn);
    }

    // add service
    function add_service($id,$title,$script,$image){
        $conn = connect_db();
        $sql = "INSERT INTO event_service (event_detail_id,title,script,image) VALUES (?,?,?,?)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('isss',$id_type,$title_service,$script_service,$img_service);
        $id_type = $id;
        $title_service = $title;
        $script_service = $script;
        $img_service = $img;
        $stmt -> execute();
        close_db($stmt,$conn);

    }

    // add food
    function add_food($id,$title,$image){
        $conn = connect_db();
        $sql = "INSERT INTO event_food (event_type_id,title,image) VALUES (?,?,?)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('isss',$id_type,$title_food,$img_food);
        $id_type = $id;
        $title_food = $title;
        $img_food = $img;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // add partner
    function add_partner($name,$phone,$email,$logo){
        $conn = connect_db();
        $sql = "INSERT INTO partner (name,phone,email,logo) VALUES (?,?,?,?)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("ssss",$name_partner,$phone_partner,$email_partner,$logo_partner);
        $name_partner = $name;
        $phone_partner = $phone;
        $email_partner = $email;
        $logo_partner = $logo;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // add gallery 
    function add_gallery($id,$title,$author,$script,$image){
        $conn = connect_db();
        $sql = "INSERT INTO event_service (event_type_id,title,,author,script,image) VALUES (?,?,?,?,?)";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('issss',$id_type,$title_gallery,$author_gallery,$script_gallery,$img_gallery);
        $id_type = $id;
        $title_gallery = $title;
        $author_gallery = $author;
        $script_gallery = $script;
        $img_gallery = $img;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // select event
    function select_event(){
        $conn = connect_db();
        $sql = "SELECT * FROM event_type";
        $result = $conn -> query($sql);
        return $result;
        $conn -> close();
    }
    // select intro
    function select_intro(){
        $conn = connect_db();
        $sql = "SELECT * FROM event_intro";
        $result = $conn -> query($sql);
        return $result;
        $conn -> close();
    }
    // select detail
    function select_detail(){
        $conn = connect_db();
        $sql = "SELECT * FROM event_detail";
        $result = $conn -> query($sql);
        return $result;
        $conn -> close();
    }
    // select service
    function select_service(){
        $conn = connect_db();
        $sql = "SELECT * FROM event_service";
        $result = $conn -> query($sql);
        return $result;
        $conn -> close();
    }
    // select food
    function select_food(){
        $conn = connect_db();
        $sql = "SELECT * FROM event_food";
        $result = $conn -> query($sql);
        return $result;
        $conn -> close();
    }
    // select partner
    function select_partner(){
        $conn = connect_db();
        $sql = "SELECT * FROM partner";
        $result = $conn -> query($sql);
        return $result;
        $conn -> close();
    }
    // select gallery
    function select_gallery(){
        $conn = connect_db();
        $sql = "SELECT * FROM event_gallery";
        $result = $conn -> query($sql);
        return $result;
        $conn -> close();
    }
    // select user 
    function select_viewer(){
        $conn = connect_db();
        $sql = "SELECT * FROM viewer";
        $result = $conn -> query($sql);
        return $result;
        $conn -> close();
    }
    // select customer
    function select_customer(){
        $conn = connect_db();
        $sql = "SELECT * FROM customer";
        $result = $conn -> query($sql);
        return $result;
        $conn -> close();
    }
    // select event by id
    function select_event_id($id){
        $conn = connect_db();
        $sql = "SELECT * FROM event_type WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('i',$id_type);
        $id_type = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
    // select intro by id
    function select_intro_id($id){
        $conn = connect_db();
        $sql = "SELECT * FROM event_intro WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('i',$id_intro);
        $id_intro = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    } 
    // select detail by id
    function select_detail_id($id){
        $conn = connect_db();
        $sql = "SELECT * FROM event_detail WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('i',$id_detail);
        $id_detail = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
    // select service by id
    function select_service_id($id){
        $conn = connect_db();
        $sql = "SELECT * FROM event_service WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('i',$id_service);
        $id_service = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    } 
    // select food by id
    function select_food_id($id){
        $conn = connect_db();
        $sql = "SELECT * FROM event_food WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('i',$id_food);
        $id_food = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    } 
    // select gallery by id
    function select_gallery_id($id){
        $conn = connect_db();
        $sql = "SELECT * FROM event_gallery WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('i',$id_gallery);
        $id_gallery = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    } 
    // select partner by id
    function select_partner_id($id){
        $conn = connect_db();
        $sql = "SELECT * FROM partner WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('i',$id_partner);
        $id_partner = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
    // select admin by id
    function select_admin_id($id){
        $conn = connect_db();
        $sql = "SELECT * FROM admin WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param('i',$id_admin);
        $id_admin = $id;
        $stmt -> execute();
        $result = $stmt -> get_result();
        return $result;
        close_db($stmt,$conn);
    }
    // update event
    function update_event($name,$img,$id){
        $conn = connect_db();
        $sql = "UPDATE event_type SET name = ? , image = ? WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("ssi",$name_event,$img_event,$id_event);
        $name_event = $name;
        $img_event = $img;
        $id_event = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // update intro
    function update_intro($title,$img,$script,$id){
        $conn = connect_db();
        $sql = "UPDATE event_intro SET title= ? , script = ? , image = ? WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("sssi",$title_intro,$script_intro,$img_intro,$id_event);
        $title_intro = $title;
        $img_intro = $img;
        $script_intro = $script;
        $id_event = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // update detail
    function update_detail($title,$img,$script,$id){
        $conn = connect_db();
        $sql = "UPDATE event_detail SET title= ? , script = ? , image = ? WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("sssi",$title_detail,$script_detail,$img_detail,$id_event);
        $title_detail = $title;
        $img_detail = $img;
        $script_detail = $script;
        $id_event = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // update service
    function update_service($title,$img,$script,$id){
        $conn = connect_db();
        $sql = "UPDATE event_service SET title= ? , script = ? , image = ? WHERE event_detail_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("sssi",$title_service,$script_service,$img_service,$id_event);
        $title_service = $title;
        $img_service = $img;
        $script_service = $script;
        $id_event = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // update food
    function update_food($title,$img,$id){
        $conn = connect_db();
        $sql = "UPDATE event_food SET title= ? , image = ? WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("ssi",$title_food,$img_food,$id_event);
        $title_food = $title;
        $img_food = $img;
        $id_event = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // update gallery
    function update_gallery($title,$author,$img,$script,$id){
        $conn = connect_db();
        $sql = "UPDATE event_gallery SET title= ? , author = ? , script = ? , image = ? WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("ssssi",$title_gallery,$author_gallery,$script_gallery,$img_gallery,$id_event);
        $title_gallery = $title;
        $img_gallery = $img;
        $script_gallery = $script;
        $author_gallery = $author;
        $id_event = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // update partner
    function update_partner($name,$phone,$email,$logo,$id){
        $conn = connect_db();
        $sql = "UPDATE partner SET name = ? , phone = ? , email = ? , logo = ? WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("ssssi",$name_partner,$phone_partner,$email_partner,$img_partner,$id_partner);
        $name_partner = $name;
        $phone_partner = $phone;
        $email_partner = $email;
        $img_partner = $logo;
        $id_partner = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    //delete event
    function delete_event($id){
        $conn = connect_db();
        $sql = "UPDATE event_type SET status = 1 WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_event);
        $id_event = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // delete intro
    function delete_intro($id){
        $conn = connect_db();
        $sql = "UPDATE event_intro SET status = 1 WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_intro);
        $id_intro = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // delete detail
    function delete_detail($id){
        $conn = connect_db();
        $sql = "UPDATE event_detail SET status = 1 WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_detail);
        $id_detail = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // delete service
    function delete_service($id){
        $conn = connect_db();
        $sql = "UPDATE event_service SET status = 1 WHERE event_detail_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_service);
        $id_service = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // delete food
    function delete_food($id){
        $conn = connect_db();
        $sql = "UPDATE event_food SET status = 1 WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_food);
        $id_food = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // delete gallery
    function delete_gallery($id){
        $conn = connect_db();
        $sql = "UPDATE event_gallery SET status = 1 WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_gallery);
        $id_gallery = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // delete partner
    function delete_partner($id){
        $conn = connect_db();
        $sql = "UPDATE partner SET status = 1 WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_partner);
        $id_partner = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    //restore event
    function restore_event($id){
        $conn = connect_db();
        $sql = "UPDATE event_type SET status = 0 WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_event);
        $id_event = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // restore intro
    function restore_intro($id){
        $conn = connect_db();
        $sql = "UPDATE event_intro SET status = 0 WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_intro);
        $id_intro = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // restore detail
    function restore_detail($id){
        $conn = connect_db();
        $sql = "UPDATE event_detail SET status = 0 WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_detail);
        $id_detail = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // restore service
    function restore_service($id){
        $conn = connect_db();
        $sql = "UPDATE event_service SET status = 0 WHERE event_detail_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_service);
        $id_service = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // restore food
    function restore_food($id){
        $conn = connect_db();
        $sql = "UPDATE event_food SET status = 0 WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_food);
        $id_food = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // restore gallery
    function restore_gallery($id){
        $conn = connect_db();
        $sql = "UPDATE event_gallery SET status = 0 WHERE event_type_id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_gallery);
        $id_gallery = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // restore partner
    function restore_partner($id){
        $conn = connect_db();
        $sql = "UPDATE partner SET status = 0 WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("i",$id_partner);
        $id_partner = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
    // change password
    function change_password($id,$new){
        $conn = connect_db();
        $sql = "UPDATE admin SET password = ? WHERE id = ?";
        $stmt = $conn -> prepare($sql);
        $stmt -> bind_param("si",$pass,$id_admin);
        $pass = $new;
        $id_admin = $id;
        $stmt -> execute();
        close_db($stmt,$conn);
    }
?>