<html>
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



	 <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
     <script src="js/bootstrap.js"></script>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


     <script src="js/jquery.min.js"></script>

<script>
var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };

</script>


<style>

hr {

  width: 80%;
  border: 1px solid brown;

}
	
#head {
	background-color: brown;
	color: white;
        
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

li {
    float: left;
    text-decoration: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 20px;
    margin-right: 20px;
}

li a:hover:not(.active) {
    background-color: brown;
    text-decoration: none;
    font-color: white;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 80px;
   background-color: darkgrey;
   color: white;
   text-align: center;
}

.info {
   font-size: 20px;
   text-align: center;
alignment: center;
}



#info {
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
transition: 0.3s;
width: 100%;

}

#info:hover {
box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

#info {

 background-color: #99cccc;

}

.brief {
 font-family: Alegreya Sans SC;
}

* { color: browntext-decoration: none;}

.title {
  font-family: 
}

.typewrite {
  color: brown;
}

body {
  height: 100%;
}

body {
  background: url(assets/img/.jpg) repeat center center;
  background-size: cover;
  height: 100%;
  background-color: #F5FFFA;
}

</style>

<title>ConfessionWeb - Only directory of all confessions!</title>


<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body class="background">
	




<div>
	
<div class="container-fluid">


	<?php 'conn.php' ?>

  <div id="head" class="row">

<ul style="margin-top: 20px;">
  <li><a href="assets/about.html"class="btn btn-danger">About</a></li>
  <li><a href="assets/freq_q_ans.html" class="btn btn-danger">FAQs</a></li>
  <li><a href="assets/privacy_policies.html" class="btn btn-danger">Privacy Policies</a></li>
  
</ul>




 <div class="col-xs-6">

  <center><h2 style="margin-left: 120px; margin-top: 20px;"><b><a style="text-decoration: none; color: white;" href="index.php" class="title">ConfessionWeb</a></b></h2></center>



</div>


       <div class="col-xs-6"></div>
   </div>

<br>
<br>


<center><h2 class="brief">
  <a class="typewrite" data-period="2000" data-type='[ "ConfessionWeb is an online directory for all the confessions.", "For the people, by the people!", "Just login below or sign up to start making your confessions!" ]'>
    <span class="wrap"></span>
  </a>
</h2></center>


<br><br><br>
<center>
<div id="info" class="col-xs-8">
	<br>
	<center>
<h2 style="color: brown;">Login here <p style="font-size: 15;">if you are already Confessing!</p></h2>
<br>
<form action="login.php" method="post">
<label>Username:</label>
<input type="text" name="uname" placeholder="Username" required>

<br><br>
<label>Password:</label>
<input type="password" name="pass" placeholder="Password" required><br><br>

<button style="background-color: brown; color: white;" type="submit" class="btn btn-primary"><b>Login</b></button>
</form>
<br>
<hr>
<br><br>

<h2 style="color: brown;">Signup here <p style="font-size: 15;">if you are not already a member!</p></h2>
<br>
<form action="signup.php" method="post">
<label>Username:</label>
<input type="text" name="name" placeholder="Username" required><br><br>
<label>Password:</label>
<input type="password" name="pass" placeholder="Password" required><br><br>

<label>Email:</label>
<input type="text" name="email" placeholder="Email" required><br><br>

<label>Phone Number:</label>
<input type="tel" name="number" placeholder="Phone Number" required><br><br>

<label>Sex:</label>
<input type="text" name="sex" placeholder="Male or Female?" required><br><br>

<label>Age:</label>
<input type="text" name="age" placeholder="Age" required><br><br>


<button style="background-color: brown; color: white;" type="submit" class="btn btn-primary"><b>Signup</b></button>

<input style="background-color: brown; color: white;" type="Reset" class="btn btn-primary">
</form>


</center>



</div>
<center>
</div>

<br><br><br><br><br>




<!-- Footer -->
    <footer class="py-5">
      <div class="container">
        <p class="m-0 text-center text-black">Use of this Site is subject to express terms of use. By using this site, you signify that you agree to be bound by these <a href="assets/privacy_policies.html">Universal Terms of Service.</a><br/>Copyright &copy; ConfessionWeb</span> 2018<br/>All Rights Reserved.</p>
      </div>
      <!-- /.container -->
    </footer>








</body>
</html>