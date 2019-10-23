  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/menustick.js"></script>
  <script src="assets/js/parallax.js"></script>
  <script src="assets/js/easing.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/smoothscroll.js"></script>
  <script src="assets/js/masonry.js"></script>
  <script src="assets/js/imgloaded.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/colorfinder.js"></script>
  <script src="assets/js/gridscroll.js"></script>
  <script src="assets/js/contact.js"></script>
  <script src="assets/js/common.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script type="text/javascript">
    jQuery(function($) {
      $(document).ready(function() {
        //enabling stickUp on the '.navbar-wrapper' class
        $('.navbar-wrapper').stickUp({
          parts: {
            0: 'banner',
            1: 'aboutus',
            2: 'specialties',
            3: 'gallery',
            4: 'feedback',
            5: 'contact'
          },
          itemClass: 'menuItem',
          itemHover: 'active',
          topMargin: 'auto'
        });
      });
    });
  </script>
  <script src="assets/contactform/contactform.js"></script>


</body>

</html>