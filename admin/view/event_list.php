<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../model/dbhelper.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Event List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Name</th>
					<th>Image</th>
					<th>Action</th>
					<!-- <th>Category</th>
					<th>Image</th>
					<th>Action</th> -->
				</tr>
			</thead>
			<tbody>
				<?php
					$result_event = select_event();
					if ($result_event -> num_rows > 0){
						while ($row_event = $result_event -> fetch_assoc()){
							$delete = "event";
							echo "
								<tr class='odd gradeX'>
									<td class='center'>{$row_event['name']}</td>
									<td class='center' style='width:30%;'><img style='width:60%;' src='../../view/images/{$row_event['image']}'></td>
									
														
							";
							if ($row_event['status'] == 0){
								echo "<td class='center'><a href='update_event.php?id={$row_event['id']}'>Edit</a> || <a href='../controller/delete.php?id={$row_event['id']}&name={$delete}'>Delete</a></td>";
							} else {
								echo "<td class='center'><a href='../controller/restore.php?id={$row_event['id']}&name={$delete}'>Restore</a></td>";
							}
							
							echo " </tr>";
						}
					}
				?>


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
