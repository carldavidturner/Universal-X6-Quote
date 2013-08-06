<!DOCTYPE html>
<html>

	<head>

		<!-- css -->
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<meta charset="UTF-8">

		<!-- title -->
		<title>Your Quote | Universal Converting Equipment</title>
		
	</head>
	
	<body>
	
		
		<?php 
		
		#GENERAL INFO!!
		
		$quotenumber = $_REQUEST['1_1'] ;
		$company = $_REQUEST['1_2'] ;
		$attention = $_REQUEST['1_3'] ;
		$date = date('jS F Y') ;
		$price = '<b>' . $_REQUEST['1_4'] . '</b>' ;
		
		##MACHINE SPEC!!
		
		$unwindtype1 = $_REQUEST['3_1'];
		$unwindtype2 = $_REQUEST['3_2'];
		$unwindtype3 = $_REQUEST['3_3'];
		$unwindmaxrollwid = $_REQUEST['3_4'];
		$unwindmaxrolldia = $_REQUEST['3_5'];
		$unwindminwebwid = $_REQUEST['3_6'];
		$unwindminrolldia = $_REQUEST['3_7'];
		$maxrollweight = $_REQUEST['3_8'];
		$unwindrollmaterial = $_REQUEST['3_9'];
		$unwindmaterialthick = $_REQUEST['3_10'];
		$webguiding = $_REQUEST['3_11'];
		$peeler = $_REQUEST['3_12'];
		$unwindtensionrange = $_REQUEST['3_13'];
		$camerasystem = $_REQUEST['3_14'];
		$unwindcorematerial = $_REQUEST['3_15'];
		$unwindcoresize = $_REQUEST['3_16'];
		$slittingtype = $_REQUEST['3_17'];
		$knivesincl = $_REQUEST['3_18'];
		$anvilsincl = $_REQUEST['3_19'];
		$razorholdersincl = $_REQUEST['3_20'];
		$minslitwidth = $_REQUEST['3_21'];
		$splicetable = $_REQUEST['3_22'];
		$autoknife = $_REQUEST['3_23'];
		$trimremoval = $_REQUEST['3_24'];
		$rewindmaxrolldia = $_REQUEST['3_25'];
		$rewindmaxrollweight = $_REQUEST['3_26'];
		$turretting = $_REQUEST['3_27'];
		$layonrollers = $_REQUEST['3_28'];
		$deffershafts = $_REQUEST['3_29'];
		$bowedroller = $_REQUEST['3_30'];
		$spreaderroller = $_REQUEST['3_31'];
		$antistatic = $_REQUEST['3_32'];
		$maxmachincespeed = $_REQUEST['3_33'];
		$rewindtensionrange = $_REQUEST['3_34'];
		$laser = $_REQUEST['3_35'];
		$unloading = $_REQUEST['3_36'];
		$rewindcorematerial = $_REQUEST['3_37'];
		$rewindcoresize = $_REQUEST['3_38'];
		
		
		##SECTION FOUR!!
		
			$fourStandard = '<hr/><div>
		<h2>4. Unwind Details</h2>		
	</div> <br/>' ;

			$unwindyes = '<div>
		<h4 id="empty_title">Unwind</h4>
		<p id="withimage">The X6 is available with either a separate (X6s) or integral (X6i) unwind.
		
			<ul id="listwithimg">
				<li>The X6s has the capability of adding processes such as laser perforation, corona treatment or inspection etc.</li>
				<li>The X6i is more compact with a small footprint and a short web path.</li>
			</ul>
		
		</p>

		<img src="images/4_unwind/unwind.jpeg" alt="Unwind" id="unwind_image" />
		
	</div><br/>' ;
	
	
			$unwindprice = '<p class="price">£9,999</p>' ;

			$shaftedyes = '<div>
		<h4 id="6_2_title">Shafted unwind</h4>
		<p id="withoutimage">Guided shafted unwind with Boschert Safety Chucks.</p>

		
	</div><br/>' ;
	
	
			$shaftedprice = '<p class="price">£9,999</p>' ;

			$chucksyes = '<div>
		<h4 id="6_2_title">Unwind chucks</h4>
		<p id="withoutimage">The unwind chucks are available in a variety of sizes and are mounted on substantial fabricated steel arms.  The chucking is actuated by a pneumatic signal via a rotary union. Combination chucks are used to handle both 3” and 6” cores (if required).</p>

		
	</div><br/>' ;
	
	
			$chucksprice = '<p class="price">£9,999</p>' ;

			$armsyes = '<div>
		<h4 id="6_2_title">Unwind arms</h4>
		<p id="withoutimage">The unwind arms are mounted to linear slides which are in turn mounted onto a welded steel fabrication. This is mounted on an additional pair of linear slides which provide the floor pickup function.</p>

		
	</div><br/>' ;
	
	
			$armsprice = '<p class="price">£9,999</p>' ;

			$motorsyes = '<div>
		<h4 id="6_2_title">Unwind motors</h4>
		<p id="withoutimage">The shaftless unwind employs 3 AC motors; one for raise/lower and two for the arm lateral movements.  The unwind lowering force is removed once the unloading roll has touched the floor so no force (other than roll weight) is transferred into the floor.  A control station on each side of the unwind can each control the unwind arms.
</p>

		
	</div><br/>' ;
	
	
			$motorsprice = '<p class="price">£9,999</p>' ;

			$drivenyes = '<div>
		<h4 id="6_2_title">Driven unwind</h4>
		<p id="withoutimage">The machine optionally features a driven unwind which is controlled by a  precise pneumatically loaded dancer system. This allows low unwind tensions to be achieved allowing extensible or tension sensitive films such as LDPE to be processed. It also reduces the energy consumption of the machine as the motor generates energy which is used by the rewind. (A braked unwind wastes the energy by turning it into heat).</p>

		
	</div><br/>' ;
	
	
			$drivenprice = '<p class="price">£9,999</p>' ;

			$safetyyes = '<div>
		<h4 id="6_2_title">Unwind safety</h4>
		<p id="withoutimage">The unwind features a CE compliant safety system which employs both physical barriers and optoelectronic safety beams. The unwind has a safety brake which is used in emergencies only.</p>

		
	</div><br/>' ;
	
	
			$safetyprice = '<p class="price">£9,999</p>' ;

			$controlsyes = '<div>
		<h4 id="6_2_title">Unwind section operator controls</h4>
		<p id="withimage">Machine speed controls, stop, fast stop, Emergency stop.
		<br/>
		On rear 7" colour touchscreen (ethernet)
		<br/>
		<b>Settings</b>
		<br/>
		<ul id="list">
		<li>Speed setpoint</li>
		<li>Unwind tension setpoint</li>
		<li>Unwinder direction</li>
		<li>Unwind diameter setpoint</li></ul>
		<br/>
		<b>Indicatons</b>
		<br/>
		<ul id="list">
		<li>Speed indicator</li>
		<li>Length count display</li>
		<li>Unwind diameer actual</li>
		<li>Guider controls</li></ul></p>

		<img src="images/4_unwind/controls.jpeg" alt="Operator Controls" id="controls_image" />
		
	</div><br/>' ;
	
	
			$controlsprice = '<p class="price">£9,999</p>' ;

			$guidingyes = '<div>
		<h4 id="6_2_title">Guiding</h4>
		<p id="withimage">ConverterGuide 4 Digital System with the capability to line guide or edge guide. The guider unit is integrated into the machine control system making setting very simple.
		<br/>
		The guider actuator is electric preventing contamination from hydraulic oil. Although control of the guider will normally be from the touch screen at the unwind, the guider controls are replicated on the touch screen at the rewind. 
		<br/>
		The guiding eye can be motorised to allow on the run fine adjustment of print relative to slit knives or trim widths.
		<ul id="list">
		<li>Guider travel - ±75mm</li>
		<li>Guider correction rate - 23mm/second</li>
		<li>Guider actuator type - Electric Servo (non-hydraulic</li>
		</ul>
		<br/>
		<span class="block">Option for Fife, BST or E&L systems.</span>
		</p>

		<img src="images/4_unwind/guiding.jpeg" alt="Guiding" id="guiding_image" />
		
	</div><br/>' ;
	
	
			$guidingprice = '<p class="price">£9,999</p>' ;

			$spliceyes = '<div>
		<h4 id="6_2_title">Splice Table</h4>
		<p id="withimage">A splice table, with web clamps or vacuum systems, can be mounted on the unwind side of the machine to assist the operator to join to neatly join two webs.
</p>

		<img src="images/4_unwind/splice.jpeg" alt="Splice Table" id="splice_image" />
		
	</div><br/>
' ;
	
	
			$spliceprice = '<p class="price">£9,999</p>' ;

			$trashyes = '<div>
		<h4 id="6_2_title">Trash Winder</h4>
		<p id="withoutimage">A trash winder is mounted above the unwind for winding of waste material being removed from parent rolls.
</p>

		
	</div><br/>' ;
	
	
			$trashprice = '<p class="price">£9,999</p>' ;



		
		##SECTION FIVE!!
		
			$fiveStandard = '<hr/><div>
		<h2>5. Main Drive Details</h2>		
	</div> <br/>' ;
	
			$mainyes = '<div>
		<h4 id="empty_title">Main Drive</h4>
		<p id="withoutimage">Driven “S” wrap after the unwind and before the slitting knives isolating the unwind from the slitting and rewind tension zones driven by an AC Motor with encoder feedback and a digital flux vector drive system.</p>
	
		
	</div><br/>' ;
	
	
			$mainprice = '<p class="price">£9,999</p>' ;
		
		
			$bowedyes = '<div>	
		<h4 id="6_2_title">Bowed roller</h4>
		<p id="withoutimage">Option for variable angled bowed roller prior to slitting knives.</p>
		
		
	</div>	<br/>' ;
		
			
			$bowedprice = '<p class="price">£9,999</p>' ;

		
		
		##SECTION SIX!!
		
			$sixStandard = '<hr/><div>
		<h2>6. Slitting</h2>
		<p id="withoutimage">Several options are available for slitting.</p>
		<ul id="list">
		
			<li>Razor in air</li>
			<li>Razor in comb</li>
			<li>Razor in groved spacer</li>
			<li>Wrap shear</li>
			<li>Kiss shear</li>
			<li>Crush</li>
		
		</ul>
	
		
	</div> <br/>' ;
		
			$shearyes = '<div>
		<h4>Shear Slitting</h4>
		<p id="withimage">Shaft-mounted shear knives. Circular knives that rotate together as a male and female pair acting much like a pair of scissors, generally used for heavier gauge films and papers</p>
	
		<img src="images/6_1_slitter/shear.jpeg" alt="Shear Slitter" id="shear_image" />
		
	</div><br/>' ;
	
	
			$shearprice = '<p class="price">£9,999</p>' ;
		
		
			$autoyes = '<div>	
		<h4 id="6_2_title">Automatic Shear Anvil Positioning System</h4>
		<p id="withimage">Shear knives can take a long time to set accurately. We have an automatic anvil setting system that accurately positions the anvils (bottom knives). These are locked in position and the dovetail mounted top knives can be quickly positioned next to the anvils. These are then side-loaded to a distance set on the touch screen to give the perfect slit. The same data used to position the knives is also be used for core positioning is passed to the laser core alignment system (when fitted).</p>
		
		<img src="images/6_1_slitter/auto.jpeg" alt="Automatic Shear Anvil Positioning System" id="auto_image" />
		
	</div>	<br/>' ;
		
			
			$autoprice = '<p class="price">£9,999</p>' ;
		
		
			$razoryes = '<div>
		<h4>Razor Slitting</h4>
		<p id="withimage">Razor blades in comb. Individual safety razor blades are inserted into the slots in the razor comb. The slots are at 1mm intervals so positioning is simple and precise. This greatly reduces setup times.</p>
	
		<img src="images/6_1_slitter/razor.jpeg" alt="Razor Slitter" id="razor_image" />
		
	</div> <br/>' ;


			$razorprice = '<p class="price">£9,999</p>' ;

		
			$trimwinderyes = '<div>
		<h4>Oscillating Trim Winder</h4>
		<p id="withimage">Two oscillating trim winders to take away trim from the web.</p>
	
		<img src="images/6_1_slitter/winder.jpeg" alt="Oscillating Trim Winder" id="winder_image" />
		
	</div> <br/>' ;
	
			
			$winderprice = '<p class="price">£9,999</p>' ;

		
			$trimbloweryes = '<div>	
		<h4 id="6_2_title">Trim Blower</h4>
		<p id="withimage">Supply of trim blower, fitted with venturi, to handle trims at width of ¼ inch to 1 inch wide.</p>
		
		<img src="images/6_1_slitter/blower.jpeg" alt="Trim Blower" id="blower_image" />
		
	</div>	<br/>' ;
	
		
			$blowerprice = '<p class="price">£9,999</p>' ;

		
			$tensionyes = '<div>
		<h4>Slitting tension section</h4>
		<p id="withoutimage">The X6 has an important feature seldom found on slitter rewinders. This feature allows independent control of the tension in the slitting section of the machine. Therefore the machine has three independently controllable tension zones, unwind, slitting and rewind.  Most slitting machines have the slitting section positioned in the rewind section, meaning that whatever the rewind tension is is the tension through the slitters, whether this rewind tension is correct for slitting or not.  The slitting tension parameter is stored in the job recipe along with the other operator settings.</p>
	
		
	</div><br/>' ;
		
		
			$tensionprice = '<p class="price">£9,999</p>' ;

			
		##SECTION SEVEN!!
		
			$fiveStandard = '				<hr id="7"/><div>
		<h2>7. Rewind Section Details</h2>		
	</div> <br/>
' ;
		
			$duplexyes = '		<div>
		<h4 id="empty_title">Duplex or Turret</h4>
		
		<p id="withoutimage">The rewind section is available as either Duplex or Turret. The duplex has two rewind shafts whereas turretting rewinder has four shafts. The duplex version is suitable for general purpose work with relatively frequent setup changes. The turretting version is designed for longer runs where the same setup may be on the machine for several days or even weeks.</p>

		
	</div><br/>
' ;
			
			$duplexprice = '<p class="price">£9,999</p>' ;


			$windingyes = '	<div>
		<h4 id="6_2_title">Winding Type</h4>
		<p id="withimage">Differential shafts with double ball differential chucks. The chucks lock to the inside of the core and produce no core dust. These ensure that the rewound tension is equal in each reel regardless of width or material thickness variation</p>

		<img src="images/7_rewind/winding.jpeg" alt="Winding" id="rewind_image" />
		
	</div><br/>
	
' ;
			
			$windingprice = '<p class="price">£9,999</p>' ;


			$computacoreyes = '	<div>
		<h4 id="6_2_title">Computacore Core Alignment System</h4>
		<p id="withimage">The Computacore laser core alignment system automatically shows the correct position for the core by shining a laser line on the rewind shafts. The line steps along the shaft until all the cores are positioned.
</p>
		
		<img src="images/7_rewind/computacore.jpeg" alt="Computacore Core Alignment" id="computacore_image" />
		
	</div><br/>
' ;
			
			$computacoreprice = '<p class="price">£9,999</p>' ;


			$layonyes = '	<div>
		<h4 id="6_2_title">Constant Geometry Lay-on Rollers</h4>
		<p id="withimage">The X6 has linear (horizontal rather than pivoting) lay-on rollers. These do not vary their force as the geometry changes unlike conventional pivoting systems. Option for individual lay-on rollers.</p>
		
		<img src="images/7_rewind/layon.jpeg" alt="Lay-on Rollers" id="layon_image" />
		
	</div><br/>
' ;
			
			$layonprice = '<p class="price">£9,999</p>' ;


			$tensioncontrolyes = '	<div>
		<h4 id="6_2_title">Tension Control</h4>
		<p id="withoutimage">Automatic control of tension as the diameter of the roll changes. Our Total Tension Control System uses tension measurements from load cells to provide closed loop control of rewind tension throughout the rolls. This ensures accurate and consistent control of tension time and time again. It eliminates tension drift that can occur as friction elements wear or dry out. Closed loop tension control is always beneficial especially when slitting tension sensitive substrates</p>
				
	</div><br/>
' ;
			
			$tensioncontrolprice = '<p class="price">£9,999</p>' ;


			$lengthcounteryes = '	<div>
		<h4 id="6_2_title">Length Counter</h4>
		<p id="withoutimage">Length counting and programmable stop at set length.</p>
				
	</div><br/>
' ;
			
			$lengthcounterprice = '<p class="price">£9,999</p>' ;


			$staticyes = '	<div>
		<h4 id="6_2_title">Static Elimination</h4>
		<p id="withoutimage">option for rewind static elimination systems with a bar positioned above and below each rewind shaft. The system used pulsed DC which creates a curtain of +/- ions.</p>
				
	</div><br/>
' ;
			
			$staticprice = '<p class="price">£9,999</p>' ;


			$unloadingyes = '	<div>
		<h4 id="6_2_title">Roll Unloading Tree</h4>
		<p id="withimage">Manual swing/pivot shafts for unloading finished rolls.</p>
		
		<img src="images/7_rewind/unloading.jpeg" alt="Roll Unloading Tree" id="unloading_image" />
		
	</div><br/>
' ;
			
			$unloadingprice = '<p class="price">£9,999</p>' ;


			$pusheryes = '	<div>
		<h4 id="6_2_title">Off-load Pusher</h4>
		<p id="withimage">Pusher for the two shafts to push the rolls off the rewind shafts onto the off-load device.</p>
		
		<img src="images/7_rewind/offload.jpeg" alt="Off-load Pusher" id="offload_image" />
		
	</div><br/>
' ;
			
			$pusherprice = '<p class="price">£9,999</p>' ;


			$robotyes = '	<div>
		<h4 id="6_2_title">Robotic Roll Handling System</h4>
		<p id="withimage">Instead of the off-load trolley, we would supply a robotic off-load unit with 1000mm arms. The rolls would be pushed onto the arms. The unit will then rotate through 90 degrees to take the arms away from the machine, allowing the shafts to be re-cored and the machine started. The arms will then rotate so they are at the same level and then the rolls will be lowered to floor/pallet level. The rolls can then be slid off onto a pallet. This system avoids the handling of heavy shafts and the lifting of heavy rolls.</p>
		
		<img src="images/7_rewind/robot.jpeg" alt="Robotic Roll Handling System" id="robot_image" />
		
	</div><br/>
' ;
			
			$robotprice = '<p class="price">£9,999</p>' ;


			$camerayes = '	<div>
		<h4 id="6_2_title">Camera System</h4>
		<p id="withimage">Machine to be fitted with front and rear 15” TFT Monitors, the unwind monitor displays the rewind section, the rewind monitor displays either side of the unwinding roll.</p>
		
		<img src="images/7_rewind/camera.jpeg" alt="Camera System" id="camera_image" />
		
	</div><br/>
' ;
			
			$cameraprice = '<p class="price">£9,999</p>' ;


		##SECTION EIGHT!!
		
			$eightStandard = '					<hr id="8"/><div>
		<h2>8. Drives and Controls</h2>	
		<p>All drives and controls are integral, but can be supplied in a separate control unit if required.</p>	
	</div> <br/>
' ;
		
			$operatorcontrolsyes = '	<div>
		<h4 id="6_2_title">Operator Controls</h4>
		<p id="withimage">Colour touch screen incorporating all machine operations.  This system has a job data memory recall system. Message displays indicate faults conditions such as guards open or E-stop pressed. The comprehensive system has been designed to be simple and straightforward to operate but with extensive diagnostic when required.</p>

		<img src="images/8_drive/controls.jpeg" alt="" id="operatorcontrols_image" />
		
	</div><br/>
' ;
			
			$operatorcontrolsprice = '<p class="price">£9,999</p>' ;


			$remotediagnosticsyes = '	<div>
		<h4 id="6_2_title">Remote Diagnostics</h4>
		<p id="withoutimage">The controls are designed to be very simple to operate yet the system has extensive diagnostics should they be required. We also provide a port on the system for secure Internet access to allow our engineers to monitor the performance of the machine remotely.  To utilise the remote diagnostic system, we require the customer to provide a static IP address with port forwarding.</p>

		
	</div><br/>
' ;
			
			$remotediagnosticsprice = '<p class="price">£9,999</p>' ;


			$drivemotorsyes = '	<div>
		<h4 id="6_2_title">Drive Motors</h4>
		<p id="withoutimage">AC Vector Motors with closed loop feedback. A fail safe disc brake is included for fast emergency stopping and holding the shaft stationary during roll changes.</p>

		
	</div><br/>
' ;
			
			$drivemotorsprice = '<p class="price">£9,999</p>' ;


			$drivetypeyes = '	<div>
		<h4 id="6_2_title">Drive Type</h4>
		<p id="withoutimage">Digital AC vector drives from Emerson Control Techniques with high speed communication between drives. The DC bus of the two drives is linked so that when a drive is in braking mode, the energy generated is used to feed the drive that is consuming power. This greatly reduces the energy consumption of the machine.</p>

		
	</div><br/>
' ;
			
			$drivetypeprice = '<p class="price">£9,999</p>' ;


			$machineguardingyes = '	<div>
		<h4 id="6_2_title">Machine Guarding</h4>
		<p id="withoutimage">Machine guarding to prevent access to the machine whilst operating at speeds greater than 15m/min. We provide physical barriers around the machine with light barriers to allow access to the unwind and rewind. Universal ensures its machines conform to International safety standards including EN 13418:2008.</p>

		
	</div><br/>
' ;
			
			$machineguardingprice = '<p class="price">£9,999</p>' ;


		
			$null = '' ;
		
		##SECTION FOUR IF STATEMENTS
		
			if(($_POST['4_1']) == 'Yes')
    			{
    			$unwindyes = $unwindyes ;
				$unwindno = $null ;
				$unwindoption = $null ;
				}
			elseif(($_POST['4_1']) == 'No')
				{
				$unwindyes = $null ;
				$unwindno = $null ;
				$unwindoption = $null ;	
				}	
			elseif(($_POST['4_1']) == 'Optional')
				{
				$unwindoption = $unwindyes . $unwindprice ;
				$unwindyes = $null ;
				$unwindno = $null ;
				}	
			else
				{
				$unwindyes = $null ;
				$unwindno = $null ;
				$unwindoption = $null ;
				echo( '4.1 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	
		
			if(($_POST['4_2']) == 'Yes')
    			{
    			$shaftedyes = $shaftedyes ;
				$shaftedno = $null ;
				$shaftedoption = $null ;
				}
			elseif(($_POST['4_2']) == 'No')
				{
				$shaftedyes = $null ;
				$shaftedno = $null ;
				$shaftedoption = $null ;	
				}	
			elseif(($_POST['4_2']) == 'Optional')
				{
				$shaftedoption = $shaftedyes . $shaftedprice ;
				$shaftedyes = $null ;
				$shaftedno = $null ;
				}	
			else
				{
				$shaftedyes = $null ;
				$shaftedno = $null ;
				$shaftedoption = $null ;
				echo( '4.2 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	
		
			if(($_POST['4_3']) == 'Yes')
    			{
    			$chucksyes = $chucksyes ;
				$chucksno = $null ;
				$chucksoption = $null ;
				}
			elseif(($_POST['4_3']) == 'No')
				{
				$chucksyes = $null ;
				$chucksno = $null ;
				$chucksoption = $null ;	
				}	
			elseif(($_POST['4_3']) == 'Optional')
				{
				$chucksoption = $chucksyes . $chucksprice ;
				$chucksyes = $null ;
				$chucksno = $null ;
				}	
			else
				{
				$chucksyes = $null ;
				$chucksno = $null ;
				$chucksoption = $null ;
				echo( '4.3 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	
		
			if(($_POST['4_4']) == 'Yes')
    			{
    			$armsyes = $armsyes ;
				$armsno = $null ;
				$armsoption = $null ;
				}
			elseif(($_POST['4_4']) == 'No')
				{
				$armsyes = $null ;
				$armsno = $null ;
				$armsoption = $null ;	
				}	
			elseif(($_POST['4_4']) == 'Optional')
				{
				$armsoption = $armsyes . $armsprice ;
				$armsyes = $null ;
				$armsno = $null ;
				}	
			else
				{
				$armsyes = $null ;
				$armsno = $null ;
				$armsoption = $null ;
				echo( '4.4 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	
		
			if(($_POST['4_5']) == 'Yes')
    			{
    			$motorsyes = $motorsyes ;
				$motorsno = $null ;
				$motorsoption = $null ;
				}
			elseif(($_POST['4_5']) == 'No')
				{
				$motorsyes = $null ;
				$motorsno = $null ;
				$motorsoption = $null ;	
				}	
			elseif(($_POST['4_5']) == 'Optional')
				{
				$motorsoption = $motorsyes . $motorsprice ;
				$motorsyes = $null ;
				$motorsno = $null ;
				}	
			else
				{
				$motorsyes = $null ;
				$motorsno = $null ;
				$motorsoption = $null ;
				echo( '4.5 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	
		
			if(($_POST['4_6']) == 'Yes')
    			{
    			$drivenyes = $drivenyes ;
				$drivenno = $null ;
				$drivenoption = $null ;
				}
			elseif(($_POST['4_6']) == 'No')
				{
				$drivenyes = $null ;
				$drivenno = $null ;
				$drivenoption = $null ;	
				}	
			elseif(($_POST['4_6']) == 'Optional')
				{
				$drivenoption = $drivenyes . $drivenprice ;
				$drivenyes = $null ;
				$drivenno = $null ;
				}	
			else
				{
				$drivenyes = $null ;
				$drivenno = $null ;
				$drivenoption = $null ;
				echo( '4.6 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	
		
			if(($_POST['4_7']) == 'Yes')
    			{
    			$safetyyes = $safetyyes ;
				$safetyno = $null ;
				$safetyoption = $null ;
				}
			elseif(($_POST['4_7']) == 'No')
				{
				$safetyyes = $null ;
				$safetyno = $null ;
				$safetyoption = $null ;	
				}	
			elseif(($_POST['4_7']) == 'Optional')
				{
				$safetyoption = $safetyyes . $safetyprice ;
				$safetyyes = $null ;
				$safetyno = $null ;
				}	
			else
				{
				$safetyyes = $null ;
				$safetyno = $null ;
				$safetyoption = $null ;
				echo( '4.7 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	
		
			if(($_POST['4_8']) == 'Yes')
    			{
    			$controlsyes = $controlsyes ;
				$controlsno = $null ;
				$controlsoption = $null ;
				}
			elseif(($_POST['4_8']) == 'No')
				{
				$controlsyes = $null ;
				$controlsno = $null ;
				$controlsoption = $null ;	
				}	
			elseif(($_POST['4_8']) == 'Optional')
				{
				$controlsoption = $controlsyes . $controlsprice ;
				$controlsyes = $null ;
				$controlsno = $null ;
				}	
			else
				{
				$controlsyes = $null ;
				$controlsno = $null ;
				$controlsoption = $null ;
				echo( '4.8 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	
		
			if(($_POST['4_9']) == 'Yes')
    			{
    			$guidingyes = $guidingyes ;
				$guidingno = $null ;
				$guidingoption = $null ;
				}
			elseif(($_POST['4_9']) == 'No')
				{
				$guidingyes = $null ;
				$guidingno = $null ;
				$guidingoption = $null ;	
				}	
			elseif(($_POST['4_9']) == 'Optional')
				{
				$guidingoption = $guidingyes . $guidingprice ;
				$guidingyes = $null ;
				$guidingno = $null ;
				}	
			else
				{
				$guidingyes = $null ;
				$guidingno = $null ;
				$guidingoption = $null ;
				echo( '4.9 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	
		
			if(($_POST['4_10']) == 'Yes')
    			{
    			$spliceyes = $spliceyes ;
				$spliceno = $null ;
				$spliceoption = $null ;
				}
			elseif(($_POST['4_10']) == 'No')
				{
				$spliceyes = $null ;
				$spliceno = $null ;
				$spliceoption = $null ;	
				}	
			elseif(($_POST['4_10']) == 'Optional')
				{
				$spliceoption = $spliceyes . $spliceprice ;
				$spliceyes = $null ;
				$spliceno = $null ;
				}	
			else
				{
				$spliceyes = $null ;
				$spliceno = $null ;
				$spliceoption = $null ;
				echo( '4.10 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	
		
			if(($_POST['4_11']) == 'Yes')
    			{
    			$trashyes = $trashyes ;
				$trashno = $null ;
				$trashoption = $null ;
				}
			elseif(($_POST['4_11']) == 'No')
				{
				$trashyes = $null ;
				$trashno = $null ;
				$trashoption = $null ;	
				}	
			elseif(($_POST['4_11']) == 'Optional')
				{
				$trashoption = $trashyes . $trashprice ;
				$trashyes = $null ;
				$trashno = $null ;
				}	
			else
				{
				$trashyes = $null ;
				$trashno = $null ;
				$trashoption = $null ;
				echo( '4.11 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	

		##SECTION FIVE IF STATEMENTS
		
			if(($_POST['5_1']) == 'Yes')
    			{
    			$mainyes = $mainyes ;
				$mainno = $null ;
				$mainoption = $null ;
				}
			elseif(($_POST['5_1']) == 'No')
				{
				$mainyes = $null ;
				$mainno = $null ;
				$mainoption = $null ;	
				}	
			elseif(($_POST['5_1']) == 'Optional')
				{
				$mainoption = $mainyes . $mainprice ;
				$mainyes = $null ;
				$mainno = $null ;
				}	
			else
				{
				$mainyes = $null ;
				$mainno = $null ;
				$mainoption = $null ;
				echo( '5.1 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	


			if(($_POST['5_2']) == 'Yes')
    			{
    			$bowedyes = $bowedyes ;
				$bowedno = $null ;
				$bowedoption = $null ;
				}
			elseif(($_POST['5_2']) == 'No')
				{
    			$bowedyes = $null ;
				$bowedno = $null ;
				$bowedoption = $null ;
				}	
			elseif(($_POST['5_2']) == 'Optional')
				{
				$bowedoption = $bowedyes . $bowedprice ;
    			$bowedyes = $null ;
				$bowedno = $null ;
				}	
			else
				{
				$bowedyes = $null ;
				$bowedno = $null ;
				$bowedoption = $null ;
				echo( '5.2 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

		
		
		
		
		##SECTION SIX IF STATEMENTS
		
			if(($_POST['6_1']) == 'Yes')
    			{
    			$shearyes = $shearyes ;
				$shearno = $null ;
				$shearoption = $null ;
				}
			elseif(($_POST['6_1']) == 'No')
				{
				$shearyes = $null ;
				$shearno = $null ;
				$shearoption = $null ;	
				}	
			elseif(($_POST['6_1']) == 'Optional')
				{
				$shearoption = $shearyes . $shearprice ;
				$shearyes = $null ;
				$shearno = $null ;
				}	
			else
				{
				$shearyes = $null ;
				$shearno = $null ;
				$shearoption = $null ;
				echo( '6.1 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help.<br/>'  ) ;
				}	


			if(($_POST['6_2']) == 'Yes')
    			{
    			$autoyes = $autoyes ;
				$autono = $null ;
				$autooption = $null ;
				}
			elseif(($_POST['6_2']) == 'No')
				{
    			$autoyes = $null ;
				$autono = $null ;
				$autooption = $null ;
				}	
			elseif(($_POST['6_2']) == 'Optional')
				{
				$autooption = $autoyes . $autoprice ;
    			$autoyes = $null ;
				$autono = $null ;
				}	
			else
				{
				$autoyes = $null ;
				$autono = $null ;
				$autooption = $null ;
				echo( '6.2 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	


			if(($_POST['6_3']) == 'Yes')
    			{
    			$razoryes = $razoryes ;
				$razorno = $null ;
				$razoroption = $null ;
				}
			elseif(($_POST['6_3']) == 'No')
				{
    			$razoryes = $null ;
				$razorno = $null ;
				$razoroption = $null ;
				}	
			elseif(($_POST['6_3']) == 'Optional')
				{
				$razoroption = $razoryes . $razorprice ;
    			$razoryes = $null ;
				$razorno = $null ;
				}	
			else
				{
				$razoryes = $null ;
				$razorno = $null ;
				$razoroption = $null ;
				echo( '6.3 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	


			if(($_POST['6_4']) == 'Yes')
    			{
    			$trimwinderyes = $trimwinderyes ;
				$trimwinderno = $null ;
				$trimwinderoption = $null ;
				}
			elseif(($_POST['6_4']) == 'No')
				{
    			$trimwinderyes = $null ;
				$trimwinderno = $null ;
				$trimwinderoption = $null ;
				}	
			elseif(($_POST['6_4']) == 'Optional')
				{
				$trimwinderoption = $trimwinderyes . $winderprice ;
    			$trimwinderyes = $null ;
				$trimwinderno = $null ;
				}	
			else
				{
				$trimwinderyes = $null ;
				$trimwinderno = $null ;
				$trimwinderoption = $null ;
				echo( '6.4 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	


			if(($_POST['6_5']) == 'Yes')
    			{
    			$trimbloweryes = $trimbloweryes ;
				$trimblowerno = $null ;
				$trimbloweroption = $null ;
				}
			elseif(($_POST['6_5']) == 'No')
				{
    			$trimbloweryes = $null ;
				$trimblowerno = $null ;
				$trimbloweroption = $null ;
				}	
			elseif(($_POST['6_5']) == 'Optional')
				{
				$trimbloweroption = $trimbloweryes . $blowerprice ;
    			$trimbloweryes = $null ;
				$trimblowerno = $null ;
				}	
			else
				{
				$trimbloweryes = $null ;
				$trimblowerno = $null ;
				$trimbloweroption = $null ;
				echo( '6.5 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	


			if(($_POST['6_6']) == 'Yes')
    			{
    			$tensionyes = $tensionyes ;
				$tensionno = $null ;
				$tensionoption = $null ;
				}
			elseif(($_POST['6_6']) == 'No')
				{
    			$tensionyes = $null ;
				$tensionno = $null ;
				$tensionoption = $null ;
				}	
			elseif(($_POST['6_6']) == 'Optional')
				{
				$tensionoption = $tensionyes . $tensionprice ;
    			$tensionyes = $null ;
				$tensionno = $null ;
				}	
			else
				{
				$tensionyes = $null ;
				$tensionno = $null ;
				$tensionoption = $null ;
				echo( '6.6 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	
				
				
				
			##SECTION SEVEN IF STATEMENTS
			
			
			if(($_POST['7_1']) == 'Yes')
    			{
    			$duplexyes = $duplexyes ;
				$duplexno = $null ;
				$duplexoption = $null ;
				}
			elseif(($_POST['7_1']) == 'No')
				{
    			$duplexyes = $null ;
				$duplexno = $null ;
				$duplexoption = $null ;
				}	
			elseif(($_POST['7_1']) == 'Optional')
				{
				$duplexoption = $duplexyes . $duplexprice ;
    			$duplexyes = $null ;
				$duplexno = $null ;
				}	
			else
				{
				$duplexyes = $null ;
				$duplexno = $null ;
				$duplexoption = $null ;
				echo( '7.1 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['7_2']) == 'Yes')
    			{
    			$windingyes = $windingyes ;
				$windingno = $null ;
				$windingoption = $null ;
				}
			elseif(($_POST['7_2']) == 'No')
				{
    			$windingyes = $null ;
				$windingno = $null ;
				$windingoption = $null ;
				}	
			elseif(($_POST['7_2']) == 'Optional')
				{
				$windingoption = $windingyes . $windingprice ;
    			$windingyes = $null ;
				$windingno = $null ;
				}	
			else
				{
				$windingyes = $null ;
				$windingno = $null ;
				$windingoption = $null ;
				echo( '7.2 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['7_3']) == 'Yes')
    			{
    			$computacoreyes = $computacoreyes ;
				$computacoreno = $null ;
				$computacoreoption = $null ;
				}
			elseif(($_POST['7_3']) == 'No')
				{
    			$computacoreyes = $null ;
				$computacoreno = $null ;
				$computacoreoption = $null ;
				}	
			elseif(($_POST['7_3']) == 'Optional')
				{
				$computacoreoption = $computacoreyes . $computacoreprice ;
    			$computacoreyes = $null ;
				$computacoreno = $null ;
				}	
			else
				{
				$computacoreyes = $null ;
				$computacoreno = $null ;
				$computacoreoption = $null ;
				echo( '7.3 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['7_4']) == 'Yes')
    			{
    			$layonyes = $layonyes ;
				$layonno = $null ;
				$layonoption = $null ;
				}
			elseif(($_POST['7_4']) == 'No')
				{
    			$layonyes = $null ;
				$layonno = $null ;
				$layonoption = $null ;
				}	
			elseif(($_POST['7_4']) == 'Optional')
				{
				$layonoption = $layonyes . $layonprice ;
    			$layonyes = $null ;
				$layonno = $null ;
				}	
			else
				{
				$layonyes = $null ;
				$layonno = $null ;
				$layonoption = $null ;
				echo( '7.4 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['7_5']) == 'Yes')
    			{
    			$tensioncontrolyes = $tensioncontrolyes ;
				$tensioncontrolno = $null ;
				$tensioncontroloption = $null ;
				}
			elseif(($_POST['7_5']) == 'No')
				{
    			$tensioncontrolyes = $null ;
				$tensioncontrolno = $null ;
				$tensioncontroloption = $null ;
				}	
			elseif(($_POST['7_5']) == 'Optional')
				{
				$tensioncontroloption = $tensioncontrolyes . $tensioncontrolprice ;
    			$tensioncontrolyes = $null ;
				$tensioncontrolno = $null ;
				}	
			else
				{
				$tensioncontrolyes = $null ;
				$tensioncontrolno = $null ;
				$tensioncontroloption = $null ;
				echo( '7.5 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['7_6']) == 'Yes')
    			{
    			$lengthcounteryes = $lengthcounteryes ;
				$lengthcounterno = $null ;
				$lengthcounteroption = $null ;
				}
			elseif(($_POST['7_6']) == 'No')
				{
    			$lengthcounteryes = $null ;
				$lengthcounterno = $null ;
				$lengthcounteroption = $null ;
				}	
			elseif(($_POST['7_6']) == 'Optional')
				{
				$lengthcounteroption = $lengthcounteryes . $lengthcounterprice ;
    			$lengthcounteryes = $null ;
				$lengthcounterno = $null ;
				}	
			else
				{
				$lengthcounteryes = $null ;
				$lengthcounterno = $null ;
				$lengthcounteroption = $null ;
				echo( '7.6 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['7_7']) == 'Yes')
    			{
    			$staticyes = $staticyes ;
				$staticno = $null ;
				$staticoption = $null ;
				}
			elseif(($_POST['7_7']) == 'No')
				{
    			$staticyes = $null ;
				$staticno = $null ;
				$staticoption = $null ;
				}	
			elseif(($_POST['7_7']) == 'Optional')
				{
				$staticoption = $staticyes . $staticprice ;
    			$staticyes = $null ;
				$staticno = $null ;
				}	
			else
				{
				$staticyes = $null ;
				$staticno = $null ;
				$staticoption = $null ;
				echo( '7.7 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['7_8']) == 'Yes')
    			{
    			$unloadingyes = $unloadingyes ;
				$unloadingno = $null ;
				$unloadingoption = $null ;
				}
			elseif(($_POST['7_8']) == 'No')
				{
    			$unloadingyes = $null ;
				$unloadingno = $null ;
				$unloadingoption = $null ;
				}	
			elseif(($_POST['7_8']) == 'Optional')
				{
				$unloadingoption = $unloadingyes . $unloadingprice ;
    			$unloadingyes = $null ;
				$unloadingno = $null ;
				}	
			else
				{
				$unloadingyes = $null ;
				$unloadingno = $null ;
				$unloadingoption = $null ;
				echo( '7.8 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['7_9']) == 'Yes')
    			{
    			$pusheryes = $pusheryes ;
				$pusherno = $null ;
				$pusheroption = $null ;
				}
			elseif(($_POST['7_9']) == 'No')
				{
    			$pusheryes = $null ;
				$pusherno = $null ;
				$pusheroption = $null ;
				}	
			elseif(($_POST['7_9']) == 'Optional')
				{
				$pusheroption = $pusheryes . $pusherprice ;
    			$pusheryes = $null ;
				$pusherno = $null ;
				}	
			else
				{
				$pusheryes = $null ;
				$pusherno = $null ;
				$pusheroption = $null ;
				echo( '7.9 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['7_10']) == 'Yes')
    			{
    			$robotyes = $robotyes ;
				$robotno = $null ;
				$robotoption = $null ;
				}
			elseif(($_POST['7_10']) == 'No')
				{
    			$robotyes = $null ;
				$robotno = $null ;
				$robotoption = $null ;
				}	
			elseif(($_POST['7_10']) == 'Optional')
				{
				$robotoption = $robotyes . $robotprice ;
    			$robotyes = $null ;
				$robotno = $null ;
				}	
			else
				{
				$robotyes = $null ;
				$robotno = $null ;
				$robotoption = $null ;
				echo( '7.10 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['7_11']) == 'Yes')
    			{
    			$camerayes = $camerayes ;
				$camerano = $null ;
				$cameraoption = $null ;
				}
			elseif(($_POST['7_11']) == 'No')
				{
    			$camerayes = $null ;
				$camerano = $null ;
				$cameraoption = $null ;
				}	
			elseif(($_POST['7_11']) == 'Optional')
				{
				$cameraoption = $camerayes . $cameraprice ;
    			$camerayes = $null ;
				$camerano = $null ;
				}	
			else
				{
				$camerayes = $null ;
				$camerano = $null ;
				$cameraoption = $null ;
				echo( '7.11 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	



			##SECTION EIGHT IF STATEMENTS
			
			if(($_POST['8_1']) == 'Yes')
    			{
    			$operatorcontrolsyes = $operatorcontrolsyes ;
				$operatorcontrolsno = $null ;
				$operatorcontrolsoption = $null ;
				}
			elseif(($_POST['8_1']) == 'No')
				{
    			$operatorcontrolsyes = $null ;
				$operatorcontrolsno = $null ;
				$operatorcontrolsoption = $null ;
				}	
			elseif(($_POST['8_1']) == 'Optional')
				{
				$operatorcontrolsoption = $operatorcontrolsyes . $operatorcontrolsprice ;
    			$operatorcontrolsyes = $null ;
				$operatorcontrolsno = $null ;
				}	
			else
				{
				$operatorcontrolsyes = $null ;
				$operatorcontrolsno = $null ;
				$operatorcontrolsoption = $null ;
				echo( '8.1 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['8_2']) == 'Yes')
    			{
    			$remotediagnosticsyes = $remotediagnosticsyes ;
				$remotediagnosticsno = $null ;
				$remotediagnosticsoption = $null ;
				}
			elseif(($_POST['8_2']) == 'No')
				{
    			$remotediagnosticsyes = $null ;
				$remotediagnosticsno = $null ;
				$remotediagnosticsoption = $null ;
				}	
			elseif(($_POST['8_2']) == 'Optional')
				{
				$remotediagnosticsoption = $remotediagnosticsyes . $remotediagnosticsprice ;
    			$remotediagnosticsyes = $null ;
				$remotediagnosticsno = $null ;
				}	
			else
				{
				$remotediagnosticsyes = $null ;
				$remotediagnosticsno = $null ;
				$remotediagnosticsoption = $null ;
				echo( '8.2 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['8_3']) == 'Yes')
    			{
    			$drivemotorsyes = $drivemotorsyes ;
				$drivemotorsno = $null ;
				$drivemotorsoption = $null ;
				}
			elseif(($_POST['8_3']) == 'No')
				{
    			$drivemotorsyes = $null ;
				$drivemotorsno = $null ;
				$drivemotorsoption = $null ;
				}	
			elseif(($_POST['8_3']) == 'Optional')
				{
				$drivemotorsoption = $drivemotorsyes . $drivemotorsprice ;
    			$drivemotorsyes = $null ;
				$drivemotorsno = $null ;
				}	
			else
				{
				$drivemotorsyes = $null ;
				$drivemotorsno = $null ;
				$drivemotorsoption = $null ;
				echo( '8.3 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['8_4']) == 'Yes')
    			{
    			$drivetypeyes = $drivetypeyes ;
				$drivetypeno = $null ;
				$drivetypeoption = $null ;
				}
			elseif(($_POST['8_4']) == 'No')
				{
    			$drivetypeyes = $null ;
				$drivetypeno = $null ;
				$drivetypeoption = $null ;
				}	
			elseif(($_POST['8_4']) == 'Optional')
				{
				$drivetypeoption = $drivetypeyes . $drivetypeprice ;
    			$drivetypeyes = $null ;
				$drivetypeno = $null ;
				}	
			else
				{
				$drivetypeyes = $null ;
				$drivetypeno = $null ;
				$drivetypeoption = $null ;
				echo( '8.4 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	

			if(($_POST['8_5']) == 'Yes')
    			{
    			$machineguardingyes = $machineguardingyes ;
				$machineguardingno = $null ;
				$machineguardingoption = $null ;
				}
			elseif(($_POST['8_5']) == 'No')
				{
    			$machineguardingyes = $null ;
				$machineguardingno = $null ;
				$machineguardingoption = $null ;
				}	
			elseif(($_POST['8_5']) == 'Optional')
				{
				$unloadingoption = $machineguardingyes . $machineguardingprice ;
    			$machineguardingyes = $null ;
				$machineguardingno = $null ;
				}	
			else
				{
				$machineguardingyes = $null ;
				$machineguardingno = $null ;
				$machineguardingoption = $null ;
				echo( '8.5 BROKEN - Either you did not make a selection, or there is a problem. Please contact Carl Turner (cturner@universalconvertingequipment.com) for help. <br/>' ) ;
				}	


			
			##COMPOSITION STARTS HERE
			
			$sectionOne = '			<p><b>PRIVATE AND CONFIDENTIAL</b></p>
		<img src="images/misc/logo.jpeg" alt="Universal Logo" id="logo" />

		<hr/>
		<img src="images/misc/x6.jpeg" alt="Universal X6" id="mainImage" />


		<p id="title">Universal X6</p>
		<p id="subtitle">Slitter Rewinder</p>
<table id="info">

	<tr id="infotr">
	
		<th id="infoth">Quote Number</th>
		<td id="infotd"><span id="bigger">' . $quotenumber . '</span></td>
	
	</tr>

	<tr id="infotr">
	
		<th id="infoth">Company</th>
		<td id="infotd"><span id="bigger">' . $company . '</span></td>
	
	</tr>

	<tr id="infotr">
	
		<th id="infoth">For the attention of</th>
		<td id="infotd"><span id="bigger">' . $attention . '</span></td>
	
	</tr>

	<tr id="infotr">
	
		<th id="infoth">Issued</th>
		<td id="infotd"><span id="bigger">' . $date . '</span></td>
	
	</tr>

	<tr id="infotr">
	
		<th id="infoth">Sales Contact</th>
		<td id="infotd"><span id="bigger">Alan Jones</span><br/>
			<span id="smalltext"><b>Managing Director</b><br/>
			<b>Email: </b>ajones@universalconvertingequipment.com<br/>
			<b>Telephone: </b>+44 (0) 1473 403333</span></td>
	
	</tr>




</table>	
		<hr/>
		
				<h2>Quotation Contents</h2>
	
		<p>
	
		<ul id="contents">
		
			<li><a href="#1">1. Introduction</a></li>
			<li><a href="#2">2. Universal X6 Slitter Rewinder</a></li>
			<ul id="contents">
				<li id="contentsnolink">Key Benefits</li>
			</ul>
			<li><a href="#3">3. Your Machine Specification</a></li>
			<li><a href="#4">4. Unwind Details</a></li>
			<ul id="contents">
				<li id="contentsnolink">Shaftless Unwind</li>
				<li id="contentsnolink">Shafted Unwind</li>
				<li id="contentsnolink">Unwind Chucks</li>
				<li id="contentsnolink">Unwind Arms</li>
				<li id="contentsnolink">Unwind Motors</li>
				<li id="contentsnolink">Driven Unwind</li>
				<li id="contentsnolink">Unwind Safety</li>
				<li id="contentsnolink">Unwind Section Operator Controls</li>
				<li id="contentsnolink">Guiding</li>
				<li id="contentsnolink">Splice Table</li>
				<li id="contentsnolink">Trash Winder</li>
			</ul>
			<li><a href="#5">5. Main Drive Details</a></li>
			<ul id="contents">
				<li id="contentsnolink">Main Drive</li>
				<li id="contentsnolink">Bowed Roller</li>
			</ul>
			<li><a href="#6">6. Slitting</a></li>
			<ul id="contents">
				<li id="contentsnolink">Shear Slitting</li>
				<li id="contentsnolink">Automatic Shear Anvil Positioning System</li>
				<li id="contentsnolink">Razor Slitting</li>
				<li id="contentsnolink">Oscillating Trim Winder</li>
				<li id="contentsnolink">Slitting Tension Section</li>
			</ul>			
			<li><a href="#7">7. Rewinding Section Details</a></li>
			<ul id="contents">
				<li id="contentsnolink">Duplex or Turret</li>
				<li id="contentsnolink">Winding Type</li>
				<li id="contentsnolink">Computacore Core Alignment System</li>
				<li id="contentsnolink">Constant Geometry Lay-on Rollers</li>
				<li id="contentsnolink">Tension Control</li>
				<li id="contentsnolink">Length Counter</li>
				<li id="contentsnolink">Static Elimination</li>
				<li id="contentsnolink">Roll Unloading Tree</li>
				<li id="contentsnolink">Off-load Pusher</li>
				<li id="contentsnolink">Robotic Roll Handling System</li>
				<li id="contentsnolink">Camera System</li>
			</ul>			
			<li><a href="#8">8. Drives and Controls</a></li>
			<ul id="contents">
				<li id="contentsnolink">Operator Controls</li>
				<li id="contentsnolink">Remote Diagnostics</li>
				<li id="contentsnolink">Drive Motors</li>
				<li id="contentsnolink">Drive Type</li>
				<li id="contentsnolink">Machine Guarding</li>
			</ul>			
			<li><a href="#9">9. Your Machine Quotation</a></li>
			<ul id="contents">
				<li id="contentsnolink">Optional Extras</li>
			</ul>			
			<li><a href="#10">10. Terms and Conditions</a></li>
			<li><a href="#11">11. Installation</a></li>		
		
		</ul>
			
		</p>
		
		<hr id="1"/><div>
		<h2>1. Introduction</h2>		
	<br/>
		<p id="withoutimage">Over 600 installations around the world over the last 17 years.
				
			<ul id="list">
				<li>1996 - Formed by ex-Atlas / Titan personnel</li>
				<li>2003 - Universal Adhesive Systems Ltd formed and acquired the assets and key personnel of Mercer Adhesive Systems limited. Purchased building and located new business in Daventry, UK.</li>
				<li>2003 - Purchased and relocated to new premises </li>
				<li>2011 - 500th installation worldwide.</li>
				<li>2012 - Purchased neighbouring buildings in Ipswich, UK to increase manufacturing space by 50%</li>
			</ul>
		
		</p>
		<p id="withimage">Universal Converting Equipment design, develop and build slitter rewinders, salvage rewinders, core cutters,  hot melt adhesive coating and laminating systems and ancillary systems.  The Universal range of Slitter Rewinders has the small footprint low cost ‘X1’ at one end of the scale and the highly automated ‘X9’ at the other. We develop and build both the machinery and  control systems so we offer a high level of customisation and prompt support. All machines are designed and built in the UK. 
</p>

		<img src="images/1_intro/energy.jpeg" alt="Efficient Energy Usage" id="energy_image" />

		<p id="withimage">Universal offer a wide range of ancillary equipment, including automatic core cutters, drive and control system upgrades, web guiding systems and differential winding shafts. Universal also produce a range of hot melt adhesive coating and laminating equipment.</p>

		
	</div><br/>
		<img src="images/1_intro/diagram.jpeg" alt="Universal" id="universal_image" />
				<hr/><div>
		<h2>2. Universal X6 Slitter Rewinder</h2>		
	<br/>
		<p id="withimage">The Universal X6 slitting machine has been designed to produce perfect slit rolls time and time again. This versatile machine incorporates Universal’s closed loop Total Tension Control System ensuring consistent and repeatable roll tension profiles. Using digital AC vector drives and integrated control system, the machine offers unprecedented control whilst being simple and friendly to operate. 
<br/><br/>Integrated technology allows remote diagnostics anywhere in the world simplifying ongoing support.
</p>

		<img src="images/2_x6/x6.jpeg" alt="Universal X6 Slitter Rewinder" id="x6_image" />


		<br/><h3>Key Benefits</h3>
		<p id="withoutimage"><b>Substantial construction</b><br/>The X6 utilises substantial, cross braced frames, precision bored as a pair. The rollers are aluminium tubes precisely machined and balanced. </p>
		<p id="withoutimage"><b>Slit tension zone</b><br/>Unlike most competitive equipment, the X6 features an additional operator controllable tension zone. <br/>The tension through the slitting knives can be set independently of the unwind and rewind tensions, ensuring the optimum tension through the slitting knives.</p>
		<p id="withoutimage"><b>Precise rewind tension</b><br/>Closed loop tension control of the rewind utilising a pair of load cells for each rewind shaft as standard.</p>
		<p id="withoutimage"><b>Constant geometry layon rollers</b><br/>The X6 has linear (horizontal rather than pivoting) layon rollers. These do not vary their force as of the geometry change unlike conventional pivoting systems. </p>
		<p id="withoutimage"><b>Simple operation</b><br/>Adjustable parameters have been minimised, so an operator can be trained in just a few hours. We believe the X6 is about as simple to operate as a duplex centre-wind slitter can be.</p>
		<p id="withoutimage"><b>Safety</b><br/>Universal ensures its machines conform to international safety standards including EN 13418:2008.</p>
		<p id="withoutimage"><b>No hydraulics</b><br/>We do not use hydraulic systems for guiding or roll lift in, eliminating the risk of material contamination making the X6 ideal for slitting medical and food packaging products.</p>
		<p id="withoutimage"><b>Extensive recipe system</b><br/>Combined with the closed loop tension control system, our recipe system guarantees product repeatability.</p>
		<p id="withoutimage"><b>Worldwide support</b><br/>Same day support is available by telephone, and additionally Internet support is available.  Service engineers are normally available within 48 hours.<br/>Additional support (drive system) can be obtained from Control Techniques LLC, a full list of worldwide service locations can be found at <a href="http://www.universalconvertingequipment.com/ct">www.universalconvertingequipment.com/ct</a>
</p>
		<p id="withoutimage"><b>UK Design and Build</b><br/>The X6 is designed and built in the UK.</p>
		<p id="withimage"><b>Minimised energy usage - ideas for efficient converting</b><br/>All of our machines are designed to use a minimal amount of energy and as a part of our sustainability program we have identified significant areas of energy wastage on winding machines.  We use the latest high efficiency AC motors combined with the most up to date AC Vector Drives.  A motor is used on the unwind rather than a brake - the motor generates electricity which is used to power the rewind motor rather than converting brake energy into heat.  The net result is an extremely energy efficient machine.</p>

		<img src="images/2_x6/x6energy.jpeg" alt="Minimized Energy Usage" id="x6energy_image" />

	</div><br/>' ; 
	
			$machineQuote = '		<hr/><div>
		<h2>3. Your Machine Specification</h2>		
	<br/>
		<p>
		
			<h4>Unwind/Master Rolls</h4>
		
			<ul id="list">
			
				<li>Shafted/Shaftless Unwind: ' . $unwindtype1 . '</li>
				<li>Integral/Separate Unwind: ' . $unwindtype2 . '</li>
				<li>Driven/Braked Unwind: ' . $unwindtype3 . '</li>
				<li>Maximum Roll Width: ' . $unwindmaxrollwid . '</li>
				<li>Maximum Roll Diameter: ' . $unwindmaxrolldia . '</li>
				<li>Minimum Web Width: ' . $unwindminwebwid . '</li>
				<li>Minimum Roll Diameter (For Floor Pickup): ' . $unwindminrolldia . '</li>
				<li>Maximum Roll Weight: ' . $maxrollweight . '</li>
				<li>Roll Material: ' . $unwindrollmaterial . '</li>
				<li>Material Thickness: ' . $unwindmaterialthick . '</li>
				<li>Web Guiding: ' . $webguiding . '</li>
				<li>Peeler Roller: ' . $peeler . '</li>
				<li>Tension Range: ' . $unwindtensionrange . '</li>
				<li>Camera System: ' . $camerasystem . '</li>
				<li>Core Material: ' . $unwindcorematerial . '</li>
				<li>Core Size: ' . $unwindcoresize . '</li>
			
			</ul>
			
			<h4>Slitting/Cutting</h4>
			
			<ul id="list">
			
				<li>Slitting Type: ' . $slittingtype . '</li>
				<li>Knives/Razors Included: ' . $knivesincl . '</li>
				<li>Shear Anvils Included: ' . $anvilsincl . '</li>
				<li>Razor Holders Included: ' . $razorholdersincl . '</li>
				<li>Minimum Slit Width: ' . $minslitwidth . '</li>
				<li>Splice Table: ' . $splicetable . '</li>
				<li>Automatic Knife Positioning: ' . $autoknife . '</li>
				<li>Trim Removal Type: ' . $trimremoval . '</li>
			
			</ul>

			<h4>Rewind/Finish Rolls</h4>
			
			<ul id="list">
			
				<li>Maximum Roll Diameter: ' . $rewindmaxrolldia . '</li>
				<li>Maximum Rewind Weight (Per Shaft): ' . $rewindmaxrollweight . '</li>
				<li>Turretting Rewind: ' . $turretting . '</li>
				<li>Constant Geometry Lay-on Rollers: ' . $layonrollers . '</li>
				<li>Differential Shafts: ' . $deffershafts . '</li>
				<li>Bowed Roller: ' . $bowedroller . '</li>
				<li>Spreader Roller: ' . $spreaderroller . '</li>
				<li>Anti-static System: ' . $antistatic . '</li>
				<li>Maximum Machine Speed: ' . $maxmachincespeed . '</li>
				<li>Tension Range: ' . $rewindtensionrange . '</li>
				<li>Laser Core Alignment: ' . $laser . '</li>
				<li>Unloading: ' . $unloading . '</li>
				<li>Core Material: ' . $rewindcorematerial . '</li>
				<li>Core Size: ' . $rewindcoresize . '</li>
			
			</ul>
		
		</p>

	</div><br/>' ;
	
	
	
	
	
			
			$sectionFour = $fourStandard . $unwindyes . $shaftedyes . $chucksyes . $armsyes . $motoryes . $drivenyes . $safetyyes . $controlsyes . $guidingyes . $spliceyes . $trashyes ;
			
			$sectionFive = $fiveStandard . $mainyes . $bowedyes ;
			
			$sectionSix = $sixStandard . $shearyes . $autoyes . $razoryes . $trimwinderyes . $trimbloweryes . $tensionyes ;
			
			$sectionSeven = $sevenStandard . $duplexyes . $windingyes . $computacoreyes . $layonyes . $tensionconrolyes . $lengthcounteryes . $staticyes . $unloadingyes . $pusheryes . $robotyes . $camerayes ;
			
			$sectionEight = $eightStandard . $operatorcontrolsyes . $remotediagnosticsyes . $drivemotorsyes . $drivetypeyes . $machineguardingyes ;
			
			$sectionNine = '<hr id="9"/><div>
		<h2>9. Your Machine Quotation</h2>		
	</div> <br/>
		<div>		
		<p id="withoutimage">Based on your specification (<a href="#3">section 3</a>),  the cost to supply a Universal X6 Slitter Rewinder is ' . $price . ' (ex-works)<br/><br/>This quote is subject to our standard terms and conditions of sale, available at <a href="http://www.universalconvertingequipment.com/terms">www.universalconvertingequipment.com/terms</a></p>

		
	</div><br/>
		<div>
		
			<h3>Options</h3>
		' . $unwindoption . $shaftedoption . $chucksoption . $armsoption . $motoroption . $drivenoption . $safetyoption . $controlsoption . $guidingoption . $spliceoption . $trashoption . $mainoption . $bowedoption . $shearoption . $autooption . $razoroption . $trimwinderoption . $trimbloweroption . $tensionoption . $duplexoption . $windingoption . $computacoreoption . $layonoption . $tensionconroloption . $lengthcounteroption . $staticoption . $unloadingoption . $pusheroption . $robotoption . $cameraoption . $operatorcontrolsoption . $remotediagnosticsoption . $drivemotorsoption . $drivetypeoption . $machineguardingoption . '
		</div>	
' ;

			$sectionTen = '		<hr id="10"/>
		
		<div>
			
			<h2 id="tandctitle">10. Terms and Conditions</h2>		
	
		</div> 
		
		<br/>
		
		<div id="leftcol">		
			
			<h4 id="tandch4">Exclusions</h4>
			<p id="tandcp">
			
				The following are specifically excluded from this quotation (except where specified):
				
				<ul id="tandclist">
				
					<li>Value Added Tax and Import Duties. (See note below)</li>
					<li>Any foundations or civil work</li>
					<li>Off-loading machine and commissioning at customer’s premises</li>
					<li>Export packaging</li>
					<li>Anything not specifically stated in the quotation</li>
				
				</ul>
			
			</p>
		
			<h4 id="tandch4">Value Added Tax (EEC Countries)</h4>
			<p id="tandcp">To comply with 1993 EEC VAT Regulations, can you please ensure your VAT Registration Number is clearly stated on your purchase order.</p>
		
			<h4 id="tandch4">Delivery</h4>
			<p id="tandcp">Our delivery is dependent on production commitments at the time of order. Normally 14-16 weeks.</p>
		
			<h4 id="tandch4">Terms of Payment</h4>
			<p id="tandcp">40% with order. <br/>55% on completion of machine build and acceptance trials at our site. This payment needs to be received and cleared in the nominated bank account before the machine is shipped to the customer. <br/>5% 30 days after dispatch of the machine. <br/><br/>All non-UK payments to be made by irrevocable letter of credit confirmed by a UK clearing bank. All costs associated with raising the Letter of Credit are to be paid by the customer.<br/><br/>All pricing is in GBP (£) unless otherwise stated.</p>
		
			<h4 id="tandch4">Warranty</h4>
			<p id="tandcp">The goods offered under this quotation are warranted free from defects in design, material and construction for a period of 12 months from the date of dispatch. Should a component fail during the 12 month warranty period it will be exchanged free of charge. The warranty is for parts only and does not include labour, travelling or delivery.</p>
		
		</div>
		
		<br/>
		
		<div id="rightcol">
		
			<h4 id="tandch4">Validity</h4>
			<p id="tandcp">This offer is valid for 60 days from document date.</p>
		
			<h4 id="tandch4">Safety/Documentation</h4>
			<p id="tandcp">The machine will conform to local safety standards. It will be supplied with a full set of documentation in English.</p>
		
			<h4 id="tandch4">Test Materials</h4>
			<p id="tandcp">If Customer materials are to be used for test or acceptance trials are to be supplied as free issue by the customer, who will be responsible for all transport charges.</p>
		
			<h4 id="tandch4">Ownership</h4>
			<p id="tandcp">All machinery and components delivered remain the property of Universal Control Equipment Ltd until full payment has been received.</p>
		
			<h4 id="tandch4">Standard Terms and Conditions of Sale</h4>
			<p id="tandcp">The sale of the machine is subject to the standard terms and conditions of sale of Universal Converting Equipment a trading division of Universal Control Equipment Ltd.
Terms are available at <a href="http://www.universalconvertingequipment.com/terms">www.universalconvertingequipment.com/terms</a></p>
		
			<h4 id="tandch4">Design Update</h4>
			<p id="tandcp">Please note that we are continually developing our designs and products. The photographs, descriptions and specifications given in this quote are for guidance only and are subject to change. Final details will be confirmed at the time of order placement.</p>
		
		
		
		</div>	
' ;

				$sectionEleven = '		<hr id="11"/>
		
		<div>
			
			<h2>11. Installation</h2>		
	
		</div> 
		
		<br/>
		
		<div>		
			
			<p>The customer will be responsible for providing a level base for the machine and also the necessary services such as electricity and air supplies as detailed below:</p>
		
			<h4>Power</h4>
			<p>
			
				<ul id="list">
				
					<li>380-420V 3 phase (No Neutral), 50Hz ±10%</li>
					<li>440-480V 3 phase (No Neutral), 60Hz ±10%</li>
					<li>40 KVA @ 63 Amps</li>
				
				</ul>
			
			</p>
		
			<h4>Air</h4>
			<p>
			
				<ul id="list">
				
					<li>Pressure - 6 bar minimum</li>
					<li>Consumption - 0.2 Cubic meters per minute</li>
					<li>Quality - Clean & Dry filtered to 0.3 Micron particles 99.9% oil mist removed</li>
					<li>Connection - 10mm</li>
				
				</ul>
			
			</p>
		
			<h4>Environmental</h4>
			<p>
			
				<ul id="list">
				
					<li>Temperature - 0-40 Degrees Celsius</li>
					<li>Relative Humidity - Max 80% non-condensing</li>
					<li>Max Working Height - 1000 M Above sea level</li>
					<li>Noise Levels - 81 dB(A) Without trim system</li>
				
				</ul>
			
			</p>
		
			<p>Normally installation and training would be undertaken by the same engineer. I would allow for an engineer being on site for six days to install the machine and provide operator training. Standard charges are:
			
				<ul id="list">
				
					<li>Travel time and site time £75/hour</li>
					<li>Car mileage £0.75 per mile</li>
					<li>Other travel and subsidence expenses at cost</li>
				
				</ul>
			
			</p>
		
		
		</div>
' ;

				$footer = '		<div>
		
			<p id="footerp">Universal Converting Equipment, B12 Farthing Road Industrial Estate, Ipswich, Suffolk, IP1 5AP, UK<br/>
							Phone +44 (0) 1473 403333  <a id="footerlink" href="http://www.universalconvertingequipment.com/">www.universalconvertingequipment.com/</a></p>
		
		</div>
' ;
			
			$quote = $sectionOne . $machineQuote . $sectionFour . $sectionFive . $sectionSix . $sectionSeven . $sectionEight . $sectionNine . $sectionTen . $sectionEleven . $footer ;
				
		echo($quote);		
				
				
				
				
				
				
				
				
				

		?>

	
	</body>
	
</html>
