<?php include 'header.php'; 
	
	if(isset($_POST['deletebtn'])) {
		$conn = mysqli_connect("localhost:3307","root","","crud") or die("Connection Failed");
		$id = $_POST['id'];

		$sql = "DELETE FROM crud_data WHERE id = {$id}";
		$result = mysqli_query($conn,$sql) or die("Query Unsucessful");

		header('location: index.php');

		mysqli_close($conn);

	}
?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="delete.php" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
