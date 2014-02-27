<?php
	function printHeader() {
		return <<<EOT
  		<ul>
        <li><a href="/">home</a></li>
        <li>
          <a href="#">the big day</a>
          <ul class="big-day">
            <li><a href="/wedding">events</a></li>
            <li><a href="/transportation-day-of">transportation</a></li>
            <li><a href="/tech">tech</a></li>
          </ul>
        </li>
        <li>
          <a href="#">travelers</a>
          <ul class="travelers">
            <li><a href="/accommodation">accommodation</a></li>
            <li><a href="/transportation-general">getting around</a></li>
            <li><a href="/things-to-do">things to do</a></li>
          </ul>
        </li>
        <li><a href="/registry">registry</a></li>
        <li><a href="/faq">FAQ</a></li>
        <li><a href="/guestbook">guestbook</a></li>
      </ul>
EOT;
	}
?>