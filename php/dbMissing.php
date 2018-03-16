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
	
	$user_id = "5";
	$submission_id = isset($_POST['submission_id']) ? $_POST['submission_id'] : '';
	$photo = isset($_POST['photoof']) ? $_POST['photoof'] : '';
	$first_name = isset($_POST['nameof']) ? $_POST['nameof'][0] : '';
	$middle_name = isset($_POST['nameof']) ? $_POST['nameof'][1] : '';
	$last_name = isset($_POST['nameof']) ? $_POST['nameof'][2] : '';
	$address = isset($_POST['address5']) ? $_POST['address5'][0].", ".$_POST['address5'][1].", ".$_POST['address5'][2] : '';
	$marital_status = isset($_POST['maritalstatus']) ? $_POST['maritalstatus'] : '';
	$sex = isset($_POST['sex']) ? $_POST['sex'] : '';
	$birthdate = isset($_POST['dateof']) ? $_POST['dateof'][0]."/".$_POST['dateof'][1]."/".$_POST['dateof'][2] : '';
	$age = isset($_POST['age']) ? $_POST['age'] : '';
	$occupation = isset($_POST['occupation']) ? $_POST['occupation'] : '';
	$date_of_disappearance = isset($_POST['dateof15']) ? $_POST['dateof15'][0]."/".$_POST['dateof15'][1]."/".$_POST['dateof15'][2] : '';
	$time_of_disappearance = isset($_POST['dateof15']) ? $_POST['dateof15'][3].":".$_POST['dateof15'][4]." ".$_POST['dateof15'][5] : '';
	$last_seen = isset($_POST['wherewas']) ? $_POST['wherewas'] : '';
	$relationship_with_person = isset($_POST['relationshipwith']) ? $_POST['relationshipwith'] : '';
	$height = isset($_POST['height']) ? $_POST['height'] : '';
	$weight = isset($_POST['height']) ? $_POST['weight26'] : '';
	$eye_color = isset($_POST['eyecolor']) ? $_POST['eyecolor'] : '';
	$hair_length = isset($_POST['length']) ? $_POST['length'] : '';
	$hair_color = isset($_POST['color']) ? $_POST['color'] : '';
	$facial_hair = isset($_POST['type']) ? $_POST['type'] : '';
	$facial_hair_color = isset($_POST['color32']) ? $_POST['color32'] : '';
	$facial_hair_length = isset($_POST['length33']) ? $_POST['length33'] : '';
	$ear_shape = isset($_POST['shapeof']) ? $_POST['shapeof'] : '';
	$eyebrows_size = isset($_POST['eyebrows69']) ? $_POST['eyebrows69'] : '';
	$nose_size = isset($_POST['nose70']) ? $_POST['nose70'] : '';
	$hand_size = isset($_POST['hands71']) ? $_POST['hands71'] : '';
	$feet_size = isset($_POST['feet72']) ? $_POST['feet72'] : '';
	$distinguishing_features = isset($_POST['features']) ? implode("; ", $features['features']) : ''; 
	$scar_location = isset($_POST['scars']) ? implode("; ", $scars['scars']) : '';
	$tattoo_location = isset($_POST['whereis55']) ? implode("; ", $_POST['whereis55']) : '';
	$birthmark_location = isset($_POST['whereis56']) ? implode("; ", $_POST['whereis56']) : '';
	$mole_location = isset($_POST['whereis65']) ? implode("; ", $_POST['whereis65']) : '';
	$upper_garment = isset($_POST['uppergarment66']) ? $_POST['uppergarment66'] : '';
	$upper_garment_color = isset($_POST['uppergarment']) ? $_POST['uppergarment'] : '';
	$lower_garment = isset($_POST['lowergarment']) ? $_POST['lowergarment'] : '';
	$lower_garment_color = isset($_POST['lowergarment74']) ? $_POST['lowergarment74'] : '';
	$footwear = isset($_POST['footwearworn']) ? $_POST['footwearworn'] : '';
	$eyewear = isset($_POST['eyewear75']) ? $_POST['eyewear75'] : '';
	$glasses_color = isset($_POST['glassescolor76']) ? $_POST['glassescolor76'] : '';
	$contact_lens_color = isset($_POST['contactlens']) ? $_POST['contactlens'] : '';
	
	
	
	//db connection
	$db_host = 'localhost';
	$db_username = 'root';
	$db_password = '';
	$db_name = 'afterlife';
	$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die(mysqli_error());
	//search submission ID
	$query = "SELECT * FROM missing_people WHERE submission_id = '$submission_id'";
	$sqlsearch = mysqli_query($db_connect, $query);
	$resultcount = mysqli_num_rows($sqlsearch);
	
	if($resultcount > 0){
		mysqli_query($db_connect, "UPDATE missing_people SET
					user_id = '$user_id',
					photo = '$photo',
					first_name = '$first_name',
					middle_name = '$middle_name',
					last_name = '$last_name',
					address = '$address',
					marital_status = '$marital_status',
					sex = '$sex',
					birthdate = '$birthdate',
					age = '$age',
					occupation = '$occupation',
					date_of_disappearance = '$date_of_disappearance',
					time_of_disappearance = '$time_of_disappearance',
					last_seen = '$last_seen',
					relationship_with_person = 'relationship_with_person',
					height = '$height',
					weight = '$weight',
					eye_color = '$eye_color',
					hair_length = '$hair_length',
					hair_color = '$hair_color',
					facial_hair = '$facial_hair',
					facial_hair_color = '$facial_hair_color',
					facial_hair_length = '$facial_hair_length',
					ear_shape = '$ear_shape',
					eyebrows_size = '$eyebrows_size',
					nose_size = '$nose_size',
					hand_size = '$hand_size',
					feet_size = '$feet_size',
					distinguishing_features = '$distinguishing_features',
					scar_location = '$scar_location',
					tattoo_location = '$tattoo_location',
					birthmark_location = '$birthmark_location',
					mole_location = '$mole_location',
					upper_garment = '$upper_garment',
					upper_garment_color = '$upper_garment_color',
					lower_garment = '$lower_garment',
					lower_garment_color = '$lower_garment_color',
					footwear = '$footwear',
					eyewear = '$eyewear',
					glasses_color = '$glasses_color',
					contact_lens_color = '$contact_lens_color'")
		or die(mysqli_error($db_connect));
	}else{
		mysqli_query($db_connect, "INSERT INTO missing_people 
					(user_id, submission_id, photo, first_name, middle_name, last_name, address, marital_status, sex, birthdate,
					occupation, date_of_disappearance, time_of_disappearance, last_seen, relationship_with_person, height,
					weight, eye_color, hair_length, hair_color, facial_hair, facial_hair_color, facial_hair_length,
					ear_shape, eyebrows_size, nose_size, hand_size, feet_size, distinguishing_features, scar_location,
					tattoo_location, birthmark_location, mole_location, upper_garment, upper_garment_color, lower_garment,
					lower_garment_color, footwear, eyewear, glasses_color, contact_lens_color)
					VALUES
					('$user_id', '$submission_id', '$photo', '$first_name', '$middle_name', '$last_name', '$address', '$marital_status', '$sex', '$birthdate',
					'$occupation', '$date_of_disappearance', '$time_of_disappearance', '$last_seen', '$relationship_with_person', '$height',
					'$weight', '$eye_color', '$hair_length', '$hair_color', '$facial_hair', '$facial_hair_color', '$facial_hair_length',
					'$ear_shape', '$eyebrows_size', '$nose_size', '$hand_size', '$feet_size', '$distinguishing_features', '$scar_location',
					'$tattoo_location', '$birthmark_location', '$mole_location', '$upper_garment', '$upper_garment_color', '$lower_garment',
					'$lower_garment_color', '$footwear', '$eyewear', '$glasses_color', '$contact_lens_color')")
		or die(mysqli_error($db_connect));
	}
?>