<?php

	// Create connection
	$con=mysqli_connect("db485298283.db.1and1.com","dbo485298283","DaeIBIBRK2X39Tx","db485298283");

	// Check connection
	if (mysqli_connect_errno($con))
  		{
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}




$sql = 'DELETE FROM x6_quote_data WHERE quote_number='$quoteNumber'';

mysqli_close($con);



?>