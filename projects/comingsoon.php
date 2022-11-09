<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Malcolm Tan | Todo App</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include('../partials/links.php'); ?>
    </head>
    <body>
        <?php include('../partials/header.php'); ?>
        <main>
            <?php 
                $landing_title = 'Blogr';
                $landing_sub_title = '/ Landing Page Design';
                $landing_img_src = '../images/blogr.png';
                $landing_img_alt = 'Blogr desktop view';
                $landing_desc = 'A Front-end Mentor Challenge. Blogr is a responsive single page design built with HTML and JavaScript and styled with SASS. The objective was to develop a site that mirrors the given design as close as possible.';
                include('../partials/projects/landing.php'); 
            ?>
        </main>
        <?php include('../partials/footer.php'); ?>
    </body>
</html>