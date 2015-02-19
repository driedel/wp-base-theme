<?php
	require('config/global-vars.php');
	// $global_css
	// Concatenar com a variável de css global os arquivos
	// que devem ser carregados nesta página
	// Case não tenha arquivos específicos ele carregará
	// apenas o padrão do site.
	// ex: $global_css .= ','.AssetsRoot.'css/home.css';

	include( Structure.'header.php' );
?>

<div <?php $HtmlWrappers -> MainContent(); ?>>
	<section <?php $HtmlWrappers -> PrimarySection(); ?>>
		<div <?php $HtmlWrappers -> SiteContent(); ?> role="main">

		<?php
			if ( have_posts() ) {

				include( Modules.'Tag/header.php' );
				// .tag-header

					// Start the Loop.
					while ( have_posts() ) {
						the_post();
						include( Modules.'content.php' );
					}

					// Previous/next page navigation.
					// twentyfourteen_paging_nav();

			} else {
				// If no content, include the "No posts found" template.
				include( Modules.'content-none.php' );
			}
		?>
		</div><!-- #content -->
	</section><!-- #primary -->

	<?php include( Modules.'sidebar-content.php' ); ?>
</div><!-- #main-content -->

<?php include( Structure.'footer.php' );
