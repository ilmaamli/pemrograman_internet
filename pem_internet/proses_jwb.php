<?php
        if (isset($_POST['submit'])) {
            $no1 = $_POST['no1'];
            $no2 = $_POST['no2'];
            $no3 = $_POST['no3'];
            $no4 = $_POST['no4'];
            $no5 = $_POST['no5'];
            $correct = 0;
            $ket = "";
            $jwb_input = array($no1, $no2, $no3, $no4, $no5);
            $jwb       = array("Matahari", "Mesir", "Amoeba", "Barat", "Yen");

            for($i = 0; $i < count($jwb_input); $i++){
                if ($jwb_input[$i] == $jwb[$i]){
                    $correct += 20;
                }
            }
            switch ($correct) {
                case 100:
                    $ket = "Sangat Memuaskan";
                    break;
                case 80:
                    $ket = "Memuaskan";
                    break;
                case 60:
                    $ket = "Cukup Memuaskan";
                    break;
                case 40:
                    $ket = "Kurang";
                    break;
                case 20:
                    $ket = "Sangat Kurang";
                    break;
                default:
                    $ket = "Semua Jawaban Salah";
                    break;
            }
            echo "<b>Jawaban Anda</b> </br>";
            echo "1. $no1 </br>";
            echo "2. $no2 </br>";
            echo "3. $no3 </br>";
            echo "4. $no4 </br>";
            echo "5. $no5 </br>";
            echo "</br> Skor Anda : $correct </br>";
            echo "Keterangan : $ket";
        }
    ?>