<!-- Mencari elemen array -->
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
        <h2>Array Check</h2>
        <div class="output">
            <?php
            $arrBuah = array("Mangga", "Apel", "Pisang", "Kedondong", "Jeruk");
            if (in_array("Kedondong", $arrBuah)) {
                echo "Ada buah Kedondong di dalam array tersebut!";
            } else {
                echo "Tidak ada buah Kedondong di array tersebut";
            }
            ?>
        </div>
    </div>
</body>
</html>