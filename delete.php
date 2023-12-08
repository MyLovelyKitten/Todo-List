<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = "DELETE FROM `tugas_kuliah` WHERE id = $id";
$result = mysqli_query($koneksi, $sql);
if ($result) {
    header("Location: index.php?msg=Record deleted succesfully");
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
