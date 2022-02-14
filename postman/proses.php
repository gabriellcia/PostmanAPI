<?php
$url = 'http://localhost/postman/api/index.php';
$ch = curl_init($url);
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$data = array(
'username' => $nama,
'nim' => $nim
);

$payload = json_encode(array("dataku" => $data));
//var_dump($payload);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
echo $result;
curl_close($ch);
?>