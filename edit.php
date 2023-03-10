<?php 
include "function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = ambil1Data($id)->fetch();
} else {
    header("location: index.php");
}

if (isset($_POST['kirim'])) {
    $tugas = $_POST['tugas'];
    $deadline = $_POST['deadline'];

    editData($data['id_tugas'], $tugas, $deadline);

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
                <form class=" p-4 col-lg-8 col-md-12 col-sm-12 mt-3" method="POST" action="">
                    <h1 class=" fw-bold img text-light">To Do List</h1>
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label text-light">Task</label>
                        <input type="text" name="tugas" class="form-control" id="tugas" value="<?php echo $data['nama_tugas'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-light">Deadline</label>
                        <input type="date" name="deadline" class="form-control" id="deadline" value="<?php echo $data['deadline'] ?>" required>
                    </div>
                    <button name="kirim" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>