<?php

    $more_projects_img_src_1 = $more_projects_img_src_1 ?? '';
    $more_projects_img_src_2 = $more_projects_img_src_2 ?? '';
    $more_projects_img_alt_1 = $more_projects_img_alt_1 ?? ''; 
    $more_projects_img_alt_1 = $more_projects_img_alt_2 ?? '';      

?><section class="bg">
    <div class="more-projects">
        <h2>More Projects</h2>
        <div class="is-flex">
            <a href="project-2.php" title="project 2">
                <img src="<?php echo $more_projects_img_src_1; ?>" alt="<?php echo $more_projects_img_alt_1; ?>">
            </a>
            <a href="project-3.php" title="project 3">
                <img src="<?php echo $more_projects_img_src_2; ?>" alt="<?php echo $more_projects_img_alt_2; ?>">
            </a>
        </div>
    </div>
</section>
