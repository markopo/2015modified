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







