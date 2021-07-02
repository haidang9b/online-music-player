<?php
	require_once 'connection.php';

	$sql="SELECT `idnghesi`,`tenNS`,`hinhanhNS` FROM `nghesi`";
	$data = mysqli_query($conn,$sql);

	class Nghesi{
		function Nghesi($IDns, $TenNS, $HinhanhNS){
			$this->idnghesi = $IDns;
			$this->tenNS = $TenNS;
			$this->hinhanhNS = $HinhanhNS;
		}
	}
	$list_ns = array();
	while ($row=mysqli_fetch_assoc($data)) {
		array_push($list_ns, new Nghesi($row['idnghesi'],
										$row['tenNS'],
										$row['hinhanhNS']
										));
	}
	echo json_encode($list_ns);
?>