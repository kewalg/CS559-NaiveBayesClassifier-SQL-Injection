<?php
$error='';
session_start();
$user=isset($_POST['user']) ? $_POST['user'] : '';
echo $user;
$pass=isset($_POST['pass']) ? $_POST['pass'] : '';

require_once('NaiveBayesClassifier.php');
$classifier = new NaiveBayesClassifier();
    $spam = Category::$SPAM;
    $ham = Category::$HAM;

$categoryr = $classifier -> classify($user);

?>  
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/global.css" type="text/css" rel="stylesheet">
  </head>

<title>Welcome!</title>
<body>
	<div class="container-fluid bg">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <!-- <div class="col-md-4 col-sm-4 col-xs-12">
        <form class=container>
        <h1>Welcome.</h1>
        <h3>UserName:</h3>
        <h2 style="margin-top: -10px;"><?php echo $_GET['user'];?></h2>
        <br>
        <h3>Amount:</h3>
        <h2 style="margin-top: -10px;"><?php echo $_GET['amount'];?></h2>

    <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <a href="index.php"><button type="button" class="btn btn-success">Logout</button></a>
      </div> -->
      <form class="container">
    <h2 style="text-align=left">The entered username is "<?php echo $user; ?>" </h2>
    <h2 style="text-align=left">  which is "<?php echo "  " ; echo $categoryr; ?>" </h2>

   	 </div>
    </div>
  </div>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>