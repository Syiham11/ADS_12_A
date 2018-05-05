<?php
$mysqli = new mysqli("localhost", "root", "", "pasar");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
/* Create table doesn't return a resultset */
$send= $mysqli->query('SELECT nama FROM data_pasar');
    

    // output data of each row
    //while($row = $send->fetch_assoc()) {
     //   echo "nama: " . $row["nama"]. "<br>";
   // }


?>
<<<<<<< HEAD

=======
>>>>>>> 2400cccdd8f3beac03a6f64b1df7e36c23f9d377
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<<<<<<< HEAD


<link href="css/bootstrap.css" rel="stylesheet">
<link href="login.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar">
<div class="container-fluid">
   
    
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header"> <a class="navbar-brand" href="#">Simpangan</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/simpangan.com">Home<span class="sr-only"></span></a></li>
      </ul>
<form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Cari Sesuatu">
        </div>
        <button type="submit" class="btn btn-default">Cari</button>
      </form>
<ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hubungi Kami<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
            <li class="divider"></li>
            <li><a href="#">0321-1177112</a></li>
            <li><a href="#">ipasar@mail.go.id</a></li>
          </ul>
        </li>
=======
<link href="css/bootstrap.css" rel="stylesheet">
<link href="login.css" rel="stylesheet">
<link href="landingstyle.css" rel="stylesheet">
</head>
<body #landing>
<nav class="navbar navbar-inverse" >
<div >
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header"> 
    
    <a class="navbar-brand" href="#">Simpangan</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
    <form class="navbar-form navbar-left" role="search" >
        <div class="form-group" >
          <input type="text" class="form-control" placeholder="Cari Sesuatu">
          <button type="submit" class="btn btn-default">
          <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
        
      </form>
      <ul class="nav navbar-nav navbar-right">
>>>>>>> 2400cccdd8f3beac03a6f64b1df7e36c23f9d377
        <li class="active">
          <a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
          Sign Up/ Sign In</a>
          </li>
</ul>
</div>
<!-- /.navbar-collapse --> 
  </div>
<<<<<<< HEAD
<!-- /.container-fluid --> 
</nav>
<div class="container-fluid">
=======

</nav>
<div>
>>>>>>> 2400cccdd8f3beac03a6f64b1df7e36c23f9d377
  <h1 class="text-center">Pilih Pasar</h1>
  <div class="row">
  
  	<div class="col-sm-4">
    <button type="button" class="btn btn-sm btn-default">
    	<img src="images/landing.jpg" alt="" width="2048" height="1356" class="img-responsive img-rounded"/>Pasar Dinoyo</button>
    </div>
    <div class="col-sm-4"><button type="button" class="btn btn-sm btn-default">
    	<img src="images/landing.jpg" alt="" width="2048" height="1356" class="img-responsive img-rounded"/>Pasar Dinoyo</button></div>
    <div class="col-sm-4"><button type="button" class="btn btn-sm btn-default">
    	<img src="images/landing.jpg" alt="" width="2048" height="1356" class="img-responsive img-rounded"/>Pasar Dinoyo</button></div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <button type="button" class="btn btn-sm btn-default"> <img src="images/landing.jpg" alt="" width="2048" height="1356" class="img-responsive img-rounded"/>Pasar Dinoyo</button>
    </div>
    <div class="col-sm-4">
      <button type="button" class="btn btn-sm btn-default"> <img src="images/landing.jpg" alt="" width="2048" height="1356" class="img-responsive img-rounded"/>Pasar Dinoyo</button>
    </div>
    <div class="col-sm-4">
      <button type="button" class="btn btn-sm btn-default"> <img src="images/landing.jpg" alt="" width="2048" height="1356" class="img-responsive img-rounded"/>Pasar Dinoyo</button>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <button type="button" class="btn btn-sm btn-default"> <img src="images/landing.jpg" alt="" width="2048" height="1356" class="img-responsive img-rounded"/>Pasar Dinoyo</button>
    </div>
    <div class="col-sm-4">
      <button type="button" class="btn btn-sm btn-default"> <img src="images/landing.jpg" alt="" width="2048" height="1356" class="img-responsive img-rounded"/>Pasar Dinoyo</button>
    </div>
    <div class="col-sm-4">
      <button type="button" class="btn btn-sm btn-default"> <img src="images/landing.jpg" alt="" width="2048" height="1356" class="img-responsive img-rounded"/>Pasar Dinoyo</button>
    </div>
  </div>
</div>
<<<<<<< HEAD
=======
<div class="row">
  <div class="col-sm-4 text-center">
    <h4>Beri <strong>Bintang</strong></h4>
    <p>Quickly add buttons to your page by using the button component in the insert panel. </p>
    <button type="button" class="btn btn-info btn-sm">Info </button>
    <button type="button" class="btn btn-success btn-sm">Tambah bintang</button>
  </div>
  <div class="text-center col-sm-4">
    <h4>Hubungi<strong> Kami</strong></h4>
    <p>Berikan kritik dan saran anda kepada kami secara langsung</p>
      <div class="col-xs-4"><span class="glyphicon glyphicon-menu-hamburger"></span></div>
      <div class="col-xs-4"><span class="glyphicon glyphicon-home" ></span></div>
      <div class="col-xs-4"><span class="glyphicon glyphicon-envelope" ></span></div>
    
  </div>
  <div class="text-center col-sm-4">
    <h4>Tentang <strong>Kami</strong></h4>
    <p>Using the insert panel, add labels to your page by using the label component.</p>
    <span class="label label-warning">VISI</span><span class="label label-danger">MISI</span></div>
</div>
>>>>>>> 2400cccdd8f3beac03a6f64b1df7e36c23f9d377
<div class="panel-footer">
<div class="row">
    <div class="text-center">
      <h4>Sistem Informasi Bahan Pangan</h4>
      <p>Copyright &copy; 2018 &middot; All Rights Reserved &middot; <a href="http://simpangan.com/">simpangan.com</a></p>
    </div>
  </div>
</div>
<div id="id01" class="modallg">
  
  <form class="modal-contentlg animatelg" action="/Home.php">
    <div class="imgcontainerlg">
      <span onclick="document.getElementById('id01').style.display='none'" class="closelg" title="Close Modal">&times;</span>
      <img src="img_avatar2.png" alt="Avatar" class="avatarlg">
    </div>

    <div class="containerlg"><div class="lg">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button class="lg" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    </div>

    <div class="containerlg" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script>
// Get the modal
var modallg = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modallg) {
        modallg.style.display = "none";
    }
}
</script>
</body>
</html>