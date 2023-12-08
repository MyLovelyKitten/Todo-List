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
        <?php
        if (isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" 
            role="alert">' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button></div>';
        }
        ?>
        <a href="tambah.php" class="btn btn-light" style="margin-top:5px;">Add New</a>

        <table class="table table-hover text-center" style="margin-top:10px;">
            <thead class="table-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Matakuliah</th>
                    <th scope="col">Tipe Tugas</th>
                    <th scope="col">Deskripsi Tugas</th>
                    <th scope="col">Fungsi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";

                $sql = "SELECT * FROM `tugas_kuliah`";
                $result = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <th>
                            <?php echo $row['id'] ?>
                        </th>
                        <th>
                            <?php echo $row['nama_matakuliah'] ?>
                        </th>
                        <th>
                            <?php echo $row['tipe_tugas'] ?>
                        </th>
                        <th>
                            <?php echo $row['deskripsi_tugas'] ?>
                        </th>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-light">Edit</a>
                            <a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-light" style="margin-left:5px;">Delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
