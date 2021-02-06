<?php

$server = 'localhost';
 $username = 'root';
 $password = "";
 $db = "registration";

 $con = mysqli_connect($server,$username,$password,$db);

if ($con) {
	?>
	<script>
		alert("connection sucessful")
	</script>
	<?php
}else{
	?>
	<script>
		alert("connection failed")
	</script>
	<?php
}



 mysqli_select_db($con,'form');

 $name = $_POST['name'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $comment = $_POST['comment'];

 $query = "insert into form (name,email,mobile,comment )
 values('$name','$email','$mobile','$comment')";
 

$succ = mysqli_query($con, $query);

if($succ){
 	?>
 	<script>
 		alert('Data inserted sucessful')
 	</script>
 	<?Php
 } 
else{
	?> 
	<script>
 		alert('Data inserted failed')
 	</script>
 	<?Php
}


header('location:index.php');

?> 