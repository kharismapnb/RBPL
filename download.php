<?php
session_start(); if(empty($_SESSION['username']))
{
header("location:login.php?pesan=belum_login");
}

include 'connect.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT suratpernyataan FROM worker WHERE id = $id";
    $result = $konek->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        header("Content-Description: File Transfer");
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"" . $data['suratpernyataan'] . "\"");
        header("Content-Transfer-Encoding: binary");
        header("Expires: 0");
        header("Cache-Control: must-revalidate");
        header("Pragma: public");
        header("Content-Length: " . strlen($data['suratpernyataan']));
        echo $data['suratpernyataan'];
        exit;
    } else {
        echo "File tidak ditemukan";
    }
} else {
    echo "Tidak ada file yang ditentukan";
}

$konek->close();

?>
