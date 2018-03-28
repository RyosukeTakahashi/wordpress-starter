<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

  <main>
  <section id="work_domain">
    <h2>事業紹介</h2>
  </section>
  <section id="about">
    <h2>ABOUT</h2>
  </section>
  <section id="news">
    <h2>NEWS</h2>
    <div class='d-flex'>
        <div class="col-2 p-2">2018-03-26</div>
        <div class="col-1 p-2">ニュース</div>
        <div class="col-8 p-2">Web pageをリニューアルしました</div>
        <div class="col-1 p-2">icon</div>
    </div>
  </section>
  </main>
  <div class="<?php echo esc_attr( $container ); ?>" id="content">


		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
