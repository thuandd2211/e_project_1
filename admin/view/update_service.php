<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../controller/update_service.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Event Service</h2>
        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
               
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $title; ?>" class="medium"  name="title"/>
                    </td>
                </tr>
				<tr>
                    <td>
                        <label>Event type</label>
                    </td>
                    <td>
                        <select id="select" name="detail_id">
                            <?php
                                $result_detail_id = select_detail_id($detail_id);
                                if ($result_detail_id -> num_rows > 0){
                                    while ($row_detail = $result_detail_id -> fetch_assoc()){
                                        echo "<option value='{$row_detail['id']}'>{$row_detail['title']}</option>";
                                    }
                                }
                            ?>
                            <!-- <option>Select Event</option>
                            <option value="1">Category One</option>
                            <option value="2">Category Two</option>
                            <option value="3">Category Three</option> -->
                        </select>
                    </td>
                </tr>				
				 <tr>
                    <td style="vertical-align: top; padding-top: 9px;">
                        <label>Description</label>
                    </td>
                    <td>
                        <textarea style="width: 350px; height: 100px;" name="script" ></textarea>
                    </td>
                </tr>            
                <tr>
                    <td>
                        <label>Upload Image</label>
                    </td>
                    <td>
                        <input type="file" name="image" />
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
                        <input type="submit" name="submit" Value="Add" />
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


