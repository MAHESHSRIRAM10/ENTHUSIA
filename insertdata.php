

<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="eventlist";

$conn =mysqli_connect($servername,$username,$password,$dbname);


if(isset($_POST['submit'])){

	$fname=$_POST['fname'];
	$age=$_POST['age'];
	$prg=$_POST['prg'];

	$query="insert into programs (name,age,prg) values ('$fname','$age','$prg')";
	
		$run=mysqli_query($conn, $query) or die( mysqli_error());
		if($run)
		{
			echo "Form submitted successfully";
		}
        else
        {
            echo "Failed";
        }
	
}
?>