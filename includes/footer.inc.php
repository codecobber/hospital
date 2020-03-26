
<!-- Footer Partial -->

      <footer class="container" id="footer">
        <div class="row footerTop">
          <div class="rowNo39 columns">
            <div class="copyright">
              Elegance &copy; 2018 . Design by Code Cobber . Powered by GetSimple
            </div>

              <ul class="icons">
                <li><a class="blockSec" id="cblocks" href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a></li>
                <li><a class="blockSec" id="fblocks" href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a></li>
                <li><a class="blockSec" id="iblocks" href="#"><i class="fa fa-pinterest-p fa-lg" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
      </footer>



    <script src="<?php get_theme_url; ?>/js/slidePush.js"></script>
    <script>
      // When the user scrolls down 20px from the top of the document, slide down the navbar
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

          $(document).ready(function(){
            $('#nav-icon1').css('background-color','#195991');
            $('#nav-icon1 span').css('background-color','#fff');
            $('#navLogo').css('display','none');
          });
        } else {
          $(document).ready(function(){
            $('#nav-icon1').css('background-color','#fff');
            $('#nav-icon1 span').css('background-color','#195991');
            $('#navLogo').css('display','block');
          });
        }
      }
    </script>

  </div><!-- close #main -->
  </body>

</html>
