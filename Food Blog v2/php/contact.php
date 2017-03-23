<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Home Page</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="stylesheet" href="css/styles.css" />
    <!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="./js/js.js"></script>
  </head>
  <body>
    <div id="content" class="clearfix">

      <header id="header">
        <h1>Food Blog</h1>
        <nav class="navigation">
          <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </nav>
        <img id="profpic" src="../images/profpic.gif">
      </header>

      <div id="top">
        <h2>Contact Me!</h2>
      </div>

      <div id="middle">

        <div class="panel">
          Errors Will go here
        </div>

        <form action="index.php" method="post">
          <label>Name</label>
          <input name="name" placeholder="Type Here">
          <label>Email</label>
          <input name="email" type="email" placeholder="Type Here">
          <label>Message</label>
          <textarea name="message" placeholder="Type Here"></textarea>
          <label>*What is 2+2? (Anti-spam)</label>
          <input name="human" placeholder="Type Here">
          <input id="submit" name="submit" type="submit" value="Submit">
        </form>

      </div>

    </div>
             
    <footer>
      <p>&copy; Copyright 2017 Christopher Wong</p>
    </footer>
  </body>
</html>