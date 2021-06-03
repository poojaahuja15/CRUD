<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="id" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <?php
	if(isset($_POST['showbtn'])) {
		$conn = mysqli_connect("localhost:3307","root","","crud") or die("Connection Failed");		

		$id = $_POST['id'];

		$sql = "SELECT * FROM crud_data WHERE id = {$id}";
		$result = mysqli_query($conn,$sql) or die("Query Unsucessful");

		if(mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)) {


    ?>
    
	<form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      	    <div class="form-group">
          	<label>Name</label>
          	<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
          	<input type="text" name="name" value="<?php echo $row['name']; ?>"/>
      	    </div>
      
           <div class="form-group">
          	<label>Email</label>
          	<input type="text" name="email" value="<?php echo $row['email']; ?>"/>
      	   </div>
      
           <div class="form-group">
          	<label>Mobile</label>
          	<input type="text" name="mobile" value="<?php echo $row['mobile']; ?>"/>
           </div>
      
          <div class="form-group">
          	<label>State</label>
		
	  <?php
		$sql1 = "SELECT * FROM state";
		$result1 = mysqli_query($conn,$sql1) or die("Query Unsucessful");

      	if(mysqli_num_rows($result1) > 0) {
			echo '<select name="state">';
		while($row1 = mysqli_fetch_assoc($result1)) {
			if($row['state'] == $row1['sid']){
				$select = "selected";
		
			} else{
			  	$select = "";	
			}

                        echo "<option {$select} value='{$row1['sid']}'>{$row1['statename']}</option>";
	      }
          echo "</select>";
	}
	?>
          </div>
      
          <div class="form-group">
       		<label>City</label>
          	<input type="text" name="city" value="<?php echo $row['city']; ?>"/>
          </div>
      
          <div class="form-group">
          	<label>Address</label>
          	<input type="text" name="address" value="<?php echo $row['address']; ?>"/>
          </div>

	<input class="submit" type="submit" name="submit" value="Update"  />
    </form>
   <?php
	}
      }
    }
    ?>

</div>
</div>
</body>
</html>

<?php
	session_start();
	$conn = mysqli_connect("localhost:3307","root","","crud") or die("Connection Failed");


	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$address = $_POST['address'];

		$sql = "UPDATE crud_data SET name='{$name}', email='{$email}', mobile='{$mobile}', state='{$state}', city='{$city}', address='{$address}' WHERE id='{$id}'";

		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
			header('location: index.php');
		}
				
		else{
			$_SESSION['error'] = 'Something went wrong while updating';
		}
	}
	
?>