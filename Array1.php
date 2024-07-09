<!-- Array 1 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Output</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            margin-bottom: 10px;
            color: #007BFF;
        }
        .output {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h2>Buah-Buahan</h2>
            <div class="output">
                <?php
                $arrBuah=array("Mangga","Alpukat","Anggur","Strawberry");
                echo $arrBuah[0]. "<br>";
                echo $arrBuah[3]. "<br>";
                echo $arrBuah[2]. "<br>";
                echo $arrBuah[1]. "<br><br>";
                ?>
            </div>
        </div>
        <div class="section">
            <h2>Warna</h2>
            <div class="output">
                <?php
                $arrWarna=array();
                $arrWarna[0]="Merah";
                $arrWarna[1]="Kuning";
                $arrWarna[2]="Hijau";
                $arrWarna[3]="Biru";
                echo $arrWarna[0]. "<br>";
                echo $arrWarna[3]. "<br>";
                echo $arrWarna[2]. "<br><br>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
