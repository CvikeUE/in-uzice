<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>

    <?php if( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" class="thumbnail-link">
            <?php the_post_thumbnail('full', ['class' => 'thumbnail', 'title' => get_the_title() ]); ?>
        </a>
    <?php endif; ?>

    <header class="header">
        <?php
            the_title(
                sprintf( 
                    '<h3 class="item-heading"><a class="item-heading-link" href="%s">', esc_attr( esc_url( get_permalink() ) ) 
                ), 
                '</a></h3>'
            );
        ?>
    </header>

    <div class="description">
        <?php the_excerpt(); ?>
    </div>

    <div class="item-meta">
        <p>
            <?php esc_html_e('Published by', 'vvm-starter'); ?> 
            <?php the_author_posts_link(); ?> 
            <?php esc_html_e('on', 'vvm-starter'); ?> 
            <?php echo esc_html(get_the_date()); ?>

		    <br>

            <?php if( has_category() ): ?>
                <?php esc_html_e('Categories', 'vvm-starter'); ?>: <span><?php the_category( ' ' ); ?></span>
            <?php endif; ?>

		    <br>

            <?php if( has_tag() ): ?>
                <?php esc_html_e('Tags', 'vvm-starter'); ?>: <span><?php the_tags( '', ', ' ); ?></span>
            <?php endif; ?>
		</p>
    </div>

</article> <!-- end post-item -->