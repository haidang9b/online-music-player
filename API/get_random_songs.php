<?php
	require_once 'connection.php';
	$sql = "SELECT baihat.idbh ,`tenBH`,nghesi.tenNS,`hinhanhBH`,`linkBH` FROM `baihat` INNER JOIN nghesi on baihat.idNS = nghesi.idnghesi ORDER BY rand() LIMIT 15";
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