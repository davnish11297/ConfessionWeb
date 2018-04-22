<html>
<head>
	 <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
     <script src="js/bootstrap.js"></script>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


     <script src="js/jquery.min.js"></script>

<style>
	
#head {
	background-color: cornflowerblue;
	color: white;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
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
}

li a:hover:not(.active) {
    background-color: cornflowerblue;
    text-decoration: none;
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

</style>

<title>Join RENDERED - We bring info to you!</title>


<link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
<link rel="manifest" href="../favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

</head>
<body>
	
<div>
	
<div class="container-fluid">


	<?php 'conn.php' ?>

  <div id="head" class="row">

<ul>
  <li><a href="../index.html">Home</a></li>
  <li><a href="../about.html">About</a></li>
  <li><a href="../freq_q_ans.html">FAQ</a></li>
  <li><a href="../privacy_policies.html">Privacy Policies</a></li>
</ul>




  	<div class="col-xs-6"><h2><b><a style="text-decoration: none; color: white;" href="www.rendered.info">JOIN RENDERED</a></b></h2></div>


       <div class="col-xs-6"></div>
   </div>

<br>
<br><br>

<div id="info">
	<br>
	<center>
<h2>Login here <p style="font-size: 15;">if you are already RENDERING!</p></h2>
<br>
<form action="login.php" method="post">
<label>Username:</label>
<input type="text" name="uname" placeholder="Username" required><br><br>
<label>Password:</label>
<input type="password" name="pass" placeholder="Password" required><br><br>

<button style="background-color: #6495ed; color: white;" type="submit"><b>Login</b></button>
</form>
<br>
<hr>
<br>

<h2>Signup here <p style="font-size: 15;">if you are not already a member!</p></h2>
<br>
<form action="signup.php" method="post">
<label>Username:</label>
<input type="text" name="name" placeholder="Username" required><br><br>
<label>Password:</label>
<input type="password" name="pass" placeholder="Password" required><br><br>

<button style="background-color: #6495ed; color: white;" type="submit"><b>Signup</b></button>
</form>


</center>



</div>

</div>

<br><br><br><br><br>




<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Use of this Site is subject to express terms of use. By using this site, you signify that you agree to be bound by these <a href="../privacy_policies.html">Universal Terms of Service.</a><br/>Copyright &copy; <a href = "../index.html">RENDERED</a> 2018<br/>All Rights Reserved.</p>
      </div>
      <!-- /.container -->
    </footer>








</body>
</html>