<?php


$link = mysqli_connect("localhost", "root", "", "hotel");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 if (isset($_POST['viewButton']))
{
//window.open("view.php","MyWindow","width=200,height=100");
	
$resdate = $_POST['resdate'];
$session = $_POST['session'];

	$query="SELECT id FROM table_list WHERE id NOT IN( SELECT table_no FROM bookings WHERE reserv_date='$resdate' AND session='$session');";
	$fresult = mysqli_query ( $link,$query );
	$li=0;
	while($row = $fresult->fetch_assoc())
	{
	echo "Table: " . $row["id"]." <br>";
	
   //$li++;
   }
  //header("location: reservations.php#redi");
}
 
 
 if (isset($_POST['bookButton']))
{
  
$resdate = $_POST['resdate'];
$tableno = $_POST['tableno'];
$session = $_POST['session'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$name=$firstname." ".$lastname;
$phoneno = $_POST['phoneno'];
$emailid = $_POST['emailid'];
  $query = "SELECT * FROM bookings WHERE reserv_date = '$resdate' AND table_no = '$tableno' AND session = '$session';";
    $fresult = mysqli_query ( $link,$query );
    if ( mysqli_num_rows ( $fresult ))
	{/*	
	header('Refresh:5; url= reservations.php");
	echo "Sorry, The Table is already booked. Please choose another table to continue your Reservation" ;
	*/
	
	header("location: reservations.php?status=fail#redi");

    } 
	
	else 
	{
        $sql = "INSERT INTO bookings (`reserv_date`, `table_no`, `session`, `person_name`, `phone_no`, `email_id`) VALUES ('$resdate','$tableno','$session','$name','$phoneno','$emailid')";
		if(mysqli_query($link, $sql))
		{
			// header("Location:reservations.php");
			unset($_POST);
			echo "Reservation done successfully";
			header("location: reservations.php?status=pass#redi");
			
       } 

		else
		{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
    }
 
}
// Close connection
mysqli_close($link);

?>