<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>My name is <?php echo "John Doe"; ?></p>
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
</body>
</html>