<!-- Mengatur posisi pointer -->

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
        pre {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
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
            <h2>Array Print</h2>
            <div class="output">
                <?php
                $transport = array('Jalan kaki', 'Onthel', 'Mobil', 'Pesawat');
                echo "<pre>";
                print_r($transport);
                echo "</pre>";
                ?>
            </div>
        </div>
        <div class="section">
            <h2>Current, Next, Previous, and End</h2>
            <div class="output">
                <?php
                $mode = current($transport);
                echo $mode . "<br>";

                $mode = next($transport);
                echo $mode . "<br>";

                $mode = current($transport);
                echo $mode . "<br>";

                $mode = prev($transport);
                echo $mode . "<br>";

                $mode = end($transport);
                echo $mode . "<br>";

                $mode = current($transport);
                echo $mode . "<br>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
