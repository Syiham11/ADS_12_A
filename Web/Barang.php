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
<?php include 'login.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="login.css" rel="stylesheet">
<link href="landingstyle.css" rel="stylesheet">
</head>
  <style>
  body {
      position: relative;
	  background:url(images/landing.jpg);
	  background-attachment:fixed;
	  background-repeat:no-repeat;
	  background-size:cover;
	     
  }
  .affix {
      top:0;
	  height:67px;
      width: 100%;
      z-index: 9991 !important;
  }
  

  .affix ~ .container-fluid {
     position: absolute;
     top: 0px;
  }
  .konten{
	  background: rgba(0,0,0,0.73);
	  margin-left:15px;
	  margin-right:15px;
	  margin-bottom:15px;
	  margin-bottom:15px;
	  border-radius:17px;
	  padding:20px;  
  }
  .pasar{
	  top:100;
      z-index: 9999 !important;
  }
  

  </style>
<body  >
<nav class="navbar navbar-inverse"  data-spy="affix" data-offset-top="0">
	<div class="container-fluid">
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
      
    <div class="navbar-btn navbar-right text-center" >
        <button type="button" onclick="document.getElementById('id01').style.display='block'" style="width:auto; height:auto; background:#FFFFFF; color:#000000; border:hidden; margin-top:10px;"><span class="glyphicon glyphicon-user"></span>
          Sign Up/ Sign In</button>
          </div>
          </div>
</div>
</nav>
<div class="konten" >
  <div class="text-center nav" data-spy="pasar" style="margin-bottom:100; color:rgba(255,255,255,1.00)"><h1>Pilih Pasar</h1></div>
  <div >
  
  <img id="pasar_img" src="images/pasar/Pasar Besar.png" class="img-responsive" alt="Placeholder image" style="margin-bottom:20px"> 
  <img id="pasar_img" src="images/pasar/Pasar Blimbing.png" class="img-responsive" alt="Placeholder image" style="margin-bottom:20px">
  <img id="pasar_img" src="images/pasar/Pasar Mergan.png" class="img-responsive" alt="Placeholder image" style="margin-bottom:20px">
  <img id="pasar_img" src="images/pasar/Pasar Merjosari.png" class="img-responsive" alt="Placeholder image" style="margin-bottom:20px">
  <img  id="pasar_img" src="images/pasar/Pasar Besar.png" class="img-responsive" alt="Placeholder image" style="margin-bottom:20px">
  <img  id="pasar_img" src="images/pasar/Pasar Blimbing.png" class="img-responsive" alt="Placeholder image" style="margin-bottom:20px">
  <img  id="pasar_img" src="images/pasar/Pasar Mergan.png" class="img-responsive" alt="Placeholder image" style="margin-bottom:20px">
  <img src="images/pasar/Pasar Merjosari.png" class="img-responsive" alt="Placeholder image" style="margin-bottom:20px">
  </div>
</div>

<div class="row" style="background-color:rgba(34,34,34,1.00);color:rgba(255,255,255,1.00); border-bottom:rgba(255,255,255,1.00); " >
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

<div class=" panel-footer" style="background-color:rgba(34,34,34,1.00); color:rgba(255,255,255,1.00); border:hidden;" >
    <div class="text-center" >
      <h4>Sistem Informasi Bahan Pangan</h4>
      <p>Copyright &copy; 2018 &middot; All Rights Reserved &middot; <a href="http://simpangan.com/">simpangan.com</a></p>
  </div>
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