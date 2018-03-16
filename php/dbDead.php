<p style="text-align: center;"><img src="https://cdn.jotfor.ms/img/check-icon.png" alt="" width="128" height="128" /></p>
<div style="text-align: center;">
<h1 style="text-align: center;">Thank You!</h1>
<p style="text-align: center;">Your submission has been received.</p>
</div>

<?php
function ExtendedAddSlash(&$params){
	foreach($params as &$var){
		//check if $var is an array, if yes it will start another ExtendedAddSlash() function to loop to each key inside
		is_array($var) ? ExtendedAddSlash($var) : $var=addslashes($var);
	}
}

	ExtendedAddSlash($_POST);
	$user_id = '5';
	$submission_id = isset($_POST['submission_id']) ? $_POST['submission_id'] : '';
	$general_condition = isset($_POST['generalcondition']) ? $_POST['generalcondition'] : '';
	$body_part = isset($_POST['bodypart21']) ? $_POST['bodypart21'] : '';
	$body_condition = isset($_POST['bodycondition']) ? $_POST['bodycondition'] : '';
	$apparent_sex = isset($_POST['apparentsex']) ? $_POST['apparentsex'] : '';
	$age_group = isset($_POST['agegroup']) ? $_POST['agegroup'] : '';
	$height = isset($_POST['height']) ? $_POST['height'] : '';
	$weight = isset($_POST['weight']) ? $_POST['weight'] : '';
	$hair_length = isset($_POST['length']) ? $_POST['length'] : '';
	$hair_color = isset($_POST['color']) ? $_POST['color'] : '';
	$facial_hair_type = isset($_POST['type']) ? $_POST['type'] : '';
	$facial_hair_length = isset($_POST['length17']) ? $_POST['length17'] : '';
	$facial_hair_color = isset($_POST['color18']) ? $_POST['color18'] : '';
	$distinguishing_features = isset($_POST['selectall']) ? implode("; ", $_POST['selectall']) : '';
	$scar_location = isset($_POST['whereis']) ? implode("; ", $_POST['whereis']) : '';
	$tattoo_location = isset($_POST['whereis23']) ? implode("; ", $_POST['whereis23']) : '';
	$birthmark_location = isset($_POST['whereis24']) ? implode("; ", $_POST['whereis24']) : '';
	$mole_location = isset($_POST['whereis25']) ? implode("; ", $_POST['whereis25']) : '';
	$upper_garment = isset($_POST['uppergarment']) ? $_POST['uppergarment'] : '';
	$upper_garment_color = isset($_POST['uppergarment29']) ? $_POST['uppergarment29'] : '';
	$lower_garment = isset($_POST['lowergarment']) ? $_POST['lowergarment'] : '';
	$lower_garment_color = isset($_POST['lowergarment31']) ? $_POST['lowergarment31'] : '';
	$footwear = isset($_POST['footwear']) ? $_POST['footwear'] : '';
	$eyewear = isset($_POST['eyewear']) ? $_POST['eyewear'] : '';
	$glasses_color = isset($_POST['glassescolor']) ? $_POST['glassescolor'] : '';
	$contact_lens_color = isset($_POST['contactlens']) ? $_POST['contactlens'] : '';
	$photo = isset($_POST['uploada42']) ? $_POST['uploada42'] : $_POST['takea'];
	
	
	//db connection
	$db_host = 'localhost';
	$db_username = 'root';
	$db_password = '';
	$db_name = 'afterlife';
	$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die(mysqli_error());
	//search submission ID
	$query = "SELECT * FROM dead_people WHERE submission_id = '$submission_id'";
	$sqlsearch = mysqli_query($db_connect, $query);
	$resultcount = mysqli_num_rows($sqlsearch);
	
	if($resultcount > 0){
		#mysqli_query($db_connect, "SET FOREIGN_KEY_CHECKS = 0");
		mysqli_query($db_connect, "UPDATE dead_people SET
					user_id = '$user_id',
					general_condition = '$general_condition',
					body_part_found = '$body_part',
					body_condition = '$body_condition',
					apparent_sex = '$apparent_sex',
					age_group = '$age_group',
					height = '$height',
					weight = '$weight',
					hair_length = '$hair_length',
					hair_color = '$hair_color',
					facial_hair_type = '$facial_hair_type',
					facial_hair_length = '$facial_hair_length',
					facial_hair_color = '$facial_hair_color',
					distinguishing_features = '$distinguishing_features',
					scar_location = '$scar_location',
					tattoo_location = '$tattoo_location',
					birthmark_location = '$birthmark_location',
					mole_location = '$mole_location',
					upper_garment = '$upper_garment',
					upper_garment_color '$upper_garment_color',
					lower_garment = '$lower_garment',
					lower_garment_color = '$lower_garment_color',
					footwear = '$footwear',
					eyewear = '$eyewear',
					glasses_color = '$glasses_color',
					contact_lens_color = '$contact_lens_color',
					photo = '$photo'")
		or die(mysqli_error($db_connect));
		#mysqli_query($db_connect, "SET FOREIGN_KEY_CHECKS = 1");
	}else{
		#mysqli_query($db_connect, "SET FOREIGN_KEY_CHECKS = 0");
		mysqli_query($db_connect, "INSERT INTO dead_people
					(user_id, submission_id, general_condition, body_part_found, body_condition, apparent_sex, age_group, height, weight, hair_length,
					hair_color, facial_hair_type, facial_hair_length, facial_hair_color, distinguishing_features, scar_location, tattoo_location,
					birthmark_location, mole_location, upper_garment, upper_garment_color, lower_garment, lower_garment_color, footwear, eyewear,
					glasses_color, contact_lens_color, photo)
					VALUES
					('$user_id', '$submission_id', '$general_condition', '$body_part', '$body_condition', '$apparent_sex', '$age_group', '$height', 
					'$weight', '$hair_length', '$hair_color', '$facial_hair_type', '$facial_hair_length', '$facial_hair_color', '$distinguishing_features',
					'$scar_location', '$tattoo_location', '$birthmark_location', '$mole_location', '$upper_garment', '$upper_garment_color', '$lower_garment',
					'$lower_garment_color', '$footwear', '$eyewear', '$glasses_color', '$contact_lens_color', '$photo')")
		or die(mysqli_error($db_connect));
		#mysqli_query($db_connect, "SET FOREIGN_KEY_CHECKS = 1");
	}
?>