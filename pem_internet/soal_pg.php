<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUIS</title>
</head>
<body>
    <?php
        $jwb1 = $_POST['no1'];
        $jwb2 = $_POST['no2'];
        $jwb3 = $_POST['no3'];
        $jwb4 = $_POST['no4'];
        $jwb5 = $_POST['no5'];

        $quis = array($jwb1,$jwb2,$jwb3,$jwb4,$jwb5);
        $jwbn = array("Matahari","Mesir","Amoeba","Barat","Yen");

        $correct = 0;

        if(!empty($_POST)) {
            if($jwb1 ==  "Matahari"){
                $correct++;
            } else {
                echo "Jawaban Anda Salah!";
            }
            if($jwb2 == "Mesir"){
                $correct++;
            } else {
                echo "Jawaban Anda Salah";
            }
        } else {
            echo "Skor Anda";
        }
    ?>
    <form action="soal_pg.php" method="post">
        <table>
            <tr>
                <td colspan="4"> <b>Jawablah Pertanyaan Berikut!</b></td>
            </tr>
            <tr>
                <td colspan="4">1. Pusat tata surya adalah ...</td>
            </tr>
            <tr>
                <td><input type="radio" name="no1" value="Bintang">Bintang</td>
                <td><input type="radio" name="no1" value="Bulan">Bulan</td>
                <td><input type="radio" name="no1" value="Matahari">Matahari</td>
                <td><input type="radio" name="no1" value="Planet">Planet</td>
            </tr>
            <tr>
                <td colspan="4">2. Patung Sphinx kebanyakan terdapat di negara ...</td>
            </tr>
            <tr>
                <td><input type="radio" name="no2" value="Indonesia">Indonesia</td>
                <td><input type="radio" name="no2" value="Mesir">Mesir</td>
                <td><input type="radio" name="no2" value="Amerika">Amerika</td>
                <td><input type="radio" name="no2" value="Singapore">Singapore</td>
            </tr>
            <tr>
                <td colspan="4">3. Berikut ini yang merupakan hewan terkecil adalah ...</td>
            </tr>
            <tr>
                <td><input type="radio" name="no_3" value="Amoeba">Amoeba</td>
                <td><input type="radio" name="no_3" value="Rayap">Rayap</td>
                <td><input type="radio" name="no_3" value="Semut">Semut</td>
                <td><input type="radio" name="no_3" value="Nyamuk">Nyamuk</td>
            </tr>
            <tr>
                <td colspan="4">4. Arah jam 9 itu sama dengan arah ...</td>
            </tr>
            <tr>
                <td><input type="radio" name="no_4" value="Barat">Barat</td>
                <td><input type="radio" name="no_4" value="Timur">Timur</td>
                <td><input type="radio" name="no_4" value="Utara">Utara</td>
                <td><input type="radio" name="no_4" value="Selatan">Selatan</td>
            </tr>
            <tr>
                <td colspan="4">5. Yang merupakan mata uang negara Jepang yaitu</td>
            </tr>
            <tr>
                <td><input type="radio" name="no_5" value="Rupiah">Rupiah</td>
                <td><input type="radio" name="no_5" value="Dollar">Dollar</td>
                <td><input type="radio" name="no_5" value="Ringgit">Ringgit</td>
                <td><input type="radio" name="no_5" value="Yen">Yen</td>
            </tr>
        </table> 
 
        
    </form>
</body>
</html>