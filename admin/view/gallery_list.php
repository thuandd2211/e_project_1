<?php include '../inc/header.php';?>
<?php include '../inc/sidebar.php';?>
<?php include '../model/dbhelper.php';?>
<?php
	$conn = connect_db();
	$sql = "SELECT event_type.id AS event_id, event_type.name AS name_event, event_gallery.title AS title, event_gallery.author AS author,
	event_gallery.script AS script, event_gallery.image AS image, event_gallery.status AS status FROM event_type 
	JOIN event_gallery ON event_type.id = event_gallery.event_type_id";
	$result = $conn -> query($sql);
	$conn -> close();
?>
<div class="grid_10">
    <div class="box round first grid">
        <h2>Gallery List</h2>
        <div class="block">  
            <table class="data display datatable" id="example">
			<thead>
				<tr>					
                    <th>Event</th>
					<th>Title</th>
                    <th>Author</th>
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
								$delete = "gallery";	
								echo "
									<td class='center'>{$row['name_event']}</td>
									<td class='center'>{$row['title']}</td>
                                    <td class='center'>{$row['author']}</td>
									<td class='center'>{$row['script']}</td>
									<td class='center' style='width:30%;'><img style='width:60%;' src='../../view/images/{$row['image']}'></td>
								";
								if ($row['status'] == 0){
									echo "<td class='center'><a href='update_gallery.php?id={$row['event_id']}'>Edit</a> || <a href='../controller/delete.php?id={$row['event_id']}&name={$delete}'>Delete</a></td>";
								} else {
									echo "<td class='center'><a href='../controller/restore.php?id={$row['event_id']}&name={$delete}'>Restore</a></td>";
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
