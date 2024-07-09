<!-- Fungsi 3 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Lingkaran</title>
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
            <h2>Luas Lingkaran</h2>
            <div class="output">
                <?php
                // Fungsi dengan return value dan parameter
                function luas_lingkaran($jari) {
                    return 3.14 * $jari * $jari;
                }

                // Pemanggilan fungsi
                $r = 10;
                echo "Luas Lingkaran dengan jari-jari $r = ";
                echo luas_lingkaran($r);
                ?>
            </div>
        </div>
    </div>
</body>
</html>