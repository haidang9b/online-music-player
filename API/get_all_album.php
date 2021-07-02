<?php
	require_once 'connection.php';

	$sql = "SELECT album.idAlbum,album.tenAlbum,nghesi.tenNS,album.HinhAlbum FROM album INNER JOIN nghesi ON album.idCasi = nghesi.idnghesi";
	$data = mysqli_query($conn,$sql);
	class Album{
		function Album($IDalbum, $TenAlbum, $TenNS,$haAB){
			$this->idAlbum = $IDalbum;
			$this->tenAlbum = $TenAlbum;
			$this->tenNS = $TenNS;
			$this->HinhAlbum = $haAB;
		}
	}
	$list_album = array();
	while ($row=mysqli_fetch_assoc($data)) {
		array_push($list_album, new Album($row['idAlbum'],
										$row['tenAlbum'],
										$row['tenNS'],
										$row['HinhAlbum']
										));
	}
	echo json_encode($list_album);

?>