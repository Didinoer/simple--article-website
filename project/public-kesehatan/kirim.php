<?php

$komen = $_POST['komen'];
$nama = $_POST['nama'];
$halaman = $_POST['komentar'];
$postkomentar = fopen('datakomentar/'.$halaman.'.php','a');
fwrite($postkomentar,'<li style="border-style :solid; list-style :none; " > <p>'.$komen.'<p><span> Oleh : <b>'.$nama.'</b>');
fclose($postkomentar);
if($halaman == 'komentar1'){
    header('Location: index1.php');
} elseif ($halaman == 'komentar2') {
    header('Location: index2.php');
} elseif ($halaman == 'komentar3') {
    header('Location: index3.php');
}elseif ($halaman == 'komentar4') {
    header('Location: index4.php');
}
?>