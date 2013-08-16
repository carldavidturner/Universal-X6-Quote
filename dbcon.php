<?php

	// Create connection
	$con=mysqli_connect("db485298283.db.1and1.com","dbo485298283","DaeIBIBRK2X39Tx","db485298283");

	// Check connection
	if (mysqli_connect_errno($con))
  		{
 		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}



$sql = 'INSERT INTO `x6_quote_data` (`quote_number`, `company_name`, `company_country`, `attention_of`, `final_price`, `price_text`, `region`, `shafted_shaftless`, `seperate_integral`, `driven_braked`, `unwind_max_width`, `unwind_max_diameter`, `unwind_min_web_width`, `unwind_min_roll_diameter`, `unwind_max_roll_weight`, `roll_material`, `material_thickness`, `web_guiding`, `web_guiding_price`, `peel_off_roller`, `unwind_tension_range`, `splice_table`, `splice_price`, `unwind_core_material`, `unwind_core_size`, `drive_type`, `shear_cutting`, `shear_knives`, `shear_anvils`, `razor_cutting`, `razor_knives`, `crush_cutting`, `crush_knives`, `min_slit_width`, `auto_knife_positioning`, `trim_removal`, `spreader_roller`, `spreader_roller_price`, `rewind_type`, `shaft_type`, `computacore`, `computacore_price`, `layon_rollers`, `rewind_max_roll_diameter`, `rewind_max_roll_weight`, `anti_static`, `anti_static_price`, `max_machine_speed`, `rewind_tension_range`, `offload_pusher`, `offload_pusher_price`, `onward_handling`, `camera_system`, `camera_system_price`, `rewind_core_material`, `rewind_core_size`) VALUES ("'.$quoteNumber.'", "'.$companyName.'", "'.$companyCountry.'", "'.$attentionOf.'", "'.$finalPrice.'", "'.$priceAdditionalInfo.'", "'.$region.'", "'.$shaftedShaftless.'", "'.$seperateIntegral.'", "'.$drivenBraked.'", "'.$maxUnwindRollWidth.'", "'.$maxUnwindRollDia.'", "'.$minUnwindWebWidth.'", "'.$minDiaFloorPickup.'", "'.$maxUnwindRollWeight.'", "'.$rollMaterial.'", "'.$materialThickness.'", "'.$webGuiding.'", "'.$guidingPrice.'", "'.$peelOff.'", "'.$unwindTensionRange.'", "'.$spliceTable.'", "'.$splicePrice.'", "'.$unwindCoreMaterial.'", "'.$unwindCoreSize.'", "'.$driveType.'", "'.$shearYes.'", "'.$shearKnives.'", "'.$shearAnvils.'", "'.$razorYes.'", "'.$razorKnives.'", "'.$crushYes.'", "'.$crushKnives.'", "'.$minSlitWidth.'", "'.$akp.'", "'.$trim.'", "'.$spreaderRoller.'", "'.$spreaderPrice.'", "'.$rewindType.'", "'.$shaftType.'", "'.$computacore.'", "'.$computaCorePrice.'", "'.$layonRollers.'", "'.$maxRewindRollDia.'", "'.$maxRewindRollWeight.'", "'.$antiStatic.'", "'.$antiStaticPrice.'", "'.$maxMachineSpeed.'", "'.$rewindTensionRange.'", "'.$offloadPusher.'", "'.$offloadPrice.'", "'.$onwards.'", "'.$cameras.'", "'.$cameraPrice.'", "'.$rewindCoreMaterial.'", "'.$rewindCoreSize.'")';



mysqli_query($con,$sql);

mysqli_close($con);



?>