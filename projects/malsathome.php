<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Malcolm Tan | [Project Name]</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php include('../partials/links.php'); ?>
    </head>
    <body>
        <?php include('../partials/header.php'); ?>
        <main>
            <?php 
                $landing_title = 'Malsathome';
                $landing_sub_title = '/ Bootstrap';
                $landing_img_src = '../images/malsathome.jpg';
                $landing_img_alt = 'Project in desktop and mobile view';
                $landing_desc = 'A mobile-first modern restaurant design for a fictitious client. Built using a Bootstrap and custom SASS styling.';
                include('../partials/projects/landing.php'); 
            ?>
            <?php 
                $skills_date = '01/01/21';
                include('../partials/projects/skills.php'); 
            ?>
            
            <?php 
                $overview_desc = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et praesentium debitis sed impedit neque reprehenderit, labore recusandae libero amand quo reiciendis inventore quis illum culpa modi cumque provident consequuntur, qui perspiciatis!';
                include('../partials/projects/overview.php'); 
            ?>

            <?php 
                $more_projects_img_src_1 = '../images/malsathome.jpg';
                $more_projects_img_src_2 = '../images/malsathome.jpg';
                $more_projects_img_alt_1 = 'Project in desktop and mobile view';    
                $more_projects_img_alt_2 = 'Project in desktop and mobile view';             
                include('../partials/projects/more_projects.php'); 
            ?>
        </main>
        <?php include('../partials/footer.php'); ?>
    </body>
</html>