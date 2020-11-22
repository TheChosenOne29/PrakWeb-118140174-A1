<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 Fungsi - Biaya karakter</title>
</head>

<body>

    <h2>Menghitung biaya per karakter</h2>

    <form action="" method="post">
        <label> Masukkan karakter </label>
        <input type="text" name="string">

        <label> Pilih warna </label>
        <input type="color" name="color" value="#ff0000">

        <input type="submit" name="submitData" value="Hitung biaya!">
    </form>    

    <?php

        function costSum($string, $cost){
            $sum = 0;

            for($i=0; $i<$string; $i++){
                $sum += $cost;
            }
            return $sum;
        }

        function characterCost($string, $color){
            $name = $string;
            $string = strlen($string);
            $sum = 0;

            if($string >= 1 && $string <= 10){
                $sum = costSum($string, 300);
            }else if($string >= 11 && $string <=20){
                $sum = costSum($string, 500);
            }else if($string >= 20){
                $sum = costSum($string, 700);
            }
    ?>
            <p>Karakter = <?php echo $name; ?></p>
            <h4> Total biaya adalah = <?php echo $sum; ?> </h4>
<?php
    }
    if(isset($_POST['string']) && isset($_POST['color'])){
        characterCost($_POST['string'], $_POST['color']);
    }
?>
</body>
</html>