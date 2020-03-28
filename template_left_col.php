<?php include('includes/header.inc.php'); ?>
          <!-- Parallax Header -->

    <div class="pageHeaderGrey">
      <h1><?php get_page_title();?></h1>
    </div>

    <div class='container' id='start'>
        <div id="bck_1" class="bck contentBlock">
           <div id="block_1" class="row rowNo23">
             <div class="l9 m9 columns">
               <?php get_page_content();?>
             </div>

           <div class="l3 m3 columns">
             <?php get_component('sidebar'); ?>
           </div>
         </div>
      </div>
    </div>

    <?php include('includes/footer.inc.php'); ?>
