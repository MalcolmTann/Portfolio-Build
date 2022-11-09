<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Malcolm Tan | Todo App</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Malcolm Tan | Task Manager Application">
        <meta name="keywords" content="Malcolm Tan, Malcolm Tan portfolio, Front-end Developer, Web Devloper, BCIT New Media Web Design and Development, Vancouver BC">
        <meta name="author" content="Malcolm Tan">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://malcolm-tan.com">
        <meta property="og:title" content="Malcolm Tan | Front-End Devloper">
        <meta property="og:description" content="Malcolm Tan | Task Manager Application">
        <?php include('../partials/links.php'); ?>
    </head>
    <body>
        <?php include('../partials/header.php'); ?>
        <main>
            <?php 
                $landing_title = 'Todo App';
                $landing_sub_title = 'Landing Page Design';
                $landing_img_src = '../images/todo.png';
                $landing_img_alt = 'Todo App';
                $landing_desc = 'A Front-end Mentor Challenge. Blogr is a responsive single page design built with HTML and JavaScript and styled with SASS. The objective was to develop a site that mirrors the given design as close as possible.';
                include('../partials/projects/landing.php'); 
            ?>
            <iframe src="https://codesandbox.io/embed/blogr-landing-page-6fkkzy?fontsize=14&hidenavigation=1&theme=dark"
                style="width:100%; height:500px; border:0; border-radius: 4px; overflow:hidden; padding:3em"
                title="Blogr Landing Page"
                allow="accelerometer; ambient-light-sensor; camera; encrypted-media; geolocation; gyroscope; hid; microphone; midi; payment; usb; vr; xr-spatial-tracking"
                sandbox="allow-forms allow-modals allow-popups allow-presentation allow-same-origin allow-scripts"
            ></iframe>
        </main>
        <?php include('../partials/footer.php'); ?>
    </body>
</html>