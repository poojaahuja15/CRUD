<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="add.php" method="post">

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" />
        </div>
	
	<div class="form-group">
            <label>Email</label>
            <input type="text" name="email" />
        </div>
        
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" />
        </div>
        <div class="form-group">
            <label>State</label>
            <select name="state">
                <option value="" selected disabled>Select State</option>
                
		<?php
			$conn = mysqli_connect("localhost:3307","root","","crud") or die("Connection Failed");
	
			$sql = "Select * from state";
			$result = mysqli_query($conn,$sql) or die("Query Unsucessful");
	
			while($row = mysqli_fetch_assoc($result)){

		?>
		<option value="<?php echo $row['sid']; ?>"><?php echo $row['statename']; ?></option>
		
		<?php } ?>
            </select>
        </div>
	
	<div class="form-group">
            <label>City</label>
            <select name="city">
                <option value="" selected disabled>Select City</option>
                <option>Rajkot</option>
                <option>Jaipur</option>
                <option>Mumbai</option>
		<option>chandigarh</option>
            </select>
        </div>
        
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" />
        </div>
        <input class="submit" type="submit" name="submit" value="Save"  />
	
	
    </form>
</div>
</div>
</body>
</html>

<?php
	session_start();
	$conn = mysqli_connect("localhost:3307","root","","crud") or die("Connection Failed");


	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$address = $_POST['address'];
		$sql = "INSERT INTO crud_data (name, email, mobile, state, city, address) VALUES ('$name', '$email', '$mobile', '$state', '$city', '$address')";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
			header('location: index.php');
		}
				
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

?>