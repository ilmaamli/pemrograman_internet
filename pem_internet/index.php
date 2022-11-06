<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas_array</title>
</head>
<body>
 <form action="" method="post">
    <label for="indexTampil"><b>Masukan Index-nya</b></label><br/>
    <input type="text" name="indexTampil" id="indexTampil">
    <button type="submit" name="proses" id="proses">Proses</button>
 </form> 
 <?php
    if(isset($_POST['proses'])){
        $arr = ['A', 'M', 'A', 'L', 'I', 'A'];
        $indexTampil = $_POST['indexTampil'];

        if(array_key_exists($indexTampil, $arr)){
            echo $arr[$indexTampil];
        } else{
            echo "Index Tidak Tersedia";
        }
    }
 ?> 
</body>
</html>


