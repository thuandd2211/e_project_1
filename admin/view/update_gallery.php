<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../controller/update_gallery.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Update Event Gallery</h2>
        <div class="block">               
         <form action="" method="post" enctype="multipart/form-data">
            <table class="form">
				<tr>
                    <td>
                        <label>Event type</label>
                    </td>
                    <td>
                        <select id="select" name="event_id">
                            <?php
                                $result_event_id = select_event_id($event_id);
                                if ($result_event_id -> num_rows > 0){
                                    while ($row_event = $result_event_id -> fetch_assoc()){
                                        echo "<option value='{$row_event['id']}'>{$row_event['name']}</option>";
                                    }
                                }
                            ?>
                        </select>
                    </td>
                </tr>	               
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
                        <label>Author</label>
                    </td>
                    <td>
                        <input type="text" value="<?php echo $author; ?>" class="medium"  name="author"/>
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


