<!DOCTYPE html>
<html>

	<head>

		<?php			
			
			require 'vars.php' ;		
		?>

		<!-- css -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- meta -->
		<meta http-equiv="Content-Type" charset="UTF-8">

		<!-- title -->
		<title><?php echo($quoteNumber) ; ?> - Universal X6 - <?php echo($companyName) ; ?> </title>
		
	</head>
	
	<body>
	
			<?php		
			
			require('predef.php');		
			
			require('secone.php');
					
			require('dbcon.php');
	
	
	echo($sectionOne);

	?>
	</body>
	
</html>
