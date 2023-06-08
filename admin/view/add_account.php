<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../controller/add_account.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Add New Event</h2>
        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Fullname</label>
                    </td>
                    <td>
                        <input type="text" name="fullname" placeholder="<?php echo isset($error['fullname']) ? $error['fullname'] :  'Enter Fullname' ;?>"   class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Username</label>
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="<?php echo isset($error['username']) ? $error['username'] :  'Enter Username' ;?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="<?php echo isset($error['password']) ? $error['password'] :  'Enter Password' ;?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Phone</label>
                    </td>
                    <td>
                        <input type="text" name="phone" placeholder="<?php echo isset($error['phone']) ? $error['phone'] :  'Enter Phone' ;?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="text" name="email" placeholder="<?php echo isset($error['email']) ? $error['email'] :  'Enter Email' ;?>" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Address</label>
                    </td>
                    <td>
                        <input type="text" name="address" placeholder="<?php echo isset($error['address']) ? $error['address'] :  'Enter Address' ;?>" class="medium" />
                    </td>
                </tr>
	
				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Add" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<script src="../js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script>
<!-- Load TinyMCE -->
<?php include '../inc/footer.php';?>


