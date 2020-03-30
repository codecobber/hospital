<?php include('includes/header.inc.php'); ?>
          <!-- Parallax Header -->

    <div class="pageHeaderGrey">
      <h1><?php get_page_title();?></h1>

          <div class="crumbsBG">
          <div id="bck_1" class="bck contentBlock container">
             <div id="block_1" class="row rowNo23">
               <div class="l12 m12 columns">
                  <div class="breadcrumbs">
                    <a href="<?php echo find_url('index',null); ?>">Home</a>
                    <?php get_i18n_breadcrumbs(return_page_slug()); ?>
                  </div>
                </div>
              </div>
          </div>
        </div>

    </div>

    <div class='container' id='start'>
        <div id="bck_2" class="bck contentBlock">
           <div id="block_2" class="row rowNo23">
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
