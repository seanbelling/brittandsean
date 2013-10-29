<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>brittandsean.com - coming soon</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="/static/css/normalize.css">
        <link rel="stylesheet" href="/static/css/site.css">
        <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
        <script src="/static/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.0/backbone-min.js"></script>


        <script type="text/javascript">
          $(document).ready(function() {
            var AppRouter = Backbone.Router.extend({
              routes: {
                "": "home",
                "*actions": "defaultRoute"
              }
            });
            
            var app_router = new AppRouter;
            app_router.on('route:home', function () {
              $('#main').html($('#main-template').html());
            });
            app_router.on('route:defaultRoute', function (actions) {
              $('#main').html('coming soon');
            });
            Backbone.history.start({pushState: true});

            $('header ul a').click(function(ev) {
              app_router.navigate($(this).attr('href'), {trigger: true});
              return false;
            });

          });
        </script>

    </head>
    <body>
        <div id="content">
          <header class="clearfix">
            <h1>BRITT &amp; SEAN</h1>
            <ul>
              <li><a href="/">home</a></li>
              <li><a href="/story">our story</a></li>
              <li><a href="/wedding">the wedding</a></li>
              <li><a href="/transportation">transportation</a></li>
              <li><a href="/fun">fun stuff</a></li>
            </u>
          </header>

          <section id="main">
            
          </section>
        </div>

        <script type="text/template" id="main-template">
          <div class="main-img">
            <div class="header-wrap">
              <h2>GETTIN' MARRIED</h2>
              <div class="line"></div>
            </div>

            <img class="main" src="/static/img/main.jpg" alt="lol" />
          </div>
        </script>

        <script src="/static/js/main.js"></script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-44949795-1', 'brittandsean.com');
          ga('send', 'pageview');
        </script>
    </body>
</html>
