<?php
$restaurants = [
"Restaurant1",
"Restaurant2",
"Restaurant3",
"Restaurant4"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants List</title>
</head>
<body>
    <h1>Restaurants</h1>

    <ul>
        <?php foreach ($restaurants as $restaurant): ?>
        <li><a href="reservation.php?restaurant=<?php echo urlencode($restaurant); ?>"><?php echo $restaurant; ?></a></li>
        <?php endforeach; ?>
    </ul>

    <p><a href="reservation.php">Reserve at another restaurant</a></p></body>
</html>