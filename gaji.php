<?php
error_reporting(0);
extract($_POST);

$gaji = 0;
$pajak = 0;
$tunjanganKlg = 0;
$tunjanganAnak = 0;
switch($golongan)
{
    case 'gol1' :
        $gaji = 1000000;
        $pajak = 0;
    break;
    case 'gol2' :
        $gaji = 2000000;
        $pajak = 2.5;
    break;
    case 'gol3' :
        $gaji = 3000000;
        $pajak = 5;
    break;
    default : $gaji = 0;
}
if($status == 'sudah')
{
    $tunjanganKlg = 200000;
}else
{
    $tunjanganKlg = 0;
}

if($anak >= 3)
{
    $tunjanganAnak = 300000;
}
else{
    $tunjanganAnak = 100000 * $anak;
}

$totalTunjangan = $tunjanganAnak + $tunjanganKlg;
$gajiKotor = $gaji + $totalTunjangan;
$totalPajak = $gajiKotor * $pajak / 100;
$gajiBersih = $gajiKotor - $totalPajak;

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

    <title>Gaji</title>
</head>

<body>
    <div class="container">
        <h1>Gaji Pegawai</h1>
        <br>
        <form action="gaji.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama Pegawai</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama lengkap"
                    name="name">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Golongan</label>
                <select class="form-control" id="exampleFormControlSelect1" name="golongan">
                    <option value="gol1">1</option>
                    <option value="gol2">2</option>
                    <option value="gol3">3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Status</label>
                <select class="form-control" id="exampleFormControlSelect1" name="status">
                    <option value="sudah">Sudah Menikah</option>
                    <option value="belum">Belum Menikah</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jumlah Anak</label>
                <input type="number" min="0" class="form-control" id="exampleFormControlInput1" name="anak">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nama Pegawai</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $name ?>"  readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Gaji Kotor</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $gajiKotor ?>"  readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Pajak</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $totalPajak ?>"
                readonly>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Gaji Bersih</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="<?php echo $gajiBersih ?>"
                readonly>
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