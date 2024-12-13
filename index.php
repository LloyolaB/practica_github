<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 10px 0;
        }

        p {
            margin: 0;
            padding: 10px 0;
            background-color: #ccc;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
    <h1>Hello World</h1>

    <p>My name is <?php echo "lUIS lOYOLA"; ?></p>
    <p>Today is <?php echo date('Y-m-d'); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s'); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('+1 day')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('+1 week')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('+1 month')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('+1 year')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('+1 year 2 months 3 days 4 hours 5 minutes 6 seconds')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('next Monday')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('last Monday')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('first day of next month')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('last day of next month')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('first day of last month')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('last day of last month')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('first day of +2 months')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('last day of +2 months')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('first day of -2 months')); ?></p>
    <p>Today is <?php echo date('Y-m-d H:i:s', strtotime('last day of -2 months')); ?></p>
    <button>Hola mundo</button>
</body>

</html>