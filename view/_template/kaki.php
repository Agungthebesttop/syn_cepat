    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery.min.js" ></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js" ></script>
    <script src="./js/scrollreveal.min.js"></script>
    <script>
      ScrollReveal().reveal('#bottom', {
        // delay:3000;
        distance: '200px',
        origin: 'bottom',
        duration: 2000,
        reset: true,
      });

      ScrollReveal().reveal('#top', {
        // delay:2000;
        distance: '200px',
        origin: 'top',
        duration: 2000,
        reset: true,


      });

      ScrollReveal().reveal('#left', {
        // delay:3000;
        distance: '200px',
        origin: 'left',
        duration: 2000,
        reset: true,
        // scale: 1.2,
        opacity: 100,


      });

      ScrollReveal().reveal('#right', {
        // delay:900;
        distance: '200px',
        origin: 'right',
        duration: 2000,
        reset: true,
        // scale: 1.5,
        opacity: 20,


      });

      ScrollReveal().reveal('#button', {
        // delay:900,
        distance: '40px',
        origin: 'top',
        duration: 2000,
        reset: true,
         // scale: 1.5,
         opacity: 20,

      });

      ScrollReveal().reveal('#top-text', {
        // delay:2000,
        distance: '30px',
        origin: 'top',
        // duration: 500,
        // reset: true,
        // scale: 1,
      });

     
    </script>
  </body>
</html>