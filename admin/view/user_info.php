<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../model/dbhelper.php';?>
<?php 
    $result = select_admin_id($_SESSION['admin'][3]);
    if ($result -> num_rows > 0){
        while($row = $result -> fetch_assoc()){
            $fullname = $row['fullname'];
            $username = $row['username'];
            $phone = $row['phone'];
            $email = $row['email'];
            $address = $row['address'];
        }
    }
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Admin Profile</h2>
        <div class="block">  
            <table class="form">
                <tr>
                    <td>Fullname</td>
                    <td><?php echo $fullname; ?></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><?php echo $username; ?></td>
                </tr>                
                <tr>
                    <td>Phone</td>
                    <td><?php echo $phone; ?></td>
                </tr>                
                <tr>
                    <td>Email</td>
                    <td><?php echo $email; ?></td>
                </tr>                
                <tr>
                    <td>Address</td>
                    <td><?php echo $address; ?></td>
                </tr>
            </table>
       </div>
    </div>
</div>


<?php include '../inc/footer.php';?>
