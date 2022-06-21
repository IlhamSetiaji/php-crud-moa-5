<?php
error_reporting(0);
    $kode = array('1B001','2B002','3B003','4B004','5B005');
    $barang = array('Monitor Samsung','Monitor LG', 'CD-RW Samsung', 'Memory Card 256 GB','HDD 256 GB');
    $harga = array('100000','200000','300000','400000','500000');
    $stock = array('5','4','6','7','3');
    $diskon = array('0.03','0.05','0.02','0.01','0.04');
    extract($_POST);
    // $jumlah = array();
    $total = array();
    $price = array();
    $list[0] = $list0;
    $list[1] = $list1;
    $list[2] = $list2;
    $list[3] = $list3;
    $list[4] = $list4;
    for($i=0 ; $i<5 ; $i++)
    {
        $price[$i] = $harga[$i]*$diskon[$i];
        $total[$i] = ($harga[$i]-$price[$i])*$list[$i];
        // $jumlah
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

    <title>Toko</title>
</head>

<body>
    <div class="container">
        <h1>Toko Elektronik</h1>
        <form action="#" method="POST" enctype="multipart/form-data">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Barang</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Diskon</th>
                        <th scope="col">Stock</th>
                    </tr>
                </thead>
                <?php
                for($i = 0 ; $i < 5 ; $i++)
                {
                echo
                "<tbody>".
                    "<tr>".
                        "<td>",$i+1,"</td>".
                        "<td>".$kode[$i]."</td>".
                        "<td>".$barang[$i]."</td>".
                        "<td>".$harga[$i]."</td>".
                        "<td>".$diskon[$i]."</td>".
                        "<td><select name='list".$i."'>";
                        for($x=0;$x<=$stock[$i];$x++)
                        {
                            echo "<option value=".$x.">".$x."</option>";
                        }
                        "</select></td>".
                    "</tr>".
                "</tbody>";
                }
                ?>
            </table>
            <button type="submit" class="btn btn-primary">Beli</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Diskon</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total Harga</th>
                </tr>
            </thead>
            <?php
            for($i = 0 ; $i < 5 ; $i++)
            {
                echo
                "<tbody>".
                    "<tr>".
                        "<td>",$i+1,"</td>".
                        "<td>".$kode[$i]."</td>".
                        "<td>".$barang[$i]."</td>".
                        "<td>".$price[$i]."</td>".
                        "<td>".$list[$i]."</td>".
                        "<td>".$total[$i]."</td>".
                    "</tr>".
                "</tbody>";
            }
            ?>
        </table>
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