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
                <p data-aos="fade" data-aos-delay="500" data-aos-duration="2000">/ Front-end Developer</p>
                <div>
                    <h1 data-aos="fade" data-aos-duration="2000">Turning ideas into reality through code</h1>
                </div>
                <a href="#work" data-aos="fade" data-aos-delay="1000" data-aos-duration="2000" title="View Projects" >
                    <button class="btn">projects</button>
                </a>
            </section>
            <section id="work" class="projects">
                <div class="artifact">
                    <div class="col-1" data-aos="fade-up" data-aos-duration="1000">
                        <a class="image-hover" href="projects/blogr.php" title="Blogr Landing Page">
                            <img src="images/blogr.png" alt="Blogr">
                            <div>
                                <p>Coming Soon</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="desc">
                            <p>/ Landing Page Design</p>
                            <h3>Blogr</h3>
                            <ul>
                                <li>Bootstrap</li>
                                <li>CSS/SCSS</li>
                                <li>HTML</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="artifact">
                    <div class="col-1" data-aos="fade-up" data-aos-duration="1000">
                        <a class="image-hover" href="#" title="ToDo Task Manager">
                            <img src="images/todo.png" alt="ToDo App">
                            <div>
                                <p>Coming Soon</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="desc">
                            <p>/ Task Manager</p>
                            <h3>Todo App</h3>
                            <ul>
                                <li>JavaScript</li>
                                <li>CSS</li>
                                <li>HTML</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="artifact">
                    <div class="col-1" data-aos="fade-up" data-aos-duration="1000">
                        <a class="image-hover" href="#" title="NUTTRI Health App">
                            <img src="images/project-filler.jpg" alt="NUTTRI App">
                            <div>
                                <p>Coming Soon</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-2" data-aos="fade-up" data-aos-duration="1000">
                        <div class="desc">
                            <p>/ Health & Nutrition App</p>
                            <h3>NUTTRI</h3>
                            <ul>
                                <li>React.Js</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about" class="about">
                <div class="col-1" data-aos="fade-right" data-aos-duration="950">
                    <img src="images/portrait.jpg" alt="Malcolm Tan">
                </div>
                <div class="is-flex col-2" data-aos="fade-left" data-aos-duration="950">
                    <p>I code because I love the process of turning web ideas into functional applications and taking on challenges that allow me to exercise my creativity. Curiosity drives me to be a proactive and passionate learner, always seeking to acquire new skills, technical knowledge and experiences in pursuit of continuous slef-improvement and growth. During my free time, I enjoy film-photography, music, sports, and spending quality time with friends and loved ones.</p>
                    <button class="btn">View Resume</button>
                </div>
            </section> 
        </main> 
        <?php include('partials/footer.php'); ?>
    </body>
</html>