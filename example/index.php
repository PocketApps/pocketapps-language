<?php
include_once 'assets/environment.php';
include_once 'assets/language.php';

$language = new pocketapps_language(environment::language());
?>

<html>
    <head>
        <title>Example | <?php echo $language->get("APP_NAME", true) ?></title>
    </head>
    <body>
        <h1>Welcome to <?php echo $language->get("APP_NAME", true) ?></h1>
        <p><?php echo $language->get("FIRST_PARAGRAPH") ?></p>
        <p><?php echo $language->get("SECOND_PARAGRAPH") ?></p>
        <p><?php echo $language->get("LIPSUM") ?></p>
    </body>
</html>
