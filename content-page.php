<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->

<!-- featherlight gallery -- start -->
<?php
    $has_featherlightimages = false;
    $acf_img_gallery_thumbnail_first = get_field("img_gallery_thumbnail1");
    $acf_img_gallery_image_first = get_field("img_gallery_image1");
    $has_not_any_featherlightimages = $acf_img_gallery_thumbnail_first === false && $acf_img_gallery_image_first === false;
?>

<?php if(!$has_not_any_featherlightimages): ?>
<div id="gallery-container-<?php echo get_the_ID() ?>" class="acf-custom-image hentry" >
    <?php
        $acf_gallery_title = get_field("img_gallery_title");
    ?>
    <?php if($acf_gallery_title != false): ?>
        <h3><?php echo $acf_gallery_title; ?></h3>
    <?php endif; ?>

    <?php for($acf_img_gallery_index = 1;$acf_img_gallery_index<24;$acf_img_gallery_index++): ?>
        <?php
            $acf_img_gallery_thumbnail = get_field("img_gallery_thumbnail$acf_img_gallery_index");
            $acf_img_gallery_image = get_field("img_gallery_image$acf_img_gallery_index");
        ?>
        <?php if($acf_img_gallery_thumbnail != false && $acf_img_gallery_image != false): ?>
            <?php
                $has_featherlightimages = true;
            ?>

            <a href="<?php echo $acf_img_gallery_image["url"]; ?>" class="thumbnail gallery" >
                <img class="img-gallery-thumb" src="<?php echo $acf_img_gallery_thumbnail["url"]; ?>" alt="<?php echo $acf_img_gallery_thumbnail["title"]; ?>" title="<?php echo $acf_img_gallery_thumbnail["title"]; ?>"  >
            </a>
        <?php endif; ?>

    <?php endfor; ?>
</div>

<?php if($has_featherlightimages === true): ?>
<script>
    jQuery(function(){
        jQuery('#gallery-container-<?php echo get_the_ID() ?> .gallery').featherlightGallery();
    });
</script>
<?php endif; ?>
<?php endif; ?> 
<!-- featherlight gallery -- end -->

<!-- custom images -- start -->
<?php for($acf_img_index = 1;$acf_img_index<10;$acf_img_index++): ?>
<?php
    /** Bilden */
    $acf_img = get_field("img$acf_img_index");
    $acf_img_bildtext = get_field("img_bildtext$acf_img_index");
    $acf_img_titel = get_field("img_titel$acf_img_index");
?>

<?php if($acf_img != false && $acf_img_bildtext != false && $acf_img_titel != false): ?>
<div class="acf-custom-image hentry">
    <figure>
        <h3><?php echo $acf_img_titel; ?></h3>
        <a href="<?php echo $acf_img['url'] ?>">
        <img src="<?php echo $acf_img['url'] ?>" height="<?php echo $acf_img['height'] ?>" width="<?php echo $acf_img['width'] ?>" alt="<?php echo $acf_img['title'] ?>" title="<?php echo $acf_img['title'] ?>" >
        </a>
        <figcaption>
            <?php echo $acf_img_bildtext; ?>
        </figcaption>
    </figure>
</div>
<?php endif; ?>
<?php endfor; ?>
<!-- custom images -- end -->




<?php
    $acf_nyheter_text = get_field('nyheter_text');
?>

<?php if($acf_nyheter_text != false): ?>
<div class="nyheter_text hentry">
  <p>
      <?php echo $acf_nyheter_text; ?>
  </p>
</div>
<?php endif; ?>







