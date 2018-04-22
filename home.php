<?php

session_start();

include("conn.php"); 


$username=$_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.min.js"></script>
<link href="style.css" rel="stylesheet"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>RENDERED</title>
	
	<style>
		
		hr { 

    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;

    border: 1px solid cornflowerblue;
			
			
			
} 
		#post{
			
			text-align: center;
		}
		#head{
			background-color: cornflowerblue;
			color: white;
		}

	#head2{
text-align: right;
		}
		#img{
			height: 100px;
			width: 100px;
			border-radius: 100px;
			border: 1px solid cornflowerblue;
		}
		
		#pro3{
			text-align: right;
		}
		 input[type=submit], input[type=reset] {
    background-color:cornflowerblue;
    border: 1px solid black;
    color: white;
   height: 30px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
			 border-radius: 8px;
}
		input[type=text] {
    
    border: 2px solid cornflowerblue;
    
  
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
			border-radius: 5px;
}
	</style>


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


<div class="container-fluid">
	
	<div id="head" class="row">
		
		
	<div class="col-xs-6"><h2><b>RENDERED</b></h2>
	</div>
    <div id="head2" class="col-xs-6"><h3><?php echo "Welcome back, $username"  ?></h3></div>
	




	</div>
    <br>
	<br>
	
	
	
	
	<div id="profile" class="row">
		
		
	<div class="col-xs-2">
		<?php	
		      $username=$_SESSION['name'];

		       $sql = "SELECT 	* FROM signup where name='$username'";
              $result = $conn->query($sql);

               if ($result->num_rows > 0) {
                // output data of each row
               while($row = $result->fetch_assoc()) {
		       $location= $row["image"];
              echo "<img id='img' src='$location'>";
              }
             } else {
            echo "0 results";
           }
          $conn->close();
             ?>
             	</div>
    <div id="pro2" class="col-xs-2">
		<?php



                 include("conn.php"); 


           $username=$_SESSION['name'];


           if(isset($_POST['submit']))

               {
	$name=$_FILES['myfile']['name'];
	$tmp_name=$_FILES['myfile']['tmp_name'];
	
	
	
	if($name)
	{
	$location="image/$name";
    move_uploaded_file($tmp_name,$location);	
		
	$query=mysqli_query($conn,"UPDATE signup SET image='$location' WHERE name='$username'");
		
		
		header("Location:suc.php");
		
	}
	else 
		die("Please select a file");
}

 

echo "<br>";
echo "


<form action='home.php' method='post' enctype='multipart/form-data'>
	
<input type='file' name='myfile'>
<input type='submit' name='submit' value='Change Your Avatar'>
</form>
";


?>
	

</div>

		<div id="pro3" class="col-xs-8"><h3><a style="text-decoration: none;" href="logout.php">Logout</a></h3></div>


	</div>
	<br>
    <hr>
    
<div id="post" class="row">
		
		<h2 style="font-size: 20px;">Write your first blog because that's what we are here to do, <span style="color: cornflowerblue;">RENDERING</span></h2><br>

	<div class="col-xs-12"><form method="post" action="post.php">
		<input type="text" name="title" placeholder="Title" required><br>
		<input size="50" style="height: 100px;" type="text" name="des" placeholder="Description" required><br>
	

		
<input type="submit" value="Post">
		
</form>
	<br>
	</div>
	
    
</div>

<center><h2 style="color: orange;">Blogs posted by other people here.</h2></center>
	<hr>


	<center>
    <div id="body" class="row">
		

	<div class="col-xs-12">

		<?php	$sql = "SELECT 	* FROM posts ORDER BY id desc";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	

        echo  "<br>". "<b>".$row["title"]."</b>"."<br><br>". $row["post"]."<br><br>"."<b>Posted by: </b> "."<b>".$row["name"]."<br>"." </b> on "."<b>".$row["time"]."</b>";
		
		
		echo"<hr>";
        echo "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?></div>

	</div>
	</div>
</center>

<br><br>

<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Use of this Site is subject to express terms of use. By using this site, you signify that you agree to be bound by these <a href="../privacy_policies.html">Universal Terms of Service.</a><br/>Copyright &copy; <a href = "../index.html">RENDERED</a> 2018<br/>All Rights Reserved.</p>
      </div>
      <!-- /.container -->
    </footer>




</body>
</html>