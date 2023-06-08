<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../model/dbhelper.php';?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Customer List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>	
					<th>Description</th>
					<th>Date</th>
					<!-- <th>Category</th>
					<th>Image</th>
					<th>Action</th> -->
				</tr>
			</thead>
			<tbody>
				<?php
					$result_customer = select_customer();
					if ($result_customer -> num_rows > 0){
						while ($row_customer = $result_customer -> fetch_assoc()){
							echo "
								<tr class='odd gradeX'>
									<td style='text-align:center;'>{$row_customer['name']}</td>
									<td style='text-align:center;'>{$row_customer['email']}</td>
									<td style='text-align:center;'>{$row_customer['phone']}</td>
									<td style='text-align:center;'>{$row_customer['description']}</td>
									<td style='text-align:center;'>{$row_customer['date']}</td>
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
