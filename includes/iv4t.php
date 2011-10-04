<?php 
//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

require_once 'UUID.php';
require_once 'lilurl.php';
if(UUID::is_valid($_POST['uuid'])){
	$fullURL = IV4T_prepend . $_POST['uuid'];
	
	$lilurl = new lilURL();
	
	if($lilurl->add_url($fullURL)){
		if ( REWRITE ) { // mod_rewrite style link
			$url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF']).'/'.$lilurl->get_id($fullURL);
		} else { // regular GET style link
			$url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'].'?id='.$lilurl->get_id($fullURL);
		}
		echo $url;
	} else {
		echo 'Creation of short URL has failed for some reason.';
	}
} else {
	echo 'Invalid UUID provided.';
}
?>