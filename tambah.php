<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
    $nama_matakuliah = $_POST['nama_matakuliah'];
    $tipe_tugas = $_POST['tipe_tugas'];
    $deskripsi_tugas = $_POST['deskripsi_tugas'];

    $sql = "INSERT INTO `tugas_kuliah` (`id`, `nama_matakuliah`, `tipe_tugas`, `deskripsi_tugas`)
        VALUES (NULL,'$nama_matakuliah','$tipe_tugas','$deskripsi_tugas')";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header("Location: index.php?msg=New record created succesfully");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Todo-List</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light justify-content-center fs-2 mb-1">
        <h2>Todo-List</h2>
    </nav>

    <div class="container">
        <div class="text-center mb-2">
            <h4>Add New Task</h4>
            <p class="text-muted">write down the task</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-2">
                    <label class="form-label" style="margin-left:-10px;">Nama Matakuliah:</label>
                    <input type="text" name="nama_matakuliah" class="form-control" placeholder="Pemrograman Web">
                </div>

                <div class="row mb-2">
                    <label class="form-label" style="margin-left:-10px;">Tipe Tugas:</label>
                    <input type="text" name="tipe_tugas" class="form-control" placeholder="Project">
                </div>

                <div class="row mb-2">
                    <label class="form-label" style="margin-left:-10px;">Deskripsi Tugas:</label>
                    <textarea name="deskripsi_tugas" class="form-control" cols="1" rows="2"></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit" style="margin-left:-10px;">Save</button>
                    <a href="index.php" class="btn btn-danger" style="margin-left:5px;">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
