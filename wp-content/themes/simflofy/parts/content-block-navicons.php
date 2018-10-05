<?php if( have_rows('lead') ): while ( have_rows('lead') ) : the_row(); ?>

<ul class="icons">
<?php if( have_rows('icons') ): while ( have_rows('icons') ) : the_row(); ?>

        <li>
          <?php if( have_rows('federation') ): while ( have_rows('federation') ) : the_row(); ?>

          <a href="<?php the_sub_field('link'); ?>">
            <img src="<?php the_sub_field('icon'); ?>">
            <h3><?php the_sub_field('title'); ?></h3>
          </a>
          <?php endwhile; endif; ?>
        </li>
        <li>
         <?php if( have_rows('migration') ): while ( have_rows('migration') ) : the_row(); ?>

          <a href="<?php the_sub_field('link'); ?>">
            <img src="<?php the_sub_field('icon'); ?>">
            <h3><?php the_sub_field('title'); ?></h3>
          </a>
          <?php endwhile; endif; ?>
        </li>
        <li>
          <?php if( have_rows('mip') ): while ( have_rows('mip') ) : the_row(); ?>

          <a href="<?php the_sub_field('link'); ?>">
            <img src="<?php the_sub_field('icon'); ?>">
            <h3><?php the_sub_field('title'); ?></h3>
          </a>
          <?php endwhile; endif; ?>
        </li>
        <?php endwhile; endif; ?>
      </ul>
<?php endwhile; endif; ?>