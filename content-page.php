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

<?php
    /** Bild1 */
    $acf_img1 = get_field('img1');
    $acf_img_bildtext1 = get_field('img_bildtext1');
    $acf_img_titel1 = get_field('img_titel1');
?>

<?php if($acf_img1 != false && $acf_img_bildtext1 != false && $acf_img_titel1 != false): ?>
<div class="acf-custom-image hentry">
    <figure>
        <h3><?php echo $acf_img_titel1; ?></h3>
        <a href="<?php echo $acf_img1['url'] ?>">
        <img src="<?php echo $acf_img1['url'] ?>" alt="<?php echo $acf_img1['title'] ?>" title="<?php echo $acf_img1['title'] ?>" >
        </a>
        <figcaption>
            <?php echo $acf_img_bildtext1; ?>
        </figcaption>
    </figure>
</div>
<?php endif; ?>

<?php
/** Bild2 */
$acf_img2 = get_field('img2');
$acf_img_bildtext2 = get_field('img_bildtext2');
$acf_img_titel2 = get_field('img_titel2');
?>

<?php if($acf_img2 != false && $acf_img_bildtext2 != false && $acf_img_titel2 != false): ?>
    <div class="acf-custom-image hentry">
        <figure>
            <h3><?php echo $acf_img_titel2; ?></h3>
            <a href="<?php echo $acf_img2['url'] ?>">
                <img src="<?php echo $acf_img2['url'] ?>" alt="<?php echo $acf_img2['title'] ?>" title="<?php echo $acf_img2['title'] ?>" >
            </a>
            <figcaption>
                <?php echo $acf_img_bildtext2; ?>
            </figcaption>
        </figure>
    </div>
<?php endif; ?>


<?php
/** Bild3 */
$acf_img3 = get_field('img3');
$acf_img_bildtext3 = get_field('img_bildtext3');
$acf_img_titel3 = get_field('img_titel3');
?>

<?php if($acf_img3 != false && $acf_img_bildtext3 != false && $acf_img_titel3 != false): ?>
    <div class="acf-custom-image hentry">
        <figure>
            <h3><?php echo $acf_img_titel3; ?></h3>
            <a href="<?php echo $acf_img3['url'] ?>">
                <img src="<?php echo $acf_img3['url'] ?>" alt="<?php echo $acf_img3['title'] ?>" title="<?php echo $acf_img3['title'] ?>" >
            </a>
            <figcaption>
                <?php echo $acf_img_bildtext3; ?>
            </figcaption>
        </figure>
    </div>
<?php endif; ?>


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







