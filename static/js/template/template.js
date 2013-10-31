TEMPLATES = {
	main: _.template('\
		<div class="main-img">\
      <div class="header-wrap">\
      <img src="/static/img/gettin-married.png" class="title" />\
        <div class="line"></div>\
      </div>\
      <img class="main" src="/static/img/main.jpg" alt="lol" />\
    </div>\
	'),

  comingSoon: _.template('\
    <div class="page-content">\
      <h2>Comign soon</h2>\
    </div>\
  '),

  story: _.template('\
    <div class="page-content">\
      <h2>Our Story</h2>\
    </div>\
  '),

  wedding: _.template('\
    <div class="page-content">\
      <h2>The Wedding</h2>\
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi in quam sit amet mi vestibulum varius a et nisl. Nulla facilisi. Aliquam purus nisl, luctus et ligula sed, venenatis commodo orci. Aliquam vulputate eros vitae libero ullamcorper, eget pretium nibh fringilla. Maecenas porttitor nisl sed neque convallis, ut vulputate sapien suscipit. Morbi condimentum hendrerit turpis, sed mollis dui vehicula a. Mauris gravida cursus nisi ac tempor. Nunc consectetur varius urna, id aliquet erat. Fusce ut neque velit. Nullam et pharetra dui. Curabitur sodales arcu sed lorem fringilla tristique. Praesent lacinia auctor justo eget egestas.</p>\
      <p>Quisque id ultricies est. Quisque quis elementum tellus. Morbi condimentum egestas urna, vitae feugiat orci ultricies nec. Pellentesque bibendum eros nec pellentesque luctus. Donec ac lorem hendrerit, condimentum libero a, lacinia nisl. Quisque tempor molestie orci, id dictum ipsum ultricies at. Phasellus id faucibus nunc. Mauris dictum ante ut libero ornare, quis iaculis nisi adipiscing.</p>\
      <p>In hac habitasse platea dictumst. Aenean gravida enim quam, sed scelerisque libero congue vitae. Mauris sodales justo ultrices metus venenatis, quis tempor massa fermentum. Nulla nec diam at augue consectetur egestas. Maecenas sed cursus felis, a malesuada arcu. Mauris luctus euismod blandit. Vivamus dapibus dapibus lacus id mollis. Vestibulum congue condimentum ligula, sed pretium ligula feugiat ut. Cras vulputate dapibus vehicula. Curabitur congue molestie erat. Donec semper fermentum nulla in faucibus. Donec rhoncus nisi a nisi molestie commodo. Praesent vitae ultrices odio, in scelerisque justo. Sed porta odio vestibulum lacus vulputate, ac eleifend purus ultricies. Aliquam a adipiscing nibh, rutrum fringilla mi.</p>\
    </div>\
  '),

  travelers: _.template('\
    <div class="page-content">\
      <h2>For Travelers</h2>\
    </div>\
  '),

  faq: _.template('\
    <div class="page-content">\
      <h2>Frequently Asked Questions</h2>\
      <dl>\
        <dt>I heard Sean is a pretty good dancer?</dt>\
        <dd>You heard correctly.</dd>\
        <dt>Are you guys selling any merch?</dt>\
        <dd>While we understand your desire to immortalise the occasion in t-shirt form, there are no plans to offer any merchandise at this stage.</dd>\
        <dt>Can I kick it?</dt>\
        <dd>Yes you can</dd>\
        <dt>Are you going to play my favourite song at the reception?</dt>\
        <dd>Maybe we will. Why not <a class="internal" href="/request">request a song</a>, friend?</dd>\
        <dt>Is it true that Britt can skull a beer in 3 seconds?</dt>\
        <dd>We can neither confirm or deny that.</dd>\
      </dl>\
    </div>\
  '),

  guestbook: _.template('\
    <div class="page-content">\
      <h2>Guestbook</h2>\
      <% _.each(entries.models, function(entry) { %>\
        <%= entry.get(\'name\') %> - <%= entry.get(\'message\') %>\
        <br />\
      <% }) %>\
    </div>\
  '),

  request: _.template('\
    <div class="page-content">\
      <h2>Request a Song</h2>\
      <p>Been practising those moves for a particular song?<br />\
      Let us know what it is below and if it the taste-maker approves\
      we\'ll try to play it on the night</p>\
      <form id="request-form">\
        <input type="text" placeholder="your name" name="name" /><br />\
        <input type="text" placeholder="artist" name="artist" /><br />\
        <input type="text" placeholder="song" name="song" /><br />\
        <input type="button" id="request-submit" value="play this, please" />\
      </form>\
    </div>\
  ')

}