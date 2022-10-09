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
                <h1>Turning ideas into reality through &lt;code&gt;</h1>
                <a href="#work" title="View Projects" >
                    <button class="btn">projects</button>
                </a>
            </section>
            <section id="work" class="projects">
                <div class="artifact">
                    <div class="col-1">
                        <a href="projects/malsathome.php" title="...">
                            <img src="images/malsathome.jpg" alt="View ...">
                        </a>
                    </div>
                    <div class="col-2">
                        <div class="title">Malsathome</div>
                        <div class="desc">/ Bootstrap</div>
                    </div>
                </div>
                <div class="artifact">
                    <div class="col-1">
                        <a href="project-2.php" title="...">
                            <img src="images/malsathome.jpg" alt="View ...">
                        </a>
                    </div>
                    <div class="col-2">
                        <div class="title">NUTTRI</div>
                        <div class="desc">/ ReactJS</div>
                    </div>
                </div>
                <div class="artifact">
                    <div class="col-1">
                        <a href="project-3.php" title="...">
                            <img src="images/malsathome.jpg" alt="View ...">
                        </a>
                    </div>
                    <div class="col-2">
                        <div class="title">Stopwatch</div>
                        <div class="desc">/ JavaScript</div>
                    </div>
                </div>
            </section>
            <section id="about" class="about">
                <div class="col-1">
                    <img src="images/portrait.jpg" alt="Malcolm Tan">
                </div>
                <div class="is-flex col-2">
                    <h2>Hey, I'm Malcolm</h2>
                    <p>I code because I love the process of building things and taking on challenges that allow me to exercise my creativity. Curiosity drives me to be a proactive and passionate learner, always seeking to acquire new skills, technical knowledge and experiences in pursuit of continuous slef-improvement and growth.</p>
                    <button class="btn">View Resume</button>
                </div>
            </section> 

        </main> 
        <?php include('partials/footer.php'); ?>
    </body>
</html>