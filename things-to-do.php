<?php
  require_once 'header.php';
?>
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

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="/static/js/jquery.ui.map.full.min.js" type="text/javascript"></script>


        <script type="text/javascript">

        $(document).ready(function() {
          $('#map_canvas').gmap({
            'center': '37.7749295,-122.4494155',
            'zoom': 12
          });


          var places = {
            'coffee': [
              {
                'name': 'Trouble Coffee Co',
                'address': '',
                'description': 'BEST coffee outside Australia! Get the cinnamon toast mmmmm.',
                "lat" : 37.7602986,
                "lng" : -122.5053705
              },
              {
                'name': 'Sightglass Coffee',
                'address': '',
                'description': 'Excellent coffee and roasted on site. Huge open space',
                "lat" : 37.7770883,
                "lng" : -122.4084674
              },
              {
                'name': 'Réveille Coffee Co.',
                'address': '',
                'description': 'Cool little North Beach cafe with decent coffee. Castro location opening soon',
                "lat" : 37.7971341,
                "lng" : -122.4058092
              },
              {
                'name': 'Blue Bottle Coffee',
                'address': '',
                'description': 'Good coffee, lines can be really long on weekends and nice days',
                "lat" : 37.794746,
               "lng" : -122.3932846
              },
              {
                'name': 'Ritual Coffee Roasters',
                'address': '',
                'description': '',
                "lat" : 37.7564371,
                "lng" : -122.4213655
              }
            ],
            'food': [
              {
                'name': 'Little Star Pizza- Divisadero',
                'address': '846 Divisadero St, San Francisco, CA',
                'description': 'You haven\'t lived until you\'ve had deep dish pizza. Period. Second location in the  Mission- Valencia and 15th.',
                "lat" : 37.7775135,
                "lng" : -122.4381721
              },

              {
                'name': 'Bi-Rite Creamery',
                'address': '3692 18th St, San Francisco, CA',
                'description': 'The long line is worth the wait! Get the salted caramel flavor. (And at least two others!) Then walk across the street and eat it at Dolores Park.',
                "lat" : 37.7614556,
                "lng" : -122.4259224,
              },

              {
                'name': 'Tartine Bakery & Cafe',
                'address': '600 Guerrero St, San Francisco, California',
                'description': 'Amazing baked goods and bread. Famous morning buns.',
                "lat" : 37.7614184,
                "lng" : -122.4241038
              },

              {
                'name': 'Ike\'s Place',
                'address': '3489 16th St, San Francisco, CA',
                'description': 'HUGE and delicious sandwiches. Every flavor combo you could want!',
                "lat" : 37.7642952,
                "lng" : -122.430619
              },

              {
                'name': 'Burma Superstar',
                'address': '309 Clement St, San Francisco, CA',
                'description': 'Burmese dishes, some with Thai influences. Delicious! Long waits- explore Clement Street or go 2 blocks over for their sister restaurant B Star.',
                "lat" : 37.7829318,
                "lng" : -122.4625782
              },

              {
                'name': 'The Ice Cream Bar',
                'address': '815 Cole St, San Francisco, CA',
                'description': 'Awesome and super retro. Skip the ice cream and order something at the soda fountain in the back. Boozy milkshakes!!',
                "lat" : 37.766484,
                "lng" : -122.4501262
              },

              {
                'name': 'Magnolia Gastropub and Brewery',
                'address': '1398 Haight St, San Francisco, CA',
                'description': 'Great microbrewery with fancy pub food',
                "lat" : 37.7702325,
                "lng" : -122.4453001
              },

              {
                'name': 'Bun Mee',
                'address': '2015 Fillmore St, San Francisco, California',
                'description': 'Great Bahn Mi\'s, fun and casual',
                 "lat" : 37.7880942,
                "lng" : -122.4336601
              },

              {
                'name': 'Suppenküche',
                'address': '525 Laguna St, San Francisco, CA',
                'description': 'Traditional German food done SF style. (Fresh and delicious!) Big tables, litre beers. Prost!',
                "lat" : 37.77626679999999,
                "lng" : -122.4264291
              },

              {
                'name': 'Blue Barn Gourmet',
                'address': '2105 Chestnut St, San Francisco, CA',
                'description': 'Delicious and fancy salad and sandwich shop',
                "lat" : 37.8005863,
                "lng" : -122.4380465
              },

              {
                'name': 'SusieCakes Bakery',
                'address': '2109 Chestnut St, San Francisco, CA',
                'description': 'Favorite cake and cupcakes in the bay!',
                "lat" : 37.8005728,
                "lng" : -122.438149
              },

              {
                'name': 'The Sentinel',
                'address': '35 New Montgomery St, San Francisco, CA',
                'description': 'Take away sandwiches. Best in the city! Only open weekdays.',
                "lat" : 37.78822359999999,
                "lng" : -122.4015923
              },

              {
                'name': 'Kokkari Estiatorio',
                'address': '200 Jackson St, San Francisco, CA',
                'description': 'Best Mediterranean food in the city. Share a few appetizers- they are the stars. Kinda fancy though so dress nicely',
                "lat" : 37.7971369,
                "lng" : -122.3996476
              },

              {
                'name': 'Umami Burger',
                'address': '2184 Union St, San Francisco, CA',
                'description': 'Fancy delicious hamburgers. Truffle fries!',
                "lat" : 37.7972834,
                "lng" : -122.435199
              },

              {
                'name': 'Outerlands',
                'address': '4001 Judah St, San Francisco, CA',
                'description': 'Adorable, tiny restaurant. Gorgeous brunch and lunches.',
                 "lat" : 37.7602646,
                 "lng" : -122.504987
              },

              {
                'name': 'Park Chalet Garden Restaurant',
                'address': '1000 Great Hwy, San Francisco, CA',
                'description': 'Great brewery and restaurant. Delicious after a long bike ride through the park.',
                "lat" : 37.7694498,
                "lng" : -122.5102322
              },

              {
                'name': 'Off the Grid Thursday Lunch',
                'address': '1150 Market St, San Francisco, CA 94102',
                'description': 'A collection of food trucks in one place. Thursdays 11-2pm only.',
                "lat" : 37.78018770000001,
                "lng" : -122.4126104
              },

              {
                'name': 'SoMa StrEat Food Park',
                'address': '428 11th St, San Francisco, CA',
                'description': 'Out of the way, but a great collection of food trucks and picnic spots.',
                "lat" : 37.769777,
                "lng" : -122.411897
              },

              {
                'name': 'Rosamunde Sausage Grill',
                'address': '545 Haight St, San Francisco, CA',
                'description': 'Delicious and crazy sausage flavors. Eat it next door at Toronado bar aside a rare IPA.',
                "lat" : 37.7718371,
                "lng" : -122.4311251
              },

              {
                'name': 'In-N-Out Burger',
                'address': '333 Jefferson St, San Francisco, CA',
                'description': 'Yes it\'s fast food. And if you haven\'t tried it (double double with grilled onions and animal style fries), you haven\'t truly visited California.',
                "lat" : 37.8079231,
                "lng" : -122.418332
              },

              {
                'name': 'Absinthe Brasserie & Bar',
                'address': '398 Hayes St, San Francisco, CA',
                'description': 'Amazing food and creative, delicious cocktails. A bit fancy but worth it. Separate bar area if you just want cocktails',
                "lat" : 37.7770062,
                "lng" : -122.42289
              }
            ]
          };

          var show = function(type) {
            $('#places').empty();
            $('#map_canvas').gmap('clear', 'markers');
            _.each(places[type], function(value, idx) {
              $('#map_canvas').gmap('addMarker',
              {
              	'id': 'm_' + idx,
              	'position': value.lat + ',' + value.lng,
              	'bounds': false
              }).click(function() {
            	$('#map_canvas').gmap('openInfoWindow',
              	{
              	'content': '<p><b>' + value.name + '</b></p><p>' + value.address + '</p>' + value.description,
              	'maxWidth': 400
              	}, this);
              });

              var $li = $('<li>').html(value.name).data('id', idx);
              $('#places').append($li);

            });
          };

          $(document).on('mouseover', '#places li', function() {

            var marker = $('#map_canvas').gmap('get', 'markers')['m_' + $(this).data('id')];
            $(marker).triggerEvent('click');
          });

          var clearAll = function() {
            $('#map_canvas').gmap('clear', 'markers');
          };

          $('button#food').click(function() {
            show('food');
          });
          $('button#coffee').click(function() {
            show('coffee');
          });
          $('button.clear').click(clearAll);
        });



        </script>

    </head>
    <body>
        <div id="content">
          <header class="clearfix">
            <h1>BRITT &amp; SEAN.</h1>
            <?php echo printHeader(); ?>
          </header>

          <section id="main">
            <div class="page-content">
              <h2>Things to do</h2>
              <button id="food">show food</button> <button id="coffee">show coffee</button>

              <div id="map_canvas" style="float:right;width:680px;height:500px;border:1px solid red;"></div>
              <ul id="places" style="width:180px;float:left;"></ul>
              <div style="clear:both;"></div>
            </div>
          </section>
        </div>


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
