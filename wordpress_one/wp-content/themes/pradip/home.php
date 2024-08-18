<?php

/*
    Template Name: Home Page 

*/

?>

<?php get_header(); ?>

<main>
    <h2>Welcome to Home Page </h2>
    <h1><?php the_title(); ?></h1>


    <?php the_content(); ?>
    <!-- Loop Posts  -->
    <?php 
        $datas = new wp_query(array(
            'post_type'=> 'post',
            // display specific category post 
            'tax_query' => array(array(
                'taxonomy' => 'people',
                'field' => 'slug',
                'terms' => 'bob',
                ))
        ));

        // echo "<pre>";
        // print_r($datas);
        // echo "</pre>";
        
        while($datas->have_posts()){
            $datas->the_post();

            the_title();
        }
    ?>
</main>

<!-- footer  includes  -->
<?php get_footer(); ?>