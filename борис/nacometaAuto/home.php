<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>

    <main>
        <div class="center">
        <div class="mechta">
            <h1>Самые активные мечтатели</h1>
            <button>Показать все мечты</button>
        </div>
        <div class="col_mechta">
        <?php
global $post;

$myposts = get_posts([
	'numberposts' => -1,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>

<div class="mechta1">

                <?php the_post_thumbnail(
                 array(360, 228),
                ); ?>

                <p class="bold"><?php the_title(); ?></p>
                <p class="mechta_text"><?php the_content(); ?></p>
                    <div class="linia"></div>
                    <p class="summa">€ 3 250 собрано из € 4 300</p>

            </div>
		
<?php } } wp_reset_postdata(); ?>
                

        </div>
        <div class="nacometa">
            <p>Nacometa.com — онлайн-сообщество людей, вдохновленных идеей взаимной поддержки </p>
        </div>
      
        
       
       
        </div>
    </main>
 
    <?php get_footer(); ?>