    </div>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-30138793-2', 'auto');
      ga('send', 'pageview');

    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/countdown.min.js"></script>

  <?php if ($history->isStillInJail()): ?>

    <script type="text/javascript">
      if ( $('.big-yes').data('in-jail') ){
        var timerId =
          countdown(
            new Date( Date.UTC(2014,10,21,22,00) ),
            function(ts) {
              $.each(ts, function( index, value ) {
                $unit = $('.timer-item').find('.' + index)
                if ($unit.length > 0) {
                  $unit.html( pad( value, 2 ) );
                }
              });
            },
            countdown.DECADES|countdown.YEARS|countdown.MONTHS|countdown.DAYS|countdown.HOURS|countdown.MINUTES|countdown.SECONDS);
      }

      function pad(num, size){
        return ('000000000' + num).substr(-size);
      }
      //window.clearInterval(timerId);
    </script>
<?php endif; ?>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=169221459857145&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

  </body>
</html>

