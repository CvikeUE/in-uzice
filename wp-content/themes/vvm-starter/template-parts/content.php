<article id="article-<?php the_ID(); ?>" <?php post_class('single-content'); ?>>

    <header class="common-hero">

        <?php if( has_post_thumbnail() ) : ?>
            <div class="image-wrapper">
                <?php the_post_thumbnail('full', ['class' => 'image', 'title' => get_the_title() ]); ?>
            </div> <!-- end image-wrapper -->
        <?php endif; ?>

        <div class="content-wrapper">

            <div class="content">
                <h1 class="common-hero-heading"><?php the_title(); ?></h1>

                <div class="breadcrumbs">
                    Breadcrumbs
                </div>
            </div>
            
        </div> <!-- end content-wrapper -->

    </header> <!-- end common-hero -->


    <div class="main-container">

        <div class="content ugc">
            <?php the_content(); ?>	
        </div> 

    </div> <!-- end wrapper -->

</article> <!-- end single-content -->