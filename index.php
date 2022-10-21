<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Malcolm Tan | Front-end Developer</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Malcolm Tan | Front-end Developer</title>
        <meta name="description" content="Malcolm Tan | Turning Ideas Into Reality Through Code.">
        <meta name="keywords" content="Malcolm Tan, Malcolm Tan portfolio, Front-end Developer, Web Devloper, BCIT New Media Web Design and Development, Vancouver BC">
        <meta name="author" content="Malcolm Tan">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://malcolmtan24.com">
        <meta property="og:title" content="Malcolm Tan | Front-End Devloper">
        <meta property="og:description" content="Malcolm Tan | Turning Ideas Into Reality Through Code.">
        <?php include('partials/links.php'); ?>
    </head>
    <body>
        <?php include('partials/header.php'); ?>
        <main>
            <section class="home-landing">
                <p>/ Front-end Developer</p>
                <div>
                    <h1><span class="text">Turning ideas into reality</span></h1>
                    <h1><span class="text">through code!</span></h1>
                </div>
                <a href="#work" title="View Projects" >
                    <button class="btn">projects</button>
                </a>
            </section>
            <section id="work" class="projects">
                <div class="artifact">
                    <div class="col-1 hidden">
                        <a class="image-hover" href="projects/malsathome.php" title="Blogr Landing Page">
                            <img src="images/project-filler.jpg" alt="Blogr">
                            <div>
                                <p>Coming Soon</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-2 hidden">
                        <div class="desc">
                            <h3>Blogr</h3>
                            <p>/ Landing Page Design</p>
                            <ul>
                                <li>Bootstrap</li>
                                <li>CSS/SCSS</li>
                                <li>HTML</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="artifact">
                    <div class="col-1 hidden">
                        <a class="image-hover" href="..." title="ToDo Task Manager">
                            <img src="images/project-filler.jpg" alt="ToDo App">
                            <div>
                                <p>Coming Soon</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-2 hidden">
                        <div class="desc">
                            <h3>Todo App</h3>
                            <p>/ Task Manager</p>
                            <ul>
                                <li>JavaScript</li>
                                <li>CSS/SCSS</li>
                                <li>HTML</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="artifact">
                    <div class="col-1 hidden">
                        <a class="image-hover" href="..." title="NUTTRI Health App">
                            <img src="images/project-filler.jpg" alt="NUTTRI App">
                            <div>
                                <p>Coming Soon</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-2 hidden">
                        <div class="desc">
                            <h3>NUTTRI</h3>
                            <p>/ Health & Nutrition App</p>
                            <ul>
                                <li>React.Js</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about" class="about">
                <div class="col-1 hidden">
                    <img src="images/portrait.jpg" alt="Malcolm Tan">
                </div>
                <div class="is-flex col-2 hidden">
                    <p>I code because I love the process of turning web ideas into functional applications and taking on challenges that allow me to exercise my creativity. Curiosity drives me to be a proactive and passionate learner, always seeking to acquire new skills, technical knowledge and experiences in pursuit of continuous slef-improvement and growth. During my free time, I enjoy film-photography, music, sports, and spending quality time with friends and loved ones.</p>
                    <button class="btn">View Resume</button>
                </div>
            </section> 
        </main> 
        <?php include('partials/footer.php'); ?>
    </body>
</html>