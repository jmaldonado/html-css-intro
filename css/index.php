<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>Welcome to Introduction to HTML and CSS - CSS, Page 1</title>
    <!-- Below is the stylesheet specific to this page. -->
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>

<body>

  <nav id="front">
    <ul>
      <li><a href="#">Back to the top</a></li>
      <li><a href="#center">Main section</a></li>
      <li><a href="#bottom">Bottom of the page</a></li>
    </ul> 
  </nav>

  <header id="body">
  <a name="top"></a>
    <h1>Welcome to HTML5</h1>
    <aside>Newer, more descriptive tags help you contextualize page content</aside>
  </header>

  <main>
  <a name="center"></a>
  <section id="main_content"> 

    <header id="main">
      <h2>HTML and CSS sound great, but how does one get started designing web sites?</h2>
      <p>That's a very good question. There are a number of excellent programs with graphical user interfaces that allow you to design web sites. Some are so powerful that you don't even need to touch any HTML or CSS code directly, and they are even hosted online so file transfers aren't necessary. These are called CMSes, or content management systems. An example of a powerful one is <a href="http://wordpress.org">WordPress</a>.</p>
      <p>However, that's not a great way to learn how to code. Below are some good tools to get started.</p> 
    </header>

    <article id="first">
      <h3>Software required</h3>
      <p>A plain text editor, which all operating systems include by default. Seriously, that's it! HTML and CSS documents are plain text, so as long as you can generate plain text files and give them .html and .css extensions, you're already off to a great start. Below are some good text editors by operating system:</p>
      <ul>
        <li><span class="bold">Windows</span> - Notepad</li>
        <li><span class="bold">Mac</span> - TextEdit</li>
        <li><span class="bold">Unix</span> - gedit for the desktop, vi or nano for the command line interface (your instructor used vi to make this page, by the way)</li>
      </ul>
    </article>

    <article id="second">
      <h3>The web page is complete! How do I show it off to the world?</h3>
      <p>You have to transfer your finished web page files to a web server. There are a number of good, inexpensive web hosts out there:</p>
      <ul>
        <li><span class="bold">Amazon Web Services</span> - AWS can have a full hosting environment in no time and they have a "pay as you go" model. If your web site doesn't get a whole lot of traffic, you may not even pay for service.</li>
        <li><span class="bold">Digital Ocean</span> - Digital Ocean can have a full hosting environment up and running in less than one minute, and there are many operating systems to choose from. This site is hosted in San Francisco on a server running Ubuntu Linux as the operating system.</li> 
      </ul>
    </article>

    <article id="third">
      <h3>My web page has a home. How do I get the files up there?</h3>
      <p>The tried and true method for getting files onto a web server is by using an FTP client. FTP stands for File Transfer Protocol. The first image online was transferred to a web server using FTP, and the person doing the transferring didn't even know what a web page was! The most popular FTP client is called <a href="https://filezilla-project.org/">FileZilla</a> and is available for most major operating systems.</p>
      <p>An increasingly popular option is to use an existing feature in versioning software. A popular one is <a href="http://github.com">Git</a> which allows you to not only save your work and revisit older versions as needed, but it also allows you to save your work to the cloud and even work collaboratively with other designers. You can log in to your web server and run a Git command that will download the entire contents of your web page straight to the web server.</p>
    </article>

  </section>
  </main>

  <footer>
    <a name="bottom"></a>
    <section id="footer_content">
      This is the footer of the page. I hope you enjoyed looking at all this code!
    </section>
  </footer>

</body>

</html>
