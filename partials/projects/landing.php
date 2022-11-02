<?php 

    $landing_title = $landing_title ?? '';
    $landing_sub_title = $landing_sub_title ?? '';
    $landing_img_src = $landing_img_src ?? '';
    $landing_img_alt = $landing_img_alt ?? '';
    $landing_desc = $landing_desc ?? '';

?><section class="proj-landing">
    <img data-aos="fade" data-aos-delay="1000" data-aos-duration="2000" src="<?php echo $landing_img_src; ?>" alt="<?php echo $landing_img_alt; ?>">
    <div class="intro">
        <p data-aos="fade" data-aos-delay="500" data-aos-duration="2000"><?php echo $landing_sub_title; ?></p>
        <h1 data-aos="fade" data-aos-duration="2000"><?php echo $landing_title; ?></h1>
        <p data-aos="fade" data-aos-delay="1000" data-aos-duration="2000"><?php echo $landing_desc; ?></p>
        <button data-aos="fade" data-aos-delay="1000" data-aos-duration="2000" class="btn">Live Site</button>
    </div>
</section>