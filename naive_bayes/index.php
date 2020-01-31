<?php

   
    require_once('NaiveBayesClassifier.php');

    $classifier = new NaiveBayesClassifier();
    $spam = Category::$SPAM;
    $ham = Category::$HAM;

 

$classifier -> train("1 or 1 = 1", $spam);
$classifier -> train("1 or 1 = 1 and user <> pranit", $spam);
$classifier -> train("105; DROP TABLE Users", $spam);
$classifier -> train("105; INSERT into TABLE Users", $spam);
$classifier -> train("1 or 1 = 1", $spam);
$classifier -> train("1 or 1 = 1 and user <> kewal", $spam);
$classifier -> train("Lucky draw!", $spam);
$classifier -> train("delete * from database", $spam);
$classifier -> train("select * FROM db", $spam);
$classifier -> train("won", $spam);
$classifier -> train("$$, dollars", $spam);
$classifier -> train("105; DROP TABLE Users", $spam);
$classifier -> train("drop * <>", $spam);
$classifier -> train("lottery", $spam);
$classifier -> train("select * from database", $spam);
$classifier -> train("1 OR 1=1 and drop", $spam);
$classifier -> train("drop * from database", $spam);
$classifier -> train("this is a spam username and password", $spam);
$classifier -> train("the longer the string the more possibilties of it being an injection query", $spam);

$classifier -> train("kewal", $ham);
$classifier -> train("Amy", $ham);
$classifier -> train("John", $ham);
$classifier -> train("kewalg", $ham);
$classifier -> train("myname", $ham);
$classifier -> train("p1@34", $ham);
$classifier -> train("Kewal", $ham);
$classifier -> train("Jackson", $ham);
$classifier -> train("kewal@123", $ham);
$classifier -> train("Ron", $ham);
$classifier -> train("kewalg", $ham);
$classifier -> train("kgulve1", $ham);
$classifier -> train("kewal123", $ham);
$classifier -> train("agujara1", $ham);
$classifier -> train("spiderman@web", $ham);
$classifier -> train("tony.stark", $ham);
$classifier -> train("hulk", $ham);
$classifier -> train("goku@DBZ", $ham);
$classifier -> train("gohan@DBZ", $ham);
$classifier -> train("chelsea.fc", $ham);



 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/global.css" type="text/css" rel="stylesheet">

    <title>SQL Injection</title>
  </head>
  <body>

  	<div class="container-fluid bg">
  	<div class="row">
  		<div class="col-md-4 col-sm-4 col-xs-12"></div>
  		<div class="col-md-4 col-sm-4 col-xs-12">
        
			<form class=form-container action="login.php" method="POST">
        
        <h1>Online Banking</h1>
			 	<div class="form-group username">
			 		
			    	<label for="username"></label>
			    	<input type="text" class="form-control" id="user" placeholder="Enter username" name="user">
			  	</div>

			  	<div class="form-group password">
			   		<label for="pwd"></label>
			 	    <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
			 	</div>
			  
			    <button type="Submit" class="btn btn-success btn-block">Log In</button>
			
  		</div>
  			</form>
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
  </div>
	</div>

	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>