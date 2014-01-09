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
              <h2>For Travelers</h2>
              <h3>Accomodation</h3>
              <p>San Francisco is hip, delicious, and a whole lotta fun. Of course this is no secret and the city buzzes with locals and tourists alike. August 30 falls on Labor Day weekend which means two things: locals tend to flee the city while tourists tend to invade. While the overall population may remain the same, you can bet that motels, hotels, and vacation rentals will go quickly.</p>
              <p>Our suggestion: Experience SF like a local and rent a flat (SF speak for apartment) on Airbnb.com with a few friends. SF is really just a collection of very distinct neighborhoods, each with its own flavor and culture.</p>

              <p>To see what works for you...</p>

              <ul>
                <li>Consult: <a href="http://www.sfgate.com/neighborhoods/" target="_blank">http://www.sfgate.com/neighborhoods/</a></li>
                <li>Laugh with: <a href="http://www.thebolditalic.com/articles/1958-moving-to-san-francisco" target="_blank">http://www.thebolditalic.com/articles/1958-moving-to-san-francisco</a></li>
                <li>Play with: <a href="https://www.airbnb.com/locations/san-francisco/neighborhoods" target="_blank">https://www.airbnb.com/locations/san-francisco/neighborhoods</a><br /><br />
                Just make sure that you are in close proximity to <a href="http://www.sfmta.com/maps" target="_blank">MUNI</a> or <a href="https://www.bart.gov/stations" target="_blank">BART</a> to make your inner-city transit easy.</li>
              </ul>

              <h4><b>Our Airbnb.com favorites:</b></h4>
              <ul>
                <li><a href="https://www.airbnb.com/rooms/361945?checkin=08%2F29%2F2014&checkout=08%2F31%2F2014&guests=2&s=c1bd" target="_blank">4 person Duboce Triangle</a></li>
                <li><a href="https://www.airbnb.com/rooms/1030352?checkin=08%2F29%2F2014&checkout=08%2F31%2F2014&guests=2&s=f89b" target="_blank">5 person Mission</a></li>
                <li><a href="https://www.airbnb.com/rooms/2038935?checkin=08%2F29%2F2014&checkout=08%2F31%2F2014&guests=2&s=f89b" target="_blank">5 person Mission plus</a></li>
                <li><a href="https://www.airbnb.com/rooms/707354?checkin=08%2F29%2F2014&checkout=08%2F31%2F2014&guests=2&s=8b9b" target="_blank">6 person Telegraph Hill</a></li>
                <li><a href="https://www.airbnb.com/rooms/1783174?checkin=08%2F29%2F2014&checkout=08%2F31%2F2014&guests=5&s=ecc4" target="_blank">7 person Divisidero Corridor</a></li>
                <li><a href="https://www.airbnb.com/rooms/1081165?checkin=08%2F29%2F2014&checkout=08%2F31%2F2014&guests=5&s=46fb" target="_blank">7 person Pacific Heights</a></li>
                <li><a href="https://www.airbnb.com/rooms/1257035?checkin=08%2F29%2F2014&checkout=08%2F31%2F2014&guests=6&s=c669" target="_blank">8 person Upper Haight</a></li>
              </ul>

              <h4><b>Hotels</b></h4>
              <p>Hotels in SF tend to be expensive. Expect $250+ for downtown and boutique hotels. Each has a different feel and style.<br />Here are a few solid options:</p>
              <ul>
                <li><a target="_blank" href="http://www.wsanfrancisco.com/">Large and modern: The W</a></li>
                <li><a target="_blank" href="http://www.hotelpalomar-sf.com/">Small and boutique: Hotel Palomar</a></li>
                <li><a target="_blank" href="http://www3.hilton.com/en/hotels/california/hilton-san-francisco-union-square-SFOFHHH/index.html">A safe bet: Union Square Hilton</a></li>
                <li><a target="_blank" href="http://www.sfpalace.com/">An Opulent SF institution: The Palace Hotel</a></li>
              </ul>
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
