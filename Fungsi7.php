<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Defined Functions</title>
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
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h2>Defined Functions</h2>
            <pre>
                <?php
                function luas_lingkaran($jari) {
                    return 3.14 * $jari * $jari;
                }
                $arr = get_defined_functions();
                print_r($arr);
                ?>
            </pre>
        </div>
    </div>
</body>
</html>
