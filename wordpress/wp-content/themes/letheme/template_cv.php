<?php /* Template Name: CV */

get_template_part( 'template-parts/header'); ?>

	<div id="primary" class="content-area">
        <h1>Categories :</h1>
		<main id="main" class="site-main" role="main">

            <?php
			/* Start the Loop */
            $cats = get_categories();

            foreach ($cats as $categories) {
                echo "<section>";
                echo "<h2>$categories->name</h2>";
                $posts = query_posts("category_name=".$categories->name);
            // $posts = get_posts('posts_per_page=100');
                foreach ($posts as $post) {
                    if ( has_tag( 'lelel' ) ) {
                        echo "<h4>"."<a class='tag' href='".esc_url( get_permalink() )."'>".$post->post_name.'</a>';
                        $post_tags = get_the_tags();
                        if ( $post_tags ) {
                            echo " tag:".$post_tags[0]->name;
                        }
                    // echo "<p>$post->post_content</p>";
                    // echo "</div>";
                        // get_template_part( 'template-parts/content', get_post_format() );
                    }else {
                        echo "<h4>"."<a href='".esc_url( get_permalink() )."'>".$post->post_name.'</a>';
                    }
                    if ( is_user_logged_in() ) {
                        echo "<a id='edit' ' href='".get_edit_post_link()."'> edit</a>";
                    }
                    // echo "<p>$post->post_content</p>";
                }
                echo "</section>";
                $post = get_post(  );
                $title = $post->post_title;

                // echo "<p>$title</p>";
            }

			// while ( have_posts() ) : the_post();
            //
			// 	/*
			// 	 * Include the Post-Format-specific template for the content.
			// 	 * If you want to override this in a child theme, then include a file
			// 	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			// 	 */
			// 	get_template_part( 'template-parts/content', get_post_format() );
            //
			// endwhile;


            ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
