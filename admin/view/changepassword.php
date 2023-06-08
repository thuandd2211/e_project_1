<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../controller/changepassword.php'?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Change Password</h2>
        <div class="block">               
         <form method="post">
            <table class="form">					
                <tr>
                    <td>
                        <label>Old Password</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Enter Old Password..."  name="old_pass" class="medium" />
                        <?php echo isset($error['old_pass']) ? $error['old_pass'] : ''; ?>
                    </td>
                </tr>
				 <tr>
                    <td>
                        <label>New Password</label>
                    </td>
                    <td>
                        <input type="password" placeholder="Enter New Password..." name="new_pass" class="medium" />
                        <?php echo isset($error['new_pass']) ? $error['new_pass'] : ''; ?>
                    </td>
                </tr>
				 
				
				 <tr>
                    <td>
                    </td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<?php include '../inc/footer.php';?>