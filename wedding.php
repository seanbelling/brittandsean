<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>brittandsean.com</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="/static/css/normalize.css">
        <link rel="stylesheet" href="/static/css/site.css">
        <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/backbone.js/1.1.0/backbone-min.js"></script>


        <script type="text/javascript">
          $(document).ready(function() {
            var AppRouter = Backbone.Router.extend({
              routes: {
                "*url": "defaultRoute"
              }
            });

            var router = new AppRouter;
            router.on('route:defaultRoute', function (url) {
              var template;
              if (!url) {
                template = TEMPLATES.main;
              } else {
                // Special case - render guestbook view
                if (url === 'guestbook') {
                  $('#main').html('<img src="/static/img/ajax-loader.gif" style="display:block;margin: 50px auto;" />');
                  $.ajax({
                    url: '/guestbook-service',
                    type: 'GET',
                    success: function(data) {
                      var guestbookEntries = new GuestbookCollection(data);
                      var guestbookView = new GuestbookView({
                        collection: guestbookEntries
                      });
                      $('#main').html(guestbookView.render().$el);
                      return;
                    }
                  });
                  return;
                }
                var template = TEMPLATES[url];
                if (!template) {
                  template = TEMPLATES.comingSoon;
                }
              }
              /*$('#main').fadeOut(500, function() {
                $(this).html(template).fadeIn(500);
              }); */

            });
            Backbone.history.start({pushState: true});

            $(document).on('click', 'header ul a, a.internal', function(e) {
              //router.navigate($(this).attr('href'), {trigger: true});
              //e.preventDefault();
            });

            var requestResponses = [
              'My, what wonferful taste you have!',
              'Music to my ears.',
              'Oh yes, the funky chicken will be an excellent pairing with that number.',
              'Cool, we\'ll play that after the Slayer song.',
              'Oh, you went there didn\'t you?',
              'Well it\'s no Burt Bacharach but I guess it\'ll do.'
            ];

            $(document).on('click', '#request-submit', function(e) {
              $.ajax({
                type: 'POST',
                url: '/request-a-song-submit',
                data: $('#request-form').serialize(),
                success: function() {
                  var response = requestResponses[Math.floor(Math.random()*requestResponses.length)];
                  $('#request-form').after('<p><br />' + response).hide();
                }
              })
            });

          });
        </script>

    </head>
    <body>
        <div id="content">
          <header class="clearfix">
            <h1>BRITT &amp; SEAN.</h1>
            <ul>
              <li><a href="/">home</a></li>
              <li><a href="/wedding">the big day</a></li>
              <li><a href="/travelers">for travelers</a></li>
              <li><a href="/faq">FAQ</a></li>
              <li><a href="/guestbook">guestbook</a></li>
            </u>
          </header>

          <section id="main">
            <div class="page-content">
              <h2>The Big Day</h2>
              <h3>Ceremony</h3>
              <p>True story: locals frequently walk by the unassuming grey facade of the Swedenborgian without even registering its existence.<br />
              However, a couple of our friends did notice. Rightfully intrigued, they attempted to bust through the locked iron gates.
              Sadly they were no match for the gates and settled for a few furtive peeks into the hidden courtyard.<br />
              Their curiosity and yours, dear friend, will soon be settled.</p>
              <p>We are happy to announce that our cermony will be held at the
              <a href="http://www.sfswedenborgian.org/Landmarking/Landmark.asp" target="_blank">Swedenborgian Church</a>
              in San Francisco<br />at 4pm on 30th August 2014.<br />
              Address: 2107 Lyon St, San Francisco, CA 94115 <a href="http://goo.gl/maps/J9Zjp" target="_blank">(map)</a></p>
              <p>The Swedenborgian has become quite the Wilde family tradition.<br />Britt's parents Rich and Sarah were married there in 1974
              and her sister Blair was married there in 2003.<br />
              In the early hungover hours following Britt's 30th birthday, Sean had his first introduction to the Swedenborgian to attend
              the christening of Britt's niece.</p>
              <p>The Swedenborgian has heralded great love into the Wilde family and we are thrilled to begin our own journey there.</p>
              <h3>Reception</h3>
              <p>After the ceremony guests will be transported to the
              <a href="http://www.presidio.gov/venues/Pages/Log-Cabin.aspx" target="_blank">Log Cabin</a> in San Francisco's Presidio
              <a href="http://goo.gl/maps/RLyKO" target="_blank">(map)</a> for fun, dinner and dancin'.</p>
              <p>Britt was living in the Presidio when she journeyed back from her European romp and initial Sean encounter.
              Many emails were exchanged in those halcyon days.
              Britt used to run the Presidio trails wondering if Sean would ever see the Presidio's beauty alongside her.
              And indeed he did. Together they will celebrate not only the beauty of their surroundings, but their own love and that of family
              and friends on their celebratory day.</p>
            </div>
          </section>
        </div>


        <script src="/static/js/template/template.js"></script>
        <script src="/static/js/model/guestbook.js"></script>
        <script src="/static/js/collection/guestbook.js"></script>
        <script src="/static/js/view/guestbook-form.js"></script>
        <script src="/static/js/view/guestbook.js"></script>
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
