<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
	$conn = mysqli_connect("localhost:3307","root","","crud") or die("Connection Failed");
	
	$sql = "Select * from crud_data Join state Where crud_data.state = state.sid";
	$result = mysqli_query($conn,$sql) or die("Query Unsucessful");

	if(mysqli_num_rows($result) > 0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
	<th>Email</th>
        <th>Mobile</th>
	<th>State</th>
	<th>City</th>
	<th>Address</th>
        
        <th>Action</th>
        </thead>
        <tbody>
	
	  <?php
		while($row = mysqli_fetch_assoc($result)){
	  ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
		<td><?php echo $row['statename']; ?></td>
		<td><?php echo $row['city']; ?></td>
                <td><?php echo $row['address']; ?></td>
                
                <td>
                    <a href='update.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>
                </td>
            </tr>
	<?php } ?>
	</tbody>
    </table>
    <?php }else {
		echo "<h2>No record found..</h2>";
	}
	mysqli_close($conn);	
     ?>
        

</div>
</div>
</body>
</html>
