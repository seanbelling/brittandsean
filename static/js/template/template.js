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
      <h2>The Big Day</h2>\
      <h3>Ceremony</h3>\
      <p>True story: locals frequently walk by the unassuming grey facade of the Swedenborgian without even registering its existence.<br />\
      However, a couple of our friends did notice. Rightfully intrigued, they attempted to bust through the locked iron gates.\
      Sadly they were no match for the gates and settled for a few furtive peeks into the hidden courtyard.<br />\
      Their curiosity and yours, dear friend, will soon be settled.</p>\
      <p>We are happy to announce that our cermony will be held at the \
      <a href="http://www.sfswedenborgian.org/Landmarking/Landmark.asp" target="_blank">Swedenborgian Church</a>\
      in San Francisco<br />at 4pm on 30th August 2014.<br />\
      Address: 2107 Lyon St, San Francisco, CA 94115 <a href="http://goo.gl/maps/J9Zjp" target="_blank">(map)</a></p>\
      <p>The Swedenborgian has become quite the Wilde family tradition.<br />Britt\'s parents Rich and Sarah were married there in 1974\
      and her sister Blair was married there in 2003.<br />\
      In the early hungover hours following Britt\'s 30th birthday, Sean had his first introduction to the Swedenborgian to attend\
      the christening of Britt\'s niece.</p>\
      <p>The Swedenborgian has heralded great love into the Wilde family and we are thrilled to begin our own journey there.</p>\
      <h3>Reception</h3>\
      <p>After the ceremony guests will be transported to the \
      <a href="http://www.presidio.gov/venues/Pages/Log-Cabin.aspx" target="_blank">Log Cabin</a> in San Francisco\'s Presidio\
      <a href="http://goo.gl/maps/RLyKO" target="_blank">(map)</a> for fun, dinner and dancin\'.</p>\
      <p>Britt was living in the Presidio when she journeyed back from her European romp and initial Sean encounter. \
      Many emails were exchanged in those halcyon days. \
      Britt used to run the Presidio trails wondering if Sean would ever see the Presidio\'s beauty alongside her. \
      And indeed he did. Together they will celebrate not only the beauty of their surroundings, but their own love and that of family \
      and friends on their celebratory day.</p>\
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
        <dd>While we understand your desire to immortalise the occasion in t-shirt form, \
        there are no plans to offer any merchandise at this stage.</dd>\
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
      <% if (entries.models.length) { %>\
        <h3>Previous entries</h3>\
        <% _.each(entries.models, function(entry) { %>\
          <p><%= _.escape(entry.get(\'name\')) %> - <%= _.escape(entry.get(\'date\')) %><br />\
          <span class="message"><%= _.escape(entry.get(\'message\')).replace("\\n", "<br />") %></span></p>\
          <br />\
        <% }) %>\
      <% } %>\
    </div>\
  '),

  guestbookForm: _.template('\
    <form id="guestbook-form">\
      <input type="text" placeholder="your name" name="name" /><br />\
      <input type="text" placeholder="your email" name="email" /><br />\
      <textarea name="message">write your message here</textarea><br />\
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