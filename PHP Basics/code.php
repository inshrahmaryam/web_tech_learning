<?php
echo "Hello, World!";
include("include/variables.php"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | <?php echo constant("SiteTitle"); ?></title>
</head>
<body>
    <h1>
        <?php echo SiteTile; ?>
    </h1>
</body>
</html>
