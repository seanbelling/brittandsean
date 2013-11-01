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
      <h3>Ceremony</h3>\
      <p>The cermony will be held at the Swedenborgian Church in San Francisco at 4pm on 30th August 2013<br />\
      Address: 2107 Lyon St, San Francisco, CA 94115 <a href="http://goo.gl/maps/J9Zjp" target="_blank">(map)</a></p>\
      <h3>Reception</h3>\
      <p>After the ceremony guests will be transported to the Log Cabin in San Francisco\'s Presidio\
      <a href="http://goo.gl/maps/RLyKO" target="_blank">(map)</a> for fun and dancin\'</p>\
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
        <dt>Are you guys selling any merch?</dt>\
        <dd>While we understand your desire to immortalise the occasion in t-shirt form, there are no plans to offer any merchandise at this stage.</dd>\
        <dt>Can I kick it?</dt>\
        <dd>Yes you can</dd>\
        <dt>I heard Sean is a pretty good dancer?</dt>\
        <dd>You heard correctly.</dd>\
        <dt>Are you going to play my favourite song at the reception?</dt>\
        <dd>Maybe we will. Why not <a class="internal" href="/request">request a song</a>, friend?</dd>\
        <dt>Is it true that Britt makes cookies that are so delicious that her friends steal some to take home with them?</dt>\
        <dd>It has happened before, yes.</dd>\
        <dt>Do I have to wear pants?</dt>\
        <dd>Yes, Nick, yes you do.</dd>\
      </dl>\
    </div>\
  '),

  guestbook: _.template('\
    <div class="page-content">\
      <h2>Guestbook</h2>\
      <div id="form-target"></div>\
      <h3>Previous entries</h3>\
      <% _.each(entries.models, function(entry) { %>\
        <p><%= entry.get(\'name\') %><br />\
        <span class="message"><%= entry.get(\'message\') %></span></p>\
        <br />\
      <% }) %>\
    </div>\
  '),

  guestbookForm: _.template('\
    <form id="guestbook-form">\
      <input type="text" placeholder="your name" name="name" /><br />\
      <input type="text" placeholder="your email" name="email" /><br />\
      <textarea name="message">your message</textarea><br />\
      <input type="button" id="guestbook-submit" value="submit" />\
    </form>\
  '),

  request: _.template('\
    <div class="page-content">\
      <h2>Request a Song</h2>\
      <p>Been practising those moves for a particular song?<br />\
      Let us know what it is below and if it the taste-maker approves\
      we\'ll try to play it on the night.</p>\
      <form id="request-form">\
        <input type="text" placeholder="your name" name="name" /><br />\
        <input type="text" placeholder="artist" name="artist" /><br />\
        <input type="text" placeholder="song" name="song" /><br />\
        <input type="button" id="request-submit" value="play this, please" />\
      </form>\
    </div>\
  ')

}