<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../model/dbhelper.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Partner List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Name</th>
					<th>Phone</th>
					<th>Email</th>
					<th>Image</th>
					<th>Action</th>
					<!-- <th>Category</th>
					<th>Image</th>
					<th>Action</th> -->
				</tr>
			</thead>
			<tbody>
				<?php
					$result_partner = select_partner();
					if ($result_partner -> num_rows > 0){
						while ($row_partner = $result_partner -> fetch_assoc()){
							$delete = "partner";
							echo "
								<tr class='odd gradeX'>
									<td class='center'>{$row_partner['name']}</td>
									<td class='center'>{$row_partner['phone']}</td>
									<td class='center'>{$row_partner['email']}</td>
									<td class='center' style='width:30%;'><img style='width:60%;' src='../../view/images/{$row_partner['logo']}'></td>
									
														
							";
							if ($row_partner['status'] == 0){
								echo "<td class='center'><a href='update_partner.php?id={$row_partner['id']}'>Edit</a> || <a href='../controller/delete.php?id={$row_partner['id']}&name={$delete}'>Delete</a></td>";
							} else {
								echo "<td class='center'><a href='../controller/restore.php?id={$row_partner['id']}&name={$delete}'>Restore</a></td>";
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
