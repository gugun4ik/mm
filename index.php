<?php
/**
 * Template Name: main
 */
?>
<?php get_header(); ?>
<div id="header-wrapper">
    <div class="container"><!-- Banner Wrapper -->
        <div id="banner-wrapper"><!-- Banner -->
            <div id="banner" class="container">
                <div class="row"><div class="12u"><!-- Slider -->
                    <div id="slider">
                        <div class="viewer" style="-webkit-user-select: none; height: 832px; position: relative; overflow: hidden;">
                            <div class="reel" style="-webkit-user-select: none; position: absolute; left: -2400px; top: 0px; display: block; opacity: 0.925021;">
                                <div class="slide" style="-webkit-user-select: none; width: 100%; height: 832px; cursor: pointer; position: absolute;  top: 0px;" id="">
                                    <div class="info">
                                        <h2><?php the_field('slider_text_1_1'); ?><br> <?php the_field('slider_text_1_2'); ?></h2>
                                        <span><?php the_field('slider_text_1_3'); ?></span>
                                    </div>
                                    <img src="<?php echo get_field('slider_image_1'); ?>" alt="">
                                </div>
                                <div class="slide" style="-webkit-user-select: none; width: 100%; height: 832px; cursor: pointer; position: absolute;  top: 0px;" id="">
                                    <div class="info">
                                        <h2><?php the_field('slider_text_2_1'); ?><br> <?php the_field('slider_text_2_2'); ?></h2>
                                        <span><?php the_field('slider_text_2_3'); ?></span>
                                    </div>
                                    <img src="<?php echo get_field('slider_image_2'); ?>" alt="">
                                </div>
                                <div class="slide" style="-webkit-user-select: none; width: 100%; height: 832px; cursor: pointer; position: absolute;  top: 0px;" id="">
                                    <div class="info">
                                        <h2><?php the_field('slider_text_3_1'); ?><br> <?php the_field('slider_text_3_2'); ?></h2>
                                        <span><?php the_field('slider_text_3_3'); ?></span>
                                    </div>
                                    <img src="<?php echo get_field('slider_image_3'); ?>" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="indicator">
                            <ul>
                                <li class="" style="-webkit-user-select: none; cursor: pointer;">1</li>
                                <li class="" style="-webkit-user-select: none; cursor: pointer;">2</li>
                                <li class="active" style="-webkit-user-select: none; cursor: pointer;">3</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="portfolio-wrapper">
	<div id="portfolio" class="container">
		<div class="title">
			<h2><?php the_field('title'); ?></h2>
		</div>
		<p class="description"><?php the_field('description'); ?></p>
	</div>
</div>
<div class="main payrolling uitzendwerk">
    <div class="wrapper-inner">
		<section class="services">
		    <div class="content">
		        <ul class="services-list">
                    <?php $field = get_field('rotated_sliders');
                    foreach ($field as $key => $value): ?>
                        <li>
                            <a href="javascript:void(0)">
                                <div class="card-front">
                                    <img src="<?php echo $value['image']; ?>"/>
                                </div>
                                <div class="card-back">
                                    <strong><?php echo $value['title']; ?></strong><br>
                                    <p><?php echo $value['text']; ?></p>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
		    </div>
		</section>
	</div>
</div>
<?php get_footer(); ?>