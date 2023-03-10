<?php 
include "function.php";

if(isset($_POST['kirim'])){
    $nama_tugas = $_POST['task'];
    $deadline = $_POST['deadline'];

    tambahData($nama_tugas,$deadline);

    header("location: index.php");
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    hapusData($id);
    header("location: index.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do List</title>
    <link rel="shortcut icon" href="asset/main3.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="home" class="homepage">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-evenly">

                <div class="col-lg-7 col-md-12 col-sm-12 back mt-5">
                    <img src="asset/main.png" alt="" width="80%" class="img ">
                    <img src="asset/main2.png" alt="" class="img">
                    <img src="asset/main3.png" alt="" class="img ">
                </div>

                <form class=" p-4 col-lg-5 col-md-12 col-sm-12 mt-5" method="POST" action="">
                    <h1 class=" fw-bold img text-light">To Do List</h1>
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label text-light">Task</label>
                        <input type="text" name="task" class="form-control" id="exampleInputEmail1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-light">Deadline</label>
                        <input type="date" name="deadline" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <button name="kirim" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <section id="main" class="maincontent">
        <!-- table data start -->
        <div class="container-sm card  col-md-8 mt-5">
            <div class="card-body">
                <!-- table bootstrap -->
                <table class=" table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">Tudo</th>
                            <th scope="col">deadline</th>
                            <th scope="col">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- data tabel start -->
                        <?php 
                        
                        ?>

                        <?php 
                        $i=1;
                        foreach ( ambilData() as $data ) {
                            ?>
                        <tr>
                            <td>
                                <?php echo($i) ?>
                            </td>
                            <td>
                                <?php echo($data['nama_tugas'])   ?>
                            </td>
                            <td>
                                <?php echo date("d F Y", strtotime($data['deadline']))  ?>
                            </td>
                            <td>
                                <a href="edit.php?id=<?php echo $data['id_tugas'] ?>" type="button"
                                    class="btn btn-primary">Edit</a>
                                <a href="?id=<?php echo $data['id_tugas'] ?>"
                                    onclick="return confirm('Are You Sure to delete this task?')" type="button"
                                    class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        <?php };?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- table data end -->
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>