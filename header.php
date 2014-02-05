<?php
	function printHeader() {
		return <<<EOT
  		<ul>
        <li><a href="/">home</a></li>
        <li><a href="/wedding">the big day</a></li>
        <li>
          <a href="#">for travelers</a>
          <ul class="travelers">
            <li><a href="/accommodation">accommodation</a></li>
          </ul>
        </li>
        <li>
          <a href="#">transportation</a>
          <ul class="transportation">
            <li><a href="/transportation-general">general info</a></li>
            <li><a href="/transportation-day-of">day of</a></li>
          </ul>
        </li>
        <li><a href="/registry">registry</a></li>
        <li><a href="/faq">FAQ</a></li>
        <li><a href="/guestbook">guestbook</a></li>
      </ul>
EOT;
	}
?>