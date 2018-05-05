<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="landingstyle.css" rel="stylesheet" type="text/css">
<link href="login.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container-fluid" id="landing">
  <div class="row">
  <button type="button" class="btn btn-success btn-sm" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" >
          Sign Up/ Sign In</button>
  <h1 class="text-center" id="ldTitle"><strong>SIMPANGAN </strong></h1>
<div class="text-center"> SIMPANGAN merupakan sebuah sistem Informasi harga bahan pangan yang berada di pasar-pasar tradisional </div>
</div>
  <div class="text-center" >
    <input type="button" id="btStart" class="btn btn-lg btn-default" value="Yuk Belanjaaa..." onclick="document.location='Home.php';" >
  </div>
</div>
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
<div class="panel-footer">
  <div class="row">
    <div class="text-center">
      <h4>Harga yang pas untuk anda</h4>
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
