<?php 

    $landing_title = $landing_title ?? '';
    $landing_sub_title = $landing_sub_title ?? '';
    $landing_img_src = $landing_img_src ?? '';
    $landing_img_alt = $landing_img_alt ?? '';
    $landing_desc = $landing_desc ?? '';
    $landing_live_btn = $landing_live_btn ?? '';
    $landing_code_btn = $landing_code_btn ?? '';

?><section class="proj-landing" data-aos="fade" data-aos-duration="3000">
    <img src="<?php echo $landing_img_src; ?>" alt="<?php echo $landing_img_alt; ?>">
    <div class="intro">
        <p><?php echo $landing_sub_title; ?></p>
        <h1><?php echo $landing_title; ?></h1>
        <p><?php echo $landing_desc; ?></p>
        <div class="btn-group is-flex">
            <a href="<?php echo $landing_live_btn; ?>" title="View Live Site" target="_blank">
                <button class="btn filled">Live Site</button>
            </a>
            <a href="<?php echo $landing_code_btn; ?>" title="View Source Code" target="_blank">
                <button class="btn outline">View Code</button>
            </a>
        </div>
    </div>
</section>