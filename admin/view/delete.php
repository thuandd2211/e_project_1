<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Delete</h2>
        <div class="block">  
            <table class="data display datatable form" id="example">
			<thead>
				<tr>
                    <th>Detail</th>
                    <th>Title</th>
                    <th>Script</th>
					<th>Image</th>
					<!-- <th>Category</th>
					<th>Image</th>
					<th>Action</th> -->
				</tr>
			</thead>
			<tbody>
                
                <tr class="odd gradeX">
                    <td><input type="checkbox"></td>
                    <td>Trident</td>
                    <td>Internet Explorer 4.0</td>
                    <td></td>
                    <td></td>

                    <!-- <td>Win 95+</td>
                    <td class="center"> 4</td>
                    <td><a href="">Edit</a> || <a href="">Delete</a></td> -->
                </tr>
                <tr>
                    <td><input type="submit" name="submit" Value="Delete" /></td>
                    <td></td>
                    <td></td>
                </tr>
			</tbody>

		</table>

       </div>
    </div>
</div>

<!-- <script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();
        $('.datatable').dataTable();
		setSidebarHeight();
    });
</script> -->
<?php include '../inc/footer.php';?>
