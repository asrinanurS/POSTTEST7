<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $ID = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM pemesanan WHERE id = '$id' ");
        $baris = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama_lighstick = $_POST['nama_lighstick'];
        $grup_idol = $_POST['grup_idol'];
        

        $update = mysqli_query($db, "UPDATE pemesanan SET nama_lighstick='$nama_lighstick', grup_idol='$grup_idol' WHERE id='$id'");

        if($update){
            header("Location:pemesanan.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAKANAN</title>
    <link rel="stylesheet" href="pemesanan.css">
</head>
<body>
    <header>
        <h2>Formulir Data Pemesanan</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Data</h3>
        <form action="" method="post">
            
            <label for="">Nama Pemesanan/label><br>
            <input type="text" name="nama_pemesanan class="form-text" value=<?=$baris['nama_pemesanan'];?>><br>
            
            <label for="">Jumlah</label><br>
            <input type="text" name="jumlah" class="form-text" value=<?=$baris['jumlah'];?>><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>