<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Malcolm Tan | CMJSH Agency</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Malcolm Tan | CMJSH Agency">
        <meta name="keywords" content="Malcolm Tan, Malcolm Tan portfolio, front-end developer, developer, web-desginer, BCIT new media, Vancouver BC">
        <meta name="author" content="Malcolm Tan">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://malcolm-tan.com">
        <meta property="og:title" content="Malcolm Tan | Front-End Developer & Web Designer">
        <meta property="og:description" content="Malcolm Tan | CMJSH Agency">
        <meta property="og:image" content="images/cmjsh.png">
        <?php include('../partials/links.php'); ?>
    </head>
    <body>
        <?php include('../partials/header.php'); ?>
        <main>
            <?php 
                $landing_title = 'CMJSH Agency';
                $landing_sub_title = '2-page Website Design';
                $landing_img_src = '../images/cmjsh.png';
                $landing_img_alt = 'CMJSH Agency';
                $landing_desc = 'A collaborative team project, CMJSH Agency is a responsive 2-page website design built using ReactJS and Tailwindcss. I took on the role of both quality assurance lead and developer, as I was in charge of developing a few sections on the landing page while also ensuring the overall quality of work satisfied the accecptance criteria and definition of done.';
                $landing_live_btn = 'https://jessicamlee.github.io/CMJSH-agency/';
                $landing_code_btn = 'https://github.com/jessicamlee/CMJSH-agency.git'; 
                include('../partials/projects/landing.php'); 
            ?>
        </main>
        <?php include('../partials/footer.php'); ?>
    </body>
</html>