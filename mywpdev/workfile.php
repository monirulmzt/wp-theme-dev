<?php
//echo get_template_directory_uri();

//echo get_theme_file_uri( 'img/screenshot.png' );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri( 'css/mainsheet.css' );?>">
</head>
<body>
    <img src="<?php echo get_theme_file_uri( 'img/monir.jpg' );?>" alt="">

    <script src="<?php echo get_template_directory_uri().'/js/main.js'; ?>"></script>
</body>
</html>