<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Malcolm Tan | Blogr Landing Page</title>
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
                $landing_img_src = '../images/project-filler.jpg';
                $landing_img_alt = 'Project in desktop and mobile view';
                $landing_desc = 'A mobile-first modern restaurant design for a fictitious client. Built using a Bootstrap and custom SASS styling.';
                include('../partials/projects/landing.php'); 
            ?>
            <?php 
                $info_date = '01/01/21';
                include('../partials/projects/info.php'); 
            ?>
        </main>
        <?php include('../partials/footer.php'); ?>
    </body>
</html>