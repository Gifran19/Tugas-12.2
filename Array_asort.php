<!-- Array asort() & arsort() -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Array</title>
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
        pre {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            overflow-x: auto;
        }
        b {
            display: block;
            margin-top: 20px;
            font-size: 18px;
            color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h2>Sorting Array</h2>
            <b>Array sebelum diurutkan</b>
            <pre>
                <?php
                $arrNilai = array("Fulan" => 88, "Fulin" => 90, "Fulun" => 75, "Falan" => 85);
                print_r($arrNilai);
                ?>
            </pre>

            <?php
            sort($arrNilai);
            reset($arrNilai);
            ?>
            <b>Array setelah diurutkan dengan sort()</b>
            <pre>
                <?php
                print_r($arrNilai);
                ?>
            </pre>

            <?php
            rsort($arrNilai);
            reset($arrNilai);
            ?>
            <b>Array setelah diurutkan dengan rsort()</b>
            <pre>
                <?php
                print_r($arrNilai);
                ?>
            </pre>
        </div>
    </div>
</body>
</html>
