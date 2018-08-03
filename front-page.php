<?php 
/*
Template Name: Front-page
Template Post Type: post, page, product
 */
?>
<?php get_header(); ?>

</div>
<div class="slide">
  <div class="contenedor-jtv">
    <div class="row">
      <div class="col-md-12">
        <div class="estilos_banner">
        <?php include (TEMPLATEPATH . '/libs/banner.php');   ?> 
        </div>
      </div>
    </div>
  </div>    
</div>

<div class="contenedor-jtv">

<div class="con-secciones">
  <div class="stream">
    <iframe id="ls_embed_1533298397" src="https://livestream.com/accounts/17608437/events/4834657/player?width=640&height=360&enableInfoAndActivity=true&defaultDrawer=&autoPlay=true&mute=false" width="640" height="360" frameborder="0" scrolling="no" allowfullscreen> </iframe>
  </div>
  <div class="padre-santoral">
		<div class="div4">
			<a class="li4" href="http://www.canaljesustv.com/category/santos-del-mes/">
				<span><i class="si fa fa-book"></i>Santo del día</span>
			</a>
		</div> 
		<div class="div2">
			<a class="li2" href="http://www.canaljesustv.com/padre-hugo-estrada/">
				<span><i class="si fa fa-caret-right"></i>Padre Hugo Estrada</span>
			</a>
		</div>    
  </div>
</div>

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
