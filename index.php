<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Perbandingan</title>
</head>
<body>
    
    <h2> - Perbandingan - </h2>
    <i class='bx bxl-php ' style='color:#ffffff; font-size: 50px; position: absolute; top: 0; right: 0; padding: 20px 30px;'  ></i>
    <div class="division">
        <div class="container-all">
            <form action="" method="POST">
            
                <?php
                if(@$_POST['angka_pertama'] == "" || @$_POST['angka_kedua'] == "") {
                    echo "<p class='home'> Silahkan isi number pada inputan berikut <i class='bx bx-down-arrow-alt'></i></p>";
                }else {
                    echo "<p style='font-size: 25px; margin: 20px; letter-spacing: 2px;'> - Number sudah proses - </p>";
                    if ($_POST['angka_pertama'] > $_POST['angka_kedua']) {
                        echo "<p style='font-size:17px;'>(Angka pertama Lebih Besar dan angka ke dua lebih kecil)</p>";
                        echo "<p style='margin-top: 20px;'>Angka pertama : " . "<b style='font-size: 20px;'>" . $_POST['angka_pertama'] . "</b>" . "<p style='font-size: 30px;'>></p>" . "dari angka ke 2  : " . "<b style='font-size: 20px;'>" . $_POST['angka_kedua'] . "." ."</b>" .  "</p>";
                        echo "<P>[Operator Tidak sama] </P>";

                    }else if($_POST['angka_pertama'] === $_POST['angka_kedua']){
                        echo "<p style='font-size:17px;'>(Kedua Angka Sama)</p>";
                        echo "<p style='margin-top: 20px;'>Angka pertama :" . "<b style='font-size: 20px;'>" . $_POST['angka_pertama'] . "</b>" . "<p style='font-size: 30px;'>=</p>" . "dari angka ke 2  :" . " <b style='font-size: 20px;'>" . $_POST['angka_kedua']. "."."</b>" . "</p>";
                        echo "<p>[Operator sama]</p>";
                    }else {
                        echo "<p style='font-size:17px;'>(Angka pertama Lebih kecil dan Angka Kedua lebih besar)</p>";
                        echo "<p style='margin-top: 20px;'>Angka pertama :" . "<b style='font-size: 20px;'>" . $_POST['angka_pertama'] . "</b>" . "<p style='font-size: 30px;'><</p>" . "dari angka ke 2  :" ."<b style='font-size: 20px;'>" . $_POST['angka_kedua']. "."."</b>" . "</p>";
                        echo "<p>[Operator tidak sama]</p>";
                    }
                }
                echo "<br>";
                ?> 

                <div class="container">
                    <div class="p1">
                        <label for="angka_pertama">Angka Pertama :</label>
                        <input type="number" inputmode="numeric" name="angka_pertama" id="angka_pertama"  placeholder="Masukan angka ke 1" >
                    </div>
                    <div class="p2">
                        <label class="geser" for="angka_kedua">Angka Kedua :</label>
                        <input type="number"  inputmode="numeric" name="angka_kedua" id="angka_kedua" placeholder="Masukan angka ke 2" >
                    </div>
                </div>
                <div class="button">
                    <button type="submit"><p >Check</p></button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <p style='color: #fff; padding: 20px;'>© Muhammad Nur Rizky | 2024</p>
    </footer>

</body>
</html>