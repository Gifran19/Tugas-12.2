<!-- Fungsi 1 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Ganjil</title>
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
            margin-top: 10px;
            padding: 10px;
            background-color: #e0f7fa;
            border-left: 4px solid #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h2>Bilangan Ganjil</h2>
            <div class="output">
                <?php
                function cetak_ganjil($awal, $akhir) {
                    for ($i = $awal; $i < $akhir; $i++) {
                        if ($i % 2 == 1) {
                            echo "$i, ";
                        }
                    }
                }

                $a = 10;
                $b = 50;
                echo "<b>Bilangan ganjil dari $a sampai $b adalah: </b><br><br>";
                cetak_ganjil($a, $b);
                ?>
            </div>
        </div>
    </div>
</body>
</html>
