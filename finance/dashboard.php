<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="asset/css/stylenav.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="asset/css/inistyle.css">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body>

<input type="checkbox" id="check">
    <label for="check"> 
    <i class="bi bi-list" id="btn"></i>
    <i class="bi bi-x-lg" id="cancel"></i>
    </label>
    <div class="sidebar">
      <div class="akun">
        <img src="asset/img/oke.jpg" height="70px" width="70px">
        <p>Nama Akun</p>
      </div>
      <br>

      <div class="garis"></div>
      
      <a href="berandafl.php" class="active">
      <i class="bi bi-house-door"></i>
        <span>BERANDA</span>
      </a>
      <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="bi bi-file-earmark-text"></i>
            <span>INVOICE</span>
      </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="newinvoiceW.php">Invoice Out</a></li>
            <li><a class="dropdown-item" href="newinvoiceI.php">Invoice in</a></li>
          </ul>
      <a href="">
      	<i class="bi bi-receipt-cutoff"></i>
      	<span>BASH</span>
      </a>
      <a href="">
      	<i class="bi bi-send"></i>
      	<span>SEND</span>
      </a>
      <a href="#">
<i class="bi bi-box-arrow-right"></i>
        <span>LOG OUT</span>
      </a>
    </div>

 <div id="konten">
 	
 	<div class="container-xxl">
 		<div class="container-xl">


 		<h1>masukan tampilan</h1>


 		</div>
 	</div>	

 </div>

    
</body>
</html>