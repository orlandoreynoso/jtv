<?php 
/*
Template Name: Front-page
Template Post Type: post, page, product
 */
?>
<?php get_header(); ?>
<div class="slide">
    <div class="row">
      <div class="col-md-12">
        <?php include (TEMPLATEPATH . '/libs/banner.php');   ?> 
      </div>
    </div>
</div>
<?php include (TEMPLATEPATH . '/libs/menu.php'); ?>
<section class="secciones-jtv">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <article class="row">
        <?php include (TEMPLATEPATH . '/libs/secciones.php');  ?>
      </article>          
    </div>
  </div>
</div>  
</section>
<section class="con-general">
  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-md-8 con">
          <div class="titulo">
            <div class="mapeo"><?php the_breadcrumb(); ?></div>
          </div>
          <div class="interiores">
            <?php get_template_part( 'template/cover', 'boletines' ); ?>
            <?php //  echo  'estoy en portada';      ?>    
            <?php
              while ( have_posts() ) : the_post(); 
                the_content();           
              endwhile;
            ?>
          </div>
       </div>
        <div class="col-xs-12 col-md-4 side">
          <div class="entradas">
          <div class="search"><?php  get_search_form(); ?></div>
            <div class="titulo_entradas">
              <h3>Entradas recientes</h3>
            </div>
            <div class="recientes">
        <?php get_sidebar(); ?>
            </div>  
          </div>        
        </div>      
    </div>
  </div>
</section>
<?php get_footer(); ?>
