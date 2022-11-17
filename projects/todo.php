<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Malcolm Tan | Todo App</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Malcolm Tan | Todo App">
        <meta name="keywords" content="Malcolm Tan, Malcolm Tan portfolio, front-end developer, developer, web-desginer, BCIT new media, Vancouver BC">
        <meta name="author" content="Malcolm Tan">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://malcolm-tan.com">
        <meta property="og:title" content="Malcolm Tan | Front-End Developer & Web Designer">
        <meta property="og:description" content="Malcolm Tan | Todo App">
        <meta property="og:image" content="images/todo.png">
        <?php include('../partials/links.php'); ?>
    </head>
    <body>
        <?php include('../partials/header.php'); ?>
        <main>
            <?php 
                $landing_title = 'Todo App';
                $landing_sub_title = 'Task Manager';
                $landing_img_src = '../images/todo.png';
                $landing_img_alt = 'Todo App';
                $landing_desc = '';
                include('../partials/projects/landing.php'); 
            ?>
        </main>
        <?php include('../partials/footer.php'); ?>
    </body>
</html>