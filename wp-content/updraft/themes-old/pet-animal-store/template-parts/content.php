<?php
/**
 * The template part for displaying slider
 *
 * @package Pet Animal Store
 * @subpackage pet_animal_store
 * @since Pet Animal Store 1.0
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="services-box">
      <div class="service-image">
        <?php 
          if(has_post_thumbnail()) { 
            the_post_thumbnail(); 
          }
        ?>
      </div>
      <div class="service-text">
          <h2><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          <p><?php the_excerpt();?></p>
          <div class="service-btn">
            <a href="<?php the_permalink(); ?>" class="Masters-In-Digital-Marketing" title="<?php esc_html_e('Read More','pet-animal-store'); ?>"><?php esc_html_e('Read More','pet-animal-store'); ?></a>  
          </div> 
      </div>
  </div>
</div>