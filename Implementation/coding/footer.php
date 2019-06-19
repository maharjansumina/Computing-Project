 <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <div class="sm-icon">
              <a href="http://facebook.com"><img src="images/fb.png" class="footer-img"></a>
              <a href="http://twitter.com"><img src="images/tw.png" class="footer-img"></a>
              <a href="http://instagram.com"><img src="images/in.png" class="footer-img"></a>
        </div>
        <p class="m-0 text-center text-white">Copyright &copy; Airline Reservation System 2019</p>
      </div>
      <!-- /container -->
    </footer>


    <script src="vendor/jquery/jquery.slim.min.js"></script>
    <script src="vendor/jquery/bootstrap.min.js"></script>
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
    <script src="js/scrolling-nav.js"></script>
    <!-- <script src="js/cookieinfo.min.js"></script> -->
    <script src="js/slider.js"></script>
    <script type="text/javascript" id="cookieinfo"
  src="//cookieinfoscript.com/js/cookieinfo.min.js"
  data-bg="#645862"
  data-fg="#FFFFFF"
  data-link="#F1D600"
  data-cookie="CookieInfoScript"
  data-text-align="left"
       data-close-text="Got it!">
</script>

    <script>
    $(".slider-container").ikSlider({
      speed: 500
    });
    $(".slider-container").on('changeSlide.ikSlider', function (evt) { console.log(evt.currentSlide); });

    </script>
<?php //include'cookie.php'; ?>
  </body>

</html>