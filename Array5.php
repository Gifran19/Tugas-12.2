<!-- Array 5 -->
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
            overflow: auto;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            margin-bottom: 10px;
            color: #007BFF;
        }
        pre {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h2>Array Output</h2>
            <div class="output">
                <?php
                $arrWarna = array("Blue", "Black", "Red", "Yellow", "Green");
                $arrNilai = array("Fulan" => 80, "Fulin" => 90, "Fulun" => 75, "Falan" => 85);
                echo "<pre>";
                print_r($arrWarna);
                echo "<br>";
                print_r($arrNilai);
                echo "</pre>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
