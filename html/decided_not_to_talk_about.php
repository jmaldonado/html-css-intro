<?php
date_default_timezone_set('America/Los_Angeles');
?>
<html>

<head>
   <title>Welcome to Introduction to HTML and CSS - HTML, Page 3</title>
</head>

<body>
<h1>This is a page written in PHP</h1>
<p>PHP is a recursive acronym (or "backronym") that stands for "PHP: Hypertext Preprocessor." PHP, like many server-side languages, can dynamically generate web page content by pulling data from databases, by evaluating criteria, etc.</p>
<p>This doesn't look any different than HTML, does it? Look at the extension of the file name in the address, though. It's not .html like the others but it's still a normal looking web page. That's because PHP code is parsed (or interpreted) by the server and sent to your browser as plain HTML!</p>
<p>In this paragraph, there is some PHP code written that will return the current time right to the browser in plain text. If you refresh this page, the content will change because the time that the page has been parsed has also changed, and server will give us the new data. It is now <?php echo date('l\, F jS\, Y g:i:s A'); ?>.</p>
<p>The PHP code that generates the current date and time on the server side looks like this:</p>
<pre>
&lt;?php 

date_default_timezone_set('America/Los_Angeles');
echo date('l\, F jS\, Y g:i:s A');

?&gt;
</pre>

<p>Other server-side coding languages such as Ruby on Rails, ASP.NET and Java work in much the same way. They interpret code, parse it and deliver HTML.</p>

<a href="page4.html">Let's see what a page looks like written in the latest version of HTML, shall we?</a>

</body>

</html>
