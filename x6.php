<!DOCTYPE html>
<html>

	<head>
		<?php 		$quoteNumber = $_REQUEST['quoteNumber'] ;		$company = $_REQUEST['companyName'] ;

?>
		<!-- css -->
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" media="print" href="print.css">
		
		<meta charset="UTF-8">

		<!-- title -->
		<title><?php echo($quoteNumber) ; ?> - Universal X6 - <?php echo($company) ; ?></title>
		
	</head>
	
	<body>
	
		
		<?php 
		
		#GENERAL INFO!!
		
		$attention = $_REQUEST['attentionOf'] ;
		$location = $_REQUEST['companyCountry'] ;
		$date = date('jS F Y') ;
		$price = '<b>' . $_REQUEST['finalPrice'] . '</b>' ;
		$pageBreak = '<DIV style="page-break-after:always"></DIV>' ;
		$region = $_REQUEST['region'] ;
		$null = '' ;

		
		##MACHINE SPEC!!
		
		$unwindType1 = $_REQUEST['shaftedShaftless'];
		$unwindType2 = $_REQUEST['seperateIntegral'];
		$unwindType3 = $_REQUEST['drivenBraked'];
		$unwindMaxRollWid = $_REQUEST['maxUnloadRollWidth'];
		$unwindMaxRollDia = $_REQUEST['maxUnwindRollDia'];
		$unwindMinWebWid = $_REQUEST['minUnwindWebWidth'];
		$unwindMinRollDia = $_REQUEST['minDiaFloorPickup'];
		$maxRollWeight = $_REQUEST['maxUnwindRollWeight'];
		$unwindRollMaterial = $_REQUEST['rollMaterial'];
		$unwindMaterialThick = $_REQUEST['materialThickness'];
		$webGuiding = $_REQUEST['webGuiding'];
		$peeler = $_REQUEST['peelOff'];
		$unwindTensionRange = $_REQUEST['unwindTensionRange'];
		$cameraSystem = $_REQUEST['cameras'];
		$unwindCoreMaterial = $_REQUEST['unwindCoreMaterial'];
		$unwindCoreSize = $_REQUEST['unwindCoreSize'];
		$spliceTable = $_REQUEST['spliceTable'];

		
		if(($_REQUEST['shearYes']) == 'Shear')
			{
			$slittingType = 'Shear' ;
			$knivesIncl = '<li>Knives Included: ' . $_REQUEST['shearKnives'] . '</li>';
			$anvilsIncl = '<li>Shear Anvils Included: ' . $_REQUEST['shearAnvils'] . '</li>' ;
			$razorsIncl = $null ;
			$crushKnives = $null ;
			}
		elseif(($_REQUEST['razorYes']) == 'Razor')
			{
			$slittingType = 'Razor' ;			
			$knivesIncl = $null ;
			$anvilsIncl = $null ;
			$razorsIncl = '<li>Razors Included: ' . $_REQUEST['razorKnives'] . '</li>' ;
			$crushKnives = $null ;
			}	
		elseif(($_REQUEST['crushYes']) == 'Crush')
			{
			$slittingType = 'Crush' ;
			$knivesIncl = $null ;
			$anvilsIncl = $null ;
			$razorsIncl = $null ;
			$crushKnives = '<li>Crush Cut Knives Included: ' . $_REQUEST['crushKnives'] . '</li>' ;
			}
		else
			{
			die("An error occured.") ;
			}	
		
		$minSlitWidth = $_REQUEST['minSlitWidth'];
		$autoKnife = $_REQUEST['akp'];
		$trimRemoval = $_REQUEST['trim'];
		$spreaderRoller = $_REQUEST['spreaderRoller'];		
		
		$rewindType = $_REQUEST['rewindType'];
		$shaftType = $_REQUEST['shaftType'];
		$computacore = $_REQUEST['computacore'];
		$rewindMaxRollDia = $_REQUEST['maxRewindRollDia'];
		$rewindMaxRollWeight = $_REQUEST['maxRewindRollWeight'];
		$layonRollers = $_REQUEST['layonRollers'];
		$antiStatic = $_REQUEST['antiStatic'];
		$maxMachinceSpeed = $_REQUEST['maxMachineSpeed'];
		$rewindTensionRange = $_REQUEST['rewindTensionRange'];
		$onwardHandling = $_REQUEST['onwards'];
		$rewindCoreMaterial = $_REQUEST['rewindCoreMaterial'];
		$rewindCoreSize = $_REQUEST['rewindCoreSize'];
		$offloadPusher = $_REQUEST['offloadPusher'];
		
		
		##SECTION FOUR!!
		
			$fourStandard = '<hr id="4"/><div>
		<h2>4. Unwind Details</h2>
		
	</div> <br/>
	
	<div>
		<h4 id="empty_title">Unwind</h4>
		<p id="withimage">The X6 is available with either a separate (X6s) or integral (X6i) unwind.
		
			<ul id="listwithimg">
				<li>The X6s has the capability of adding processes such as laser perforation, corona treatment or inspection etc.</li>
				<li>The X6i is more compact with a small footprint and a short web path.</li>
			</ul>
		
		</p>

		<img src="images/4_unwind/unwind.jpeg" alt="Unwind" id="unwind_image" />
		
	</div><br/>' ;
	
	
	if($unwindType1 == 'Shafted')
		{
		$unwindResponse = '' ;
		}
	else
		{
		$unwindResponse = '' ;
		}	















	?>
	</body>
</html>	

