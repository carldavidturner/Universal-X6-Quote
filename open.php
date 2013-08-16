µ<!DOCTYPE html>
<html>

	<head>
		
		<!-- css -->
		
		<link rel="stylesheet" type="text/css" href="style.css">
		
		<meta charset="UTF-8">
		
	</head>
	
	<body>
	
	
		<?php
			$getQuote = $_POST['getQuote'] ;
	// Create connection
	$con=mysqli_connect("db485298283.db.1and1.com","dbo485298283","DaeIBIBRK2X39Tx","db485298283");

	// Check connection
	if (mysqli_connect_errno($con))
  		{
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}


			$sql = "SELECT * FROM 'x6_quote_data' WHERE 'quote_number'=".$getQuote." ";
			
			$result = mysqli_query($con,$sql) ;
			
			$row = mysqli_fetch_assoc($result) ;
			
			$quoteNumber = $getQuote ;
			$companyNameRet =  $row['company_name'] ;
			$companyCountryRet = $row['company_country'] ;
			$attentionOfRet = $row['attention_of'] ;
			$finalPriceRet = $row['final_price'] ;
			$priceAdditionalInfoRet = $row['price_text'] ;
			$regionRet = $row['region'] ;
			
			$shaftedShaftlessRet = $row['shafted_shaftless'] ;
			$seperateIntegralRet = $row['separate_integral'] ;
			$drivenBrakedRet = $row['driven_braked'] ;
			$maxUnwindRollWidthRet = $row['unwind_max_width'] ;
			$maxUnwindRollDiaRet = $row['unwind_max_diameter'] ;
			$minUnwindWebWidthRet = $row['unwind_min_web_width'] ;			
			$minDiaFloorPickupRet = $row['unwind_min_roll_diameter'] ;
			$maxUnwindRollWeightRet = $row['unwind_max_roll_weight'] ;
			$rollMaterialRet = $row['roll_material'] ;
			$materialThicknessRet = $row['material_thickness'] ;
			$webGuidingRet = $row['web_guiding'] ;
			$guidingPriceRet = $row['web_guiding_price'] ;
			$peelOffRet = $row['peel_off_roller'] ;
			$unwindTensionRangeRet = $row['unwind_tension_range'] ;			
			$spliceTableRet = $row['splice_table'] ;
			$splicePriceRet = $row['splice_price'] ;
			$unwindCoreMaterialRet = $row['unwind_core_material'] ;
			$unwindCoreSizeRet = $row['unwind_core_size'] ;
			
			$driveTypeRet = $row['drive_type'] ;
			
			$shearYesRet = $row['shear_cutting'] ;
			$shearKnivesRet = $row['shear_knives'] ;
			$shearAnvilsRet = $row['shear_anvils'] ;
			$razorYesRet = $row['razor_cutting'] ;
			$razorKnivesRet = $row['razor_knives'] ;
			$crushYesRet = $row['crush_cutting'] ;
			$crushKnivesRet = $row['crush_knives'] ;
			$minSlitWidthRet = $row['min_slit_width'] ;
			$akpRet = $row['auto_knife_positioning'] ;
			$trimRet = $row['trim_removal'] ;
			$spreaderRollerRet = $row['spreader_roller'] ;
			$spreaderPriceRet = $row['spreader_roller_price'] ;
			
			$rewindTypeRet = $row['rewind_type'] ;
			$shaftTypeRet = $row['shaft_type'] ;
			$computacoreRet = $row['computacore'] ;
			$computaCorePriceRet = $row['computacore_price'] ;
			$layonRollersRetRet = $row['layon_rollers'] ;
			$maxRewindRollDiaRet = $row['rewind_max_roll_diameter'] ;
			$maxRewindRollWeightRet = $row['rewind_max_roll_weight'] ;
			$antiStaticRet = $row['anti_static'] ;
			$antiStaticPriceRet = $row['anti_static_price'] ;
			$maxMachineSpeedRet = $row['max_machine_speed'] ;
			$rewindTensionRangeRet = $row['rewind_tension_range'] ;
			$offloadPusherRet = $row['offload_pusher'] ;
			$offloadPriceRet = $row['offload_pusher_price'] ;
			$onwardsRet = $row['onward_handling'] ;
			$camerasRet = $row['camera_system'] ;
			$cameraPriceRet = $row['camera_system_price'] ;
			$rewindCoreMaterialRet = $row['rewind_core_material'] ;
			$rewindCoreSizeRet = $row['rewind_core_size'] ;
				
		?>
	
	

	
	
		<form id="section6" action="update.php" method="post">
		
			<h1>X6 Slitter Rewinder</h1>
			<p>For help, please <a href="help.html">click here</a>.</p>
			<table>
			
				<h2>General Information</h2>
			
				<h4>1. Details</h4>
				
				<p>Fill in these details for the quote to be addressed correctly.</p>
				
				<tr>
				
					<th>Description</th>
					<th>Input</th>
				
				</tr>
				
				<tr>
				
					<td class="desc">Quote Number:</td>
					<td><input type="text" class="text" name="quoteNumber" placeholder="e.g. '3307313'" value="<?php echo($getQuote); ?>"/></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Company Name:</td>
					<td><input type="text" class="text" name="companyName"  value="<?php echo($companyNameRet); ?>"/></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Company Country:</td>
					<td><input type="text" class="text" name="companyCountry" value="<?php echo($companyCountryRet); ?>"/></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">For the attention of:</td>
					<td><input type="text" class="text" name="attentionOf" placeholder="e.g. 'Carl Turner'" value="<?php echo($attentionOfRet); ?>"/></td>
	
				</tr>
			
				<tr>
				
					<td class="desc">Final Quote Price</td>
					<td><input type="text" class="text" name="finalPrice" value="<?php echo($finalPriceRet) ; ?>"/></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Additional Text for Price</td>
					<td><textarea name="priceAdditionalInfo"  ><?php echo($priceAdditionalInfoRet) ; ?></textarea></td>
				
				</tr>

				<tr>
				
					<td class="desc">Region</td>
					<td>
					
						<select name="region" >
						
							<?php 
							
							if($regionRet == 'Europe'){ echo('<option value="Europe" selected>Europe</option>') ;} else { echo('<option value="Europe">Europe</option>') ; }
							if($regionRet == 'USA'){ echo('<option value="USA" selected>USA</option>') ;} else { echo('<option value="USA">USA</option>') ; }
							if($regionRet == 'Other'){ echo('<option value="Other" selected>Rest of World</option>') ;} else { echo('<option value="Other">Rest of World</option>') ; } 
						
							?>
						
						</select>
					
					</td>
	
				</tr>
			
			</table>
	
			<table>
			
				<h2>Machine Specification</h2>
										
				<h4>Unwind/Master Rolls</h4>
				
				<tr>
				
					<th>Description</th>
					<th>Options</th>				
				</tr>
				
				<tr>
				
					<td class="desc">Unwind Type:</td>
					<td class="selection">
					
					<select name="shaftedShaftless">
					
						<?php
						
						if($shaftedShaftlessRet == 'Shafted'){ echo('<option value="Shafted" selected>Shafted</option>') ;} else { echo('<option value="Shafted">Shafted</option>') ; }
						if($shaftedShaftlessRet == 'Shaftless'){ echo('<option value="Shaftless"  selected>Shaftless</option>') ;} else { echo('<option value="Shaftless">Shaftless</option>') ; }
						
						?>
						
					</select>
					
						<select name="seperateIntegral">
						
						<?php
						
						if($separateIntegralRet == 'Separate') { echo('<option value="Separate" selected>Separate</option>') ;} else { echo('<option value="Separate">Separate</option>') ;}
						if($separateIntegralRet == 'Integral') { echo('<option value="Integral" selected>Integral</option>') ;} else { echo('<option value="Integral">Integral</option>') ;}

						?>
						</select>
					
					
						<select name="drivenBraked">
						
						<?php
						
						if($drivenBrakedRet == 'Driven') { echo('<option value="Driven" selected>Driven</option>') ;} else { echo('<option value="Driven">Driven</option>') ;}
						if($drivenBrakedRet == 'Braked') { echo('<option value="Braked" selected>Braked</option>') ;} else { echo('<option value="Braked">Braked</option>') ;}
						
						?>
						

						
						</select>
					
					</td>
	
				</tr>
								
				<tr>
				
					<td class="desc">Maximum Roll Width:</td>
					<td class="selection"><input type="number" class="text" name="maxUnwindRollWidth" value="<?php echo($maxUnwindRollWidthRet) ; ?>"/></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Maximum Roll Diameter:</td>
					<td class="selection"><input type="number" class="text" name="maxUnwindRollDia" value="<?php echo($maxUnwindRollDiaRet) ; ?>" /></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Minimum Web Width:</td>
					<td class="selection"><input type="number" class="text" name="minUnwindWebWidth" value="<?php echo($minUnwindWebWidthRet) ; ?>"  value="400mm"/></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Minimum Roll Diameter (For Floor Pickup):</td>
					<td class="selection"><input type="number" class="text" name="minDiaFloorPickup" value="<?php echo($minDiaFloorPickupRet) ; ?>" value="400mm"/></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Maximum Roll Weight:</td>
					<td class="selection"><input type="number" class="text" name="maxUnwindRollWeight" value="<?php echo($maxUnwindRollWeightRet) ; ?>" /></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Roll Material:</td>
					<td class="selection"><input type="text" class="text" name="rollMaterial"  value="<?php echo($rollMaterialRet) ; ?>" /></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Material Thickness:</td>
					<td class="selection"><input type="number" class="text" name="materialThickness" value="<?php echo($materialThicknessRet) ; ?>" /></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Web Guiding:</td>
					<td class="selection">
					
					<select name="webGuiding">
					<?php
					if($webGuidingRet == 'Yes') { echo('<option value="Yes" selected>Yes</option>') ;} else { echo('<option value="Yes">Yes</option>') ;}
					if($webGuidingRet == 'No') { echo('<option value="No" selected>No</option>') ;} else { echo('<option value="No">No</option>') ;}
					if($webGuidingRet == 'Optional') { echo('<option value="Optional" selected>Optional</option>') ;} else { echo('<option value="Optional">Optional</option>');}
					?>
					</select>
					
					<input type="text" class="text" name="guidingPrice" placeholder="Optional Price"  value="<?php echo($guidingPriceRet) ; ?>"/></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Peel Off Roller:</td>
					<td class="selection"><select name="peelOff"><option value="No">No</option><option value="Yes">Yes</option></select></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Tension Range:</td>
					<td class="selection"><input type="text" class="text" name="unwindTensionRange"  value="<?php echo($unwindTensionRangeRet) ; ?>"/></td>
	
				</tr>
								<tr>
				
					<td class="desc">Splice Table:</td>
					<td class="selection">
					<select name="spliceTable">
					<?php
					if($spliceTableRet == 'Yes') { echo('<option value="Yes" selected>Yes</option>') ;} else { echo('<option value="Yes">Yes</option>') ;}
					if($spliceTableRet == 'No') { echo('<option value="No" selected>No</option>') ;} else { echo('<option value="No">No</option>') ;}
					if($spliceTableRet == 'Optional') { echo('<option value="Optional" selected>Optional</option>') ;} else { echo('<option value="Optional">Optional</option>');}
					?>
					
					</select><input type="text" class="text" name="splicePrice" placeholder="Optional Price" value="<?php echo($splicePriceRet) ; ?>" />
					</td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Core Material:</td>
					<td class="selection"><input type="text" class="text" name="unwindCoreMaterial"  value="<?php echo($unwindCoreMaterialRet) ; ?>"/></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Core Size:</td>
					<td class="selection"><select name="unwindCoreSize">
					<?php
					if($unwindCoreSizeRet == '76.2mm (3 Inch)') { echo('<option selected value="76.2mm (3 Inch)">76.2mm (3 Inch)</option>') ;} else { echo('<option value="76.2mm (3 Inch)">76.2mm (3 Inch)</option>') ;}
					if($unwindCoreSizeRet == '152.4mm (6 Inch)') { echo('<option value="152.4mm (6 Inch)" selected>152.4mm (6 Inch)</option>') ;} else { echo('<option value="152.4mm (6 Inch)">152.4mm (6 Inch)</option>') ;}
					if($unwindCoreSizeRet == '72.6mm & 152.4mm (3 & 6 Inch)') { echo('<option value="72.6mm & 152.4mm (3 & 6 Inch)" selected>72.6mm & 152.4mm (3 & 6 Inch)</option>') ;} else { echo('<option value="72.6mm & 152.4mm (3 & 6 Inch)">72.6mm & 152.4mm (3 & 6 Inch)</option>');}
					?>
					</select></td>
	
				</tr>
			
			</table>
			
			<table>
	
				<h4>Main Drive</h4>
	
				<tr>
				
					<td class="desc">Drive Type:</td>
					<td class="selection"><select name="driveType">
					<?php
					if($driveTypeRet == 'Driven S Wrap') { echo('<option selected value="Driven S Wrap">Driven S Wrap</option>') ;} else { echo('<option value="Driven S Wrap">Driven S Wrap</option>') ;}
					if($driveTypeRet == 'Nip') { echo('<option value="Nip" selected>Nip</option>') ;} else { echo('<option value="Nip">Nip</option>') ;}
					?>
					
					</select></td>
				</tr>
								
			
			</table>
			
			<table>
	
				<h4>Slitting/Cutting</h4>
	
				<tr>
				
					<td class="desc">Slitting Type:</td>
					<td class="selection">
					
					<input type="checkbox" class="radio1" name="shearYes" value="Shear" />Shear 
					<input type="number" name="shearKnives" class="numberknives" placeholder="Number of knives" value="<?php echo($shearKnivesRet) ; ?>">
					<input type="number" name="shearAnvils" class="numberknives" placeholder="Number of anvils" value="<?php echo($shearAnvilsRet) ; ?>">
					
					
					<input type="checkbox" class="radio1" name="razorYes" value="Razor" />Razor 
					<input type="number" name="razorKnives" class="numberknives" placeholder="Number of razors" value="<?php echo($razorKnivesRet) ; ?>">
					
					
					<input type="checkbox" class="radio1" name="crushYes" value="Crush" />Crush 
					<input type="number" name="crushKnives" class="numberknives" placeholder="Number of knives" value="<?php echo($crushKnivesRet) ; ?>"></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Minimum Slit Width:</td>
					<td class="selection"><input type="number" class="text" name="minSlitWidth"  value="<?php echo($minSlitWidthRet) ; ?>"/></td>
	
				</tr>
				
				
				<tr>
				
					<td class="desc">Automatic Knife Positioning:</td>
					<td class="selection"><select name="akp">
					<?php
					if($akpRet == 'None') { echo('<option value="None" selected>None</option>') ;} else { echo('<option value="None">None</option>') ;}
					if($akpRet == 'Anvils') { echo('<option value="Anvils" selected>Anvils</option>') ;} else { echo('<option value="Anvils">Anvils</option>') ;}
					if($akpRet == 'Anvils and Top Knives') { echo('<option value="Anvils and Top Knives" selected>Anvils and Top Knives</option>') ;} else { echo('<option value="Anvils and Top Knives">Anvils and Top Knives</option>') ;}
					?>
					
					</select></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Trim Removal Type:</td>
					<td class="selection"><select name="trim">
					<?php
					if($trimRet == 'Winder') { echo('<option value="Winder" selected>Winder</option>') ;} else { echo('<option value="Winder">Winder</option>') ;}
					if($trimRet == 'Blower') { echo('<option value="Blower" selected>Blower</option>') ;} else { echo('<option value="Blower">Blower</option>') ;}
					?>
					</select></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Spreader Roller:</td>
					<td class="selection"><select name="spreaderRoller">
					<?php
					if($spreaderRollerRet == 'Yes') { echo('<option value="Yes" selected>Yes</option>') ;} else { echo('<option value="Yes">Yes</option>') ;}
					if($spreaderRollerRet == 'No') { echo('<option value="No" selected>No</option>') ;} else { echo('<option value="No">No</option>') ;}
					if($spreaderRollerRet == 'Optional') { echo('<option value="Optional" selected>Optional</option>') ;} else { echo('<option value="Optional">Optional</option>');}
					?>
					</select><input type="text" class="text" name="spreaderPrice" placeholder="Otional Price" value="<?php echo($spreaderPriceRet) ; ?>"/></td>
	
				</tr>

			
			</table>
			
			<table>
			
				<h4>Rewind/Finish Rolls</h4>
				
				<tr>
				
					<td class="desc">Rewind Type:</td>
					<td class="selection"><select name="rewindType">
					<?php
					if($rewindTypeRet == 'Duplex') { echo('<option value="Duplex" selected>Duplex</option>') ;} else { echo('<option value="Duplex">Duplex</option>') ;}
					if($rewindTypeRet == 'Turret') { echo('<option value="Turret" selected>Turret</option>') ;} else { echo('<option value="Turret">Turret</option>') ;}
					?>
					</select></td>
	
				</tr>
			
				<tr>
				
					<td class="desc">Shaft Type:</td>
					<td class="selection"><select name="shaftType">
					<?php
					if($shaftTypeRet == 'Differential') { echo('<option value="Differential" selected>Differential</option>') ;} else { echo('<option value="Differential">Differential</option>') ;}
					if($shaftTypeRet == 'Air') { echo('<option value="Air" selected>Air</option>') ;} else { echo('<option value="Air">Air</option>') ;}
					?>
					
					</select></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">ComputaCore:</td>
					<td class="selection"><select name="computacore">
					<?php
					if($computacoreRet == 'Yes') { echo('<option value="Yes" selected>Yes</option>') ;} else { echo('<option value="Yes">Yes</option>') ;}
					if($computacoreRet == 'No') { echo('<option value="No" selected>No</option>') ;} else { echo('<option value="No">No</option>') ;}
					if($computacoreRet == 'Optional') { echo('<option value="Optional" selected>Optional</option>') ;} else { echo('<option value="Optional">Optional</option>');}
					?>
					</select><input type="text" class="text" name="computaCorePrice" placeholder="Optional Price"  value="<?php echo($computaCorePriceRet) ; ?>"/></td>

				</tr>
				<tr>
				
					<td class="desc">Lay-on Rollers:</td>
					<td class="selection"><select name="layonRollers">
					<?php
					if($layonRollersRetRet == 'Yes') { echo('<option value="Yes" selected>Yes</option>') ;} else { echo('<option value="Yes">Yes</option>') ;}
					if($layonRollersRetRet == 'No') { echo('<option value="No" selected>No</option>') ;} else { echo('<option value="No">No</option>') ;}
					?>
					</select></td>
	
				</tr>

				<tr>
				
					<td class="desc">Maximum Roll Diameter:</td>
					<td class="selection"><input type="text" class="text" name="maxRewindRollDia" value="<?php echo($maxRewindRollDiaRet) ; ?>" /></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Maximum Roll Weight (Per Shaft):</td>
					<td class="selection"><input type="text" class="text" name="maxRewindRollWeight" value="<?php echo($maxRewindRollWeightRet) ; ?>" /></td>
	
				</tr>
				
								
				<tr>

					<td class="desc">Anti-static Systems:</td>
					<td class="selection"><select name="antiStatic">
					<?php
					if($antiStaticRet == 'Yes') { echo('<option value="Yes" selected>Yes</option>') ;} else { echo('<option value="Yes">Yes</option>') ;}
					if($antiStaticRet == 'No') { echo('<option value="No" selected>No</option>') ;} else { echo('<option value="No">No</option>') ;}
					if($antiStaticRet == 'Optional') { echo('<option value="Optional" selected>Optional</option>') ;} else { echo('<option value="Optional">Optional</option>');}
					?>
					</select><input type="text" class="text" name="antiStaticPrice" placeholder="Optional Price" value="<?php echo($antiStaticPriceRet) ; ?>"/></td>
				</tr>
				
				<tr>
				
					<td class="desc">Maximum Machine Speed:</td>
					<td class="selection"><select name="maxMachineSpeed">
					<?php
					if($maxMachineSpeedRet == '600m/Minute') { echo('<option value="600m/Minute" selected>600m/Minute</option>') ;} else { echo('<option value="600m/Minute">600m/Minute</option>') ;}
					if($maxMachineSpeedRet == '450m/Minute') { echo('<option value="450m/Minute" selected>450m/Minute</option>') ;} else { echo('<option value="450m/Minute">450m/Minute</option>') ;}
					if($maxMachineSpeedRet == '300m/Minute') { echo('<option value="300m/Minute" selected>300m/Minute</option>') ;} else { echo('<option value="300m/Minute">300m/Minute</option>');}
					?>
					
					
					
					</select></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Tension Range:</td>
					<td class="selection"><input type="text" class="text" name="rewindTensionRange"  value="<?php echo($rewindTensionRangeRet) ; ?>"/></td>
	
				</tr>
				
								<tr>
				
					<td class="desc">Offload Pusher:</td>
					<td class="selection"><select name="offloadPusher">
					<?php
					if($offloadPusherRet == 'Yes') { echo('<option value="Yes" selected>Yes</option>') ;} else { echo('<option value="Yes">Yes</option>') ;}
					if($offloadPusherRet == 'No') { echo('<option value="No" selected>No</option>') ;} else { echo('<option value="No">No</option>') ;}
					if($offloadPusherRet == 'Optional') { echo('<option value="Optional" selected>Optional</option>') ;} else { echo('<option value="Optional">Optional</option>');}
					?>
					</select><input type="text" class="text" name="offloadPrice" placeholder="Optional Price" value="<?php echo($offloadPriceRet) ; ?>"/></td>
				</tr>

				<tr>
				
					<td class="desc">Onward Handling:</td>
					<td class="selection"><select name="onwards">
					<?php
					if($onwardsRet == 'Trolley') { echo('<option value="Trolley" selected>Trolley</option>') ;} else { echo('<option value="Trolley">Trolley</option>') ;}
					if($onwardsRet == 'Unloading Tree') { echo('<option value="Unloading Tree" selected>Unloading Tree</option>') ;} else { echo('<option value="Unloading Tree">Unloading Tree</option>') ;}
					if($onwardsRet == 'Robot') { echo('<option value="Robot" selected>Robot</option>') ;} else { echo('<option value="Robot">Robot</option>');}
					?>
					<option value="Trolley"> Trolley</option><option value="Unloading Tree">Unloading Tree</option><option value="Robot">Robot</option></select></td>
	
				</tr>
				<tr>
				
					<td class="desc">Camera Systems:</td>
					<td class="selection"><select name="cameras">
					<?php
					if($camerasRet == 'Yes') { echo('<option value="Yes">Yes</option>') ;} else { echo('<option value="Yes">Yes</option>') ;}
					if($camerasRet == 'No') { echo('<option value="No">No</option>') ;} else { echo('<option value="No">No</option>') ;}
					if($camerasRet == 'Optional') { echo('<option value="Optional">Optional</option>') ;} else { echo('<option value="Optional">Optional</option>');}
					?>
					</select><input type="text" class="text" name="cameraPrice" placeholder="Optional Price" value="<?php echo($cameraPriceRet) ; ?>"/></td>
				</tr>
				

				<tr>
				
					<td class="desc">Core Material:</td>
					<td class="selection"><input type="text" class="text" name="rewindCoreMaterial"  value="<?php echo($rewindCoreMaterialRet) ; ?>"/></td>
	
				</tr>
				
				<tr>
				
					<td class="desc">Core Size:</td>
					<td class="selection"><select name="rewindCoreSize">
					<?php
					if($rewindCoreSizeRet == '76.2mm (3 Inch)') { echo('<option selected value="76.2mm (3 Inch)">76.2mm (3 Inch)</option>') ;} else { echo('<option value="76.2mm (3 Inch)">76.2mm (3 Inch)</option>') ;}
					if($rewindCoreSizeRet == '152.4mm (6 Inch)') { echo('<option value="152.4mm (6 Inch)" selected>152.4mm (6 Inch)</option>') ;} else { echo('<option value="152.4mm (6 Inch)">152.4mm (6 Inch)</option>') ;}
					if($rewindCoreSizeRet == '72.6mm & 152.4mm (3 & 6 Inch)') { echo('<option value="72.6mm & 152.4mm (3 & 6 Inch)" selected>72.6mm & 152.4mm (3 & 6 Inch)</option>') ;} else { echo('<option value="72.6mm & 152.4mm (3 & 6 Inch)">72.6mm & 152.4mm (3 & 6 Inch)</option>');}
					?>
	
				</tr>
	
			</table>
		
			<hr/>
			
			<input type="submit" value="Get Quote" />

			<input type="reset" value="Clear Form" />			
			
		</form>
	
	</body>
	
</html>