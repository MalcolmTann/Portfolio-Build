<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Malcolm Tan | Blogr Landing Page</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Malcolm Tan | Blogr Landing Page Design">
        <meta name="keywords" content="Malcolm Tan, Malcolm Tan portfolio, front-end developer, devloper, weeb-desginer, BCIT new media, Vancouver BC">
        <meta name="author" content="Malcolm Tan">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://malcolm-tan.com">
        <meta property="og:title" content="Malcolm Tan | Front-End Devloper & Web Designer">
        <meta property="og:description" content="Malcolm Tan | Blogr Landing Page Design">
        <meta property="og:image" content="images/blogr.png">
        <?php include('../partials/links.php'); ?>
    </head>
    <body>
        <?php include('../partials/header.php'); ?>
        <main>
            <?php 
                $landing_title = 'Blogr';
                $landing_sub_title = 'Landing Page Design';
                $landing_img_src = '../images/blogr.png';
                $landing_img_alt = 'Blogr desktop view';
                $landing_desc = 'A Front-end Mentor Challenge. Blogr is a responsive single landing-page design built with HTML and JavaScript and styled with SASS. The objective was to develop an application that matched the given design and functionality as close as possible.';
                include('../partials/projects/landing.php'); 
            ?>
            <section>
                <iframe src="https://codesandbox.io/embed/blogr-landing-page-6fkkzy?fontsize=14&hidenavigation=1&theme=dark"
                    style="width:100%; height:650px; border:0; border-radius: 4px; overflow:hidden;"
                    class="sb"
                    title="Blogr Landing Page"
                ></iframe>
            </section>
        </main>
        <?php include('../partials/footer.php'); ?>
    </body>
</html>