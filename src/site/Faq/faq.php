<?php

include 'arrays.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Accordion with Smooth Animations</title>
    <link rel="stylesheet" href="faq.css">
</head>
<body>

<h2>Help Information</h2>

<?php

foreach ($sections as $title => $content) {
    echo "<button class='accordion'>$title<span class='symbol'>+</span></button>";
    echo "<div class='panel'><p>$content</p></div>";
}

?>

<script src="faq.js"></script>

</body>
</html>
