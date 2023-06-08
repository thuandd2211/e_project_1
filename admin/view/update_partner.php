<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../controller/update_partner.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Partner</h2>
        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
				<!-- <tr>
                    <td>
                        <label>partner</label>
                    </td>
                    <td>
                        <select id="select" name="select">
                            <option>Select partner</option>
                            <option value="1">Category One</option>
                            <option value="2">Category Two</option>
                            <option value="3">Category Three</option>
                        </select>
                    </td>
                </tr>                -->
                <tr>
                    <td>
                        <label>Name</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $name; ?>" name="name" class="medium" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Phone</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $phone; ?>" name="phone" class="medium" />
                    </td>
                </tr>                <tr>
                    <td>
                        <label>Email</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $email; ?>" name="email" class="medium" />
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input type="file" name="image"/>
                    </td>
                </tr>
				
				<!-- <tr>
                    <td>
                        <label>Product Type</label>
                    </td>
                    <td>
                        <select id="select" name="select">
                            <option>Select Type</option>
                            <option value="1">Featured</option>
                            <option value="2">Non-Featured</option>
                        </select>
                    </td>
                </tr> -->

				<tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" Value="Update" />
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!-- Load TinyMCE -->
<!-- <script src="../js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        setupTinyMCE();
        setDatePicker('date-picker');
        $('input[type="checkbox"]').fancybutton();
        $('input[type="radio"]').fancybutton();
    });
</script> -->
<!-- Load TinyMCE -->
<?php include '../inc/footer.php';?>


