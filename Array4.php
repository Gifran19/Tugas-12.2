<!-- Array 4 -->
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
        .highlight {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h2>Menampilkan isi array asosiatif dengan foreach</h2>
            <div class="output">
                <?php
                $arrNilai = array("Fulan" => 80, "Fulin" => 98, "Fulun" => 75, "Falan" => 85);
                foreach ($arrNilai as $nama => $nilai) {
                    echo "Nilai <span class='highlight'>$nama</span> = $nilai<br>";
                }
                ?>
            </div>
        </div>
        <div class="section">
            <h2>Menampilkan isi array asosiatif dengan WHILE dan LIST</h2>
            <div class="output">
                <?php
                foreach ($arrNilai as $nama => $nilai) {
                    echo "Nilai <span class='highlight'>$nama</span> = $nilai<br>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
