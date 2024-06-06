<?php
require "config.php";
//Cek apakah ada parameter 'catid ' atau tidak
if (!isset($_GET['catid'])) {
    exit();
}
//Ambil kata bhs ing dan bhs sunda dari tabel word berdasarkan catid
$result = mysqli_query($conn, "SELECT id, label, sunda FROM word
WHERE cat_id=" . $_GET['catid']);
//Inisasi variabel array
$dbdata = array();
//ambil record dari tabel dan masukkan ke dalam variabel array $dbdata satu persatu
while ($row = mysqli_fetch_assoc($result)) {
    $dbdata[]=$row;
}
//Tampilkan array dalam JSON format
echo json_encode($dbdata);
?>