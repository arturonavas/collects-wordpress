<?php
$full_width_title = get_field('full_width_title') ? get_field('full_width_title') : 'About Us';
?>

<div class="container-fluid p-0">
    <div class="page-title">
        <h1><?php echo $full_width_title; ?></h1>
    </div>
    
    <?php if ( have_rows( 'full_witdh_text_blocks' ) ) : ?>
        <?php while ( have_rows( 'full_witdh_text_blocks' ) ) : the_row(); ?>
        <div class="row __clean text-half">
            <div class="col-md-6">
                <?php the_sub_field( 'left_text' ); ?>
                <!-- <p>Colletts Travel has been curating bespoke luxury holidays and corporate trips for over 30 years. Since founding the company in 1983, Roy Collett has brought together some of the most knowledgeable and passionate travel agents in the industry. Our team tailor each trip to the needs of our loyal clients, helping to create unique experiences on every booking.</p> -->
            </div>
            <div class="col-md-6">
                <?php the_sub_field( 'right_text' ); ?>
                <!-- <p>Colletts Travel is part of Internova Travel Group, formally Travel Leaders Group, one of the world’s largest travel agency companies, offering our clients access to exclusive loyalty driven programs and travel expertise.</p> -->
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>

</div>