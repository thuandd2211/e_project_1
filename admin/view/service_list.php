<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../model/dbhelper.php';?>
<?php
	$conn = connect_db();
	$sql = "SELECT event_detail.id AS detail_id, event_detail.title AS detail_name,event_service.id AS service_id, event_service.title AS title,
	event_service.script AS script, event_service.image AS image, event_service.status AS status FROM event_detail
	JOIN event_service ON event_detail.id = event_service.event_detail_id";
	$result = $conn -> query($sql);
	$conn -> close();
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Service List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>					
                    <th>Detail</th>
					<th>Title</th>
					<th>Script</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr class="odd gradeX">
					<?php 
						if ($result -> num_rows > 0){
							while ($row = $result -> fetch_assoc()){
								$delete = "service";	
								echo "
									<td class='center'>{$row['detail_name']}</td>
									<td class='center'>{$row['title']}</td>
									<td class='center'>{$row['script']}</td>
									<td class='center' style='width:30%;'><img style='width:60%;' src='../../view/images/{$row['image']}'></td>
								";
								if ($row['status'] == 0){
									echo "<td class='center'><a href='update_service.php?id={$row['service_id']}'>Edit</a> || <a href='../controller/delete.php?id={$row['service_id']}&name={$delete}'>Delete</a></td>";
								} else {
									echo "<td class='center'><a href='../controller/restore.php?id={$row['service_id']}&name={$delete}'>Restore</a></td>";
								}
								echo " </tr>";
							}
						}
					?>
					<!-- <td>Trident</td>
					<td>Internet Explorer 4.0</td>
                    <td>text</td>
                    <td>img</td>
					<td></td> -->
					<!-- <td>Win 95+</td>
					<td class="center"> 4</td>
					<td><a href="">Edit</a> || <a href="">Delete</a></td> -->
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
