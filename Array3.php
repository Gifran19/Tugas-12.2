 <!-- Array 3 -->
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
        .colored-text {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h2>Menampilkan isi array dengan FOR</h2>
            <div class="output">
                <?php
                $arrwarna = array("Red", "Orange", "Yellow", "Green", "Blue", "Purple");
                for ($i = 0; $i < count($arrwarna); $i++) {
                    echo "Warna pelangi <span class='colored-text' style='color: {$arrwarna[$i]};'>" . $arrwarna[$i] . "</span><br>";
                }
                ?>
            </div>
        </div>
        <div class="section">
            <h2>Menampilkan isi array dengan FOREACH</h2>
            <div class="output">
                <?php
                foreach ($arrwarna as $warna) {
                    echo "Warna pelangi <span class='colored-text' style='color: {$warna};'>" . $warna . "</span><br>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
