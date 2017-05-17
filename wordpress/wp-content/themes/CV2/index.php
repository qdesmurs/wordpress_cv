<?php /* Template name: CV2 */ ?>
<?php get_header(); ?>
<div class="me">
    <h1>Moi :</h1>
    <h3>Nom : Desmurs</h3>
    <h3>Prenom : Quentin</h3>
    <h3>Date de naissance : 30/07/1992</h3>
    <h3>Mail : Zhor.osu@gmail.com</h3>
</div>
<div id="primary" class="content-area">
    <h1>Categories :</h1>
    <main>

        <?php
        $cats = get_categories();

        foreach ($cats as $categories) {
            echo "<section>";
            echo "<details>";
            echo "<summary>";
            echo "<h2>$categories->name</h2>";
            echo "</summary>";
            $posts = query_posts("category_name=".$categories->name);
            foreach ($posts as $post) {
                if ( has_tag( 'lelel' ) ) {
                    echo "<h4>"."<a class='tag' href='".esc_url( get_permalink() )."'>".$post->post_name.'</a>';
                    $post_tags = get_the_tags();
                    if ( $post_tags ) {
                        echo " tag:".$post_tags[0]->name;
                    }
                }else {
                    echo "<h4>"."<a href='".esc_url( get_permalink() )."'>".$post->post_name.'</a>';
                }
                if ( is_user_logged_in() ) {
                    echo "<a id='edit' ' href='".get_edit_post_link()."'> edit</a>";
                }
            }
            echo "</details>";
            echo "</section>";
            $post = get_post(  );
            $title = $post->post_title;

        }
        ?>

    </main>
    <div class="case">
        <p id="lenny">( ͡° ͜ʖ ͡°)</p>
    </div>
</div>
<?php get_footer() ?>
