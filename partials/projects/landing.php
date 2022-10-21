<?php 

    $landing_title = $landing_title ?? '';
    $landing_sub_title = $landing_sub_title ?? '';
    $landing_img_src = $landing_img_src ?? '';
    $landing_img_alt = $landing_img_alt ?? '';
    $landing_desc = $landing_desc ?? '';

?><section class="proj-landing">
    <img src="<?php echo $landing_img_src; ?>" alt="<?php echo $landing_img_alt; ?>">
    <div class="intro">
        <p><?php echo $landing_sub_title; ?></p>
        <h1><?php echo $landing_title; ?></h1>
        <p><?php echo $landing_desc; ?></p>
        <button class="btn">Live Site</button>
    </div>
</section>