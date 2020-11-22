<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Fungsi - Faktorial</title>
</head>

<body>

    <h2>Menghitung faktorial</h2>

    <form action="" method="post">
        <label> Masukkan angka </label>
        <input type="number" name="nilai">
        <input type="submit" value="Hitung!">
    </form>

    <?php

        function faktorial($nilai){
            $sum = 1;

            for($i=1; $i<=$nilai; $i++){
                $sum *= $i;
            }
            return $sum;
        }

        if(isset($_POST['nilai'])){
            $nilai = $_POST['nilai'];

            if($_POST['nilai'] == null){
                $nilai = 0;
            }
        $faktorial = faktorial($nilai);
    ?>

    <h3>Hasilnya adalah = <?php echo $faktorial; ?> </h3>
<?php
    }
?>

</body>
</html>