<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../model/dbhelper.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Viewer List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Username</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<!-- <th>Category</th>
					<th>Image</th>
					<th>Action</th> -->
				</tr>
			</thead>
			<tbody>
				<?php
					$result_viewer = select_viewer();
					if ($result_viewer -> num_rows > 0){
						while ($row_viewer = $result_viewer -> fetch_assoc()){
							$delete = "viewer";
							echo "
								<tr class='odd gradeX'>
									<td style='text-align:center;'>{$row_viewer['username']}</td>
									<td style='text-align:center;'>{$row_viewer['name']}</td>
									<td style='text-align:center;'>{$row_viewer['email']}</td>
									<td style='text-align:center;'>{$row_viewer['phone']}</td>
								</tr>			
								";							
						}
					}
				?>


			</tbody>
		</table>

       </div>
    </div>
</div>


<?php include '../inc/footer.php';?>
