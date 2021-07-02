<?php
	require_once 'connection.php';

	if(!isset($_GET['idquocgia'])){
		die(json_encode(array('status' => false, 'message' => 'Parameters not valid')));
	}
	$idnuoc = $_GET['idquocgia'];
	$sql = "SELECT baihat.idbh ,`tenBH`,nghesi.tenNS,`hinhanhBH`,`linkBH` FROM `baihat` INNER JOIN nghesi on baihat.idNS = nghesi.idnghesi INNER JOIN xephang_baihat ON xephang_baihat.idbaihat = baihat.idbh WHERE idnuoc = $idnuoc";
	$data = mysqli_query($conn,$sql);
	class Baihat{
		function Baihat($IDbh, $Tenbh, $TenNS, $HinhanhBH, $LinkBH){
			$this->idbh = $IDbh;
			$this->tenBH = $Tenbh;
			$this->tenNS = $TenNS;
			$this->hinhanhBH = $HinhanhBH;
			$this->linkBH = $LinkBH;
		}
	}
	$list_song = array();
	while ($row=mysqli_fetch_assoc($data)) {
		array_push($list_song, new Baihat($row['idbh'],
										$row['tenBH'],
										$row['tenNS'],
										$row['hinhanhBH'],
										$row['linkBH']));
	}
	echo json_encode($list_song);
?>