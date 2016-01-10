<?php 
	$db = null;
	$config['debug'] = true;
	try{
		$db = new PDO("mysql:host=mysql.idhostinger.com;dbname=u583986799_sehat", "u583986799_sehat", "h4g4t4doniozan");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e){
		echo $e->getMessage();
	}
?>