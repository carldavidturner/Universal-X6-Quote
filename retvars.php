<?php



	// Create connection
	$con=mysqli_connect("db485298283.db.1and1.com","dbo485298283","d21678n5Ag1Ld14","db485298283");

	// Check connection
	if (mysqli_connect_errno($con))
  		{
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}


			$getQuote = $_POST['getQuote'] ;


			$quoteNumber = $getQuote ;
			$companyNameRet = mysqli_query($con,"SELECT company_name FROM x6_quote_data WHERE quote_number=".$getQuote."") ;
			$companyCountryRet = mysqli_query($con,"SELECT company_country FROM x6_quote_data WHERE quote_number=".$getQuote."") ;
			$attentionOfRet = mysqli_query($con,"SELECT attention_of FROM x6_quote_data WHERE quote_number=".$getQuote."") ;
			$finalPriceRet = mysqli_query($con,"SELECT final_price FROM x6_quote_data WHERE quote_number=".$getQuote."") ;
			$priceAdditionalInfoRet = mysqli_query($con,"SELECT price_text FROM x6_quote_data WHERE quote_number=".$getQuote."") ;
			$regionRet = mysqli_query($con,"SELECT region FROM x6_quote_data WHERE quote_number=".$getQuote."") ;
			
			$shaftedShaftless = $_POST['shaftedShaftless'] ;
			$seperateIntegral = $_POST['seperateIntegral'] ;
			$drivenBraked = $_POST['drivenBraked'] ;
			$maxUnwindRollWidth = $_POST['maxUnwindRollWidth'] ;
			$maxUnwindRollDia = $_POST['maxUnwindRollDia'] ;
			$minUnwindWebWidth = $_POST['minUnwindWebWidth'] ;
			$minDiaFloorPickup = $_POST['minDiaFloorPickup'] ;
			$maxUnwindRollWeight = $_POST['maxUnwindRollWeight'] ;
			$rollMaterial = $_POST['rollMaterial'] ;
			$materialThickness = $_POST['materialThickness'] ;
			$webGuiding = $_POST['webGuiding'] ;
			$guidingPrice = $_POST['guidingPrice'] ;
			$peelOff = $_POST['peelOff'] ;
			$unwindTensionRange = $_POST['unwindTensionRange'] ;
			$spliceTable = $_POST['spliceTable'] ;
			$splicePrice = $_POST['splicePrice'] ;
			$unwindCoreMaterial = $_POST['unwindCoreMaterial'] ;
			$unwindCoreSize = $_POST['unwindCoreSize'] ;
			
			$driveType = $_POST['driveType'] ;
			
			$shearYes = $_POST['shearYes'] ;
			$shearKnives = $_POST['shearKnives'] ;
			$shearAnvils = $_POST['shearAnvils'] ;
			$razorYes = $_POST['razorYes'] ;
			$razorKnives = $_POST['razorKnives'] ;
			$crushYes = $_POST['crushYes'] ;
			$crushKnives = $_POST['crushKnives'] ;
			$minSlitWidth = $_POST['minSlitWidth'] ;
			$akp = $_POST['akp'] ;
			$trim = $_POST['trim'] ;
			$spreaderRoller = $_POST['spreaderRoller'] ;
			$spreaderPrice = $_POST['spreaderPrice'] ;
			
			$rewindType = $_POST['rewindType'] ;
			$shaftType = $_POST['shaftType'] ;
			$computacore = $_POST['computacore'] ;
			$computaCorePrice = $_POST['computaCorePrice'] ;
			$layonRollers = $_POST['layonRollers'] ;
			$maxRewindRollDia = $_POST['maxRewindRollDia'] ;
			$maxRewindRollWeight = $_POST['maxRewindRollWeight'] ;
			$antiStatic = $_POST['antiStatic'] ;
			$antiStaticPrice = $_POST['antiStaticPrice'] ;
			$maxMachineSpeed = $_POST['maxMachineSpeed'] ;
			$rewindTensionRange = $_POST['rewindTensionRange'] ;
			$offloadPusher = $_POST['offloadPusher'] ;
			$offloadPrice = $_POST['offloadPrice'] ;
			$onwards = $_POST['onwards'] ;
			$cameras = $_POST['cameras'] ;
			$cameraPrice = $_POST['cameraPrice'] ;
			$rewindCoreMaterial = $_POST['rewindCoreMaterial'] ;
			$rewindCoreSize = $_POST['rewindCoreSize'] ;


?>