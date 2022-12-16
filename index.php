<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Malcolm Tan | Front-end Developer</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Malcolm Tan | Turning Ideas Into Reality Through Code.">
        <meta name="keywords" content="Malcolm Tan, Malcolm Tan portfolio, Front-end Developer, Web Developer, BCIT New Media Web Design and Development, Vancouver BC">
        <meta name="author" content="Malcolm Tan">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://malcolm-tan.com">
        <meta property="og:title" content="Malcolm Tan | Front-End Developer">
        <meta property="og:description" content="Malcolm Tan | Turning Ideas Into Reality Through Code.">
        <?php include('partials/links.php'); ?>
    </head>
    <body>
        <?php include('partials/header.php'); ?>
        <main>
            <section id="landing" class="home-landing">
                <p data-aos="fade" data-aos-delay="500" data-aos-duration="2000">Front-end Developer</p>
                <div class="is-flex">
                    <h1 data-aos="fade" data-aos-duration="2000">Turning ideas into reality <span>through<br> code</span></h1>
                    <img data-aos="fade" data-aos-duration="2000" src="images/banner.jpg" alt="Coding Animation">
                </div>
                <a href="#connect" title="View Projects" data-aos="fade" data-aos-delay="1000" data-aos-duration="2000">
                    <button class="btn">Connect with me</button>
                </a>
            </section>
            <section id="work" class="projects section">
                <div class="artifact" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col-1">
                        <a href="projects/blogr.php" title="Blogr Landing Page">
                            <img src="images/blogr.png" alt="Blogr">
                        </a>
                    </div>
                    <div class="col-2">
                        <div class="desc">
                            <p>Landing Page Design</p>
                            <h3>Blogr</h3>
                        </div>
                        <a href="projects/blogr.php" title="View Blogr">
                            <button class="btn">View Details</button>
                        </a>
                    </div>
                </div>
                <div class="artifact" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col-1">
                        <a href="projects/flyo.php" title="ToDo Task Manager">
                            <img src="images/flyo.png" alt="ToDo App">
                        </a>
                    </div>
                    <div class="col-2">
                        <div class="desc">
                            <p>Landing Page Design</p>
                            <h3>Flyo</h3>
                        </div>
                        <a href="projects/flyo.php" title="View Flyo"><button class="btn">View Details</button></a>
                    </div>
                </div>
                <div class="artifact" data-aos="fade-up" data-aos-duration="1500">
                    <div class="col-1">
                        <!-- <a href="#" title="Todo App"> -->
                            <img src="images/todo.png" alt="Todo App">
                        <!-- </a> -->
                    </div>
                    <div class="col-2">
                        <div class="desc">
                            <p>Task Manager</p>
                            <h3>Todo App</h3>
                        </div>
                        <!-- <a href="projects/todo.php" title="View Project"> -->
                        <p>- Coming Soon</p>
                        <!-- </a> -->
                    </div>
                </div>
            </section>
            <section id="about" class="about section">
                <div class="col-1" data-aos="fade-right" data-aos-duration="1500">
                    <img src="images/portrait.jpg" alt="Malcolm Tan">
                </div>
                <div class="is-flex col-2" data-aos="fade-left" data-aos-duration="1500">
                    <p>I code because I love the process of turning web ideas into functional applications and taking on challenges that allow me to exercise my creativity. Curiosity drives me to be a proactive and passionate learner, always seeking to acquire new skills, technical knowledge and experiences in pursuit of continuous self-improvement and growth.</p>
                    <p>When I'm not coding, I enjoy film-photography, music, sports, and spending quality time with friends and family.</p>
                </div>
            </section> 
        </main> 
        <?php include('partials/footer.php'); ?>
    </body>
</html>