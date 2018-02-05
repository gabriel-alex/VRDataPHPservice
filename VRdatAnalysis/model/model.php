<?php
//Conexion to a bd
function connexion (){
	$link = mysqli_connect("localhost", "root", "") or die('Error connecting to server');
	mysqli_select_db($link, "vranalytics");
	//$tildes = $link->query("SET NAMES 'utf8'");
	return $link;
}

function getUsers(){
	try{
	$bdd = connexion();
	$sql = "SELECT username FROM msf_data_test ORDER BY username ASC";
	$result = mysqli_query($bdd, $sql);
	//$users = $bdd->prepare("SELECT username FROM msf_data_test ORDER BY username ASC");
	//$users->execute();
	//$results = $users->fetch_assoc();
	deconnexion($bdd);
	return mysqli_fetch_assoc($result);
	}
	catch(PDOStatement $e){
		deconnexion($bdd);
	}
}

function createJSONfile($user){
	$bdd = connexion();
	$table = array();
	// first define the name of the data and the type
	$table['cols']= array(
		//array('id'=>'C', 'label'=>'time','pattern'=> '', 'type'=>'datetime'),
		array('id'=>'A', 'label'=>'x','pattern'=> '', 'type'=>'number'),
		array('id'=>'B', 'label'=>'z','pattern'=> '', 'type'=>'number')
	);

	$rows = array();
	if(strcmp($user, "all") !=0){
		$sql ="SELECT pos_x,pos_z FROM msf_data_test WHERE username = ? ";
		$stmt = mysqli_stmt_init($bdd);
		mysqli_stmt_prepare($stmt, $sql);
		mysqli_stmt_bind_param($stmt, "s", $user);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
	}	else{
		$sql ="SELECT pos_x,pos_z FROM msf_data_test";
		$result = mysqli_query($bdd,$sql);
	}

	if (mysqli_num_rows($result)>0  ){
		while($row = mysqli_fetch_assoc($result)){
			$temp = array();
			//$temp[]=array('v'=> (float) $row['timestp']);
			$temp[]=array('v'=> (float) $row['pos_x']);
			$temp[] = array('v'=> (float) $row['pos_z']);
			$rows[] =array('c'=>$temp);
		}
	}
	$table['rows'] = $rows;

	$jsonTable = json_encode($table);

	/*header('cache-Control: no-cache, must-revalidate');
	header('Content-type: application/json');*/
	//echo $jsonTable;
	file_put_contents('model/data.json', $jsonTable);
	deconnexion($bdd);
}

// deconnect from the bdd pointed by $link
function deconnexion($link){
	mysqli_close($link);
}
