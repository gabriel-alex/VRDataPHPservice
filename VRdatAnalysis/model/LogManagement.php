<?php
//**** include the php file that contain the 2 method connexion and deconnexion to the database with the login password ...
require('model.php');
// creatye the connexion to the database
$conn=connexion();

if(! $conn){
	echo("connection fail\n");
	die("Connection failed!".msqli_connect_error());
}else  {



	$pX =0;
	$pY =0;
	$pZ =0;
	$rX =0;
	$rY =0;
	$rZ =0;
	$comm = NULL;
	$username = "default";

	//*** get the data send by Unity through the WWWform method *********
	$pX =floatval($_POST['px']);
	$pY =floatval($_POST['py']);
	$pZ =floatval($_POST['pz']);
	$rX =floatval($_POST['rx']);
	$rY =floatval($_POST['ry']);
	$rZ =floatval($_POST['rz']);
	if(isset($_POST['comment'])) { $comm = $_POST['comment']; }
	$username = $_POST['user_id'];



	$stmt = $conn->prepare("INSERT INTO msf_data_test (pos_x,pos_y,pos_z,rot_x,rot_y,rot_z,comment, username) VALUES (?,?,?,?,?,?,?,?)");
	$stmt->bind_param('ddddddss',$pX,$pY,$pZ, $rX,$rY,$rZ, $comm, $username);
	$stmt->execute();

}
deconnexion($conn); // close the connexion to the database
?>
