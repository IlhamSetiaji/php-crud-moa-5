<?php
error_reporting(0);
extract($_POST);
if($dp < $hargaMotor * 20 / 100)
{
    echo "DP Anda Kurang";
}
$terhutang = $hargaMotor - $dp;
$besarBunga = $terhutang * $bunga;
switch($bulan)
{
    case "12" :
        $cicilan = ($terhutang/12) + $besarBunga;
        break;
    case "24" :
        $cicilan = ($terhutang/24) + $besarBunga;
        break;
    case "36" :
        $cicilan = ($terhutang/36) + $besarBunga;
        break;
    default :
        $cicilan = 0;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Motor</title>
</head>

<body>
    <div class="container">
        <h1>Penghitungan Biaya Motor</h1>
        <br>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Harga Motor</label>
                <input type="number" min='0' class="form-control" id="exampleFormControlInput1" name="hargaMotor">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Bayar Awal</label>
                <input type="number" min='0' class="form-control" id="exampleFormControlInput1" name="dp">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Lama Nyicil</label>
                <select class="form-control" id="exampleFormControlSelect1" name="bulan">
                    <option value="12">12</option>
                    <option value="24">24</option>
                    <option value="36">36</option>
                </select>
            </div>
            <input type="hidden" name="bunga" value="0.03">
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
        <br>
        <div class="form-group">
            <label for="exampleFormControlInput1">Terhutang</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo number_format($terhutang) ?>"  readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Besar Bunga</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo number_format($besarBunga) ?>"  readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Cicilan</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo number_format($cicilan) ?>"  readonly>
        </div>
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