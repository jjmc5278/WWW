<html>
  <head>
    session_start();
    /* <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script type="text/javascript">
      tinymce.init({
        selector: '#myeditablediv',
        inline: true
      }); MAYBE*/
    <title>CONTACT US IMMEDIATELY</title>
    <h1>PLEASE CONTACT US NOW</h1>
  </head>
  <body>
  <?php
  if(loggedIn = 1)
  {
    <div id="not_logged_in" class="contactForm">
      <form action="/CONACT_US.php" method="post"> 
      /*prevent injections, verify required fields*/
        First Name:<br>
        <input type="hidden" name="firstname" value=get.current(first-name)>
        Second Name:<br>
        <input type="hidden" name="lastname" value=get.current(last-name)>
        Email:<br>
        <input type="text" name="emailaddress" value=get.current(email-address)>
        Subject:<br>
        <input type="hidden" name="subject" value="What is this message regarding?">
        Message:<br>
        <input id="myeditablediv" type="text" name="message" value="Type message here"> /*Use tinyMCE somehow*/
        <br>
        <input type="submit">
      </form>
    </div>
    }else{
    <div id="already_logged_in" class="contactForm">
      <form action="/CONACT_US.php" method="post"> 
      /*prevent injections, verify required fields*/
        First Name:<br>
        <input type="hidden" name="firstname" value="Enter First Name Here">
        Second Name:<br>
        <input type="hidden" name="lastname" value="Enter Last Name Here">
        Email:<br>
        <input type="hidden" name="email" value="Enter Email Address Here">
        Subject:<br>
        <input type="hidden" name="subject" value=g"Brief description of message">
        Message:<br>
        <input id="myeditablediv" type="text" name="message" value="Type message here"> /*Use tinyMCE somehow*/
        <br>
        <input type="submit">
      </form>
    </div>
    }
    ?>
    <div>
      <a href="/index.html">HOMEPAGE THO</a> /*link to home page*/
      <a href="/login.html">LOGIN PAGE</a> /*link to login page*/
    </div>
  </body>
</html>
