<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    ?>
    <div class="container">
        <form action="terima-edit.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
            <?php
                
                $query = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE id='$id'");
                while($data = mysqli_fetch_array($query))
                {
            ?>
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?php echo $data['name'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">NIM</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nim" value="<?php echo $data['nim'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Kelas</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="kelas" value="<?php echo $data['kelas'] ?>">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Gender</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="gender" value="<?php echo $data['gender'] ?>">
            </div>
            <?php
                }
            ?>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>